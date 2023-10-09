<?php 

$text = $_POST['text'];
$badword = $_POST['badword'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badword Submitted</title>
</head>
<body>
<h3>Typed word:</h3> <span><p><?php echo $text; ?></p></span>
    <h5>Text is <?php echo strlen($text) ?> letters</h5>

    <h3>Censored word is:</h3><span><?php echo str_replace($badword,'***', $text ); ?></p></span>

</body>
</html>