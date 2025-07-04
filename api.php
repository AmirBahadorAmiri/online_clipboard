<?php
if ( isset($_POST['clip_text']) ) {
    $clip_text = $_POST['clip_text'];
    $clip_text = trim(preg_replace('/\s\s+/','<br>',$clip_text));
    $clip_id = random_strings(8);
    include 'tools/SQLHelper.php';
    $sqlManager = new SQLHelper();
    $sqlManager->sendQuery("INSERT INTO `clipboard_manager_tb` (`clip_id`,`clip_text`) VALUES ('$clip_id','$clip_text')");
    echo "<script>alert('Your Clip ID : $clip_id'); history.back()</script>";
}
function random_strings($length_of_string) {
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    return substr(str_shuffle($str_result),
        0, $length_of_string);
}