<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="countdown" content="2017-10-10 18:00">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="icon" href="<?= DIR ?>/image/logo.png">
    <link rel="stylesheet" href="<?= get_stylesheet_uri()?>">
    <script src="<?= DIR ?>/js/jquery.js"></script>
    <style>
        @font-face{
            font-family:Ionic;
            src:url('<?= DIR ?>/fonts/ionicons.woff');
        }
    </style>
    <?php wp_head(); ?>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="logo">
                <img src="<?= DIR ?>/image/logo.png" alt="logo">
            </div>
            <div class="toggle" onclick="$('.menu').slideToggle()">
                &#9776;
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">FORMER EVENT</a></li>
                </ul>
            </div>
        </div>
    </div>
