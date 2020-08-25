<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>VELES</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="main.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div id="wrapper">
    <?php include ('inc/header.inc') ?>

    <main class="content">
        <div class="main-video">
            <video controls>
                <source src="Индикатор-ВЕЛЕС.mp4" type="video/mp4">
                <!-- MP4 для Safari, IE9, iPhone, iPad, Android, и Windows Phone 7 -->
                <source src="Индикатор-ВЕЛЕС.webm" type="video/webm"><!-- WebM/VP8 для Firefox4, Opera, и Chrome -->
                <source src="Индикатор-ВЕЛЕС.ogv" type="video/ogg">
                <!-- Ogg/Vorbis для старых версий браузеров Firefox и Opera -->
                <!--<object data="video.swf" type="application/x-shockwave-flash">&lt;!&ndash; добавляем видеоконтент для устаревших браузеров, в которых нет поддержки элемента video &ndash;&gt;
                    <param name="movie" value="video.swf">
                </object>-->
            </video>
        </div>
    </main>
</div>

    <?php include ('inc/footer.inc') ?>
</body>
</html>
