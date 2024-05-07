<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <main>
        <div class="container">
            <h2 class="text-center">Iscriviti alla nostra newsletter</h2>
            
            <form action="" method="POST">
                <div class="input-group mb-3">
                    <input type="text" name="email" class="form-control" placeholder="La tua mail">
                    <button class="btn btn-primary" type="submit" value="submit">Invia</button>
                </div>
            </form>
            
        </div>
    </main>
</body>
</html>


<?php
    var_dump($_POST);
?>