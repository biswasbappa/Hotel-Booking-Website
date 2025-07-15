<?php
    $servername = "localhost";

    $username = "root";

    $password = "";

    $dbname = "sysad";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ( isset($_POST['name']) && isset($_POST['address']) && isset($_POST['pin']) && isset($_POST['number']) && isset($_POST['roomName']) ) {
        $id = rand(01,99);
        $name = $_POST['name'];
        $address = $_POST['address'];
        $pin = $_POST['pin'];
        $number = $_POST['number'];
        $roomName = $_POST['roomName'];
        $request_status = 'Pending';

        $sql = "INSERT INTO customer(id, ename , eaddress, pincode, phone, room, e_status) VALUES ($id, '$name', '$address', '$pin', '$number', '$roomName', '$request_status')";

        if (mysqli_query($conn, $sql)) {
            header("Location: request_success.html");
        }
    }
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login</title>
    <!--Font-->
    <link
      href="//fonts.googleapis.com/css?family=Raleway:400,300,600"
      rel="stylesheet"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!--Favicon-->
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <!--CSS-->
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/skeleton.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <!--jQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--Scripts-->
    <script src="js/custom.js"></script>
  </head>
  <body>
    <div class="login-error-container container">
        <h3>Error, please try filling the form with correct values!</h3>
        <a href="rooms.html"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retry</a>
    </div>
  </body>
</html>