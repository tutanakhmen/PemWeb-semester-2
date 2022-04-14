<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Body Mass Index - Praktikum 5</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
  <style>
    h5 {
      margin: 0;
    }
    tr, td:nth-child(2){
      padding: .75rem 1rem;
    }
  </style>
</head>
<body>
<div class="col-md-5 mx-auto mt-5">
  <header class="text-center mb-3"><h2>FORM BODY MASS INDEX</h2></header>
  <form action="result.php" method="POST">
  <table class="w-100">
    <tr>
      <td>
        <h5>NAME</h5>
      </td>
      <td>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="far fa-fw fa-address-book"></i></div>
          </div>
          <input type="text" required class="form-control" name="nama">
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <h5>WEIGHT</h5>
      </td>
      <td>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-fw fa-anchor"></i></span>
          </div>
          <input type="text" required class="form-control" name="berat">
          <div class="input-group-append">
            <span class="input-group-text">Kg</span>
          </div>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <h5>HEIGHT</h5>
      </td>
      <td>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-fw fa-blind"></i></span>
          </div>
          <input type="text" required class="form-control" name="tinggi">
          <div class="input-group-append">
            <span class="input-group-text">cm</span>
          </div>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <h5>AGE</h5>
      </td>
      <td>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="far fa-fw fa-bell"></i></span>
          </div>
          <input type="text" required class="form-control" name="umur">
          <div class="input-group-append">
            <span class="input-group-text">YEAR</span>
          </div>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <h5>GENDER</h5>
      </td>
      <td>
        <div class="input-group">
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="cowok" name="gender" class="custom-control-input" value="Laki-laki">
            <label class="custom-control-label" for="cowok">MALE</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="cewek" name="gender" class="custom-control-input" value="Perempuan">
            <label class="custom-control-label" for="cewek">FEMALE</label>
          </div>
        </div>
      </td>
    </tr>
  </table>
  <div class="text-center mt-3">
    <button type="submit" class="btn btn-primary" name="send">SUBMIT</button>
  </div>
  </form>
  <div class="text-center mt-3">
    <a href="data_bmi.php">RESULT</a>
  </div>
</div>
</body>
</html>