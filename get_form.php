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
<form action="submit_form.php" method="POST">
    <label for="username">Username</label>
    <input type="text" id="username" name="username">

    <label for="password">Password</label>
    <input type="password" id="password" name="password">
    <button type="submit">Submit</button>
</form>

<form action="https://www.google.com/search" method="GET">
    Search: <input type="text" name="q">
</form>
</body>
</html>