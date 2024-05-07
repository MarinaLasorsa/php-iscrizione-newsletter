<?php
    //var_dump($_POST);

    $email = $_POST["email"];

    //var_dump($email);

    include __DIR__ . "/partials/utilities.php";
?>


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
        <section class="my-5">
            <div class="container">
                <h2 class="text-center">Iscriviti alla nostra newsletter</h2>
                
                <form action="" method="POST">
                    <div class="input-group my-3">
                        <input type="email" name="email" class="form-control" placeholder="La tua mail">
                        <button class="btn btn-primary px-5" type="submit" value="submit">Invia</button>
                    </div>
                </form>
                <?php
                if (isEmailCorrect($email) === true) {
                    ?>
                    <div class="alert alert-success" role="alert">
                        Grazie per esserti iscritto!
                    </div>
                    <?php 
                } else {
                    ?>
                    <div class="alert alert-danger" role="alert">
                        L'indirizzo email inserito non è valido. Riprovare.
                    </div>
                    <?php
                }
                ?>
            </div>
        </section>
        
    </main>
</body>
</html>


