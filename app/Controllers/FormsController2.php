<?php
namespace App\Controllers;
use CodeIgniter\Controller;
class FormsController2 extends Controller
{
    public function index()
    {
        $var1="";
        if($this->request->getPost('text1')){
            $var1=$this->request->getPost('text1');
            $var2="<br/><br/>Hello ".$var1."!";
        }
        else{
            $var1="";
            $var2="<br/><br/>Good Morning!";
        }
        $data['var1']=$var1;
        $data['var2']=$var2;
        return view('forms2',$data);
    }
}
