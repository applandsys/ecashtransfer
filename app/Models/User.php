<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'fathers_name',
        'mothers_name',
        'date_of_birth',
        'nid_number',
        'passport_number',
        'phone',
        'address',
        'photo',
        'nomini_name',
        'nomini_phone',
        'nomini_dob',
        'nomini_nid',
        'nomini_passport',
        'nomini_address',
        'business_name',
        'trade_license',
        'tin_number',
        'account_type',
        'nationality',
        'gender',
        'marital_status',
    ];







    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
