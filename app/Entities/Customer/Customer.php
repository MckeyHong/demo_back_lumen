<?php

namespace App\Entities\Customer;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $fillable = ['username', 'password', 'name', 'email', 'phone', 'country'];
    protected $hidden = ['password'];
}
