<?php
$koneksi = mysqli_connect("localhost","root","","rental");
if (mysqli_connect_errno()){
    echo "Koneksi Database Gagal" . mysqli_connect_errno();

}