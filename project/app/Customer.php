<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // protected $fillable = ['_token'];
    protected $table = 'customer';
    // public function tb_cust_back() {
    //     return $this->hasMany(Data_parts::class, 'customer');
    // }
}
