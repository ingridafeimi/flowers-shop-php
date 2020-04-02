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
        <h1 class="m-0">Login</h1>
        <p class="untitle m-0 pb-3">Login to dashboard</p>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Login</li>
            </ol>
        </nav>
    </div>
</section>

<section>
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form class="mb-5" method="POST" action="http://localhost/rose/postLogin.php"
                              enctype="multipart/form-data">
                            <div class="form-group mb-4">
                                <input type="email" class="form-control contact-input" placeholder="Email" name="email">
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" class="form-control contact-input" placeholder="Password" name="password">
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
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
                            <a class="nav-link m-0 p-0" href="show.php">Aconitum</a>
                            <a class="nav-link m-0 p-0" href="show.php">Agapanthus</a>
                            <a class="nav-link m-0 p-0" href="show.php">Ageratum</a>
                            <a class="nav-link m-0 p-0" href="show.php">Allium roseum</a>
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

