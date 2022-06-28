<?php 
#Script handle form

if (strlen($_POST["Cust_username"]) >0)
    { 
    $_POST["Cust_username"] = $_POST["Cust_username"];
    }
else
    {
    $_POST["Cust_username"]= null;
    echo '<p><b> You Forgot to Enter Your Userame! </b></p>';
    }

if (strlen($_POST["Cust_name"]) >0)
    { 
    $_POST["Cust_name"] = $_POST["Cust_name"];
    }
else
    {
    $_POST["Cust_name"]= null;
    echo '<p><b> You Forgot to Enter Your Name! </b></p>';
    }


if (strlen($_POST["Comp_Description"]) >0) 
    { 
    $_POST["Comp_Description"] = $_POST["Comp_Description"]; 
    }
else
    {
    $_POST["Comp_Description"]= null;
    echo '<p><b> You Forgot to Enter Your Complain! </b></p>';
    }

if ($_POST["Cust_username"] && $_POST["Cust_name"] && $_POST["Comp_Description"] ) 
    { echo "Thank you," .$_POST["Cust_username"]. " for the following Complain: <br /> <tt>" .
    $_POST["Comp_Description"]. " </tt> <p> We will reply to you at <i>" . 
    "</i></p>"; 
    echo $message;
    }
?>