<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="css/donorgall.css">
    <style>
       
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 9999;
        }

        .popup img {
            display: block;
            margin: 15% auto;
            max-width: 90%;
            max-height: 90%;
        }

        .slider-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            height: 100%;
            position: fixed;
            z-index: 9999;
            top: 0;
            left: 0;
            pointer-events: none;
            /* background-color: rgba(255, 255, 255, 0.5); */
            display: flex;
            justify-content: center;
            align-items: center;
            pointer-events: all;
        }

        .slider-container  img {
          width: 100%;
          height: 100%;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script>
       
        $(document).ready(function () {
            var $images = $('.collage img');
            var $popup = $('.popup');
            var $popupImg = $('.popup img');

            $images.on('click', function () {
                $popupImg.attr('src', $(this).attr('src'));
                $popup.fadeIn();
            });

            $popup.on('click', function () {
                $(this).fadeOut();
            });

            var $sliderPrev = $('.slider-prev');
            var $sliderNext = $('.slider-next');

            $sliderPrev.on('click', function () {
                var $currentImg = $popupImg.attr('src');
                var $prevImg;

                $images.each(function (index) {
                    if ($(this).attr('src') === $currentImg) {
                        $prevImg = $images.eq(index - 1).attr('src');
                        return true;
                    }
                });

                $sliderNext.on('click', function () {
                    var $currentImg = $popupImg.attr('src');
                    var $nextImg;

                    $images.each(function (index) {
                        if ($(this).attr('src') === $currentImg) {
                            $nextImg = $images.eq(index + 1).attr('src');
                            return true; 
                        }
                    });

                    if ($nextImg) {
                        $popupImg.attr('src', $nextImg);
                    }
                });

            });

            });
    </script>
</head>

<body>
    <?php include("frontfiles/header.php"); ?>
    <div class="pics">
        <div class="container">
            <h1> Gallery </h1>
            <div class="line"></div>
            <div class="collage">
                <img src="images/1 (2).jpg" alt="" width="200px" height="200px">
                <img src="images/2.jpg" alt="" width="200px" height="200px">
                <img src="images/4.jpg" alt="" width="200px" height="200px">
                <img src="images/123.jpg" alt="" width="200px" height="200px">
                <img src="images/slider1.jpg" alt="" width="200px" height="200px">
                <img src="images/slider2.jpg" alt="" width="200px" height="200px">
                <img src="images/slider3.jpg" alt="" width="200px" height="200px">
                <img src="images/slider4.jpg" alt="" width="200px" height="200px">
                <img src="images/slider5.jpg" alt="" width="200px" height="200px">
                <img src="images/slider6.jpg" alt="" width="200px" height="200px">
                <img src="images/slider7.jpg" alt="" width="200px" height="200px">
                <img src="images/slider8.jpg" alt="" width="200px" height="200px">
                <img src="images/blog1.jpg" alt="" width="200px" height="200px">
                <img src="images/blog2.jpg" alt="" width="200px" height="200px">
                <img src="images/blog3.jpg" alt="" width="200px" height="200px">
            </div>
        </div>
    </div>

    <div class="popup">
        <img src="" alt="">
    </div>

    <div class="slider-container">
        <div class="slider-prev">
            <span>&#8249;</span>
        </div>
        <div class="slider-next">
            <span>&#8250;</span>
        </div>
    </div>

    <?php include("frontfiles/footer.php"); ?>
</body>

</html>