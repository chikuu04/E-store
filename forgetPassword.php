<?php
require 'includes/common.php';

if(isset($_POST['submit']))

{
    $email=mysqli_escape_string($con,$_POST['email']);
    $sql="select * from users where email='$email'";
    $result=mysqli_query($con,$sql);
    $count=mysqli_num_rows($result);

    if($count==1)
    {
        $r=mysqli_fetch_assoc($result);
        $password=$r['password'];
        $to=$r['email'];
        $subject="your password recoverd";

        $message="please use this password to login" . $password;
        $headers="From : piyush.kashyap2000@gmail.com";

        if(mail($to,$subject,$message,$headers))
        {
            echo "your password has been sent to your email-id";
        }
        else
        {
            "Failed to recover your password again.Try again";
        }
    }
    else
    {
        echo "Email does not exist";
    }
}

?>


<!DOCTYPE HTML>
<html>
<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }

</style>
</head>
<body>
<h1>Forgot Password<h1>
<form action='' method='post'>
<table cellspacing='5' align='center'>
<tr><td>Email-id</td><td><input type='text' name='email'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>
</form>
</body>
</html>