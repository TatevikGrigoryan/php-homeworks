<?php
session_start();
if (isset($_SESSION['login'])) {
    echo "Hello " . $_SESSION['login'];?>
    <form method="post" action="/homework_6/session/logout.php">
        <input type="submit" value="Logout" name="logout">
    </form>

<?php } else { ?>
    <form method="post" action="/homework_6/session/login.php">
        Login
        <input type="text" name="login"> <br/>
        <input type="submit">
    </form>
<?php } ?>
