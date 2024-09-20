<!doctype html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <title>Observer - Newsletter</title>
    </head>
    <body class="p-5">
        <h1 class="m-3">Observer Pattern</h1>
        <div class="row mx-3 border rounded">
            <div class="col-auto p-4">
                <p><strong>Subscribed Emails:</strong></p>
                <?php foreach ($emailSubscriber->getSubscribers() as $email) { ?>
                    <p><?= $email ?></p>
                <?php } ?>
            </div>
            <div class="col p-4">
                <p><strong>Subscribed Numbers:</strong></p>
                <?php foreach ($smsSubscriber->getSubscribers() as $number) { ?>
                    <p><?= $number ?></p>
                <?php } ?>
            </div>
        </div>
        <div class="p-3">
            <form action="index.php">
                <input type="text" name="news" class="form-control" placeholder="News">
                <button type="submit" class="btn btn-primary mt-2">Senden</button>
            </form>
        </div>
    </body>
</html>
