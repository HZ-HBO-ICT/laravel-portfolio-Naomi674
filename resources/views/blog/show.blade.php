
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Post</title>
    <link rel="stylesheet" href="/css/app.css">
    <style>
        h1 {
            background-color: #73485C;
            color: #F2F2F0;
            text-align: center;
        }
        .content-large {
            grid-row-start: 2;
            grid-row-end: span 2;
            grid-column-start: 1;
            grid-column-end: 4;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>{{ $post->title }}</h1>
    </div>
    <div class="content-large">
        <p>{{ $post->body }}</p>
    </div>
    <div class="content-small"></div>
    <div class="content-small"></div>
    <div class="footer"></div>
</div>
</body>
</html>

