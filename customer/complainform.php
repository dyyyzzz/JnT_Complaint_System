<!DOCTYPE html>
<html lang="en">
<head>
    <title>Complain Form</title>
</head>
<body>
        <form id="fs-frm" name="complaint-form" accept-charset="utf-8" action="user.php" method="post">
        <fieldset id="fs-frm-inputs">
            <label for="Cust_username">Username</label>
            <input type="text" name="Cust_username" id="Cust_username" placeholder="Username" required=""><br>
            <label for="Cust_name">Full Name</label>
            <input type="text" name="Cust_name" id="Cust_name" placeholder="Name" required=""><br>
            <textarea rows="6" name="complaint" id="complaint" placeholder="complain" required=""></textarea><br>
            <input type="hidden" name="_subject" id="email-subject" value="Complaint Form Submission"><br>
        </fieldset>
        <input type="submit" value="File Complaint">
        </form>
        <div align="center"><a href="customer/welcome.php" class="btn">Back</a>
        </div> 
    </form>
</body>
</html>