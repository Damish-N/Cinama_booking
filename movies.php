<?php
require './common/header.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/movies.css">
    <title>Movies</title>
</head>
<body>

<!--<i class="fa-solid fa-angle-right"></i>-->

<div class="container">
    <div class="horizontal-scroll">
        <button class="btn-scroll" id="btn-scroll-left" onclick="scrollHorizontal(1)"><i class="fas fa-angle-left"></i>
        </button>
        <button class="btn-scroll" id="btn-scroll-right" onclick="scrollHorizontal(-1)"><i
                    class="fas fa-angle-right"></i></i></button>

        <div class="movies-container">

            <div class="story-div">
                <div class="header">
                    <h3>Cinema-1</h3>
                </div>
                <img src="./image/cinama_1.jpg" alt="">
                <div class="bottom-bar">
                    <button class="view-btn">button-1</button>
                    <button class="book-btn">button-2</button>
                </div>
            </div>
            <div class="story-div">
                <div class="header">
                    <h3>Cinema-1</h3>
                </div>
                <img src="./image/cinama_1.jpg" alt="">
                <div class="bottom-bar">
                    <button class="view-btn">button-1</button>
                    <button class="book-btn">button-2</button>
                </div>
            </div>
            <div class="story-div">
                <div class="header">
                    <h3>Cinema-1</h3>
                </div>
                <img src="./image/cinama_1.jpg" alt="">
                <div class="bottom-bar">
                    <button class="view-btn">button-1</button>
                    <button class="book-btn">button-2</button>
                </div>
            </div>
            <div class="story-div">
                <div class="header">
                    <h3>Cinema-1</h3>
                </div>
                <img src="./image/cinama_1.jpg" alt="">
                <div class="bottom-bar">
                    <button class="view-btn">button-1</button>
                    <button class="book-btn">button-2</button>
                </div>
            </div>
            <div class="story-div">
                <div class="header">
                    <h3>Cinema-1</h3>
                </div>
                <img src="./image/cinama_1.jpg" alt="">
                <div class="bottom-bar">
                    <button class="view-btn">button-1</button>
                    <button class="book-btn">button-2</button>
                </div>
            </div>
            <div class="story-div">
                <div class="header">
                    <h3>Cinema-1</h3>
                </div>
                <img src="./image/cinama_1.jpg" alt="">
                <div class="bottom-bar">
                    <button class="view-btn">button-1</button>
                    <button class="book-btn">button-2</button>
                </div>
            </div>
            <div class="story-div">
                <div class="header">
                    <h3>Cinema-1</h3>
                </div>
                <img src="./image/cinama_1.jpg" alt="">
                <div class="bottom-bar">
                    <button class="view-btn">button-1</button>
                    <button class="book-btn">button-2</button>
                </div>
            </div>
            <div class="story-div">
                <div class="header">
                    <h3>Cinema-1</h3>
                </div>
                <img src="./image/cinama_1.jpg" alt="">
                <div class="bottom-bar">
                    <button class="view-btn">button-1</button>
                    <button class="book-btn">button-2</button>
                </div>
            </div>
            <div class="story-div">
                <div class="header">
                    <h3>Cinema-1</h3>
                </div>
                <img src="./image/cinama_1.jpg" alt="">
                <div class="bottom-bar">
                    <button class="view-btn">button-1</button>
                    <button class="book-btn">button-2</button>
                </div>
            </div>


        </div>

    </div>
</div>
<script src="./js/scroll_bar.js"></script>



</body>
</html>

<?php
include './common/footer.php'
?>
