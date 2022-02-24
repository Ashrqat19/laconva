<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $table = 'blogpost';
    public $primarykey = 'id';
    public $timetamps = true;
}
