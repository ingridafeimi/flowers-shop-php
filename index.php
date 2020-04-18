<?php
session_start();

$database = mysqli_connect("localhost", "root", "", "rose_db");

$sql = "SELECT * FROM flowers  LIMIT 4";
$result = mysqli_query($database, $sql);
$flowers = mysqli_fetch_all($result, MYSQLI_ASSOC);

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

<section class="background">
    <div class="bg-parent">
        <div class="background-info">
            <div class="container">
                <h3 class="pb-2">Buy a beautiful flower</h3>
                <p class="pb-2">It is a long established fact that a reader will be distracted by the readable content
                    of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                    normal distribution.</p>
                <a href="flowers.php" class="btn btn-primary">Browse Flowers</a>
            </div>
        </div>
        <img src="assets/images/flower.jpg" class="w-100">
    </div>
</section>

<section id="ourflowers">
    <div class="container py-5">
        <h3 class="text-center mb-0">Our flowers</h3>
        <p class="title-info text-center">Find the most beautiful flowers in the city.</p>
    </div>
    <div class="photos">
        <div class="container">
            <div class="row">

                <?php foreach ($flowers as $flower) { ?>

                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <div class="card mb-5 border-0">

                            <img src="<?= $flower["image"] ?> " class="card-img-top w-75">

                            <div class="card-body">
                                <h5 class="card-title"><?= $flower["title"] ?></h5>
                                <p class="card-text font-weight-light"><?= $flower["description"] ?><a href=""></a></p>
                                <a href="show.php?id=<?= $flower["id"] ?>" class="btn btn-primary"><i
                                            class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;Purchase</a>
                            </div>
                        </div>
                    </div>

                <?php } ?>

            </div>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container py-5">
        <h3 class="text-center mb-0">Contact</h3>
        <p class="title-info text-center">We are online 24/7 on your service.</p>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form class="mb-5">
                    <div class="form-group">
                        <input type="text" class="form-control contact-input" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control contact-input" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control contact-input" rows="3" placeholder="Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send a message</button>
                </form>
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
                            <a class="nav-link m-0 p-0" <?= $flower["title"] ?> href="show.php?id=<?= $flower["id"] ?>"</a>
                            <a class="nav-link m-0 p-0" href="show.php"></a>
                            <a class="nav-link m-0 p-0" href="show.php"></a>
                            <a class="nav-link m-0 p-0" href="show.php"></a>
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

<script>

    function showDetails() {
        document.getElementById("flower-1").style.visibility = "visible";
    }

    function hideDetails() {
        document.getElementById("flower-1").style.visibility = "hidden";
    }

</script>

</body>

</html>