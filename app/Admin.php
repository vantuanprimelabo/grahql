<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = ['administrators'];
    protected $fillable = [
        'mail_address', 'name', 'type','created_date',
    ];
}
