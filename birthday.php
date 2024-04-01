<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
</head>
<body>
    <h1>User Information</h1>
    <?php
    $birthday = $_GET['birthday'];
    $homepage = $_GET['homepage'];
    echo "<p>Here is the information you provided:</p>";
    echo "<p>Birthday: $birthday</p>";
    echo "<p>Homepage: <a href='$homepage'>click here</a></p>";
    ?>
</body>
</html>
