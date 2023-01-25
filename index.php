<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="static/css/style.css">

    <title>Dogs</title>
</head>

<body>
    <?php
    if (!isset($_COOKIE['user'])) {
        header("location: ../auth/login.php");
        }
    ?>

    <!-- Navbar -->
    <nav class="custom_nav navbar navbar-expand-lg">
        <div class="container">

            <!-- System Brand -->
            <a href="#" class="navbar-brand"><img src="../static/images/brand.png" alt="brand"></a>

            <!-- Responsive Hamburger Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#hamburger"
                aria-controls="hamburger">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Nav Links -->
            <div class="collapse navbar-collapse" id="hamburger">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <button class="btn btn_login" id="login">Login</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Dogs -->
    <section class="dog_cards container">
        <div class="row text-center py-5">
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="card">
                    <img src="../static/images/golden.png" alt="Golden Retriever" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text text-center fs-5">Golden Retriever</p>
                    </div>
                    <div class="card-footer col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal"
                            data-bs-target="#modalTableA">View</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mx-auto">
                <div class="card">
                    <img src="../static/images/german.png" alt="German Shepherd" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text text-center fs-5">German Shepherd</p>
                    </div>
                    <div class="card-footer col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal"
                            data-bs-target="#modalTableB">View</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="card">
                    <img src="../static/images/husky.png" alt="Siberian Husky" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text text-center fs-5">Siberian Husky</p>
                    </div>
                    <div class="card-footer col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal"
                            data-bs-target="#modalTableC">View</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal A -->
    <div class="modal fade" id="modalTableA" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Available Dogs</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal B -->
    <div class="modal fade" id="modalTableB" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Available Dogs</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal C -->
    <div class="modal fade" id="modalTableC" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Available Dogs</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Popper CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>

    <!-- Bootstrap JavaScript CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous"></script>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

</body>

</html>