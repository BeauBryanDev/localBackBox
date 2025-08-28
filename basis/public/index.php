<?php

$app = require __DIR__ ."/../bootstrap.php";


$question = $_POST['question'] ?? '';
$answer = '';


if ( $_SERVER['REQUEST_METHOD'] === 'POST'  && $question !== '' ) {

    $answer = $app->getChatResponse($question);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple AI Chat </title>
</head>
<body>
    <form method="POST">
        <label for="question">Your Question:</label>
        <input type="text" name="question" id="question" placeholder="Ask a question..." value="<?= htmlspecialchars($question) ?>" require>
        <button id="send" type="submit">Ask</button>
    </form>

    <?php if ($answer): ?>
        <div>
            <strong>AI:</strong> <p><?= htmlspecialchars($answer); ?></p>
        </div>
    <?php endif; ?>
</body>
</html>
