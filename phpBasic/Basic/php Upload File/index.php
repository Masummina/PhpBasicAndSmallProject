<!DOCTYPE html>
<html>
<head>
	<title>Form Submit</title>
</head>
<body>
	<form action="saveFile.php" method="POST" enctype="multipart/form-data" >
		<label for="file">File Upload</label>
		<input type="file" name="filetoupload" id="file_upload">
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>