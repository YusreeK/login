<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

<div class="container">

    <div class="col-l-6">
        <form action="login.php" method="post">
            <div class="form-group">
            <label for="username">Username</label>
            <br>
            <input type="text" name="username" class="form-control">
            </div>

            <div class="form-group">
            <label for="password">Password</label>
            <br>
            <input type="password" name="password" class="form-control">
            </div>
            <br><br>
            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
        </form>
    </div>

</div>
</body>
</html>