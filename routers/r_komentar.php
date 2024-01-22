<?php

include_once "../controllers/c_komentar.php";
$komen = new c_komentar();

if ($_GET['aksi'] == 'tambah') {
    $KomentarID = $_POST['KomentarID'];
    $FotoID = $_POST['FotoID'];
    $UserID = $_POST['UserID'];
    $IsiKomentar = $_POST['IsiKomentar'];
    $Tanggal = $_POST['Tanggal'];

    $komen->insert_komentar($KomentarID, $FotoID, $UserID, $IsiKomentar, $Tanggal);

    header("Location: ../views/gallery.php");
}elseif ($_GET['aksi'] == 'hapus') {
    $id = $_GET['KomentarID'];

    $komen->delete($id);
}