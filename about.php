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
        <h1 class="m-0">About</h1>
        <p class="untitle m-0 pb-3">More information about Rose.</p>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About</li>
            </ol>
        </nav>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <img src="assets/images/about.jpg" class="w-100 img-thumbnail border-0">
            </div>
            <div class="col-sm-12 col-md-6">
                <h4 class="mb-3">About</h4>
                <p>About us proudly serves the Rose area. We are family owned and operated. We are committed to offering
                    only the finest floral arrangements and gifts, backed by service that is friendly and prompt.
                    Because all of our customers are important, our professional staff is dedicated to making your
                    experience a pleasant one. That is why we always go the extra mile to make your floral gift perfect.
                    Let be your first choice for flowers.</p>

                <p>Our shop is open from 9:00 a.m. to 5:00 p.m., Monday through Friday and from 9:00 a.m. to 2:00 p.m.
                    on Saturday. We will be available for funeral work only on Sundays. To help assure on-time delivery
                    during the busy holiday season, place your order at least 1 day prior to the following major
                    holidays: Thanksgiving Day, Christmas Day, New Year's Day, Valentine's Day, Easter, Administrative
                    Professionals Week, Mother's Day, Memorial Day, Father's Day, Independence Day and Labor Day. Our
                    shop will always be closed on the following holidays: Thanksgiving Day, Christmas Day, New Year's
                    Day, Eastre, Mothers Day, Fathers Day, Independence Day and Labor Day.</p>

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
