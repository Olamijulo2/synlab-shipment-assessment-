<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lastName',
        'firstName',
        'userName',
        'email',
        'password',
        'mobileNo',
        'department',
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   
     protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setLeaveTypeAttribute($value)
    {
        $this->attributes['leaveType'] = json_encode($value);
    }

    public function getLeaveTypeAttribute($value)
    {
        return $this->attributes['leaveType'] = json_decode($value);
    }

    public function leaves()
    {
        return $this->hasMany(Leave::class);
    }
}
