<?php

$host       = "localhost";

$user       = "id21302064_user_rian";

$pass       = "Riandb-123";

$db         = "id21302064_db_rian";



$koneksi    = mysqli_connect($host,$user,$pass,$db);

if(!$koneksi){

    die("Gagal terkoneksi");

}else{

    echo "";

}

/*
$host       = "localhost";

$user       = "id21302064_user_rian";

$pass       = "Riandb-123";

$db         = "id21302064_db_rian";
*/

/*
$host       = "localhost";

$user       = "root";

$pass       = "";

$db         = "companyprofile";
*/