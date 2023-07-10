<?php
if (isset($_POST['accept_cookies'])) {
    setcookie('accept_cookies',1, time() + (7 * 24 * 60 * 60), '/');
    echo "Thank you for accepting cookies";
}
