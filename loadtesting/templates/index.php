<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../static/css/style.css">

    <title>Home Page</title>
</head>
<body>
    
    <!-- Navbar -->
    <nav class="custom_nav navbar navbar-expand-lg">
        <div class="container">

            <!-- System Brand -->
            <a href="#" class="navbar-brand"><img src="../static/images/brand.png" alt="brand"></a>

            <!-- Responsive Hamburger Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#hamburger" aria-controls="hamburger">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Nav Links -->
            <div class="collapse navbar-collapse" id="hamburger">
                <ul class="navbar-nav">
                    <li class="nav-item me-2">
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Dogs</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <button class="btn btn_login" id="login">Login</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Bootstrap Popper CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

    <!-- Bootstrap JavaScript CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

</body>
</html>