<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListDay extends Model
{
    use HasFactory;
    
    public $table = "list_day";
    public $timesetamps = false;
    
}