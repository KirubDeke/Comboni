<?php


$dbserver = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "log-in";
$dbport = null;


$connect = mysqli_init();
mysqli_options($connect, MYSQLI_OPT_INT_AND_FLOAT_NATIVE, 1);
mysqli_real_connect($connect, $dbserver, $dbuser, $dbpassword, $dbname, $dbport);

if(! $connect)
{
    die("connection failed" .mysqli_connect_error());
}
else{
    if($_SERVER["REQUEST_METHOD"]=="POST"){ 

        $email=$_POST['email'];
        $password=$_POST['password'];
    
        $sql="SELECT * FROM users WHERE E-mail='$email' and Password='$password';";
        $result=mysqli_query($connect,$sql);
        if($result->num_rows===1){
           {
            session_start();
            $_SESSION['authentication']=true;
            header("location: Home.html ? Sign in successfull");
            exit();
               
            }
           
        }
        else{
            echo "<h2>User not found Check your user name and password or Register Please</h2>";
           
        }
    }
    mysqli_close($connect);
}





?>