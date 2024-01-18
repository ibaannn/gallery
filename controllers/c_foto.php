<?php

include_once "c_conn.php";

class c_foto {
    public function insert($id, $iduser, $date, $judul, $desc, $poto, $idalbum) {
        $conn = new c_conn();
        $query = "INSERT INTO foto VALUES ('$id', '$judul', '$desc', '$date', '$poto', '$idalbum' ,'$iduser')";
        $data = mysqli_query($conn->conn(), $query);
    }

    public function delete_foto($id){
        $conn = new c_conn();
        $query = mysqli_query($conn->conn(), "DELETE FROM poto WHERE FotoID = $id");

        header("Location: ../views/dalbum");
    }
}