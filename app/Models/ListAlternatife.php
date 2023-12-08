<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListAlternatife extends Model
{
    public $table = "list_alternatife";
    public $timesetamps = false;
    public function alt()
    {
        return $this->belongsTo(ListFood::class,'id_list_food','id');
    }
    public function food()
    {
        return $this->belongsTo(ListDay::class,'id_list_day','id');
    }
}