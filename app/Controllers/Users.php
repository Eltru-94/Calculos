<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        
    }

    public function store(){
       $input=$this->getRequestInput($this->request);
       $altura=$input['altura'];
       $peso=$input['peso'];
       $input['estado']=1;
       $input['IMC']=($peso/($altura*$altura));
       $modelUser=new \App\Models\Users();
       $modelUser->insert($input);
        return $this->getRespose([
            'user'=>$input,
            'success'=>'registrado'
        ]);
    }
}
