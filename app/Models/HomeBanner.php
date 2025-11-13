<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeBanner extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'title_tag',
        'description',
        'banner_image',
        'primary_cta_title',
        'primary_cta_link',
        'secondary_cta_title',
        'secondary_cta_link',
        'order'
    ];

    public function getImageUrlAttribute()
    {
        if (!$this->banner_image) {
            return null;
        }

        // Full URL already? (S3, external, etc)
        if (filter_var($this->banner_image, FILTER_VALIDATE_URL)) {
            return $this->banner_image;
        }

        // Use admin STORAGE_URL from env
        $base = rtrim(env('STORAGE_URL'), '/');

        return $base . '/storage/' . ltrim($this->banner_image, '/');
    }

    
}
