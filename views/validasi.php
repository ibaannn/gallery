<?php

if (!empty($username)) {
    echo "";
} else {
    echo "<script> alert('Silahkan Login Terlebih Dahulu');
    document.locaton.href = '../index.php';
    </script>";
}
