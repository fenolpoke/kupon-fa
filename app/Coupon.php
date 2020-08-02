<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model 
{

    protected $table = 'coupon';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'firstname','lastname', 'email','address','handphone','password'
    // ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password',
    // ];
}
