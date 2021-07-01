<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Agenda extends Model
{
    protected $fillable = ['nome', 'email', 'telefone','tipo','morada'];
}