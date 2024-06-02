<?php

namespace App\Controllers;
use App\Models\ModelGame;

class Home extends BaseController
{
    public function index(){

        return view('home', $this->GetGameUser());
    }
    public function GetGameUser(){
        $modelgame = new ModelGame();
        $datagame = $modelgame->findAll();
        return ['datagame' => $datagame];
    }


    public function admin(){
        if(!session()->has('id')){
            return $this->response->setJSON(['status' => 'error', 'message' => 'belum login']);
        }else{
            $modelgame = new ModelGame();
            $datagame = $modelgame->findAll();
            return view('adminpanel',['datagame' => $datagame]);
        }
}
    public function login(){
        return view('adminlogin');
    }


}
