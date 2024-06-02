<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelAdmin;

class ControllerAdmin extends BaseController
{
    public function AddAdmin(){
        $validationRules = [
        'username' => 'required|min_length[3]|max_length[50]|is_unique[tbl_admin.username]',
        'password'=> 'required',
    ];
    if(!$this->validate($validationRules)){
        return redirect()->back()->withInput()->with('error', $this->validator->getErrors());
    }
    $modeluser = new ModelAdmin();
        $modeluser->insert([
                'username' =>  $this->request->getPost('username'),
                'password' => password_hash((string)$this->request->getPost('password'), PASSWORD_DEFAULT),
            ]);
            return $this->response->setJSON(['status' => 'success', 'message' => 'berhasil']);
        }

        public function LoginAdmin(){
            $validationRules=[
                'username' => 'required',
                'password' => 'required',
            ];
            if(!$this->validate($validationRules)){
                return redirect()->back()->with('error','gagal login');

            }else{
                $username = $this->request->getPost('username');
                $password = $this->request->getPost('password');
                $modeluser = new ModelAdmin();
                $user = $modeluser->login($username, $password);
                $session = session();
                if($user){
                    $session->set($user);
                    return redirect()->to('/adminpanel')->with('success','login sukses');
                }else{
                    return redirect()->back()->with('error','gagal login');
                }
            }
        }
        public function logout(){
            session()->destroy();
            return redirect()->to('/adminlogin')->with('success','logout sukses');
        }


    

}
