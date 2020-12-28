<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = "post";
    //menggunakan fillable
    // protected $fillable = ["title","body"]; 

    //menggunakan guarded
    protected $guarded = [];
}
