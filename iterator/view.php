<!doctype html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <title>Iterator - Item Store</title>
    </head>
    <body class="bg-light">
        <div class="mx-5 p-5 shadow bg-white">
            <h1 class="ms-3">Iterator Design-Pattern</h1>
            <ul class="m-3 p-3 ps-5 rounded bg-light border">
                <?php foreach ($basket as $item) { ?>
                    <li><?= $item ?></li>
                <?php } ?>
            </ul>
            <div class="m-3 p-3 rounded bg-light border">
                <form action="index.php">
                    <div class="alert alert-info">
                        Schreibe eine Liste an Wörter (Mit ',' trennen).
                    </div>
                    <input type="text" name="items" class="form-control">
                    <button type="submit" class="btn btn-primary mt-2">Senden</button>
                </form>
            </div>
        </div>
    </body>
</html>
