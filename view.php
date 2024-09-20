<!doctype html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <title>Design Patterns</title>
    </head>
    <body class="bg-light">
        <div class="mx-5 bg-white shadow p-3 pt-5" style="height: 100vh">
            <h1 class="ms-5">Design Patterns</h1>
            <div class="p-3 px-5">
                <?php foreach ($directories as $directory) { ?>
                    <a href="<?= $directory ?>" class="mx-3">
                        <div class="border rounded p-2">
                            <h4><?= cleanTitle($directory); ?></h4>
                        </div>
                    </a>
                <?php } ?>
            </div>
        </div>
    </body>
</html>
