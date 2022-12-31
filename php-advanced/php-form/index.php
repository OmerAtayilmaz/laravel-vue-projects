<html>
<head>
    <title>Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <?php if($_GET!=null&& $_GET["email"]!=null){?>
    <div class="alert alert-primary" role="alert">
        <?php echo $_GET["email"] ?> Addresiyle Başarıyla Kayıt Olundu
    </div>
    <?php } ?>
    <div class="container p-5">
        <form action="./app.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Email </label>
                <input type="email" name="email" class="form-control" >
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3">
                <input type="checkbox" class="form-check-input" name="rememberMe">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
