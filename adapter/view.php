<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Adapter - Messenger</title>
</head>
<body class="bg-light">
    <div class="mx-5 p-5 bg-white shadow">
        <h1 class="mb-4">Adapter Design Pattern</h1>
        <form action="index.php">
            <div>
                <input type="text" class="form-control my-2" name="name" placeholder="Name">
                <input type="text" class="form-control my-2" name="message" placeholder="Nachricht">
                <button class="btn btn-primary mt-3">Senden</button>
            </div>
        </form>
        <?php if ($message && $name) { ?>
            <div class="p-4 mt-5 rounded border">
                <h2 class="mb-3">Messages:</h2>
                <p><?= $caller->call($messenger, $message, $name); ?></p>
                <p><?= $caller->call($oldMessengerAdapter, $message, $name); ?></p>
            </div>
        <?php } ?>
    </div>
</body>
</html>
