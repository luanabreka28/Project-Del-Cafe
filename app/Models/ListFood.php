<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListFood extends Model
{
    use HasFactory;

    public $table = "list_food";
    public $timesetamps = false;
    public function food()
    {
        return $this->belongsTo(ListDay::class,'id_list_day','id');
    }
}