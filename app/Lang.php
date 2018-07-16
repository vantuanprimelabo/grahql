<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'language';
    protected $fillable = [
        'id', 'lang', 'name','avail_flg',
    ];
}
