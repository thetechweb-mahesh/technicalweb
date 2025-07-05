<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'locale',
        'name',
        'description',
        'service_id' // if you're setting this manually
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
