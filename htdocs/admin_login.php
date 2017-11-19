<?php session_start();


require 'users.php';

class admin_login {




    public function check_admin_login () {




        if(   isset($_POST['username']) &  isset ($_POST['password']) & isset ($_POST['authorization']) ){

        if($_POST['authorization']==22) {
            $user_object = new users();


            if ($user_object->login(htmlspecialchars($_POST['username']), $_POST['password'], $_POST['authorization'])) {
                $_SESSION['username'] = htmlspecialchars($_POST['username']);
                $_SESSION['password'] = $_POST['password'];
                $_SESSION['authorization'] = $_POST['authorization']; //22

                 require'../lib/smarty-master/setup.php';


            $smarty=new Smarty_Unit();
                     
$smarty->display('../templates/controlPanel.html');
                      
      //          echo "login  admin successful";
            } else {
                // user name and password not correct

                echo "user name and password not correct for admin ";
            }
        }
        }else {
            
            require'../lib/smarty-master/setup.php';


            $smarty = new Smarty();
            $smarty->display('../templates/admin_login.tpl');

        }



    }

}

$log= new admin_login();
$log->check_admin_login();
