<?php

namespace seed\Http\Controllers;

//use Vinelab\NeoEloquent\Eloquent\Model as NeoEloquent;
use Vinelab\Cms\NeoEloquent;
use Illuminate\Http\Request;
use seed\Pessoa;

class PessoaController extends Controller
{
    //
    public function add(){
    	//$pessoa = new Pessoa();
    	$pessoa = Pessoa::create(['email' => 'liana@email.com']);
    	return 'teste';
    }
    public function lista(){

    }
    
}
