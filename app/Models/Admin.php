<?php

namespace SneakerDistrict\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;
    protected $guard = 'admin';
    protected $fillable = ['name', 'type', 'email', 'password', 'status', 'created_at', 'updated_at'];
    protected $hidden = ['password', 'remember_token'];
}
