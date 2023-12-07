<?php
include ("./config.php");
class acara {
 
};
    session_start();
    $id_member = $_SESSION['id_member'];
    $id_relawan_acara = $_GET['id_relawan_acara'];
    
    $sql = "DELETE FROM relawan_acara WHERE id_relawan_acara='$id_relawan_acara'";
    $query = mysqli_query($mysqli, $sql) or die ("Tidak ada databases");
    
    if($query){
        echo"<script>alert('Hapus acara sukses')</script>";
        echo"<script>top.location='acara.php?id_member=".$id_member."'</script>";
    } else {
        echo"<script>alert('Hapus acara gagal')</script>";
        echo"<script>top.location='acara.php?id_member=".$id_member."'</script>";
    }
    ?>