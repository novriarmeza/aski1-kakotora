<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Claim_customer extends Model
{
    // protected $fillable = ['_token'];
    protected $table = 'claim_customer';
    protected $primaryKey = 'id_customer_claim';
    public $timestamps = false;
    // public function tb_part() {
    //     return $this->belongsTo(Data_parts::class, 'id_part');
    // }
}
