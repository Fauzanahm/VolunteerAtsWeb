<?php
include ("./config.php");
session_start();
$id_member = $_SESSION['id_member'];
$id_acara = $_POST['acara'];

$sql = "INSERT INTO relawan_acara (id_member, id_acara ) VALUE ('$id_member','$id_acara')";
$query = mysqli_query($mysqli, $sql) or die ("Tidak ada databases");

if($query){
    echo"<script>alert('Daftar acara sukses')</script>";
    echo"<script>top.location='acara.php?id_member=".$id_member."'</script>";
} else {
    echo"<script>alert('Daftar acara gagal')</script>";
    echo"<script>top.location='acara.php?id_member=".$id_member."'</script>";
}
?>