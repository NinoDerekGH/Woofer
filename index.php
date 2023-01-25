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
        header("location: auth/login.php");
        }
    ?>

    <!-- Navbar -->
    <nav class="custom_nav navbar navbar-expand-lg">
        <div class="container">

            <!-- System Brand -->
            <a href="#" class="navbar-brand"><img src="static/images/brand.png" alt="brand"></a>

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
    <section class="dogs container">
        <div class="row d-flex justify-content-center py-5">
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 me-auto">
                <form action="" method="">
                    <div class="card">
                        <h3 class="card-header text-center">Add Dog</h3>
                        <div class="card-body">

                            <div class="form-group mb-2">
                                <label for="dname" class="form-label">Dog Name</label>
                                <input required type="text" class="form-control" id="dname" name="dname">
                            </div>

                            <div class="form-group mb-2">
                                <label for="breed" class="form-label">Dog Breed</label>
                                <input required type="text" class="form-control" id="breed" name="breed">
                            </div>

                            <div class="form-group mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select required class="form-control">
                                    <option value="1">Available</option>
                                    <option value="2">Adopted</option>
                                </select>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <button type="submit" class="btn btn-success w-100">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 ms-auto">
                <div class="card">
                    <h3 class="card-header text-center">List of Dogs</h3>
                    <div class="card-body">
                        <table class="table table-light-striped text-center" id="dog_table">
                            <thead>
                                <tr>
                                    <th>Dog Name</th>
                                    <th>Breed</th>
                                    <th>Status</th>
                                    <th>Update</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </section>

    <!-- Modal Update Dog -->
    <div class="modal fade" id="modalTableA" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</body>

</html>