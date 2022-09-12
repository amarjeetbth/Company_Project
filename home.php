  <?php

    session_start();

    if(! isset($_SESSION['username']))
    {
    //header('location:login.php');
      header('location:index.php');
    }


   ?>


   <html>
   <head>
      <title>Home page</title>

   		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
   

       <style>
        .c{
           color: #fff;
           margin-top:200px;
           text-align: center;
           text-transform: uppercase;
          }      

          a:hover, a:active {
           background-color: red;
         }


          a:active {
          color: yellow;
          background-color: transparent;
          text-decoration: underline;
        }


        a{
          color: #fff;
        }


       </style>

   </head>
   
   <body style="background-color:green">

   	<div  class="container">
      <div class="c">
   		<a class ="float-right " href="logout.php">LOGOUT</a>

        <h1> Welcome  to
        	<?php
        	        echo $_SESSION['username']; 

        	?>
        </h1>
      </div>
    </div>
   </body>
   </html> 
