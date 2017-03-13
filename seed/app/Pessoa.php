<?php

namespace Vinelab\Cms;

use Illuminate\Database\Eloquent\Model;


class Pessoa extends NeoEloquent
{
    //
    protected $label = 'Pessoa'; // or array('User', 'Fan')

    protected $fillable = ['name', 'email'];
}

$pessoa = Pessoa::create(['name' => 'Some Name', 'email' => 'some@email.com']);