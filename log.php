<?php
    session_start();
        require('connection.php');
  
    if (isset($_POST['Login']))
     {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        //Check Admin
        $query    = "SELECT * FROM admin WHERE aname='$username'
                     AND a_pass='$password' OR a_email='$username' AND a_pass='$password';";
        $result = mysqli_query($con, $query);
        $rows = mysqli_num_rows($result);
        
        //Check Customer
        $query2    = "SELECT * FROM customer WHERE cname='$username'
                     AND c_pass='$password'OR c_email='$username' AND c_pass='$password';";
        $result2 = mysqli_query($con, $query2);
        $rows2 = mysqli_num_rows($result2);

        
        if ($rows == 1) {
            // Redirect to user Admin page
            header("Location: admin.php");
        } 
        elseif ($rows2 == 1) {
           $_SESSION['c_user']=$username;
            // Redirect to home page
            header("Location: home.php");
        } 
    
        else {
            header('Location:index.php?login=invalid');
        }
    }
?>