<?php
 session_start();


 



 
        if (!isset($_POST['email'], $_POST['r_pass'])){
                 echo "<script>alert('Please fill both email and password field!.'); </script> ";
        

       
            //prepare our sql

        if ($stmt = $conn -> prepare('SELECT users_id, r_pass FROM users_registration_tb WHERE email =?')){
                //bind parameters

                $stmt->bind_param('s', $_POST['email']);
                $stmt -> execute();

                //code below is for storing data first so we can check if the account exists in the database
                $stmt -> store_result();

        if($stmt->num_rows >0){
                 $stmt->bind_result($users_id, $r_pass);
                 $stmt->fetch();

                  //if the acc exists, we will now proceed to verifying the pass

         if (password_verify($_POST['r_pass'], $r_pass)){
                            //if it is verified then the user successfully logged in, next we need to use Sessions
                  session_regenerate_id();
                  $_SESSION['loggedin'] = TRUE;
                  $_SESSION['uemail'] = $_POST['email'];
                  $_SESSION['id'] = $users_id;

                               header('Location: landing_page.php' );


                        } else {
                            echo 'Incorrect username and/or password!';
                        }
                    } else{
                        echo 'Incorrect username and/or password!';
                    }

                $stmt -> close();
            }
        }
 


?>