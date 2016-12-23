<?php
    include_once 'easepay-lib.php';
    $SALT='F4WQWWMG2H';
    $result = response( $_POST, $SALT );
    print_r($result);
    print_r($_POST);
    

?>
