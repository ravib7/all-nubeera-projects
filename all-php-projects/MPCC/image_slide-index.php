<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>

 </head>
 <body>
    

<form method="POST" action="upload-image_slide.php" enctype="multipart/form-data">
        <input type="file" name="image" required><br><br>
        <input type="text" name="text" required><br><br>
        <input type="submit" name="submit" value="Upload">
</form>

</body>
</html>