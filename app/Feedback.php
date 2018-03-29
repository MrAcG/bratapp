<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedback';
 
    protected $fillable = ['email','message','read','from']; 
}
