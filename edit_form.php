
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" type="text/css" href="about_me.css">
    <meta charset="UTF-8">

</head>
<body>
<div class="text"> </div>
<h1> Edit text here </h1>
<form action="pull_update.php" method="post" class="form_data">
    <input type="text" name="text" class="form_data" value="<?php echo $content ?>">
    <br>Edit text here<input type="submit" class="updateBtn" value="Update Text">
</form>

</body>
</html>
