<?php
include('LoginDbCall.php');

$name=$_REQUEST['name'];
$password=$_REQUEST['password'];
$uname=$_REQUEST['email'];
$option=$_REQUEST['option'];

if(isset($name) && isset($password) && isset($uname) && isset($option))
{
    if($option == 1)
    {
        $call=LoginDbCall::checkUser($uname,$password);
        $call_result=$call[0];

        if($call_result==1)
        {
            $user_details=$call[1];

            // Start the session
            session_start();
            // Set session variables
            $_SESSION["username"] = $user_details['name'];
            $_SESSION["password"] = $user_details['email'];

         echo $call_result;
        }
        else
        {
            echo 0;
        }
    }
    else if($option == 2)
    {
        echo LoginDbCall::insertUser($name,$password,$uname);
    }
    else{
        echo "Make a valid choice";
    }
}

else
{
 echo 'Please Give all your Details';
}