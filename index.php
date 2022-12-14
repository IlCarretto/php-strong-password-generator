<?php

include __DIR__ . "/functions.php";

// rand(int 0, int count($available_characters)): int

if (isset($_GET["psw_length"])) {
    $result = generateRndPsw($psw_length);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>PSW Random Generator</title>
</head>

<body>
    <section>
        <h1>Strong Password Generator</h1>
        <h2>Genera una password sicura</h2>
        <div class="form">
            <form action="index.php" method="GET">
                <div>
                    <label for="password">Lunghezza password:</label>
                    <input class="form-control" type="text" id="password" name="psw_length">
                </div>
                <div>
                    <button class="btn btn-primary" type="submit">Genera</button>
                    <button class="btn btn-secondary" type="reset">Annulla</button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>