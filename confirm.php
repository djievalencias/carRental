<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rentalcars.com</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <h2>Booking Confirmed</h2>
  <p>We are pleased to inform you that your reservation request has been received.</p>
  <br>
  <p>Your booking is confirmed. Thank you!</p>
  <h3>Booking Details</h3>
  <div class="row">
    <div class="col">
      <p class="p-top">Booked by:</p>
      <p class="p-bottom">
        <?php
          echo $firstname = $_POST['first-name'];
          echo ' ';
          echo $firstname = $_POST['last-name'];
        ?>
      </p>
    </div>
    <div class="col">
    <p class="p-top">Car Type:</p>
      <p class="p-bottom">
        <?php
          $cartype = $_POST['car-type'];
          if ($cartype == 'car1') {
            echo 'Toyota Avanza';
            $price = 200000;
          } else if($cartype == 'car2') {
            echo 'Daihatsu Sigra';
            $price = 105000;
          } else if($cartype == 'car3') {
            echo 'Peugeot 2008 Allure';
            $price = 15000000;
          } else if($cartype == 'car4') {
            echo 'Toyota Alphard';
            $price = 2500000;
          }
        ?>
      </p>
    </div>
    <div class="col">
      <p class="p-top">Driver:</p>
      <p class="p-bottom">
        <?php 
          $driver = $_POST['exampleRadios'];
          if ($driver == 'option1') {
            echo 'With driver';
          } else if($driver == 'option2') {
            echo 'Self drive';
          }
        ?>
      </p>
    </div>
    <div class="col">
      <p class="p-top">Booked for:</p>
      <p class="p-bottom">
        <?php
          $booktime = $_POST['book-time'];
          switch ($booktime) {
            case 1:
              echo '1 day';
              break;
            case 2:
              echo '2 days';
              $price *= 2;
              break;
            case 3:
              echo '3 days';
              $price *= 3;
              break;
            case 4:
              echo '4 days';
              $price *= 4;
              break;
            case 5:
              echo '5 days';
              $price *= 5;
              break;
            case 6:
              echo '6 days';
              $price *= 6;
              break;
            case 7:
              echo '7 days';
              $price *= 7;
              break;
          }
        ?>
      </p>
    </div>
    <div class="col">
    <p class="p-top">Total:</p>
      <p class="p-bottom">
        <?php
        $price = number_format($price , 0, ',', '.');
          echo "Rp{$price}";
        ?>
      </p>
    </div>
    <div class="col">
    <p class="p-top">Office:</p>
      <p class="p-bottom">
        <?php
          $office = $_POST['office'];
          switch ($office) {
            case 'office1':
              echo 'Jl. Stonen Timur No.29, Bendan Ngisor, Kec. Gajahmungkur';
              break;
            case 'office2':
              echo 'Tanjung Mas, Semarang Utara';
              break;
            case 'office3':
              echo 'Jl. Puskesmas No.16, Tlogosari Kulon, Kec. Pedurungan';
              break;
            }
        ?>
      </p>
    </div>
  </div>
  <p>Booking details has been sent to email: <?php echo $email = $_POST['email']; ?></p>
</body>