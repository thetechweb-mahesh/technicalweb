<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    public function permissions()
{
    return $this->belongsToMany(Permission::class);
}

public function hasPermission($permission)
{
    return $this->permissions()->where('name', $permission)->exists();
}

}
