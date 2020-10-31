<?php

require __DIR__ . "/data.php";
require __DIR__ . "/functions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="cards.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">

    <title>Fake News</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
            <div class="nav-toggle" id="navToggle">
                <img id="navClosed" class="navIcon" src="images/openburger.png" alt="open burger">
                <img id="navOpen" class="navIcon hidden" src="images/closeburger.png" alt="close burger">
            </div>
                <h2>Fake News Network</h2>
            </div>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Global</a></li>
                    <li><a href="#">Politics</a></li>
                    <li><a href="#">Climate</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Tech</a></li>
                    <li><a href="#">Podcasts</a></li>
                </ul>
            </nav>
        </div>
    </header>

<main>
<h1>Latest News</h1>
    <div class="post-container">
        <?php foreach (sortDate($newsItems) as $newsitem) : ?>    
            <div class="card-container">
                <div class="post-img" style="background-image: url(<?php echo $newsitem["image"] ?>);">
            </div>
            <div class="post-info">
                <div class="post--date">
           <span class="spandiv"> <span><?php echo formatDate($newsitem["date"]); ?></span>
             <span><?php echo $newsitem["likes"]?><i class="fas fa-thumbs-up"></i></span></span>
                <h1 class="post-title">
                    <?php echo $newsitem["title"]; ?></h1>
                <p class="post-content"> 
                    <?php echo $newsitem["content"]; ?></p>
                    <a href="#" class="readmore">Continue Reading</a>
                    <p class="writtenby">By: <?php echo $newsitem["author"]["name"]; ?></p>

        </div>
        </div>
        </div>
        <?php endforeach; ?>   
        
    </div>

</main>

<script src="script.js"></script>
</body>
</html>


