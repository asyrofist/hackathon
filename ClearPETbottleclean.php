

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