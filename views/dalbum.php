<?php

$title = "Album";
$side = "calbum";
include_once "template/header.php";
include_once "template/sidebar.php";

?>

<main id="main" class="main">
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <img src="../assets/img/card.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card with an image on top</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <center>
                        <i class="bx text-light btn-circle btn-sm   bxs-edit-alt btn btn-warning"></i>
                        <i class="bx text-light btn-circle btn-sm bxs-trash btn btn-danger"></i>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mt-lg-5">
            <br><br><br><br><br><br><br><br>
            <a href="tfoto.php">
                <img src="../assets/img/card.jpg" width="50px" height="200" class="card-img-top rounded-circle" alt="...">
            </a>
        </div>
    </div>
</main><!-- End #main -->


<?php

include_once "template/footer.php";

?>