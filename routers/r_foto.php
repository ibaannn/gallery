<?php

include_once "../controllers/c_foto.php";
$photoo = new c_foto();

if ($_GET['aksi'] == 'tambah') {
    $id = $_POST['id'];
    $iduser = $_POST['iduser'];
    $date = $_POST['date'];
    $judul = $_POST['judul'];
    $desc = $_POST['desc'];
    $idalbum = $_POST['idalbum'];
    $poto = $_FILES['poto']['name'];
    
    $can = array('jpg', 'png', 'jpeg');
    $x = explode('.', $poto);
    $ekstensi = strtolower(end($x));
    $tmp = $_FILES['poto']['tmp_name'];

    if (in_array($ekstensi, $can) == true) {
        move_uploaded_file($tmp, '../assets/img/' . $poto);

        $photoo->insert($id, $iduser, $date, $judul, $desc, $poto, $idalbum);

        echo "<script>alert ('Menu Telah Berhasil Di Ubah');
        document.location.href = '../views/menu_dessert.php';
        </script>";
    }
}elseif ($_GET['aksi'] == 'delete') {
    $id = $_GET['aksi'];

    $photoo->delete_foto($id);
}
