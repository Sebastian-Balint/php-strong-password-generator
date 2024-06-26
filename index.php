<?php
include_once __DIR__ . '/function.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Strong Password Generator</title>
</head>

<body>

    <div class="container my-5">
        <h1>Strong Password Generator</h1>
        <h4>Genera una password sicura</h4>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-6">
                <form class="mb-5" action="index.php" method="GET">
                    <label class="mb-3" for="psw">Lunghezza password</label>
                    <input class="form-control mt-3" type="number" name="psw" id="psw" placeholder="scegli il numero">
                    <button class="btn btn-primary " type="submit">Invia</button>
                    <h3>Risultato</h3>
                    <h3>Password Generata: <?php echo generatorePsw() ?> </h3>
                </form>
            </div>
        </div>
    </div>

</body>

</html>