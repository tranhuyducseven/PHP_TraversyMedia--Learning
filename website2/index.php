<?php include('./server-infor.php') ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="containter">
        <h1>Server & File Infor</h1>
        <?php if ($server) : ?>
            <ul class="list-group">
                <?php foreach ($server as $key => $value) : ?>
                    <li class="list-group-item">
                        <?php echo "<strong>".$key."</strong>: ".$value ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <h1>Client Infor</h1>
        <?php if ($client) : ?>
            <ul class="list-group">
                <?php foreach ($client as $key => $value) : ?>
                    <li class="list-group-item">
                        <?php echo "<strong>".$key."</strong>: ".$value ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</body>

</html>