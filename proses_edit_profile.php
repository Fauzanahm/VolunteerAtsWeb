<?php
include("./config.php");

$id_member = $_POST['id_member'];
$name = $_POST['name'];
$username = $_POST['username'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];
$nohp = $_POST['nohp'];
$lokasi_file = $_FILES['foto']['tmp_name'];
$nama_file = $_FILES['foto']['name'];



// echo 
// $id_member."-".$username."-".$name."-".$tempat_lahir."-".$tanggal_lahir."-".$alamat."-".$nohp."-".$lokasi_file."-".$nama_file;

if (!empty($lokasi_file)) {
    $foto="./img/".date("y-m-d h-i-sa").$nama_file;
    move_uploaded_file($lokasi_file,$foto);
    $sql = "UPDATE user SET name='$name', username='$username', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir',alamat='$alamat', status='$status', nohp='$nohp', foto='$foto' WHERE id_member='$id_member'";
    $query = mysqli_query($mysqli, $sql) or die ("Tidak ada databases");
}else {
    $sql = "UPDATE user SET name='$name', username='$username', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir',alamat='$alamat',status='$status', nohp='$nohp', foto='$foto' WHERE id_member='$id_member'";
    $query = mysqli_query($mysqli, $sql) or die ("Tidak ada databases");
}
if($query){
    echo"<script>alert('Edit relawan sukses')</script>";
    echo"<script>top.location='./profil.php?id_member=".$id_member."'</script>";
} else {
    echo"<script>alert('Edit relawan gagal')</script>";
    echo"<script>top.location='./profil.php?id_member=".$id_member."'</script>";
}

?>