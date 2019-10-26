<?php 
    require_once __DIR__ . '/vendor/autoload.php';

    // use Phpml\Classification\KNearestNeighbors;
    
    // $samples = [[1, 3], [1, 4], [2, 4], [3, 1], [4, 1], [4, 2]];
    // $labels = ['a', 'a', 'a', 'b', 'b', 'b'];
    
    // $classifier = new KNearestNeighbors();
    // $classifier->train($samples, $labels);
    
    // echo $classifier->predict([4, 2]);
    // // return 'b

    use Phpml\Regression\LeastSquares;

    $samples = [[60], [61], [62], [63], [65]];
    $targets = [3.1, 3.6, 3.8, 4, 4.1];

    $regression = new LeastSquares();
    $regression->train($samples, $targets);

    echo $regression->predict([64]);
?>