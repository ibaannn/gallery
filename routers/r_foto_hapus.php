<?php

include_once "../controllers/c_foto.php";
$buang = new c_foto();

$id = $_GET['FotoID'];
$dalbum = $_GET['dalbum'];

$buang->delete_foto($id);

echo "<script> alert('Foto telah dihapus');
document.location.href = '../views/dalbum.php?dalbum=$dalbum';
</script>";
