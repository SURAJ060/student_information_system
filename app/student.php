<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //
    protected $table = 'student';
    protected $fillable = ['username','password','branch','address','email','ca','tch','perc','mark1','mark2','mark3','mark4','mark5','mark6'];
    protected $PrimaryKey = 'usn';
}
