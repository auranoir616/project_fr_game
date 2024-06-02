<?php

namespace App\Controllers;
use App\Models\ModelGame;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ControllerGame extends BaseController
{
    public function index(){
        //
    }

    public function AddGame(){
            if(!session()->has('id')){
                return redirect()->back()->with('error', 'Belum Login');
            }else{
                $validationRules = [
                'nama_game' => 'required',
                'gambar_game' => 'uploaded[gambar_game]|mime_in[gambar_game,image/jpg,image/jpeg,image/png,image/gif,image/webp]',
                'url_game' => 'required',
            ];
            if(!$this->validate($validationRules)){
                return redirect()->back()->withInput()->with('error', 'terjadi error saat upload gambar');
            }
            $gambargame = $this->request->getFile('gambar_game');
            
            if($gambargame->isValid()){
                $newName = $gambargame->getRandomName();
                $gambargame->move(ROOTPATH . 'public/uploads/', $newName);
                $image = \Config\Services::image();
                $image->withFile(ROOTPATH . 'public/uploads/' . $newName)
                    ->resize(800, 600, true)
                    ->save(ROOTPATH . 'public/uploads/' . $newName, 70);
                $modelgame = new ModelGame();
                $modelgame->insert([
                    'nama_game'=> $this->request->getPost('nama_game'),
                    'url_game' => $this->request->getPost('url_game'),
                    'gambar_game' => $newName,
                ]);
                return redirect()->back()->with('success', 'tambah game sukses');
            }else{
                return redirect()->back()->with('error', 'tambah game gagal');

            }
        }
    }

        public function GetGame(){
            if(!session()->has('id')){
                return $this->response->setJSON(['status' => 'error', 'message' => 'belum login']);
            }else{
                $modelgame = new ModelGame();
                $datagame = $modelgame->findAll();
                return view('/components/_tableGame',['datagame' => $datagame]);
            }
    }

    public function DeleteGame($id){
        if(!session()->has('id')){
            return redirect()->back()->with('error', 'belum login');
        }else{
            $modelgame = new ModelGame();
            $modelgame->deleteGameById($id);
            return $this->response->setJSON(['status' => 'success', 'message' => 'hapus game sukses',]);
        }
    }


}

