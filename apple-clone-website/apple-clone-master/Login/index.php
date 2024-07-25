<?php
include_once '../Processes/logged.php';
if (logged()) {
    header("Location: ../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once '../includes/head.inc.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In — Secure Checkout - Apple</title>
    <link rel="stylesheet" href="../main.css">

    <style>
        /* CSS to change text color */
        .form-group label,
        .form-control,
        .form-text {
            color: white; /* Change this to the color you prefer */
        }
        
        /* Change submit button text color */
        .btn {
            color: white; /* Change this to the color you prefer */
        }

        body {
            background: linear-gradient(45deg, #000000, #0B0B0B, #9C9C9C);
            /* You can adjust the angle and color stops as needed */
            font-family: 'Poppins', sans-serif;
        }

        h1{
            display: flex;
            justify-content: center;
            margin-top: 100px;
            align-items: center;
            color:grey;
            font-size: 4.7rem;
            letter-spacing: .03rem;
            margin: 1.7rem;
            font-family: var(--heading-font);
            font-weight: 700;
        }

       
        .logo_new img{
            height:125px;

        }
        .logo_new{
            display: flex;
            justify-content: center;
            align-self: center;
        }
        
        .form-control{
            background-color:white;
            color:black;
        }
        
    </style>
</head>

<body>
    

    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="../index.php"><i class="fab fa-apple"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Mac</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">iPad</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">iPhone</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Watch</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">TV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Music</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Support</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" tabindex="-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-shopping-bag"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item disabled" href="#">Action</a>
                        <a class="dropdown-item disabled" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php">Sign In</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- navbar end -->

    <h1>Apple Login</h1>
    <div class="logo_new">
    <img src="logo_apple.png" alt="red-logo">
    </div>
    <div class="container" style="max-width :500px;">
        <form action="../Processes/login.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="example@gmail.com" value="<?php if (isset($_GET['error'])) {
                                                                                                                                        echo $_GET['email'];
                                                                                                                                    } else if (isset($_GET['email'])) {
                                                                                                                                        echo $_GET['email'];
                                                                                                                                    } ?>">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="password">
            </div>
            <button type="submit" class="btn btn-outline-dark" name="login-submit">Submit</button>
        </form>
        <br>
        <?php if (isset($_GET['error'])) : ?>
            <p class="alert alert-danger">
                <?php
                if ($_GET['error'] == "empty") {
                    echo "Please fill in all the fields!";
                } else if ($_GET['error'] == "incorrect") {
                    echo "Incorrect Password!";
                } else if ($_GET['error'] == "conn") {
                    echo "Something went wrong!";
                } else if ($_GET['error'] == "notRegistered") {
                    echo "This e-mail is not registered!";
                }

                ?>
            </p>
        <?php endif; ?>
        Don't have an Apple Account? <a href="../Register/index.php">Create one now.</a>
    </div>
    <?php include_once '../includes/footer.inc.php'; ?>
</body>

</html>