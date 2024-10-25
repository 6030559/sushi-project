<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sushi / Reviews / Restaurant</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav>
            <a href="index.html">Home</a>
            <a href="menu.html">Menu</a>
            <a href="about us.html">About us</a>
            <a href="gallery.html">Gallery</a>
        </nav>
    </header>

    <main>
        <div class="layoutReview">
        <section class="reviewContainer">
            <h1>Laat je review achter!</h1>

            <form action="submit_review.php" method="POST">
                <article>
                    <label for="name">Naam:</label>
                    <input type="text" id="name" name="name" required>
                </article>
                <article>
                    <label for="review">Review:</label>
                    <textarea id="review" name="review" required></textarea>
                </article>
                <button type="submit">Review verzenden</button>
            </form>

            <h2>Reviews</h2>

            <article class="reviews">
                <?php
                    $file = 'reviews.txt';

                    if (file_exists($file) && filesize($file) > 0) {
                        $reviews = file($file);

                        foreach ($reviews as $review) {
                            echo "<article class='review'>" . nl2br(htmlspecialchars($review)) . "</article>";
                        }
                    } else {
                        echo "<p>Er zijn nog geen reviews.</p>";
                    }
                ?>
            </article>
        </section>
        </div>
    </main>

    <footer>
        <section class="footercontainer">
            <section class="icons">
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-google-plus"></i></a>
            </section>
            <section class="footernav">
                <ul>
                    <li><a href="">Adres: Rijswijklaan 129</a></li>
                    <li><a href="">Openingstijden: Ma-Za van 13:00 - 21:00</a></li>
                    <li><a href="">Meer informatie</a></li>
                    <li><a href="avg.html">Privacy</a></li>
                    <li><a href="reserveren.html">Maak hier een reservering aan</a></li>
                </ul>
            </section>
            <section class="footerboden">
                <p>Copyright &copy; 2024;</p>
            </section>
        </section>
    </footer>
</body>
</html>
