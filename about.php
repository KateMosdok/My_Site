<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/master.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<title>Контактная форма</title>
</head>
<body>
<?
require "blocks/header.php"
?>
<h3>Контактная форма</h3>
<form action="check.php" method="post">
      <input type="email" name="email" placeholder="Введите Email" class="form-control">
      <textarea name="message" class="form-control" placeholder="Введите ваше сообщение"></textarea>
      <button type="submit" name="send" class="btn btn-success">Отправить</button>
</form>
<?
require "blocks/footer.php"
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>