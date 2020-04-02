<?php

// Cfare jane sesionet ne PHP:

/*

- Hapet browseri per here te pare dhe shkojme vizitojme nje faqe te serverit tone.
- Kur vizitohet serveri per here te pare, PHP-ja gjeneron nje ID sesioni.

Client ------------ dergon kerkese ----------------------> Server. Serveri gjeneron nje ID sesioni.
Client <-------------------- merr pergjigje ------------------ (Ne pergjigje, tek header vendoset dhe ID sesioni)
Clienti -------------------- kerkesa e radhes (ne kete kerkese, vendoset ne header edhe ID-ja qe ka marre nga serveri) --------> Serveri e kupton qe eshte i njejti klient.


- Sesioni perfshin kohen qe nga momenti qe ti e vizitove serverin per here te pare, deri ne momentin qe ti do mbyllesh browserin.


Client1 ------------------ request (ID sesion XXX) --------------------------->

Client2 ------------------ request (ID sesion YYY) --------------------------->   SERVER.

Client3 ------------------ request (ID sesion ZZZ) --------------------------->


XXX:

brouseri: Chrome
user_logged: true


YYY:

brouseri: Mozilla


 * */

// $_SESSION;

// Shtim vlere ne session:
// $_SESSION["user_logged"] = true;


// Kontrollojme sessionin nqs. permban nje vlere specifike:

//$userLogged = $_SESSION["user_logged"];

session_start();

$userLogged = isset($_SESSION["user_logged"]) ? $_SESSION["user_logged"] : false;

if (!$userLogged) {

    header("Location: http://localhost/rose/index.php");
    exit;
}

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
        <h1 class="m-0">Create</h1>
        <p class="untitle m-0 pb-3">Create a new flower</p>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create</li>
            </ol>
        </nav>
    </div>
</section>

<section>
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">Create Flower</div>
                    <div class="card-body">
                        <form class="mb-5" method="POST" action="http://localhost/rose/postCreate.php"
                              enctype="multipart/form-data">
                            <div class="form-group mb-4">
                                <input type="text" class="form-control contact-input" placeholder="Title" name="title">
                            </div>
                            <div class="form-group mb-4">
                                <textarea class="form-control contact-input" rows="3" placeholder="Description"
                                          name="description"></textarea>
                            </div>
                            <div class="form-group mb-4">
                                <label class="control-label">Flower Image</label><br/>
                                <input type="file" name="image"/>
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
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

