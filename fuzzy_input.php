<?php
   
   include('Diagnosis.php');
  // severity of symptoms
  $severity = [
  	'VL' => 0,
  	'L' => 0.25,
  	'M' => 0.5,
  	'H' => 0.75,
  	'VH' => 1
  ];

  if (isset($_POST['submit'])) {
  	$s1 = $_POST['s1'];
  	$s2 = $_POST['s2'];
  	$s3 = $_POST['s3'];
  	$s4 = $_POST['s4'];
  	$s5 = $_POST['s5'];
  	$s6 = $_POST['s6'];
  	$s7 = $_POST['s7'];
  	$s8 = $_POST['s8'];
  	$s9 = $_POST['s9'];
  	$s10 = $_POST['s10'];

    // fuzzy set of small sell cancer symptoms severity
  	$small_cell_cancer = [
  		's1' => $severity[$s1], 
  		's2' => $severity[$s2], 
  		's3' => $severity[$s3], 
  		's4' => $severity[$s4], 
  		's5' =>$severity[$s5]
  	];

    // fuzzy set of non small cell cancer severity
  	$non_small_cell_cancer = [
  		's1' => $severity[$s1], 
  		's2' => $severity[$s2], 
  		's3' => $severity[$s3], 
  		's4' => $severity[$s4], 
  		's5' => $severity[$s5], 
  		's6' => $severity[$s6], 
  		's7' => $severity[$s7], 
  		's8' => $severity[$s8], 
  		's9' => $severity[$s9], 
  		's10' => $severity[$s10]
  	];

    
    $diagnosis = new Diagnosis();
    $disease = $diagnosis->findDisease($small_cell_cancer, $non_small_cell_cancer);

  	$result = $diagnosis->calculateDiseaseStage($non_small_cell_cancer);
    
  }

?>

<!DOCTYPE html>
<html lang="en-us">
<meta charset="utf-8" />
<head>
    <title>User Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/user_form.js"  type="text/javascript"></script>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
  <div class="cotainer">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <h4 class="bg-primary" style="color:#ffff; padding: 10px; margin-top: 10px">Probable Type of Your Lung Cancer: <?php echo $disease; ?> </h4>
        <table class="table table-bordered table-dark">
          <thead class="table-bright">
            <td>Value</td>
            <td>Stage</td>
          </thead>
          <tr>
            <td><?php echo $result[0];?></td>
            <td>No Cancer</td>
          </tr>

          <tr>
            <td><?php echo $result[1];?></td>
            <td>Probable Stage</td>
          </tr>

          <tr>
            <td><?php echo $result[2];?></td>
            <td>Low Stage</td>
          </tr>

          <tr>
            <td><?php echo $result[3];?></td>
            <td>Medium Stage</td>
          </tr>

          <tr>
            <td><?php echo $result[4];?></td>
            <td>High Stage</td>
          </tr>

          <tr>
            <td><?php echo $result[5];?></td>
            <td>Critacal Stage</td>
          </tr>
        </table>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
</body>