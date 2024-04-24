<?php
echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">';
     //database connection


    //  include '../database/connect.php';
     include 'dbcon.php';
          
            
     
     if (isset($_POST["submit"])) {
      
        
  session_start();
        

   
      
        //this code will take HTML Form data from User
        $l_name = $_POST['l_name'];
        $f_name =   $_POST['f_name'];
        $m_name =  $_POST['m_name'];
        $email =  $_POST['email'];
        $username =  $_POST['username'];

        $p_number =  $_POST['p_number'];
        $t_number =  $_POST['t_number'];
        $r_pass = $_POST['r_pass'];
        $c_pass =  $_POST['c_pass'];
        
        
        $block =$_POST['block'];
        $lot = $_POST['lot'];
        $h_street = $_POST['h_street'];
        $zone =$_POST['zone'];

        $_SESSION['block'] = $row['block'];
        $_SESSION['lot'] = $row['lot'];
             
        $_SESSION['h_street'] = $row['h_street'];
        

        $bday =  $_POST['bday'];
        $bplace = $_POST['bplace'];
        $nationality = $_POST['nationality'];
        $c_status = $_POST['c_status'];
        $r_age = $_POST['r_age'];
        $gender = $_POST['gender'];
        $voter = $_POST['voter'];

        $role = "resident";

        $postData = [
            'lname' => $l_name,
             'fname' => $f_name,
              'mname' => $m_name,
              'email' => $email,
              'username' => $username,
                'p_number' => $p_number,
                't_number' => $t_number,
                'r_pass' => $r_pass,

                    'bday' => $bday,
                     'bplace' => $bplace,
                     'nationality' => $nationality,
                     'c_status' => $c_status,
                     'r_age' => $r_age,
                     'gender' => $gender,
                     'voter' => $voter,
                     'role' => $role
        ];
        $ref_table = "registration_tb";
        $postRef_result = $database->getReference($ref_table)->push($postData);

        if(  $postRef_result ){
            echo '<script>alert("PRETTY MO")</script>'; 
            header('Location: /public/user_login.php');
        } else{
            echo '<script>alert("Welcome to Geeks for Geeks")</script>'; 
            header('Location: new_in.php');
        }

    }



  ?>
      
            



