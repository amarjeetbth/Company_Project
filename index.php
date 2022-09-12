<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User login And  Singn Up </title>
	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >-->

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

    <link rel="stylesheet" type="text/css" href="style.css">

	<style>
		*body{
			background-color: pink;
		}
		.img{
			padding:0px;
			margin:0px 0px;
		}

		.fa fa-key{
			font-size: 48px;
			color:red;
		}

		.img{
			
			width: 200px;
			height: 140px;
			/*border-radius:10%;*/
			position: absolute;
			left:calc(50% -50px);
		}
	</style>

</head>
<body style="background-color:pink">
	<br>

   <div class="container">
   <!--	<div class="login-box">-->
     
   	  <div class="row">
   	  	   <div class="col-md-6 bg-dark">
   	  	   		<br>
   	  	   			<img src="sc.jpg" class="img">

   	  	   		
   	  	   			<!-- <i class="fa fa-key"></i>-->
   	  	   			<div class="text-right">
   	  	   			    <i style="font-size:150px; color:pink; font-style: right;"  class="fa">&#xf084;</i>
					      </div>
   	  	   			 <!--<div class="img"><img src="sch.jpg" class="rounded float-left" alt="..."></div>-->

   	  	   	 <h1 class="text-white">User Form </h1>


   	  	   	
	
                  
     <!-- Start singn UP ----------------------------------------ofdjopjpojkopjkr--------------------------------- -->  
     

       <form action ="registration.php" method="post">


                 <div class="form-group" >
                  	  <input type="text" class="form-control" placeholder="&#9977;UserName" name="user" required>
                 </div>

                  
                 <div class="form-group">
                     <input type="password"  class="form-control" placeholder="&#128274; Password" name="password" required >
                 </div>
							
                 
                <div class="text center ">
               	 <button type="submit" class="btn btn-block btn-danger btn-lg text-center">Sign Up</button>
         </form>
         <br>

<!-- Start singn in ----------------------------------------ofdjopjpojkopjkr--------------------------------- -->


           <form action="validation.php" method="post">

               		 
               		
               	    <div class="form-group" >
                  	  <input type="text" class="form-control" placeholder="&#9977;UserName" name="user" required>
                  </div>

                  
                  <div class="form-group">
                     <input type="password"  class="form-control" placeholder="&#128274;Password" name="password" required >
                  </div> 
							

				      <div class="text center ">
               	  <button type="submit" class="btn btn-block btn-warning btn-lg text-center">Sign in</button>
            			
            </form>
         
         <form>

							</div><br>
              			<div class="form-group">
              			
							<div class="btn-group btn-block">
								<button type="button" class="btn btn-danger">&raquo;Parent</button>
								<button type="button" class="btn btn-primary">&raquo;Student</button>
							</div>
							<p class="text-light">* Note Select class 1 and Section A for Demo Testing</p>
              			</div>
              			

              		<a href="#">&#128273;Forgot Password</a>

              		<div class="text-right p-4">

					
					<a href="#" class="text-light">&#9689;Front site</a>

					<a href="#" class="text-light">&#128274;Admin Login</a>
				  </div>
          </form>

				
    </div>

</body>
</html>

<!--      PHP CODE       

<?

/*session_start();
 header('location:login.php');

$connection = mysql_connect("localhost","root","");//password

  mysqli_select_db($connection,'userregistrartion');

   $name = $_POST['user'];
    $pass = $_POST['password'];
   

   $s = "select * from usertable where name = '$name' ";

$result = mysqli_query($connection,$s);

$num = mysqli_num_rows($result);

if($num == 1)
{
  
   echo "User Name Already Taken ";

}
else
{

	$reg= "insert into usertable(name,password) values ('$name','$pass')";
	mysql_query($connection,$reg);
	echo "Registration Sucessfull";
}
*/

?>
