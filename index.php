<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gotham -- Главная</title>
    <link rel="stylesheet" href="./assets/css/font_style.css">
    <link rel="stylesheet" href="./assets/css/main_style.css">
    <link rel="stylesheet" href="./assets/css/loadin_style.css">
    <link rel="shortcut icon" href="./assets/img/logo/icons8-batman-128.png" type="image/x-icon">

</head>

<body>
    <!-- Loading -->
    <? require './module/loading.html'; ?>
    <!-- Loading -->
    <section class="section-1">
        <video playsinline autoplay muted loop class="section-1__background">
            <source src="./assets/video/background_video.mp4">
            </source>
        </video>
        <div class="section-1__content">
            <!-- header -->
            <? require './module/header.php' ?>
            <!-- header -->
            <div class="content">
                <video playsinline autoplay muted loop class="content__video">
                    <source src="./assets/video/background_video.mp4">
                    </source>
                </video>
                <div class="content__h2">
                    <h2>Насладись волшебным вкусом<br>Раслабься по полной</h2>
                </div>
            </div>
        </div>
        <!-- footer -->
        <? require './module/footer.html' ?>
        <!-- footer -->
        </div>
    </section>
    <script src="./assets/js/module.js"></script>
</body>


</html>