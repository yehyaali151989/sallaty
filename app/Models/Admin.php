<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = "admins";

    protected $fillable = ['name', 'email', 'password'];

    protected $hidden = [];

    protected $guarded = [];

    public $timestamps = true;

    public function  getPhotoAttribute($val)
    {
        return ($val !== null) ? asset('admin/uploads/admins/' . $val) : "";
    }
}
