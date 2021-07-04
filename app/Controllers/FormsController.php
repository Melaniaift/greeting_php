<?php
namespace App\Controllers;
use CodeIgniter\Controller;
class FormsController extends Controller
{
    public function index()
    {
        $var1="";
        if(isset($_POST["text1"])){
            $var1=$_POST["text1"];
            $var2="<br/><br/>Hello ".$var1."!";
        }
        else{
            $var1="";
            $var2="<br/><br/>Good Morning!";
        }
        $data['var1']=$var1;
        $data['var2']=$var2;
        return view('forms',$data);
    }
}
