 <?php
        session_start();

        ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
	<link rel="stylesheet" href="links.css">
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


<body>
 
               <ul class="topnav">
               <li><a class="active" href="hp2.php">Home</a></li>
               <li><a href="profilepage.php">Profile</a></li>
                <li><a href="login.php">Login</a></li>
               
               </ul>

	        <br><br>

       <center>

        <?php
       
          include 'config.php'; 
             

            echo "<br>";
            echo 'Hello'." ".$_SESSION['user_id']."<br>";
            echo 'Welcome'." ".$_SESSION['email'];
           
         
            $sql="select * from posts";
            if($result=mysqli_query($conn,$sql)){
            if(mysqli_num_rows($result)>0){
              echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                      
                                        echo "<th>Title</th>";
                                        echo "<th>Post</th>";
                                         echo "<th>Action</th>";
                                        
                                        echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                   
                                        echo "<td>" . $row['post_title'] . "</td>";
                                        echo "<td>" . $row['post_content'] . "</td>";
                                          echo "<td>".'<a href="addcomment.php?post_id1='. $row['post_id1'] .'" class="mr-3" title="view record" ">view</a>'."</td>";
                                        
                                          
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";

                            
                        } 
                    } 


                    echo " <br>";

                    include 'footer.php';
                  ?>
                </center>
              </body>
               </html>