<?php 
    require_once __DIR__ . '/vendor/autoload.php';

    // use Phpml\Classification\KNearestNeighbors;
    
    // $samples = [[1, 3], [1, 4], [2, 4], [3, 1], [4, 1], [4, 2]];
    // $labels = ['a', 'a', 'a', 'b', 'b', 'b'];
    
    // $classifier = new KNearestNeighbors();
    // $classifier->train($samples, $labels);
    
    // echo $classifier->predict([3, 3]);
    // return 'b

    use Phpml\Regression\LeastSquares;

    $samples = [[1], [2], [3], [4], [5], [6], [7]];
    $targets = [1750, 1750, 1750, 2000, 2000, 2000, 2000];

    $regression = new LeastSquares();
    // $regression->train($samples, $targets);
    $regression->train($samples, $targets);

    echo $regression->predict([7]);

?>

<table style="width:100%">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
</table>