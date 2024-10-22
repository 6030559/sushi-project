<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $review = $_POST['review'];

    if (!empty($name) && !empty($review)) {
        $formatted_review = $name . " schreef op " . date('d-m-Y H:i') . ": " . $review . "\n";

        file_put_contents('reviews.txt', $formatted_review, FILE_APPEND);

        header('Location: reviewSushi.php');
        exit;
    }
}
?>