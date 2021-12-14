<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Online Zoo</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../main/form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/7144e2ec7e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../reset.css">-->
</head>
<body class="body">

<!-- Form -->
<div class="form_box"></div>

<form class="donation_form">
    <a class="close"><img src="../../icons/close.png" class="close_donate" alt="close"></a>

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
                    <a href="../../index.php" class="logo">
                        <img class="logo__link-picture" src="../../icons/logo.svg" alt="logo">
                    </a>
                </div>

                <nav class="menu">
                    <ul class="menu__list">
                        <li class="menu__item"><a href="../../index.php" class="menu__list-link">About</a></li>
                        <li class="menu__item"><a href="../map/map.php" class="menu__list-link">Map</a></li>
                        <li class="menu__item"><a href="../../index.php#cyf" class="menu__list-link">Zoos</a></li>
                        <li class="menu__item"><a href="#footer" class="menu__list-link">Contact us</a></li>
                        <li class="menu__item"><a href="https://www.figma.com" class="menu__list-link">Design</a></li>
                    </ul>
                </nav>
                <h1 class="title_animal">Alligator</h1>

                <a class="burger_menu">
                    <div class="stick1 sticks"></div>
                    <div class="stick2 sticks"></div>
                    <div class="stick3 sticks"></div>
                </a>

            </div>
        </div>
    </header>

</div>

<!-- Online-Animal -->
<div class="online">
    <div class="container">

        <div class="video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/EnxRJii_dp8?autoplay=1;"
                            title="YouTube video player"
                            frameborder="0"
                            class="stream"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
        </iframe>
        </div>

    </div>
</div>

<!-- Links -->
<div class="streamLinks">
    <ul>
        <li><a href="../zoos/zoos_panda.php" class="stream1"></a></li>
        <li><a href="zoos_alligator.php" class="stream2"></a></li>
        <li><a href="zoos_eagle.php" class="stream3"></a></li>
        <li><a href="zoos_gorilla.php" class="stream4"></a></li>
    </ul>
</div>

<!-- Info + Accordion -->
<div class="info">
    <div class="container">

        <div class="accordionsBox">

            <?php
                $connection = new mysqli('zoo.by', 'root', '', 'oz-accordion');
                if($connection->connect_error){
                    echo "Не удалось подключиться к базе данных!";
                }

                $sql = "SELECT * FROM `accordion` WHERE animal = 'Alligator'";
                $result = $connection->query($sql);

                while($row = $result->fetch_assoc()){
                    $zoo = $row['zoo'];
                    $enclosure = $row['enclosure'];
                    $population = $row['population'];
                    $habitat = $row['habitat'];
                    $nutration = $row['nutration'];
                    $facts = $row['facts'];
                }
            ?>

            <div class="info_box">
            <div class="info_row">
                <div class="title_info"><b>ZOO:</b> <?php echo $zoo; ?></div>
                <div class="title_info"><b>Enclosure type:</b> <?php echo $enclosure; ?></div>
            </div>
            </div>

            <div class="accordion myAccordion">
                <div class="accordionRow">
                    <div class="accordionHeader">Population</div>
                    <a class="accordionButton"><i class="fas fa-chevron-down"></i></a>
                </div>
                <div class="accordionContainer">
                    <p>
                        <?php echo $population; ?>
                    </p>
                </div>
            </div>

            <div class="accordion myAccordion">
            <div class="accordionRow">
                <div class="accordionHeader">Habitat</div>
                <a class="accordionButton"><i class="fas fa-chevron-down"></i></a>
            </div>
            <div class="accordionContainer">
                <p>
                    <?php echo $habitat; ?>
                </p>
            </div>
            </div>

            <div class="accordion myAccordion">
            <div class="accordionRow">
                <div class="accordionHeader">Nutrition</div>
                <a class="accordionButton"><i class="fas fa-chevron-down"></i></a>
            </div>
            <div class="accordionContainer">
                <p>
                    <?php echo $nutration; ?>
                </p>
            </div>
            </div>

            <div class="accordion myAccordion">
            <div class="accordionRow">
                <div class="accordionHeader">Interesting facts</div>
                <a class="accordionButton"><i class="fas fa-chevron-down"></i></a>
            </div>
            <div class="accordionContainer">
                <p>
                    <?php echo $facts;
                    $connection->close();
                    ?>
                </p>
            </div>
            </div>

        </div>

    </div>
</div>

<!-- Footer -->
<div class="footer">
    <div class="container">

        <div class="footer_panel" id="footer">

            <a href="#" class="logo">
                <img class="footer_logo" src="../../icons/logo.svg" alt="logo">
            </a>

            <button class="footer_donate">Donate for volunteers
                <a href="#" class="footer_btn"></a>
            </button>

            <ul class="footer_menu">
                <li class="footer_block">
                    <div class="footer_item"><a href="../../index.php" class="menu__list-link">About</a></div>
                    <div class="footer_item"><a href="../map/map.php" class="menu__list-link">Map</a></div>
                </li>
                <li class="footer_block">
                    <div class="footer_item"><a href="../error/error.html" class="menu__list-link">Contact us</a></div>
                    <div class="footer_item"><a href="../error/error.html" class="menu__list-link">Feedback</a></div>
                </li>
            </ul>

            <ul class="footer_social">
                <li class="footer_social_item"><a href="https://www.instagram.com/natgeo/?hl=ru"><img src="../../icons/Insta.png" alt="" class="footer_social_img"></a></li>
                <li class="footer_social_item"><a href="https://www.facebook.com/natgeo"><img src="../../icons/Facebook.png" alt="" class="footer_social_img"></a></li>
                <li class="footer_social_item"><a href="https://twitter.com/NatGeo?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img src="../../icons/Twitter.png" alt="" class="footer_social_img"></a></li>
                <li class="footer_social_item"><a href="https://www.youtube.com/channel/UCpVm7bg6pXKo1Pr6k5kxG9A"><img src="../../icons/Youtube.png" alt="" class="footer_social_img"></a></li>
            </ul>

        </div>

    </div>
</div>

</body>

<script src="script.js"></script>

</html>
