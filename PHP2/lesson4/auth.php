<?
session_start();
require "/lib/config.php";
$login=$_POST['login'];
$password=$_POST['password'];
$password_c=$_POST['password_confirm'];
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$edit=$_POST['log'];
$exit=$_GET['exit'];
$view=$_GET['orders'];
if ($_SESSION["admin"]=='1'){
	if ($view=="users") {
       echo "<p>users-admin</p>";
      echo "<table border=\"1\" width=\"100%\" cellpadding=\"5\">

       <tr>
       <th>User</th>
       <th>Name</th>
       <th>Lastname</th>
       <th>E-Mail</th>
      </tr>";
       $sql = "select * from users order by login DESC ";
      $res=mysqli_query($connect,$sql);
        while ($data=mysqli_fetch_assoc($res)){
             $user=$data['login'];
             $name=$data['first_name'];
             $last=$data['last_name'];
             $mail=$data['email'];
              echo "<tr>
                            <td>$user</td>
                            <td>$name</td>
                            <td>$last</td>
                            <td>$mail</td>
                         </tr>";
      }
	}
}
if ($view=="view") {
	if ($_SESSION["admin"]=='1'){
        $sql = "select * from buy order by number DESC ";
           echo "<table border=\"1\" width=\"100%\" cellpadding=\"5\">
       <tr>
       <th>number</th>
       <th>login</th>
       <th>name</th>
       <th>id</th>
       <th>date</th>
       <th>status</th>
      </tr>";
       $res=mysqli_query($connect,$sql);
        while ($data=mysqli_fetch_assoc($res))
        {

          $number=$data['number'];
          $login=$data['login'];
          $name=$data['name'];
          $id=$data['id'];
          $date=$data['date'];
          echo "<tr>
                            <td>$number</td>
                            <td>$login</td>
                            <td>$name</td>
                            <td>$id</td>
                            <td>$date</td>
                         </tr>";
        }
	}
	else {
         echo "<table border=\"1\" width=\"100%\" cellpadding=\"5\">
       <tr>
       <th>number</th>
       <th>name</th>
       <th>date</th>
       <th>status</th>
      </tr>";
     $login=$_SESSION['login'];
     $sql= "SELECT * FROM buy WHERE login=\"$login\"";
    $res=mysqli_query($connect,$sql);
    while ($data=mysqli_fetch_assoc($res))
        {
           $number=$data['number'];
           $name=$data['name'];
           $date=$data['date'];
           echo "<tr>
                            <td>$number</td>
                            <td>$name</td>
                            <td>$date</td>
                         </tr>";
        }

  }
}
elseif ($view=="history")
{
	echo "history";
}
if ($exit==true){
    session_destroy();
    header('Location: index.php'); 
    exit;
}
if ($edit==2) {
$sql = "INSERT INTO `users`(`login`,`password`,`first_name`,`last_name`,`email`,`phone`) VALUES ('$login','$password','$fname','$lname','$email','$phone')";
  $res=mysqli_query($connect,$sql);
  header('Location: index.php'); 
}
else 
{
	$sql= "SELECT * FROM users WHERE login=\"$login\" limit 1";
	$res=mysqli_query($connect,$sql);
	$num_rows=mysqli_num_rows($res);
	if ($num_rows==0) {
	 $_SESSION["auth"] = true;

	}
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
            header('Location: index.php'); 
         } else 
         {
         header('Location: index.php'); 
          }
         }
    else {
      require "header.php";
      echo "Login or password error";
      require "footer.php";
    }
  }
exit;