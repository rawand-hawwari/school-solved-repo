<?php
error_log(json_decode(file_get_contents('php://input'), true));

if (isset($_POST['upload'])) {
    $image = base64_decode();
    file_put_contents('/image/foo.png', $image);
}
// error_log(count($_POST));
    // return(json_encode($_POST));
    $result = [
        "url" => "/image/foo.png"
    ];
    return json_encode($result);
?>