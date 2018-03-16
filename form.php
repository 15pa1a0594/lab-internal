
<!DOCTYPE html>
<html>
<head>
        <link rel = "stylesheet" type = "text/css" href = "home.css" />
</head>
<body>
 <div class="header">
            <?php include "header.php"?>   
        </div><br><br>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload"><br>&emsp;<br>
	 item name:<input type="text" name="fileToUpload" id="fileToUpload"><br>&emsp;<br>
	 item description:<input type="text" name="fileToUpload" id="fileToUpload"><br>&emsp;</br>
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>

