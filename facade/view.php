<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Facade - Movie Theater</title>
</head>
<body class="bg-light">
    <div class="mx-5 p-5 bg-white shadow">
        <h1 class="mb-4">Facade Design Pattern</h1>
        <div class="border p-4 rounded mb-2 d-inline-block">
            <h2 class="mb-4">Verfügbare Filme</h2>
            <?php foreach ($movieTheater->getAvailableMovies() as $movie) { ?>
                <p><?= $movie ?></p>
            <?php } ?>
        </div>
        <form action="index.php">
            <input type="text" class="form-control" name="title" placeholder="Titel" value="<?= $title ?? '' ?>">
            <button class="btn btn-primary mt-2">Senden</button>
        </form>
        <?php $pattern = 'facade' ?>
        <?php include __DIR__.'/../info/index.php' ?>
    </div>
</body>
</html>
