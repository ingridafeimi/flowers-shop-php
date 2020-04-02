<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>ROSE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>

<?php include("partials/header.php") ?>

<section id="page-title">
    <div class="container py-5 my-2">
        <h1 class="m-0">Our flowers</h1>
        <p class="untitle m-0 pb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Flowers</li>
            </ol>
        </nav>
    </div>
</section>

<section class="container">
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-3">
            <div class="card border-0 mb-4">
                <img src="assets/images/flower6.jpg" class="card-img-top w-75">
                <div class="card-body">
                    <h5 class="card-title">Aconitum</h5>
                    <p class="card-text font-weight-light">The amaryllis is a popular bulb plant with large lily-like
                        blooms and long, thick stems belladonna.</p>
                    <a href="show.php" class="btn btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;Purchase</a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-3">
            <div class="card border-0 mb-4">
                <img src="assets/images/flower3.jpg" class="card-img-top w-75">
                <div class="card-body">
                    <h5 class="card-title">Agapanthus</h5>
                    <p class="card-text font-weight-light">Its fragrant flowers can be found in several colors. It is
                        also known as the belladonna lily.</p>
                    <a href="show.php" class="btn btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;Purchase</a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-3">
            <div class="card border-0 mb-4">
                <img src="assets/images/flower5.jpeg" class="card-img-top w-75" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ageratum</h5>
                    <p class="card-text font-weight-light">Commonly known as the windflower, the anemone is a poppy-like
                        flower with small colorful blooms.</p>
                    <a href="show.php" class="btn btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;Purchase</a>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-3">
            <div class="card border-0 mb-4">
                <img src="assets/images/flower8.jpg" class="card-img-top w-75" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Allium roseum</h5>
                    <p class="card-text font-weight-light">They can be found in many colors, including red, blue, pink
                        and white the anemone is a poppy-like flower.</p>
                    <a href="show.php" class="btn btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;Purchase</a>
                </div>
            </div>

        </div>
        <div class="col-sm-12 col-md-4 col-lg-3">
            <div class="card border-0 mb-4">
                <img src="assets/images/flower6.jpg" class="card-img-top w-75">
                <div class="card-body">
                    <h5 class="card-title">Aconitum</h5>
                    <p class="card-text font-weight-light">The amaryllis is a popular bulb plant with large lily-like
                        blooms and long, thick stems belladonna.</p>
                    <a href="show.php" class="btn btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;Purchase</a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-3">
            <div class="card border-0 mb-4">
                <img src="assets/images/flower3.jpg" class="card-img-top w-75">
                <div class="card-body">
                    <h5 class="card-title">Agapanthus</h5>
                    <p class="card-text font-weight-light">Its fragrant flowers can be found in several colors. It is
                        also known as the belladonna lily.</p>
                    <a href="show.php" class="btn btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;Purchase</a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-3">
            <div class="card border-0 mb-4">
                <img src="assets/images/flower5.jpeg" class="card-img-top w-75" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ageratum</h5>
                    <p class="card-text font-weight-light">Commonly known as the windflower, the anemone is a poppy-like
                        flower with small colorful blooms.</p>
                    <a href="show.php" class="btn btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;Purchase</a>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-3">
            <div class="card border-0 mb-4">
                <img src="assets/images/flower8.jpg" class="card-img-top w-75" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Allium roseum</h5>
                    <p class="card-text font-weight-light">They can be found in many colors, including red, blue, pink
                        and white the anemone is a poppy-like flower.</p>
                    <a href="show.php" class="btn btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;Purchase</a>
                </div>
            </div>

        </div>
        <div class="col-sm-12 col-md-4 col-lg-3">
            <div class="card border-0 mb-4">
                <img src="assets/images/flower6.jpg" class="card-img-top w-75">
                <div class="card-body">
                    <h5 class="card-title">Aconitum</h5>
                    <p class="card-text font-weight-light">The amaryllis is a popular bulb plant with large lily-like
                        blooms and long, thick stems belladonna.</p>
                    <a href="show.php" class="btn btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;Purchase</a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-3">
            <div class="card border-0 mb-4">
                <img src="assets/images/flower3.jpg" class="card-img-top w-75">
                <div class="card-body">
                    <h5 class="card-title">Agapanthus</h5>
                    <p class="card-text font-weight-light">Its fragrant flowers can be found in several colors. It is
                        also known as the belladonna lily.</p>
                    <a href="show.php" class="btn btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;Purchase</a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-3">
            <div class="card border-0 mb-4">
                <img src="assets/images/flower5.jpeg" class="card-img-top w-75" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ageratum</h5>
                    <p class="card-text font-weight-light">Commonly known as the windflower, the anemone is a poppy-like
                        flower with small colorful blooms.</p>
                    <a href="show.php" class="btn btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;Purchase</a>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-3">
            <div class="card border-0 mb-4">
                <img src="assets/images/flower8.jpg" class="card-img-top w-75" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Allium roseum</h5>
                    <p class="card-text font-weight-light">They can be found in many colors, including red, blue, pink
                        and white the anemone is a poppy-like flower.</p>
                    <a href="show.php" class="btn btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;Purchase</a>
                </div>
            </div>

        </div>
    </div>

</section>


<footer class="mt-5">
    <div class="container pt-5 pb-3">
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <h5 class="pb-2">Rose</h5>
                <div class="links mb-3">
                    <p class="m-0">There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered alteration in some form. Letraset sheets containing Lorem Ipsum passages.</p>
                </div>
            </div>

            <div class="col-sm-12 col-md-7">
                <div class="row">
                    <div class="col-sm-12 col-md-6 text-center">
                        <h5 class="pb-2">Our flowers</h5>
                        <div class="links mb-3">
                            <a class="nav-link p-0" href="show.php">Aconitum</a>
                            <a class="nav-link p-0" href="show.php">Agapanthus</a>
                            <a class="nav-link p-0" href="show.php">Ageratum</a>
                            <a class="nav-link p-0" href="show.php">Allium roseum</a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 text-center">
                        <h5 class="pb-2">Other</h5>
                        <div class="links mb-3">
                            <a class="nav-link p-0" href="index.php">Home</a>
                            <a class="nav-link p-0" href="flowers.php">Flowers</a>
                            <a class="nav-link p-0" href="about.php">About</a>
                            <a class="nav-link p-0" href="contact.php">Contact</a>
                            <a class="nav-link p-0" href="create.php">Create</a>
                        </div>
                    </div>

                </div>


            </div>
        </div>

    </div>

    <div class="container">
        <div class="row justify-content-md-center copyright-box">
            <div class="col-12-center">
                <p class="copyright my-3">Copyright © 2019 Rose. All Rights Reserved.</p>
            </div>
        </div>
    </div>

</footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>

</html>