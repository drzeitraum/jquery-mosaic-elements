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
if ($_GET['ch']) {
    $params = "'masonry': false";
}
if ($_GET['co']) {
    $params = "'rotate_min': -360,";
    $params .= "'rotate_max': 1800,";
    $params .= "'duration_min': 300,";
    $params .= "'duration_max': 1800,";
}
?>
<!doctype html>
<html lang="en">
<head>
    <title>jQuery plugin for collecting elements</title>
    <link href="favicon.png" type="image/x-icon" rel="icon"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="demo.css"/>
    <link rel="stylesheet" href="src/style.css"/>

</head>
<body>

<? if ($_GET['default']) { ?>
    <div id="mosaic" class="row">
        <? for ($i = 0; $i < 60; $i++) { ?>
            <div href="#" target="_blank" class="mosaic-item col-md-1"
                 style="background-color: #<?= $colors[rand(1, 20)] ?>; height: <?= rand(150, 300) ?>px">
                <span class="h1"><?= $i ?></span>
            </div>
        <? } ?>

    </div>
<? } ?>

<? if ($_GET['ch']) { ?>
    <div id="mosaic" class="row">
        <? for ($i = 0; $i < 18; $i++) { ?>
            <div href="#" target="_blank" class="mosaic-item col-md-2"
                 style="background-color: #<?= $colors[rand(1, 20)] ?>; height:33.33333333333333333333%">
                <span class="h1"><?= $i ?></span>
            </div>
        <? } ?>
    </div>
<? } ?>

<? if ($_GET['co']) { ?>
    <div id="mosaic" class="row">
        <? for ($i = 0; $i < 60; $i++) { ?>
            <div href="#" target="_blank" class="mosaic-item col-md-1"
                 style="background-color: #<?= $colors[rand(1, 20)] ?>; height: <?= rand(60, 600) ?>px">
                <span class="h1"><?= $i ?></span>
            </div>
        <? } ?>
    </div>
<? } ?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="src/jquery.mosaic-elements.js"></script>
<script>
    $('body').mosaicElements({
        <?=$params?>
    });
</script>

</body>
</html>