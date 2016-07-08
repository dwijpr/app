<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name', 'label',
    ];

    protected $connection = 'base';

    public function users() {
        return $this->belongsToMany(User::class);
    }

    public function permissions() {
        return $this->belongsToMany(Permission::class);
    }

    public function assign(Permission $permission) {
        return $this->permissions()->save($permission);
    }
}
