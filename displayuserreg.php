

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'config.php';

    echo "<table border = '1'><tr><th>Username</th><th>Registeration Date</th></tr>";


    $result = mysqli_query($link, "SELECT Cust_ID, Cust_Username, created_at FROM `customer` ");
    while ($row = mysqli_fetch_row($result)){
        echo "<tr>";
        foreach ($row as $cell)
            echo "<td>$cell</td>";
        echo "</tr>";
    }

    mysqli_free_result ($result);
    mysqli_close($link);

    ?>
    <a href="adminpage.php" class="btn btn">Back to main page</a>
</body>
</html>