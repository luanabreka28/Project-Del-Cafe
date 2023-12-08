<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListChange extends Model
{
    public $table = "list_changes";
    public $timesetamps = false;
    public function food()
    {
        return $this->belongsTo(ListDay::class,'id_list_day','id');
    }
    public function us()
    {
        return $this->belongsTo(User::class,'id_users','id');
    }
}