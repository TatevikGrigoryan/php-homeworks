<div>Welcome</div>
<?php
if (!isset($_COOKIE['accept_cookies'])) { ?>
    <form method="post" action="/homework_6/cookie/cookie.php">
        Accept cookies
        <label>
            <input type="checkbox" name="accept_cookies"> <br/>
        </label>
        <input type="submit">
    </form>
<?php } ?>
