<?php
namespace Formacom\controllers;
use Formacom\Core\Controller;
use Formacom\Models\User;


class LoginController extends Controller{
    public function index(...$params){
        
        $this->view("login");
    }
    public function login(...$params){
        if(isset($_POST["username"])){
            $user=User::where("username",$_POST["username"])->first();
            if($user && password_verify($_POST["password"],$user->password)){
                $_SESSION["user_id"]=$user->user_id;
                $_SESSION["username"]=$user->username;
                
            }else{
                $error="User or pass incorrect";
                $this->view("login",[$error]);
            }
            //var_dump($user->password);
            
            exit();
        }else{
           header("Location: ".base_url()."login");
        }
       
    }

    public function register(...$params){
        $this->view("register");
    }

    public function json(){
        $actores=Actor::where("first_name","like","P%")->get();
        $datos=[
            "mensaje"=>"Listado actores empiezan P",
            "listado"=>$actores
        ];
        $json=json_encode($datos);
        header('Content-Type: application/json');
        echo $json;
        exit();
    }

}
?>