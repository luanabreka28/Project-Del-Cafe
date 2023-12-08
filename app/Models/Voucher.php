<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    public $table = "voucher";
    public $timesetamps = false;
    public function us()
    {
        return $this->belongsTo(User::class,'id_users','id');
    }
}