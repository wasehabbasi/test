<?php
include 'header.php';
$url = 'https://api.eposnowhq.com/api/V2/Product';

$token = "RVBJNkxaSjdLUEVQSkdYRjU2TTE2WUkzR0IwN01OQ0U6QkQ5M1hUNDBWU0dQUlEwTUlIVTZXRjhONE9DM0JWOTE=";

$header = array();
$header[] = 'Content-length: 0';
$header[] = 'Content-Type: application/json';
$header[] = 'Authorization: Basic ' . $token;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 4);
// curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_HTTPGET, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);


$json = curl_exec($ch);
if (!$json) {
    echo curl_error($ch);
}

curl_close($ch);

$jsonObj = json_decode($json);
// print_r($jsonObj);
// exit;
?>
<div class="container">
    <div class="row">
        <?php
        foreach ($jsonObj as $obj) {
        ?>
            <div class="col-md-3">
                <a href="">
                    <img src="" alt="Image">
                </a><br>
                <a href="">
                    <?= $obj->Name; ?><br>
                    <?= '£ ' . $obj->SalePrice; ?>
                </a>
            </div>
        <?php } ?>
    </div>
</div>