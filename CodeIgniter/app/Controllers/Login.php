<?php namespace App\Controllers;
use App\Models\ModelPersonen;
use CodeIgniter\Controller;
class Login extends BaseController
{
   public function __construct(){
        $this->PersonenModel = new ModelPersonen();
    }

	public function index(){
    /*
        if(isset($POST['username'])&& isset($POST['passwort'])){
	    if($this->PersonenModel->login()!=NULL){
	        $passwort = $this->PersonenModel->login()['passwort'];
	        if(passwort_verify($_POST['passwort'],$passwort)){
	            $this->session->set('loggedin',TRUE);
	            return redirect()-> to(base_url().'/personen/indes/index_dyn');
            }
        }
    }
    */
        //echo view('Templates/header.php');
		echo view('Login.php');
		//echo view('Templates/footer.php');
	}

	//--------------------------------------------------------------------

       /*
         public function logout(){
        $this->>session->destroy();
        return redirect()->to(base_url().'/login');
        }
       */

}
