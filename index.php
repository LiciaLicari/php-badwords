<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>

    <h1>Welcome to BadWords.php</h1>

    <form action="script.php" method="POST" >
        <input type="text" name="text" id="text" placeholder="Type a word here...">
        <input type="text" name="badword" id="badword" placeholder="Type a badword to censure here...">

        <button type="submit">Send</button>
    </form>

</body>
</html>