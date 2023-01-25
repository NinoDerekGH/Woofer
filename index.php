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
    include('database/connect.inc.php');
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['add_dog'])){
            $name   = $_POST['dname'];
            $breed  = $_POST['breed'];
            $status = $_POST['status'];
            
            add_dog($name, $breed, $status);
        } else if (isset($_POST['update_dog'])){
            $id = $_POST['id'];
            $name   = $_POST['name'];
            $breed  = $_POST['breed'];
            $status = $_POST['status'];

            update_dog($id, $name, $breed, $status);
        } else if (isset($_POST['delete_dog'])) {
            $id = $_POST['id'];

            delete_dog($id);
        }
    }
    
    $items = get_all_dogs();
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
                    <?php 
                    if (isset($_COOKIE['user'])){
                        $username = $_COOKIE['user'];
                        echo <<<HTML
                        <li class="nav-item">
                            <button class="btn btn_login" id="login">$username</button>
                        </li>
                        <li class="nav-item">
                            <a href="auth/logout.php" class="btn btn_login" id="login">Logout</a>
                        </li>
                        HTML;
                    } else {
                        echo <<<HTML
                        <li class="nav-item">
                            <button class="btn btn_login" id="login">Login</button>
                        </li>
                        HTML;
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Dogs -->
    <section class="dogs container">
        <div class="row d-flex justify-content-center py-5">
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 me-auto">
                <div class="card">
                    <h3 class="card-header text-center">Add Dog</h3>
                        <div class="card-body">
                        <form action="#" method="POST">
                            <div class="form-group mb-2">
                                <label for="dname" class="form-label">Dog Name</label>
                                <input required type="text" class="form-control" id="dname" name="dname" />
                            </div>

                            <div class="form-group mb-2">
                                <label for="breed" class="form-label">Dog Breed</label>
                                <input required type="text" class="form-control" id="breed" name="breed"/>
                            </div>

                            <div class="form-group mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select required class="form-control" name="status">
                                    <option value="available">Available</option>
                                    <option value="adopted">Adopted</option>
                                </select>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <button type="submit" name="add_dog" class="btn btn-success w-100" >Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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
                                <?php
                                
                                $i = 0;
                                foreach ($items as $row) {
                                    $dog_id = $row['id'];
                                    $dog_name = $row['name'];
                                    $dog_breed = $row['breed'];
                                    $dog_status = $row['status'];

                                    echo <<<HTML
                                    <tr>
                                        <td>$dog_name</td>
                                        <td>$dog_breed</td>
                                        <td>$dog_status</td>
                                        <td class="d-flex justify-content-center">
                                            <a data-bs-toggle="modal" data-bs-target="#edit-$i"
                                                class="btn btn-warning me-1">Edit</a>
                                            <form action="#" method="POST">
                                                <input type="hidden" name="id" value="$dog_id" >
                                                <button type="submit" name="delete_dog" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>

                                        <div class="modal fade" id="edit-$i" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <form action="#" method="POST">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit</h1>
                                                        <a class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"></a>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input type="hidden" name="id" value="$dog_id" >
                                                        <div class="form-group">
                                                            <label for="name" class="form-label">Dog Name</label>
                                                            <input required type="text" name="name" id="name" class="form-control" value="$dog_name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="breed" class="form-label">Breed</label>
                                                            <input required type="text" class="form-control" name="breed" id="breed" value="$dog_breed">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="status" class="form-label">Status</label>
                                                            <select class="form-control" name="status">
                                                                <option value="available">Available</option>
                                                                <option value="adopted">Adopted</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        
                                                        <button type="submit" name="update_dog" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </tr>
                                    HTML;
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </section>



                        
    <!-- Modal Update Dog -->
    <div class="modal fade" id="modalTableA" data-bs-backdrop="static" data-bs-keyboard="false"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
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