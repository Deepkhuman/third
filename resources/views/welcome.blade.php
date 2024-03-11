<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/submit" method="post">
        @csrf
        <label>Name</label>
        <input type="text" name="name"><br>
        <label>Email</label>
        <input type="text" name="email"><br>

        <label>Message</label>
        <input type="text" name="message">
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>