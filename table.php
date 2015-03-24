<?php

include 'config.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
if(!empty($nama) && !empty($nim) && !empty($alamat)){
//    $no=1;
    $field = "id, nama, nim, alamat";
    $value = "'$id', '$nama', '$nim', '$alamat'";
    $insert = mysql_query("insert into user ($field) VALUES($value)");
    
}