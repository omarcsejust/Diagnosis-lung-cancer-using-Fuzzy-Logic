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
  	echo '<pre>';
  	print_r($small_cell_cancer);

  	echo '<pre>';
  	print_r($non_small_cell_cancer);

  	echo $disease;

  	$result = $diagnosis->calculateDiseaseStage($non_small_cell_cancer);
  	echo '<pre>';
  	print_r($result);
  }

?>