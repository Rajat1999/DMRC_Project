<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- google fonts link -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&display=swap" rel="stylesheet">
    <!-- css file link -->
    <link rel="stylesheet" href="main.css">

    <title>DASHBOARD</title>

</head>
<body>

    <div class="jumbotron">
        <h2><i class="fas fa-user-circle"></i> USER DASHBOARD</h2>
    </div>
    <br>

    <div class="container container-fluid">
        <div class="row">
            <div class="col-lg-2">
                <nav class="nav flex-column">
                <br><br><br><br><br>
                    <?php echo '<a class="nav-link active" href="index.php"><i class="fas fa-home"></i><br> Home</a>'; ?>
                    <hr>
                    <?php echo '<a class="nav-link active" href="login-info.php"><i class="fas fa-sign-in-alt"></i><br> Login Info</a>'; ?>
                    <hr>
                    <?php echo '<a class="nav-link" href="contact-info.php"><i class="fas fa-address-book"></i><br> Contact Info</a>'; ?>
                    <hr>
                    <?php echo '<a class="nav-link" href="personal-info.php"><i class="fas fa-user-lock"></i><br> Personal Info</a>'; ?>
                    <hr>
                    <?php echo '<a class="nav-link" href="organize-info.php"><i class="fas fa-user-shield"></i><br> Organizational Info</a>'; ?>
                </nav>
            </div>
            