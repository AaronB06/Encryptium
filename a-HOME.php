<?php
    include 'connect.php';
    session_start();

    if(!isset($_SESSION['admin_email'])){
        header('location: admin_login.php');
    }
    


?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Admin's Portal</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Lobster&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="a-HOME.css">  
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <img src="wr_logo.png" alt="west-rembo-logo">
            <h2>West Rembo</h2>
            <i class='bx bx-menu' id="menu_btn"></i>

        </div>

        

        <nav>
            <ul>
                
                <li>
                    <a href="#">
                        <i class='bx bxs-dashboard'></i>
                 Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bxs-user' ></i>
                        Users
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bxs-user-rectangle' ></i>
                        Officials
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bxs-message' ></i>
                        Messages
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bxs-report' ></i>
                        Reports
                    </a>
                </li>
                <li>
                    <a href="admin_login.php">
                        <i class='bx bx-log-out-circle' ></i>
                        Logout
         
                       
                    </a>

                    
                </li>
            </ul>

            <div class="admin_profile">
                    <div class="admin_name"><h4><?php echo $_SESSION['admin_email']?></h4> </div>

                    <div class="admin_work"> <h5>Administrator</h5> </div>
      
            </div>
        </nav>
    </div>

    <div class="dashboard_content">
        <header>
            <nav>
                  <h1>dashboard</h1>

            

            </nav>
              <input type="text" placeholder="Search" class="Search">

        </header>

        <div class="wrapper01">
            <div class="containers">
                <div class="container01">
                        <h4>Total Users:</h4>
                        <p></p>

                </div>
                <div class="container01">
                    <h4>Total Requests:</h4>
                    <p></p>

            </div>
       
            <div class="container01">
                <h4>Total Users:</h4>
                <p></p>

        </div>
   
        <div class="container01">
            <h4>Total Users:</h4>
            <p></p>

    </div>


            </div>
        </div>
    </div>






</body>
</html>