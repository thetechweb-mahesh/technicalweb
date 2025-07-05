<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'image',
        'm_ser_title',
        'm_ser_des',
        'ser_list_title',
        'ser_list_des',
        'yt_ifranme',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'status',
        'created_by',
    ];

    // Always eager load translations
    protected $with = ['translations'];

    // Relationships
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function translations()
    {
        return $this->hasMany(ServiceTranslation::class);
    }

    // Translated name attribute
   public function getNameAttribute($value)
{
    foreach ($this->translations as $translation) {
        if ($translation->locale === app()->getLocale()) {
            return $translation->name;
        }
    }
    return $value;
}

public function getTranslatedNameAttribute()
{
    $translation = $this->translations->firstWhere('locale', app()->getLocale());
    return $translation?->name ?? $this->attributes['name'];
}

public function getTranslatedDescriptionAttribute()
{
    $translation = $this->translations->firstWhere('locale', app()->getLocale());
    return $translation?->description ?? $this->attributes['description'];
}

}
