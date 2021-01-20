<?php namespace App\Controllers;

use App\Models\LoginModell;
use App\Models\ModelPersonen;
use CodeIgniter\Controller;

class LogIn extends BaseController
{
    public function index()
    {
        $data['title_name'] = 'Login';


        echo view('Templates/Header');
        echo view('LogIn');
        echo view('Templates/Footer');
    }

    public function submit(){

        if($this->validation->run($this->request->getPost(), 'login_valid')){
            $loginModel = new LoginModell();
            if(isset($_POST['EMail']) && isset($_POST['Password'])){
                if($loginModel->login($_POST['EMail'] != null)){
                    $password = $loginModel->login()['Password'];
                    if(password_verify($_POST['Password'], $password)){
                        $this->session->set('loggedin', true);
                        return redirect()->to(base_url() . '/public/index');
                    }
                }
            }
        }else{
            $data['error'] = $this->validation->getErrors();
            $data['title_name'] = 'Login';


            echo view('Templates/Header');
            echo view('LogIn');
            echo view('Templates/Footer');
        }
    }
    //--------------------------------------------------------------------

}
   /* public function __construct(){
        $this->PersonenModel = new ModelPersonen();
    }

	public function index(){

        if(isset($POST['username'])&& isset($POST['passwort'])){
	    if($this->PersonenModel->login()!=NULL){
	        $passwort = $this->PersonenModel->login()['passwort'];
	        if(passwort_verify($_POST['passwort'],$passwort)){
	            $this->session->set('loggedin',TRUE);
	            return redirect()-> to(base_url().'/personen/indes/index_dyn');
            }
        }
    }

        //echo view('Templates/header.php');
		//echo view('Login.php');
		//echo view('Templates/footer.php');
	//}

	//--------------------------------------------------------------------


         public function logout(){
        $this->>session->destroy();
        return redirect()->to(base_url().'/login');
        }
       */


