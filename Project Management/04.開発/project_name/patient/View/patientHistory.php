<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Patient History</title>
    <!--css-->
    <link rel="stylesheet" href="./resources/css/root.css?v="<?=time()?>>
    <link rel="stylesheet" href="./resources/css/patientHistory.css?v"<?=time()?>>
</head>
<body>
<?php
    include("./common/head.php");
    ?>
    <!-- hospital location Header -->
    <h3 class="hospital_location_header text-center text-white mt-3">Patient History</h3>
    <table class="table table-bordered border-warning mt-3">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
<div class="btn-container">
  <!-- White Square Btn -->
  <button class="square_white_btn">Back To Home Page</button>
</div>
<!-- Footer -->
<?php
    include("./common/footer.php")
    ?>
</body>
</html>