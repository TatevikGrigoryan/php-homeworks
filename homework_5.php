<html lang="en">
<body>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
        <label>
            Name:<input type="text" name="name">
        </label>

        <label>
            Email: <input type="email" name="email">
        </label>

        <input type="submit">
    </form>
</body>
</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo "Name: ".$name . "<br>";
    }

    if (empty($email)) {
        echo "Email is empty";
    } else {
        echo "Email: ".$email;
    }
}
