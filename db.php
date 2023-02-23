<?php
   if(isset($_POST['register']))
   {
    $con = mysqli_connect("localhost","root","","project");

    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    else
    {
        
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $c_phno=$_POST['c_phone_no'];  
        
        $query1="select *from customer where cname='$username';";
        $cmd2=mysqli_query($con,$query1);
        if(($row=mysqli_num_rows($cmd2))>0)
        {
            header("location:index.php?signup=sameuser");
        }
        else{
            
        $query2="INSERT INTO customer (cid,cname,c_cont_no,c_email,c_pass) VALUES (null,'$username','$c_phno','$email','$password');";
        $rs= mysqli_query($con,$query2);
        if($rs)
        {
            header("location:index.php?login=success");
        }
        }
    }
}
?>