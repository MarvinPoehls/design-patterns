<!doctype html>
<html lang="de">
    <head>
        <title>Singleton - Logger</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
    <body class="bg-light">
        <div class="bg-white mx-5 p-4 shadow">
            <h1 class="mb-4">Singleton Design-Pattern</h1>
            <div class="bg-white rounded p-4 my-5 shadow">
                <h2>Logger 1 Log:</h2>
                <?= $logger1->displayLog() ?>
            </div>
            <?php $logger1->log("After Logger 1 got displayed | From Logger 1"); ?>
            <div class="bg-white rounded p-4 my-5 shadow">
                <h2>Logger 2 Log:</h2>
                <?= $logger2->displayLog() ?>
            </div>
            <div class="bg-white rounded p-4 my-5 shadow">
                <h2>Logger 1 === Logger 2: <span class="ms-3 <?= ($logger1 === $logger2) ? 'text-success' : 'text-danger' ?>"><?= ($logger1 === $logger2) ? 'True' : 'False' ?></span></h2>
            </div>
        </div>
    </body>
</html>