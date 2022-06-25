<?php 
#Script handle form

if (strlen($_POST["name"]) >0)
    { 
    $_POST["name"] = $_POST["name"];
    }
else
    {
    $_POST["name"]= null;
    echo '<p><b> You Forgot to Enter Your Name! </b></p>';
    }


if (strlen($_POST["complain"]) >0) 
    { 
    $_POST["complain"] = $_POST["complain"]; 
    }
else
    {
    $_POST["complain"]= null;
    echo '<p><b> You Forgot to Enter Your complain! </b></p>';
    }
if(! (strlen($_POST["email"]) >0)) 
    {
    $_POST["email"] = null;
    echo '<p><b> You Forgot to Enter Your Emails! </b></p>';
    }


if (isset($_POST["gender"])) 
    {
    if ($_POST["gender"] == 'M') 
    {
        $message = '<b><p>Good Day, Sir </b></p>';
    }
    if ($_POST["gender"] == 'F') 
    {
        $message = '<b><p>Good Day, Madam </b></p>';
    }
}else{
        $_POST["gender"] = null;
        echo '<p><b> You Forgot to Choose Your Gender! </b></p>';
    }


if ($_POST["name"] && $_POST["complain"] && $_POST["email"] && $_POST["gender"]) 
    { echo "Thank you," .$_POST["name"]. " for the following complain: <br /> <tt>" .
    $_POST["complain"]. " </tt> <p> We will reply to you at <i>" . $_POST["email"]. 
    "</i></p>"; 
    echo $message;
    }
?>