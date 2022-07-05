<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="links.css">
</head>
         
               <ul class="topnav">
                   <li><a class="active" href="hp2.php">Home</a></li>
                      <li><a href="profilepage.php">Profile</a></li>
               </ul>

            <br><br>

              <style>
                body {
                        background-image: url('untitled5.png');
                     }

                body {margin: 0;}

                ul.topnav {
                        list-style-type: none;
                        margin: 0;
                        padding: 0;
                        overflow: hidden;
                        background-color: rgb(214, 163, 33);
                          }

                ul.topnav li {float: left;}

                ul.topnav li a {
                       display: block;
                       color: white;
                       text-align: center;
                       padding: 14px 16px;
                       text-decoration: none;
                          }

                ul.topnav li a:hover:not(.active) {background-color: rgb(194, 154, 52);}

                ul.topnav li a.active {background-color: rgb(194, 154, 52);}

                ul.topnav li.right {float: right;}

                @media screen and (max-width: 600px) {
                ul.topnav li.right, 
                ul.topnav li {float: none;}
                          }

                table, td, th {
                border: 1px solid black;
                border-color: rgb(214, 163, 33);
                 text-align: center;
                          }
  
                 table {
                border-collapse: collapse;
                width: 60%;
                        }
   
                     th {
               height: 40px;
                        }
                        body {
              font-family: "Papyrus", "fantasy";
                        }



</style>

<center>
           <form method="post" action="updateuser.php"><br>
             First Name:<input type="text" name="firstname"><br>
             Last Name:<input type="text" name="lastname"><br>
             Email:<input type="email" name="email"><br>
             Address:<input type="text" name="address"><br>
             Password <input type="password" name="password"><br><br>
             
            <button name="update" type="submit" >update</button><br><br>
            <br>
          </form>
 

<body>
           <?php
            include 'config.php'; 
            echo "<br>";
            echo 'Hello'." ".$_SESSION['email'];
               echo "<br>";
                $user_id= $_SESSION['user_id'];

                if(isset($_POST['update'])){
                 
                $firstname=$_POST['firstname'];
                $lastname=$_POST['lastname'];
                $email=$_POST['email'];
                $address=$_POST['address'];
                $password=$_POST['password'];
                $query="update users set firstname='$firstname',lastname='$lastname',email='$email',address='$address',password='$password'  where user_id='$user_id'";
                if(!mysqli_query($conn,$query)){
                    die ('Error'.mysqli_error($conn));
                }else{
                      echo " data updated sucessfully";
                  }

                  }

            echo " <br>";

          include 'footer.php';
        ?>
  </center>

    </body>
    </html>