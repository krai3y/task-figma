<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>task-figma</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    body {
      position: relative;
      background: url('svg/mm.svg') top right no-repeat;
      background-size: 50%;
    }
  </style>
</head>
<body>
<header class="main-view mt-3" id="main">
  <nav class="navbar navbar-expand-sm">
    <div class="container">
      <a href="/#main" class="navbar-brand">
        <img src="svg/logo.svg" class="brand w-nav-brand">
      </a>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="/#about" class="nav-link">О предприятии</a>
          </li>
          <li class="nav-item">
            <a href="/#tariff" class="nav-link px-5">Тарифы</a>
          </li>
          <li class="nav-item">
            <a href="news.php" class="nav-link pe-5">Новости</a>
          </li>
          <li class="nav-item">
            <a href="/#contacts" class="nav-link">Контакты</a>
          </li>
        </ul>
      </div>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="user.php" class="btn text-white" style="border-radius: 15px; background: #4170B7;"><img src="svg/user.svg"> Личный кабинет</a>
        <a href="#" class="btn" style="border-radius: 15px; background: #4170B7;" data-bs-toggle="modal" data-bs-target="#secondModal"><img src="svg/vector.svg"></a>
      </div>
    </div>
  </nav>
</header>