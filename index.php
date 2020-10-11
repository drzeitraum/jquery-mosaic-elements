<?
$colors = [
    1 => 'DC143C',
    2 => 'FF1493',
    3 => 'FF4500',
    4 => 'FFFF00',
    5 => '9400D3',
    6 => 'D2691E',
    7 => 'FF00FF',
    8 => '00FFFF',
    9 => '808000',
    10 => 'FFFF00',
    11 => '00FF00',
    12 => '0000FF',
    13 => '778899',
    14 => 'C0C0C0',
    15 => 'FF69B4',
    16 => 'FF8C00',
    17 => 'EE82EE',
    18 => 'FFFFE0',
    19 => 'BC8F8F',
    20 => 'ADFF2F'
];
?>
<!doctype html>
<html lang="en">
<head>
    <title>jQuery plugin for collecting elements</title>
    <link href="favicon.png" type="image/x-icon" rel="icon"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="demo.css"/>
    <link rel="stylesheet" href="../src/style.css"/>

</head>
<body>


<div id="mosaic" class="row">
    <? for ($i = 0; $i < 60; $i++) { ?>
        <div href="#" target="_blank" class="mosaic-item col-md-1"
             style="background-color: #<?= $colors[rand(1, 20)] ?>; height: <?= rand(150, 300) ?>px">
            <span class="h1"><?= $i ?></span>
        </div>
    <? } ?>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="../src/jquery.mosaic-elements.js"></script>


<script>
    $('body').mosaicElements({
        // change options
        'rotate_min': -900, // minimum of rotation from in degree
        'rotate_max': 900,
        'duration_min': 180, // minimum of duration from in px
        'duration_max': 900, // maximum of duration to in px
        //'masonry': false,
    });
</script>


</body>
</html>
