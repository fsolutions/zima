<?
Class Enter{
function Auth(){
require "lib/config.php";
$login=$_POST['login'];
$password=$_POST['password'];

    $sql= "SELECT * FROM users WHERE login=\"$login\" limit 1";
    $res=mysqli_query($connect,$sql);
    $num_rows=mysqli_num_rows($res);
    if ($num_rows==0) {
     $_SESSION["auth"] = true;

    }

if ($_SESSION["auth"]==false) {
    $data = mysqli_fetch_assoc($res);
    $admin=$data['admin'];
    $pass=$data['password'];
    if ($password==$pass) {
        $_SESSION["auth"] = true; //Делаем пользователя авторизованным
        $_SESSION["login"] = $login; //Записываем в сессию логин пользователя
         if ($admin==1) 
         {
             $_SESSION["admin"]=true;
           // header('Location: index.php'); 
         } else 
         {
      //   header('Location: index.php'); 
          }
         }
    else {
     // require "header.php";
     // echo "Login or password error";
     // require "footer.php";
    }
  }
}
}