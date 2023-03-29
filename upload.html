<?php
  // Database connection information
  $db_host = "localhost";
  $db_name = "gardenmart";
  $db_user = "root";
  $db_pass = "";

  // Connect to the database
  $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

  // Check for errors
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Handle form submission
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the uploaded picture file
    $picture = $_FILES["picture"]["tmp_name"];

    // Get the picture name
    $name = $_POST["name"];

    // Check if the file was uploaded successfully
    if (is_uploaded_file($picture)) {
      // Read the file contents
      $fp = fopen($picture, "r");
      $content = fread($fp, filesize($picture));
      fclose($fp);

      // Escape the name and content for use in a SQL query
      $name = mysqli_real_escape_string($conn, $name);
      $content = mysqli_real_escape_string($conn, $content);

      // Insert the picture and name into the database
      $sql = "INSERT INTO pictures (name, picture) VALUES ('$name', '$content')";
      if ($conn->query($sql) === true) {
        echo "Picture uploaded successfully.";
      } else {
        echo "Error uploading picture: " . $conn->error;
      }
    } else {
      echo "Error uploading picture.";
    }
  }

  // Close the database connection
  $conn->close();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Upload Picture</title>
  </head>
  <body>
    <h1>Upload Picture</h1>
    <form action="#" method="post" enctype="multipart/form-data">
      <label for="picture">Picture:</label>
      <input type="file" name="image" accept="image/*"><br><br>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name"><br><br>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>



