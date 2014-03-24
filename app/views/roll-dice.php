<!doctype html>
<html lang="en">
<head>
    <title> Roll Dice View</title>
</head>
<body>
	<h1> Your guess is: <?php echo $guess; ?></h1>
	<h1> Random number is: <?php echo $random; ?>!</h1>
    <? if ($guess == $random) : ?>
    	<h2><?= "There is a match!"; ?></h2>
    <? else :?>
    	<h2><?= "There is not a match!"; ?></h2>
    <? endif;?>
</body>
</html>