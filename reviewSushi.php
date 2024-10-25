<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sushi / Reviews / Restaurant</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include('header.php') ?>


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

    <?php include('footer.php') ?>

</body>
</html>
