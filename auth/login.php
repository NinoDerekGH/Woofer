<!DOCTYPE html>
<html lang="en">

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['pass'];

    include('../database/connect.inc.php');
    $result = login($username, $password);
    echo $result ? "true" : "false";
    if ($result) {
        setcookie('user_id', $result['id'], time() + (86400 * 30), "/");
        setcookie('user', $result['username'], time() + (86400 * 30), "/");
        header('location: ../index.php');
        }
    }
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../static/css/style.css">

    <title>Login Page</title>
</head>

<body>

    <section class="logReg container-fluid">
        <div class="card mx-auto">
            <h3 class="card-header text-center">Login Form</h3>
            <div class="card-body">
                <form method="post" action="">
                    <div class="form-group row mb-3">
                        <label for="username"
                            class="col-sm-3 col-md-4 col-lg-6 col-xl-3 col-form-label">Username</label>
                        <div class="col-sm-9 col-md-8 col-lg-6 col-xl-9">
                            <input type="text" class="form-control" id="username" name="username"
                                placeholder="Enter Username">
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="pass" class="col-sm-3 col-md-4 col-lg-6 col-xl-3 col-form-label">Password</label>
                        <div class="col-sm-9 col-md-8 col-lg-6 col-xl-9">
                            <input type="password" class="form-control" id="pass" name="pass"
                                placeholder="Enter Password">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <input type="submit" class="btn btn-primary w-100" value="Login" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <p class="mb-0 text-center">Don't have an account? <a href="../auth/register.php"
                                    class="text-decoration-none">Register</a></p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer d-flex align-items-center">
                <img src="../static/images/brand.png" alt="brand" class="mx-auto">
            </div>
        </div>
    </section>

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