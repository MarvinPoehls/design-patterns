<!doctype html>
<html lang="de">
    <head>
        <title>Decorator - Coffee Shop</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <style>
            .underline {
                text-decoration: underline;
            }

            .bg-cream {
                background-color: #f9e4bc;
            }
        </style>
    </head>
    <body class="bg-cream">
        <div class="bg-white mx-5 p-4 shadow">
            <h1 class="mb-4">Decorator Design-Pattern</h1>
            <form action="index.php" method="post">
                <h4 class="underline">Kaffe (5$) mit:</h4>
                <div class="row">
                    <div class="col-3">
                        <label for="milk">Milch (1$)</label>
                    </div>
                    <div class="col-9">
                        <input type="checkbox" class="form-check" id="milk" name="milk">
                    </div>
                    <div class="col-3">
                        <label for="sugar">Zucker (2$)</label>
                    </div>
                    <div class="col-9">
                        <input type="checkbox" class="form-check" id="sugar" name="sugar">
                    </div>
                    <div class="col-3">
                        <label for="cream">Sahne (3$)</label>
                    </div>
                    <div class="col-9">
                        <input type="checkbox" class="form-check" id="cream" name="cream">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Senden</button>
                <input type="hidden" name="send" value="1">
            </form>
            <?php if ($send) { ?>
                <hr>
                <h4>Kosten: <?= $coffee->getCost(); ?>$</h4>
                <h4>Zutaten:</h4>
                <p><?= $coffee->getIngredients(); ?></p>
            <?php } ?>
        </div>
    </body>
</html>