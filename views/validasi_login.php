<?php

if (!empty($_SESSION['Username'])) {
    echo "<script> document.location.href = 'views/gallery.php'; </script>";
} else {
    echo "";
}
