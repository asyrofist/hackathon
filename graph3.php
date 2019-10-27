

<?php
$type = "Clear PET bottle clean";
echo "Clear PET bottle clean";
require_once __DIR__ . '/vendor/autoload.php';
include 'vendor/autoload.php'; 
use Phpml\Regression\LeastSquares; 

  $predictAvg = array(); 
  $predictMax = array();
  $predictMin = array();


  $predictAvg[0] = 1800;
  $predictAvg[1] = 2000;
  $predictAvg[2] = 3000;
  $predictAvg[3] = 3500;
  $predictAvg[4] = 4000;

  $predictMax[0] = 1800;
  $predictMax[1] = 2200;
  $predictMax[2] = 3300;
  $predictMax[3] = 3700;
  $predictMax[4] = 4800;

  $predictMin[0] = 1800;
  $predictMin[1] = 1800;
  $predictMin[2] = 2800;
  $predictMin[3] = 3000;
  $predictMin[4] = 3900;

  $dates = array();
  
  $dates[0] = 1;
  $dates[1] = 2;
  $dates[2] = 3;
  $dates[3] = 4;
  $dates[4] = 5;

  //$monthsDifferent = date_diff(end($dates),date("Y-m-d H:i:s");
  


  $samples = [[8], [9], [10], [11], [12],[13], [14], [15], [16], [17], [18],[19]];
 $targets = [1750,1750,1750, 2000 ,	 2000 ,	 2000, 	 2000 	, 1000 ,	 1000, 	1500,	1500,	1500];
 $targets2 = [3000,	3000,	3000,	 3000, 	 3000 ,	 3000, 	 3000, 	 2500, 	 2500, 	2500,	2500,	2500];
 $targets3 = [1500,	1500,	1500,	 2000, 	 2000, 	 2000 ,	 1000 ,	 1000, 	 1000, 	1200,	1200,	1300];
 $targets4 = [2700,	2700,	2700,	 2500 ,	 2500 ,	 2500 	, 2500 ,	 2500 ,	 2500 	, 2500 	, 2500 ,	 2500 ];
 $targets5 = [2000,	2000,	2000,	 2000 ,	 2000, 	 2000, 	 2000, 	 2000, 	 2000, 	 2000, 	 2000, 	 2,000 ];

$regression = new LeastSquares();


$regression->train($samples, $targets2);

$num = 11;
for($i=0; $i < 12 ; $i++){
  
  while($num > 13){
    $num -=13;
  }
  if($num == 1) echo "January\t";
  if($num == 2) echo "Feburari\t";
  if($num == 3) echo "Maret\t";
  if($num == 4) echo "April\t";
  if($num == 5) echo "Maret\t";
  if($num == 6) echo "Mei\t";
  if($num == 7) echo "Juni\t";
  if($num == 8) echo "Juli\t";
  if($num == 9) echo "Agustus\t";
  if($num == 10) echo "September\t";
  if($num == 11) echo "Oktober\t";
  if($num == 12) echo "November\t";
  if($num == 13) echo "Desember\t";
  echo $targets2[$i];
  echo "<br/>";
  $num++;
}
for( $i =1; $i < 4; $i++){
  
  while($num > 12){
    $num -=12;
  }
  if($num == 1) echo "January\t";
  if($num == 2) echo "Feburari\t";
  if($num == 3) echo "Maret\t";
  if($num == 4) echo "April\t";
  if($num == 5) echo "Maret\t";
  if($num == 6) echo "Mei\t";
  if($num == 7) echo "Juni\t";
  if($num == 8) echo "Juli\t";
  if($num == 9) echo "Agustus\t";
  if($num == 10) echo "September\t";
  if($num == 11) echo "Oktober\t";
  if($num == 12) echo "November\t";  
  if($num == 13) echo "Desember\t";
  echo $regression->predict([$i+19]);
  echo "<br/>";
  $num++;
}

?>

<?php
[3000,	3000,	3000,	 3000, 	 3000 ,	 3000, 	 3000, 	 2500, 	 2500, 	2500,	2500,	2500];
$dataPoints = array(
	array("x"=> 10, "y"=> 3000),
	array("x"=> 11, "y"=> 3000),
	array("x"=> 12, "y"=> 3000),
	array("x"=> 13, "y"=> 3000),
	array("x"=> 14, "y"=> 3000),
	array("x"=> 15, "y"=> 3000),
	array("x"=> 16, "y"=> 3000),
	array("x"=> 17, "y"=> 2500, "indexLabel"=> "Predicted"),
	array("x"=> 18, "y"=> 2500),
	array("x"=> 19, "y"=> 2500),
	array("x"=> 20, "y"=> 2500),
  array("x"=> 21, "y"=> 2500),
  array("x"=> 22, "y"=> $regression->predict([20])),
	array("x"=> 23, "y"=> $regression->predict([21])),
	array("x"=> 24, "y"=> $regression->predict([22]))
);
	
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Clear PET bottle clean"
	},
	data: [{
		type: "column", //change type to bar, line, area, pie, etc
		//indexLabel: "{y}", //Shows y value on all Data Points
		indexLabelFontColor: "#5A5757",
		indexLabelPlacement: "outside",   
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>