 <?php 

session_start(); 


?>

        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title></title>
        </head>
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

               body {
                     font-family: "Papyrus", "fantasy";
                    }

                button {
               border: none;
               color: white;
               padding: 7px 92px;
               text-align: center;
               text-decoration: none;
               display: inline-block;
               background-color:rgb(214, 163, 33) ;
               font-size: 15px;
               margin: 4px 2px;
               cursor: pointer;
    
                      }    

            
</style>

               <ul class="topnav">
               <li class="left"><a href="registrationform.php">Register</a></li>
               </ul>

        <body>

<center>
            <?php
            include "config.php";
            if(isset($_POST['login'])){
            $email=($_POST['email']);
            $password=($_POST['password']);
            $sql= " select * from users where email='$email' AND password='$password'";
            $result= mysqli_query($conn, $sql);
            if (mysqli_num_rows($result)==1){
            $row=mysqli_fetch_assoc($result);
            if($row['email']===$email && $row['password']===$password){        
                echo "Logged in!";
                $_SESSION['email']=$row['email'];
                $_SESSION['password']=$row['password'];
                $_SESSION['user_id']=$row['user_id'];
                header("Location:hp2.php");
               }
            }else{            
               echo "invalid mail or password";
                    }
        
                    }
               ?>
       
            
            <form method="post" >
             Mail: <input  type="text" name="email" placeholder="Please enter your email"><br><br>
         Password: <input  type="password" name="password" placeholder="Please enter your password"><br><br>
                   <button name="login" type="submit" >login</button>
                  <br><br>
            </form>

          <?php
          echo " <br>";

          include 'footer.php';
          
           ?>
          </center>
        </body>
        </html>