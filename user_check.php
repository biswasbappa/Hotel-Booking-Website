<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reservation Checking</title>
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
  </head>
  <body>
    <div class="admin-container container">
        <div class="one-third admin-panel column">
            <ul>
                <li><a href='#' style="font-weight: bold"></a></li>
                <li><a href='#' style="text-decoration: none"></a></li>
                <li><a href='#' style="text-decoration: none"></a></li>
            </ul>
        </div>
        <div class="two-thirds admin-requests column">
            <h3>Reservation Checking</h3>
        </div>
</head>
<body>
  
</body>
</html>
<?php
  $phone = $_POST['phone'];
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "sysad";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if (!$conn)
  {
      die("Connection failed: " . mysqli_connect_error());
  }
  $sql = "SELECT e_status FROM customer WHERE phone = '$phone'";
  $result = mysqli_query($conn, $sql);
  echo "<table>";
  echo "<tr><th>Status</th></tr>";
  while($row = mysqli_fetch_assoc($result))
  {
      echo "<tr><td>".$row["e_status"]."</td></tr>";
  }
  echo "</table>";
  mysqli_close($conn);
?>

