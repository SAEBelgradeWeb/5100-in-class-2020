<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="file_submit.php" method="POST" enctype="multipart/form-data">
    <label for="image">Upload image</label>
    <input type="file" name="image" id="image">

    <button type="submit">Upload</button>

    <input type="checkbox" name="music[]" value="rock">
    <input type="checkbox" name="music[]" value="techno">
    <input type="checkbox" name="music[]" value="pop">
</form>
</body>
</html>

