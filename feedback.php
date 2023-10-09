<?php
$pageTitle = "Форма обратной связи";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" type="text/css" href="../css/style_feedback.css">
</head>
<body>
    <a href="index.php" class="back-to-home-link">На главную</a>
    <form method="POST" action="https://httpbin.org/post" enctype="multipart/form-data">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="name">ФИО:</label>
        <input type="text" id="name" name="name" required>

        <label>Откуда узнали о нас:</label>
        <label class="radio-label"><input type="radio" name="source" value="radio1"> Реклама</label>
        <label class="radio-label"><input type="radio" name="source" value="radio2"> Друзья, Знакомые</label>
        <label class="radio-label"><input type="radio" name="source" value="radio3"> Интернет</label>

        <label for="type">Тип обращения:</label>
        <select id="type" name="type">
            <option value="complaint">Жалоба</option>
            <option value="offer">Предложение</option>
        </select>

        <label for="message">Текст сообщения:</label>
        <textarea id="message" name="message" required></textarea>

        <label for="attachment">Вложения:</label>
        <input type="file" id="attachment" name="attachment">

        <label class="checkbox-label"><input type="checkbox" name="consent" required> Даю согласие на обработку персональных данных</label>

        <input type="submit" value="Отправить">
    </form>
    <footer>
    <?php
            date_default_timezone_set('Europe/Moscow');
            $currentDate = date('d.m.Y в H:i:s');
            echo 'Сформировано ' . $currentDate;
            ?>
    </footer>
</body>
</html>
