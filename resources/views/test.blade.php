<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="">
		<label for="">Nội dung:</label>
		<textarea id="TinyMCE" name="content"rows="10"></textarea>
	</form>
	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
	<script>
		tinymce.init({
		  selector: '#TinyMCE'
		});
	</script>
</body>
</html>