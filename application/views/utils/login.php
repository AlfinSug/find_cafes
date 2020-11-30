<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <script type="text/javascript" src="sweetalert/sweetalert.min.js"></script>
  <title>Find Cafe - Reservation</title>

</head>

<body>

  <?php $info = $this->session->flashdata('info');
  if (!empty($info)) {
    echo $info;
  }
  $session_failed = $this->session->flashdata('session_failed');
  if (!empty($session_failed)) {
    echo $session_failed;
  }
  $logout_success = $this->session->flashdata('logout_success');
  if (!empty($logout_success)) {
    echo $logout_success;
  }
  ?>

  <style>
    body {
      margin: 0;
      padding: 0;
    }

    .bg {
      background-color: #2c2c54;
    }

    #card-login {
      padding: 10% 25%;
      z-index: 1;
    }

    #btn-login {
      display: block;
      margin: 5% auto;
      background-color: #2c2c54;
    }

    #btn-login:hover {
      background-color: rgb(71, 71, 135);
    }

    #btn-back:hover {
      background-color: #aaa69d;
    }
  </style>


  <!-- card image 1 -->

  <div style="border: none; z-index: 1;" class="card mb-3" style="max-width: 100%;">
    <div style="border: none;" class="card mb-3" style="max-width: 100%;">
      <div class="row no-gutters">
        <div style="padding: 0 7% 0 0;" class="col-md-6">
          <img src="asset/img-login1.png" width="500" height="640" class="card-img" alt="...">
        </div>
        <div style="margin: 0 0 5% -3%;" class="col-md-6">
          <a href="<?= base_url(); ?>" id="btn-back">
            <svg style="margin: 5% auto;" width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-arrow-left-square-fill" fill="#2c2c54" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.354 10.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L6.207 7.5H11a.5.5 0 0 1 0 1H6.207l2.147 2.146z" />
            </svg></a>
          <div id="card-login" class="card-body">
            <img style="display: block; margin: 3% auto; text-align: center;" src="asset/logo_3.png" width="100" height="100">
            <p class="h5" style="text-align: center; margin: 0 0 5% 0;">Login Kasir</p>
            <form method="post" action="<?= base_url(); ?>login/login_kasir">
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Kasir</label>
                <input type="text" name="nama_kasir" class="form-control" id="exampleInputEmail1">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
              </div>
              <button id="btn-login" name="signin" type="submit" class="btn btn-primary col-md-4">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>