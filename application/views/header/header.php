<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <title>Find Cafe - <?php echo $title ?></title>

</head>

<body>


  <nav style="background-color: #2c2c54; position: fixed; width: 100%; padding: 1.5%;" class="navbar navbar-expand-lg navbar-dark ">
    <a class="navbar-brand" href="index.php">
      <img src="asset/logo_3.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
      Find Cafe
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div style="margin-left: 69%;" class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>catalog">Coffee Catalog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-warning" href="<?= base_url(); ?>login">Reservation</a>
        </li>
      </ul>
    </div>
  </nav>