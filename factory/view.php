<!doctype html>
<html lang="de">
    <head>
        <title>Factory - Toy Factory</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
    <body class="bg-light">
        <div class="bg-white mx-5 p-4 shadow">
            <h1 class="mb-4">Factory Design-Pattern</h1>
            <form action="index.php" method="post">
                <div class="row">
                    <div class="col">
                        <select class="form-control mb-2" name="toy">
                            <option value="doll">Puppe</option>
                            <option value="car">Auto</option>
                        </select>
                    </div>
                    <div class="col">
                        <select class="form-control mb-2" name="material">
                            <option value="wood">Holz</option>
                            <option value="plastic">Plastik</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Senden</button>
            </form>
            <div class="mt-4">
                <?= isset($toy) ? $toy->display() : '';  ?>
            </div>
        </div>
    </body>
</html>