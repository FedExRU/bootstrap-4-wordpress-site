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
      <?= get_custom_logo(); ?>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?=
          wp_nav_menu( 
            array(
              'container' => false,
              'menu_class' => 'navbar-nav mr-auto',
              'walker' => new Pu_Walker_Nav_Menu(),
              'li_class' => 'nav-item',
              'a_class' => 'nav-link',
            ) 
          );
        ?>
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