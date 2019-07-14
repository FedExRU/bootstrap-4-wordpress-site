<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
  <title> <?= bloginfo('name'); wp_title(); ?> </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php wp_head(); ?>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="assets/i/logo.png" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> Главная<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-users" aria-hidden="true"></i> О Нас</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-phone" aria-hidden="true"></i> Контакты</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Правила безопасности</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" method="get" action="/">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-warning my-2 my-sm-0 btn-sm-block" type="submit">Search</button>
        </form>
      </div>
    </div> <!-- /.container -->
  </nav> <!-- /.navbar -->

  <header class="header d-flex flex-column justify-content-center">
    <div class="container">
      <h1 class="display-3">Добро пожаловать в West Inntravel</h1>
      <p class="lead">Русскоязычное сообщество любителей путешествий по креажу Blackwater</p>
    </div> <!-- /.container -->
  </header> <!-- /.header -->