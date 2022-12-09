<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Головна сторінка</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include($_SERVER['DOCUMENT_ROOT'].'/_header.php'); ?>

<div class="container">
    <h1 class="text-center">Реєстрація</h1>

    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Пошта</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="selectFile" class="form-label">
                <span>Фото</span>
                <img src="/images/select.jpg" width="300"
                     alt="select" style="cursor: pointer">
            </label>
            <input type="file"
                   class="form-control d-none"
                   id="selectFile"
                   name="selectFile">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>