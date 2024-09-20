<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Proxy - Password</title>
</head>
<body class="bg-light">
    <div class="mx-5 p-5 bg-white shadow">
        <h1 class="mb-4">Proxy Design Pattern</h1>
        <?php if (isset($error)) { ?>
            <div class="alert alert-danger">
                <?= $error ?>
            </div>
        <?php } ?>
        <?php if (isset($success)) { ?>
        <div class="alert alert-success">
            <?= $success ?>
        </div>
        <?php } ?>
        <div class="alert alert-info">
            <p>Erstelle ein Passwort mit mindestens einem Buchstabe, einer Zahl und einem Sonderzeichen</p>
        </div>
        <form action="index.php">
            <input type="text" name="password" class="form-control mb-2" placeholder="Passwort">
            <button type="submit" class="btn btn-primary">Senden</button>
        </form>
    </div>
</body>
</html>
