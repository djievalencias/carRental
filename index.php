<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rentalcars.com</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="https://img.icons8.com/emoji/344/automobile.png" width="30" height="30" class="d-inline-block align-top" alt="">
      Rentalcars.com
    </a>
  </nav>
  <div class="wrapper">
    <div class="container">
      <h2 style="margin: 12px 0;">Book a Car now!</h2>
      <form class="form" action="confirm.php" method="post" id="form">
        <label for="exampeInputName">Enter your name</label>
        <div class="row">
          <br>
          <div class="col">
            <input type="text" class="form-control" placeholder="First name" name="first-name" required>
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Last name" name="last-name" required>
          </div>
        </div>
        <div class="form-group">
          <label class="form-label" for="exampleInputEmail1">Enter your email address</label>
          <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Select your car type</label>
          <select class="form-control" id="exampleFormControlSelect1" name="car-type">
            <option value="car1" selected>Toyota Avanza</option>
            <option value="car2">Daihatsu Sigra</option>
            <option value="car3">Peugeot 2008 Allure</option>
            <option value="car4">Toyota Alphard</option>
          </select>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
            With driver
          </label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
          <label class="form-check-label" for="exampleRadios2">
            Self drive
          </label>
        </div>
        <div class="form-group">
          <label class="form-label" for="exampleFormControlSelect2">Length of time (days)</label>
          <select multiple class="form-control" name="book-time" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Choose office</label>
          <select class="form-control" name="office">
            <option value="office1" selected>Jl. Stonen Timur No.29, Bendan Ngisor, Kec. Gajahmungkur</option>
            <option value="office2">Tanjung Mas, Semarang Utara</option>
            <option value="office3">Jl. Puskesmas No.16, Tlogosari Kulon, Kec. Pedurungan</option>
          </select>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="customCheck1" required>
          <label class="form-label custom-control-label" for="customCheck1">I agree to terms and conditions</label>
        </div>
        <button class="btn btn-outline-dark btn-block" type="submit" value="Submit" name="Submit" style="margin: 12px 0">Submit</button>
      </form>
    </div>
  </div>
</body>
</html>