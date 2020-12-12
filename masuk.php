<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>Halaman Login</title>
    </head>
    <body>
        <div class="container">
            <h3 class="mt-2 mb-3">Halaman Login</h3>
            <div class="row">
                <div class="col-5">
                    <form action="masuk-proses.php" method="post">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" id="password" name="password">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Masuk</button>
                            <a href="daftar.php" class="btn btn-outline-success">Daftar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="js/jquery-3.5.1.slim.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>