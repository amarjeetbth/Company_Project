
<?php

 session_start();
 //header('location:login.php');
 header('location:index.php');

$connection = mysqli_connect('localhost','root',"");//password
                           //Data base name userregistration
  mysqli_select_db($connection,'userregistration');

   $name = $_POST['user'];
    $pass = $_POST['password'];
   
                      //Table name usertable
   $s = "select * from usertable where name = '$name'"; 

$result = mysqli_query($connection,$s);

$num = mysqli_num_rows($result);

if($num == 1)
{
  
   echo "User Name Already Taken ";

}
else
{

	$reg= "insert into usertable(name , password) values ('$name','$pass')";
	mysqli_query($connection,$reg);
	echo "Registration Sucessfull";
}


?>
