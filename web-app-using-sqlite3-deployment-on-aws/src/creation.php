<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="professional recipe web ">
    <meta name="author" content="Godwin Amegah">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/recipes.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/form.css">

    <!-- ===== BOX ICONS ===== -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
          integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
          crossorigin="anonymous" />
    <title> ZOMBIE | Creation de recette</title>


    
</head>

<body>
<?php include('assets/template/header.php'); ?>



<!-- ======  FORM ======= -->
<section class="formulaire">
    <div class ="contain">

        <h1> Create an recipe</h1>
        <form action="formCreationVerif.php" method="post">
            <div>
                <label for="username">Name</label>
                <input type="text" id="username" name="username">
            </div>

            <div>
                <label for="email">Your email</label>
                <input type="email" id="email" name="email">
            </div>

            <div>
                <label for="title">title of the recipe</label>
                <input type="text" id="title" name="title">
            </div>

            <div>
                <label for="image">image of the recipe</label>
                <input type="file" id="image" name="image">
            </div>

            <div>
                <label for="description">description</label>
                <textarea id="description" name="description" rows="10"></textarea>
            </div>

            <button type="submit">Envoyer</button>
        </form>


    </div>
    
</section>



<!-- ======  FORM ======= -->




<!--===== FOOTER =====-->
<?php include('assets/template/footer.php') ?>
<!--===== FOOTER =====-->

<!--===== MAIN JS =====-->
<script src="assets/js/controle.js"></script>
<script src="assets/js/regex.js"></script>
<!--===== MAIN JS =====-->
</body>

</html>