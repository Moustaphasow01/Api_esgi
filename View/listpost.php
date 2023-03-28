<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Ajout du css listpost.css -->
    <link rel="stylesheet" href="View/listpost.css">
</head>

<body>
    <div class="postlist">
        <?php foreach ($post as $post) { ?>
            <div class="post">
                <div class="id"><?= $post->id; ?></div>
                <div class="description"><?= $post->description; ?></div>
            </div>
        <?php } ?>
    <div class="commentaireslist">
        <?php foreach ($commentaires as $commentaires) { ?>
            <div class="post">
                <div class="id"><?= $post->id; ?></div>
                <div class="description"><?= $post->description; ?></div>
            </div>
    
            

    
        <?php } ?>
    </div>
</body>

</html>