<?php      
     
 
$username = $_POST['user'];  
$password = $_POST['pass'];  
  
    //to prevent from mysqli injection  
    $username = stripcslashes($user);  
    $password = stripcslashes($pass);  
    $username = mysqli_real_escape_string($con, $username);  
    $password = mysqli_real_escape_string($con, $password);  
  
    $sql = "select *from login where username = '$user' and password = '$pass'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
      
    if($count == 1){  
        echo "<h1><center> Login successful </center></h1>";  
    }  
    else{  
        echo "<h1> Login failed. Invalid username or password.</h1>";  
    } 
    
    $host="localhost";
    $user="root";
    $password="";
    
    $db="demo";
    mysql_connect($host,$user,$password);
    mysql_select_db($db);
    

    if(isset( $_POST['Username'])){
        $uname=$_post['Username'];
        $password=$_post['pass'];

    $sql="select * loginform where user='".$uname."' AND pass='".$pass."'limit 1 ";
    $result=mysql_query($sql)
     if (mysql_num_rows($result)==1){
        echo "you have successfully logged in";
        exit();
    }
    else{
        echo "you have incorrect pass.";
        exit();
    }
    }
?>  

