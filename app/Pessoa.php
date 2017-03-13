<?php

//namespace Vinelab\NeoEloquent;
namespace seed;
use Vinelab\NeoEloquent\Eloquent\Model as NeoEloquent;
//use Illuminate\Database\Eloquent\Model;
//use Vinelab\Cms\NeoEloquent;


class Pessoa extends NeoEloquent
{
    //
    protected $label = 'Pessoa'; // or array('User', 'Fan')

    protected $fillable = ['email'];
}

//$pessoa = Pessoa::create(['email' => 'keyla@email.com']);