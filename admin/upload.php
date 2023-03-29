<?php
include("../settings/core.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Upload Picture</title>
</head>

<body>
    <h1>Upload Picture</h1>
    <form action="../functions/add_category.php" method="post" enctype="multipart/form-data">
        <label for="picture">Picture:</label>
        <input type="file" name="picture" accept="image/*"><br><br>
        <label for="name">Name:</label>
        <input type="text" id="name" name="pic_name"><br><br>
        <input type="submit" value="Submit" name='add_image'>
    </form>
</body>

</html>
