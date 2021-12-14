<?php
    $connection = new mysqli("zoo.by", "root", "", "oz-reviews");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Online Zoo</title>
    <link rel="stylesheet" href="pages/main/style.css">
    <link rel="stylesheet" href="pages/main/scroll.css">
    <link rel="stylesheet" href="pages/main/form.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="../reset.css">-->
</head>
<body class="body">

<!-- Forms -->
<div class="form_box"></div>

<form class="form1" method="POST" action="pages/main/send_comment.php">
    <a class="close"><img src="icons/close.png" class="close_btn" alt="close"></a>
    <input class="textInput" type="text" name="name" placeholder="Name" required>
    <input class="textInput" type="text" name="email" placeholder="Email" required>
    <textarea placeholder="Review" maxlength="300" name="review" required></textarea>
    <input type="submit" class="submit" value="Submit">
</form>

<form class="donation_form">
    <a class="close"><img src="icons/close.png" class="close_donate" alt="close"></a>

    <div class="infoContainer">
    <select class="donateSelect">
        <option>Alligator</option>
        <option>Panda</option>
        <option>Eagle</option>
        <option>Gorilla</option>
    </select>
    <div class="donateRow">
        <input class="inputDonate" type="text" placeholder="Donate">
        <input class="inputDonate" type="text" value="USD" readonly>
    </div>
    <textarea class="donateArea" placeholder="Your text here" maxlength="300"></textarea>
    <input type="button" value="Donate" class="donateSubmit" required>
    </div>

    <div class="cardContainer">
        <input type="text" class="cardNumber" placeholder="Card Number" maxlength="19">
        <input type="text" class="cardMonth" placeholder="MM" maxlength="2">
        <input type="text" class="cardYear" placeholder="YY" maxlength="2">
        <input type="text" class="cardName" placeholder="Cardholder Name">
        <input type="text" class="cardCVC" placeholder="CVC" maxlength="3">
        <input type="submit" value="Pay" class="paySubmit">
    </div>

</form>

<!-- Header -->
<div class="top-block">

    <header class="header">
        <div class="container">
            <h1 class="title">Online Zoo</h1>
            <div class="header__inner">

                <div class="header__logo">
                    <a href="index.php" class="logo">
                        <img class="logo__link-picture" src="icons/logo.svg" alt="logo">
                    </a>
                </div>

                <nav class="menu">
                    <ul class="menu__list">
                        <li class="menu__item"><a href="index.php" class="menu__list-link">About</a></li>
                        <li class="menu__item"><a href="pages/map/map.php" class="menu__list-link">Map</a></li>
                        <li class="menu__item"><a href="#cyf" class="menu__list-link">Zoos</a></li>
                        <li class="menu__item"><a href="#footer" class="menu__list-link">Contact us</a></li>
                        <li class="menu__item"><a href="https://www.figma.com" class="menu__list-link">Design</a></li>
                    </ul>
                </nav>

                <a class="burger_menu">
                    <div class="stick1 sticks"></div>
                    <div class="stick2 sticks"></div>
                    <div class="stick3 sticks"></div>
                </a>


            </div>
        </div>
    </header>

    <div class="main">
        <div class="container">
            <h2 class="main__text"><span>Watch your favourite animal ONLINE</span></h2>
            <button class="play" onclick="window.location.href='pages/zoos/zoos_panda.php';">▶ Play
            </button>
        </div>
    </div>

</div>

<!-- How it works -->
<div class="how_it_works">

        <div class="container">
            <div class="div_text_how_it_works">
                <h3 class="text_how_it_works">How it works</h3>
            </div>
        </div>

        <div class="backHIW">
            <div class="pictures_how_it_works">
                <ul class="ul_how_it_works">
                    <li class="item_how_it_works" data-pos="1">
                    </li>
                    <li class="item_how_it_works" data-pos="2">
                    </li>
                    <li class="item_how_it_works" data-pos="3">
                    </li>
                    <li class="item_how_it_works" data-pos="4">
                    </li>
                    <li class="item_how_it_works" data-pos="5">
                    </li>
                </ul>
            </div>
        </div>

    <h5 class="descriptionHIW">The application Оnline zoo will allow you to watch zoos' and nature reserves' inhabitants in live. Currently, under video-surveillance are pandas in China, eagles on Catalina Island (USA), alligators in Florida and gorillas in the Congo. We are expanding our capabilities and soon online you will meet Arctic snowy owl in Alaska, Penguin in California, Elephant from South Africa and Polar bear from Canada. You will see unique video-shots at any time of the day. If you liked a pet you watch and you want to please it with a delicious treat, you can pay a donation and the animal will receive a surprise from you during feeding hours.
        <br>We want to thank you for helping the animals and give you <a href="https://www.calgaryzoo.com/coupons-discounts-special-offers" id="discount">discount coupons</a> from our partners.</h5>
</div>

