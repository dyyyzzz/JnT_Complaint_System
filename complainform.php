<!DOCTYPE html>
<html lang="en">
<head>
    <title>Complain Form</title>
</head>
<body>
        <form id="fs-frm" name="complaint-form" accept-charset="utf-8" action="user.php" method="post">
        <fieldset id="fs-frm-inputs">
            <label for="Cust_username">Usename</label>
            <input type="text" name="Cust_username" id="Cust_username" placeholder="Username" required=""><br>
            <label for="Cust_name">Full Name</label>
            <input type="text" name="Cust_name" id="Cust_name" placeholder="Name" required=""><br>
            <label for="telephone">Telephone Number (Optional)</label>
            <input type="telephone" name="telephone" id="telephone" placeholder="(555) 555-5555"><br>
            <label for="Cust_address">Address</label>
            <textarea rows="3" name="Cust_address" id="Cust_address" placeholder="Address" ></textarea><br>
            <label for="Cust_email">Email Address</label>
            <input type="email" name="Cust_email" id="Cust_email" placeholder="example: email@gmail.com" required=""><br>
            <label for="complaint">Complaint</label>
            <textarea rows="6" name="complaint" id="complaint" placeholder="complain" required=""></textarea><br>
            <input type="hidden" name="_subject" id="email-subject" value="Complaint Form Submission"><br>
        </fieldset>
        <input type="submit" value="File Complaint">
        </form>
        <div align="center"><a href="welcome.php" class="btn">Back</a>
        </div> 
    </form>
</body>
</html>