<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>VELES</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="fonts/icomoon.css">
    <link rel="stylesheet" href="main.css?v=0.5">

</head>
<body>
<div id="wrapper">
    <?php include('inc/header.inc') ?>

    <main class="content">

        <?php include('video.inc') ?>

        <?php include('about.inc') ?>

        <?php include('indicator.inc') ?>

        <?php include('indicator-strategy.inc') ?>

        <?php include('join-us.inc') ?>

        <?php include('faq.inc') ?>

    </main>
</div>

<?php include('inc/footer.inc') ?>
<script>
    $('.unwrap-faq-elem').click(function () {
        var elem = $(this);
        var iconElem = elem.find('.icon');
        if (iconElem.hasClass('icon-plus')) {
            iconElem.removeClass('icon-plus');
            iconElem.addClass('icon-minus');
        } else {
            iconElem.removeClass('icon-minus');
            iconElem.addClass('icon-plus');
        }
        elem.parent().find('.reply').toggleClass('unwrap');

        return false;
    });
</script>
</body>
</html>
