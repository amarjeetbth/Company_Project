
<?php

 session_start();
 

$connection = mysqli_connect('localhost','root',"");//password
                           //Data base name userregistration
  mysqli_select_db($connection,'userregistration');

   $name = $_POST['user'];
    $pass = $_POST['password'];
   
                      //Table name usertable
   $s = "select * from usertable where name = '$name' && password = '$pass'"; 

$result = mysqli_query($connection,$s);

$num = mysqli_num_rows($result);

if($num == 1)
{
   $_SESSION['username']= $name;
  header('location:home.php');

}
else
{

	//header('location:login.php');
	header('location:index.php');
}


?>






