<?php //--traduction-
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['lang']))
    $_SESSION['lang'] = "en";
elseif (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
    if ($_GET['lang'] == "fr")
        $_SESSION['lang'] = 'fr';

    else if ($_GET['lang'] == "en")
        $_SESSION['lang'] = 'en';
}
require_once($_SESSION['lang'] . ".php");
?>


<?php include 'en.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="professional recipe web ">
    <meta name="author" content="Godwin Amegah">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/recipes.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/about.css">
    <link rel="stylesheet" href="./assets/css/newform.css">


    <!-- ===== BOX ICONS ===== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <title> ZOMBIE | Welcome</title>
</head>

<body>
    <!--===== HEADER =====-->

    <?php include('./assets/template/header.php'); ?>


    <section id="showcase">
        <div class="container">
            <h1><?= $lang['data']['h1'] ?></h1>
        </div>
    </section>


    <section class="about" id="about">
        <div class="row">
            <div class="col50">
                <h2 class="title-text"><?= $lang['data']['h2'] ?></h2>
                <p>
                    <?= $lang['data']['par-1'] ?>
                </p>
            </div>

            <div class="imgBx">
                <img src="assets/img/z-ConvertImage.png" alt="image of Zombie">
            </div>

        </div>
    </section>



    <section>
        <div id="gallery" class="container">


            <div class="meal-wrapper">
                <!--<div class = "meal-search">
                    <h2 class = "title">Find Meals For Your Ingredients</h2>
    
                    <div class = "meal-search-box">
                      <input type = "text" class = "search-control" placeholder="Enter an ingredient" 
                      id = "search-input">
                      <button type = "submit" class = "search-btn btn" id = "search-btn">
                        <i class = "fas fa-search"></i>
                      </button>
                    </div>
                </div>-->

                <div class="meal-result">
                    <h2 class="title"><?= $lang['data']['h2-recipe'] ?></h2>
                    <div id="meal">
                        <!-- meal item -->
                        <div class="meal-item" data-id="1">
                            <div class="meal-img">
                                <img src="./assets/img/cocktail.jpg" alt="food">
                            </div>
                            <div class="meal-name">
                                <h3>Blood Slurp</h3>
                                <a href="#" class="recipe-btn"><?= $lang['data']['a-get'] ?></a>
                            </div>
                        </div>
                        <!-- end of meal item -->
                        <!-- meal item -->
                        <div class="meal-item" data-id="2">
                            <div class="meal-img">
                                <img src="./assets/img/gateau.jpg" alt="food">
                            </div>
                            <div class="meal-name">
                                <h3>Blood Slurp</h3>
                                <a href="#" class="recipe-btn"><?= $lang['data']['a-get'] ?></a>
                            </div>
                        </div>
                        <!-- end of meal item -->
                        <!-- meal item -->
                        <div class="meal-item" data-id="3">
                            <div class="meal-img">
                                <img src="./assets/img/cocktail.jpg" alt="food">
                            </div>
                            <div class="meal-name">
                                <h3>Blood Slurp</h3>
                                <a href="#" class="recipe-btn"><?= $lang['data']['a-get'] ?></a>
                            </div>
                        </div>
                        <!-- end of meal item -->
                        <!-- meal item -->
                        <div class="meal-item" data-id="4">
                            <div class="meal-img">
                                <img src="./assets/img/cocktail.jpg" alt="food">
                            </div>
                            <div class="meal-name">
                                <h3>Blood Slurp</h3>
                                <a href="#" class="recipe-btn"><?= $lang['data']['a-get'] ?></a>
                            </div>
                        </div>
                        <!-- end of meal item -->
                        <!-- meal item -->
                        <div class="meal-item" data-id="5">
                            <div class="meal-img">
                                <img src="./assets/img/cocktail.jpg" alt="food">
                            </div>
                            <div class="meal-name">
                                <h3>Blood Slurp</h3>
                                <a href="#" class="recipe-btn"><?= $lang['data']['a-get'] ?></a>
                            </div>
                        </div>
                        <!-- end of meal item -->
                        <!-- meal item -->
                        <div class="meal-item" data-id="6">
                            <div class="meal-img">
                                <img src="./assets/img/cocktail.jpg" alt="food">
                            </div>
                            <div class="meal-name">
                                <h3>Blood Slurp</h3>
                                <a href="#" class="recipe-btn"><?= $lang['data']['a-get'] ?></a>
                            </div>
                        </div>
                        <!-- end of meal item -->
                    </div>
                </div>

                <div class="meal-details">
                    <!-- recipe close btn -->
                    <button type="button" class="btn recipe-close-btn" id="recipe-close-btn">
                        <i class="fas fa-times"></i>
                    </button>

                    <!-- meal-content -->
                    <div class="meal-details-content">
                        <!--<h2 class="recipe-title"> Meal name here</h2>
                        <p class="recipe-author"> Author name</p>
                        <div class="recipe-instruct">
                            <h3> Instructions : </h3>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but also the leap into
                                electronic typesetting, remaining essentially unchanged. It was popularised in
                                the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                and more recently with desktop publishing software like Aldus PageMaker including
                                versions of Lorem Ipsum.
                            </p>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but also the leap into
                                electronic typesetting, remaining essentially unchanged. It was popularised in
                                the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                and more recently with desktop publishing software like Aldus PageMaker including
                                versions of Lorem Ipsum.
                            </p>
                        </div> -->
                    </div>
                </div>

            </div>
        </div>

    </section>

    <section id="add">
        <h1><?= $lang['add']['h1'] ?></h1>
        <div class="form-container">
            <form method = "post" action="formCreationVerif.php">
                <div class="form-item">
                    <label for="username"><?= $lang['add']['frm-user'] ?>:</label><br>
                    <input type="text" name="username" id="username" placeholder="<?= $lang['add']['frm-user-plhdr'] ?>" >
                </div>

                <div class="form-item">
                    <label for="email"><?= $lang['add']['frm-email'] ?>:</label><br>
                    <input type="email" name="email" id="email" placeholder="<?= $lang['add']['frm-email-plhdr'] ?>" >
                    <!-- <p id="status"></p> -->
                </div>

                <div class="form-item">
                    <label for="title"><?= $lang['add']['frm-title'] ?>:</label><br>
                    <input type="text" name="title" id="title" placeholder="<?= $lang['add']['frm-title-plhdr'] ?>">
                </div>

                <div class="form-item">
                    <label for="description"><?= $lang['add']['frm-desc'] ?>:</label><br>
                    <textarea name="description" id="description" cols="30" rows="10" placeholder="<?= $lang['add']['frm-desc-plhdr'] ?>"></textarea>
                </div>

                <button><?= $lang['add']['frm-send'] ?></button>

            </form>
        </div>
    </section>




    <!--===== FOOTER =====-->
    <?php include('./assets/template/footer.php'); ?>
    <!--===== INCLUDE JS =====-->
    <script src="./assets/js/controle.js"></script>
    <script src="./assets/js/recettes.js"></script>
    <script src="./assets/js/regex.js" ></script>
</body>

</html>