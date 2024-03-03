<?php

include_once "../controllers/c_foto.php";
$photoo = new c_foto();

if ($_GET['aksi'] == 'tambah') {
    $id = $_POST['id'];
    $iduser = $_POST['iduser'];
    $date = $_POST['date'];
    $judul = $_POST['judul'];
    $desc = $_POST['desc'];
    $dalbum = $_POST['dalbum'];
    $poto = $_FILES['poto']['name'];
    
    $can = array('jpg', 'png', 'jpeg');
    $x = explode('.', $poto);
    $ekstensi = strtolower(end($x));
    $tmp = $_FILES['poto']['tmp_name'];

    if (in_array($ekstensi, $can) == true) {
        move_uploaded_file($tmp, '../assets/img/' . $poto);

        $photoo->insert($id=0, $iduser, $date, $judul, $desc, $dalbum, $poto);

        echo "<script>alert ('Foto telah berhasil ditambahkan');
        document.location.href = '../views/dalbum.php?dalbum=$dalbum';
        </script>";
    }else {
        echo "<script>alert ('Tolong masukan foto');
        document.location.href = '../views/dalbum.php?dalbum=$dalbum';
        </script>";
    }
}elseif ($_GET['aksi'] == 'delete') {
    
}elseif ($_GET['aksi'] == 'update') {
    $FotoID = $_POST['FotoID'];
    $JudulFoto = $_POST['JudulFoto'];
    $DeskripsiFoto = $_POST['DeskripsiFoto'];
    $dalbum = $_POST['dalbum'];

    $photoo->update($FotoID, $JudulFoto, $DeskripsiFoto);
    if ($photoo) {
        echo "<script> alert('Data telah diubah');
        document.location.href = '../views/dalbum.php?dalbum=$dalbum';
        </script>";
    }
}
