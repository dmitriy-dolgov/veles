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
    var elems = {
        '.faq-wrap': $('.faq-wrap'),
        '.faq-unwrap': $('.faq-unwrap'),
        '.faq .r-heading .icon': $('.faq .r-heading .icon')
    };

    function faqUnwrap() {
        elems['.faq-wrap'].toggleClass('unwrap');
        setTimeout(function () {
            if (elems['.faq-wrap'].hasClass('unwrap')) {
                elems['.faq .r-heading .icon'].removeClass('icon-circle-down');
                elems['.faq .r-heading .icon'].addClass('icon-circle-up');
                elems['.faq-unwrap'].attr('title', 'Свернуть');
            } else {
                elems['.faq .r-heading .icon'].removeClass('icon-circle-up');
                elems['.faq .r-heading .icon'].addClass('icon-circle-down');
                elems['.faq-unwrap'].attr('title', 'Развернуть');
            }
        }, 400);
    }
</script>
</body>
</html>
