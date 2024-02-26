<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/app.css">

</head>

<body>
    <article>
        <h1>
            <?= $post->title; ?>
        </h1>
        <div>
        <?= $post->body; ?>
        </div>
       
    </article>

    <p>That was the article.</p>

    <a href="/">Go back</a>

</body>

</html>