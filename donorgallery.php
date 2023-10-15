<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/donorgall.css">

    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="js/slick.js"></script>
    <style>
        
        .pics {
            min-height: 59vh;
        }
    </style>
    <script>
        $(document).ready(function () {
            $('.collage img').click(function () {
                $('.collage img').hide();
                $('.demo').slick({
                    accessibility: true,
                    arrows: true,
                    zIndex: 1000,
                    dots: true,
                    slidesToShow: 3,
                })
            })
        });
    </script>
</head>

<body>
    <?php include("frontfiles/header.php"); ?>
    <div class="pics">
        <div class="container">
            <h1> Gallery </h1>
            <div class="collage demo">

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

    <?php include("frontfiles/footer.php"); ?>
</body>

</html>

