<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>task-figma</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet">
</head>
<body>
<header class="main-view mt-3" id="main"> 
  <nav class="navbar navbar-expand-md"> 
    <div class="container p-0"> 
      <a href="/#main" class="navbar-brand me-2"> 
        <img src="svg/logos.svg" class="brand w-nav-brand"> 
      </a> 
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> 
        <img src="svg/bur.svg" alt="Burger Icon">
      </button> 
      <div class="collapse navbar-collapse ms-4 marg-left-0" id="navbarCollapse"> 
        <ul class="navbar-nav ml-auto"> 
          <li class="nav-item"> 
            <a href="/#about" class="nav-link color-blue ps-0">О предприятии</a> 
          </li> 
          <li class="nav-item"> 
            <a href="/#tariff" class="nav-link color-blue">Тарифы</a> 
          </li> 
          <li class="nav-item"> 
            <a href="news.php" class="nav-link color-blue">Новости</a> 
          </li> 
          <li class="nav-item"> 
            <a href="/#contacts" class="nav-link color-blue">Контакты</a> 
          </li> 
        </ul>
        <div class="collapse navbar-collapse d-grid gap-2 d-sm-flex justify-content-md-end" id="navbarCollapse"> 
          <a href="user.php" class="btn text-white header-btn"><img src="svg/user.svg"> Личный кабинет</a> 
          <a href="#" class="btn header-btn" data-bs-toggle="modal" data-bs-target="#secondModal"><img src="svg/vector.svg"></a> 
        </div>
      </div>  
    </div> 
  </nav> 
</header>
