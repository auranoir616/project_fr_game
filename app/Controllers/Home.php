<?php

namespace App\Controllers;
use App\Models\ModelGame;
use App\Models\ModelUrl;

class Home extends BaseController
{
    public function index(){

        return view('home', $this->GetGameUser());
    }
    public function GetGameUser(){
        $modelgame = new ModelGame();
        $datagame = $modelgame->findAll();
        $modelurl = new ModelUrl();
        $dataurl = $modelurl->findAll();
        return ['datagame' => $datagame, 'dataurl' => $dataurl];
    }


    public function admin(){
        if(!session()->has('id')){
            return $this->response->setJSON(['status' => 'error', 'message' => 'belum login']);
        }else{
            $modelgame = new ModelGame();
            $modelurl = new ModelUrl();
            $dataurl = $modelurl->findAll();
            $datagame = $modelgame->findAll();

            return view('adminpanel',['datagame' => $datagame, 'dataurl' => $dataurl]);
        }
}
    public function login(){
        return view('adminlogin');
    }


}
