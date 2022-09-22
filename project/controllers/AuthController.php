<?php
namespace Project\Controllers;
use \Core\Controller;
use \Project\Models\Auth;

class AuthController extends Controller
{
    public function auth() {
        if(!empty($_SESSION["user"])){
            header("Location: /tree/");
        }
         $this->title = 'Авторизация';
        if(isset($_POST["auth"])) {
            $auth = (new Auth)->auth($_POST['login'],$_POST['password']);
            if($auth === true){
                // начинаем сессию при успешной авторизация, заносим данные авторизовашегося пользователя в $_SESSION["user"]
                $_SESSION["user"] = true;
                // и переходим на страницу древа
                header("Location: /tree/");
            }
            // вывод неверно введеной формы
            return $this->render('auth/auth',  ["h1" => "Ошибка!Неверно ввведен логин или пароль",]);
        }
        // окно без введения формы
        return $this->render('auth/auth', ["h1" => $this->title]);
    }
}