<!-- Pets in zoo -->
<div class="pets_in_zoo">

    <div class="container">
        <h3 class="title_pets_in_zoo" id="cyf">Pets in zoo</h3>

        <div class="swiper myPets">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide slide2">
                    <div class="swiper_text">
                        Panda, China
                    </div>
                    <img src="images/Slider-panda.png" alt="panda">
                </div>
                <div class="swiper-slide slide2">
                    <div class="swiper_text">
                        Gorilla, Eastern DRC
                    </div>
                    <img src="images/Slider-gorilla.png" alt="gorilla">
                </div>
                <div class="swiper-slide slide2">
                    <div class="swiper_text">
                        Elephant, South Africa
                    </div>
                    <img src="images/Slider-elephant.png" alt="elephant">
                </div>
                <div class="swiper-slide slide2">
                    <div class="swiper_text">
                        Arctic snowy owl, Alaska
                    </div>
                    <img src="images/Slider-arctic-snowy-owl.png" alt="snowOwl">
                </div>
                <div class="swiper-slide slide2">
                    <div class="swiper_text">
                        Penguin, USA
                    </div>
                    <img src="images/Slider-penguin.png" alt="penguin">
                </div>
                <div class="swiper-slide slide2">
                    <div class="swiper_text">
                        Bald eagle, USA
                    </div>
                    <img src="images/Slider-bald-eagle.png" alt="eagle">
                </div>
                <div class="swiper-slide slide2">
                    <div class="swiper_text">
                        Alligator, USA
                    </div>
                    <img src="images/Slider-alligator.png" alt="alligator">
                </div>
                <div class="swiper-slide slide2">
                    <div class="swiper_text">
                        Polar bear, Canada
                    </div>
                    <img src="images/Slider-polar-bear.png" alt="bear">
                </div>
                <div class="swiper-slide slide2">
                    <div class="swiper_text">
                        Giraffe, Africa
                    </div>
                    <img src="images/Slider-giraffe.png" alt="giraffe">
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>

        <button class="cyf" onclick="window.location.href='pages/map/map.php';">Choose your favorite</button>

    </div>
</div>

<!-- Pay and Feed -->
<div class="pay_and_feed">

    <div class="container">
        <h3 class="title_pay_and_feed">Pay and feed</h3>

        <div class="paf_block">

            <div class="block reveal1"><img class="block_img" src="icons/pay_1.png" alt=""><h5 class="paf_comm">You can pay for a donation to any
                animal using your Credit/Debit card</h5>
            </div>

            <div class="img_arrow_320 reveal7"><img src="icons/Arrow_320.png" alt="" class="pay_arrow_320_top"></div>
            <div class="block reveal2"><img class="block_img" src="icons/pay_2.png" alt=""><h5 class="paf_comm">Donations will go to the account
                of the zoo or nature reserve</h5>
            </div>

            <div class="img arrow_320 reveal8"><img src="icons/Arrow_320.png" alt="" class="pay_arrow_320_bottom"></div>
            <div class="block reveal3"><img class="block_img" src="icons/pay_3.png" alt=""><h5 class="paf_comm">The animal will receive a delicious
                treat during feeding hours</h5>
            </div>

        </div>

        <img src="icons/pay_arrow.png" alt="" class="pay_arrow reveal4">
        <img src="icons/Arrow640top.png" alt="" class="pay_arrow_640_top reveal5">
        <img src="icons/Arrow640bottomm.png" alt="" class="pay_arrow_640_bottom reveal6">

    </div>
</div>

<!-- Reviews -->
<div class="reviews">

    <div class="container">
        <h3 class="title_reviews">Reviews</h3>


        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php

                $sql = "SELECT * FROM `reviews`";
                $result = $connection->query($sql);

                while ($row = $result->fetch_assoc()) {
                    $name = $row['name'];
                    $email = $row['email'];
                    $review = $row['review'];
                    echo "
                <div class=\"swiper-slide swiper-slide1\">
                    <div class=\"reviews_item_top\">
                        <img src=\"icons/review.png\" alt=\"\" class=\"foto\">
                        <div class=\"info\">
                            <div class=\"name\">".$name."</div>
                            <div class=\"mail_review\">".$email."</div>
                        </div>
                    </div>
                    <div class=\"reviews_text\">".$review."
                    </div>
                </div>";
                }

                ?>
                <?php $connection->close(); ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>

        <button class="test_leave_feedback">Leave feedback
            <a href="#" class="cyf_btn"></a>
        </button>

    </div>
</div>

<!-- Footer -->
<div class="footer">
    <div class="container">

        <div class="footer_panel" id="footer">

            <a href="#" class="logo">
                <img class="footer_logo" src="icons/logo.svg" alt="logo">
            </a>

            <button class="footer_donate">Donate for volunteers
                <a href="#" class="footer_btn"></a>
            </button>

            <ul class="footer_menu">
                <li class="footer_block">
                    <div class="footer_item"><a href="#" class="menu__list-link">About</a></div>
                    <div class="footer_item"><a href="pages/map/map.php" class="menu__list-link">Map</a></div>
                </li>
                <li class="footer_block">
                    <div class="footer_item"><a href="pages/error/error.html" class="menu__list-link">Contact us</a></div>
                    <div class="footer_item"><a href="pages/error/error.html" class="menu__list-link">Feedback</a></div>
                </li>
            </ul>

            <ul class="footer_social">
                <li class="footer_social_item"><a href="https://www.instagram.com/natgeo/?hl=ru"><img src="icons/Insta.png" alt="" class="footer_social_img"></a></li>
                <li class="footer_social_item"><a href="https://www.facebook.com/natgeo"><img src="icons/Facebook.png" alt="" class="footer_social_img"></a></li>
                <li class="footer_social_item"><a href="https://twitter.com/NatGeo?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img src="icons/Twitter.png" alt="" class="footer_social_img"></a></li>
                <li class="footer_social_item"><a href="https://www.youtube.com/channel/UCpVm7bg6pXKo1Pr6k5kxG9A"><img src="icons/Youtube.png" alt="" class="footer_social_img"></a></li>
            </ul>

        </div>

    </div>
</div>

<script src="https://unpkg.com/scrollreveal"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="pages/main/script.js"></script>

</body>

</html>