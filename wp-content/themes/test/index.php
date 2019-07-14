<?php get_header(); ?>
  
  <main class="main">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 order-3 order-lg-1 left-sidebar">
          <?php get_sidebar(); ?>
        </div> <!-- /.left-sidebar -->

        <div class="col-lg-6 col-md-8 order-1 order-lg-2 center-sidebar">
          <h1 class="text-center mb-5">Новости</h1>

          <div class="card mb-4">
            <img class="card-img-top" src="assets/i/photo-1.jpg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Красивые места в Blackwater</h4>
              <p class="card-text">В жизни бывают такие ситуации, когда нужно сделать «перезагрузку» - остаться одному, подумать над происходящим, отдохнуть от окружающих. Лучшим местом, где можно это сделать, будет, пожалуй, небольшой...</p>
              <p class="card-text"><small class="text-muted">Добавлено 3 минуты назад</small></p>
              <a href="#" class="btn btn-outline-success btn-sm">Читать далее...</a>
            </div>
          </div> <!-- / .card -->

           <div class="card mb-4">
            <img class="card-img-top" src="assets/i/photo-2.jpg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Топ 10 красивых фотографий природы Blackwater от членов сообщества</h4>
              <p class="card-text">Современные жители городов сегодня оторваны от природы, поэтому каждое прикосновение к ней становится настоящим настоящим событием. Даже если человек видит природу на фотографиях. В нашем обзоре топ 10 портретных фотографий...</p>
              <p class="card-text"><small class="text-muted">24 сентября 2017 16:34</small></p>
              <a href="#" class="btn btn-outline-success btn-sm">Читать далее...</a>
            </div>
          </div> <!-- / .card -->

           <div class="card mb-4">
            <img class="card-img-top" src="assets/i/photo-3.jpg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Озеро Селлар</h4>
              <p class="card-text">Увидев фотографию озера Селлар, невозможно не задаться вопросом, где же находится эта красота. А расположена она в...</p>
              <p class="card-text"><small class="text-muted">19 сентября 2017 15:17</small></p>
              <a href="#" class="btn btn-outline-success btn-sm">Читать далее...</a>
            </div>
          </div> <!-- / .card -->

          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-lg-center">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav> <!-- / .pagination -->
        </div> <!-- / .center-sidebar -->

        <div class="col-lg-3 col-md-4 order-2 order-lg-3 right-sidebar">
          <?php 
            if ( is_active_sidebar( 'sidebar-1' ) ) {
              dynamic_sidebar( 'sidebar-1' );
            }
          ?>
          <!-- <ul class="list-group mb-4">
            <li class="list-group-item active"> <i class="fa fa-tree mr-2" aria-hidden="true"></i> Все разделы</li>
            <li class="list-group-item"><i class="fa fa-free-code-camp mr-2" aria-hidden="true"></i>Кемпинг</li>
            <li class="list-group-item"><i class="fa fa-binoculars mr-2" aria-hidden="true"></i>Новые места</li>
            <li class="list-group-item"><i class="fa fa-paw mr-2" aria-hidden="true"></i>Животные</li>
            <li class="list-group-item"> <i class="fa fa-suitcase mr-2" aria-hidden="true"></i> Снаряжение</li>
            <li class="list-group-item"> <i class="fa fa-unlock mr-2" aria-hidden="true"></i> Лайфхаки</li>
          </ul>  -->
          <!-- / .list-group -->

          <h3>Теги</h3>
          <div class="block mb-4">
            <a href="#" class="badge badge-info">Красота</a>
            <a href="#" class="badge badge-info">Лес</a>
            <a href="#" class="badge badge-info">Помощник</a>
            <a href="#" class="badge badge-info">Озеро Таурен</a>
            <a href="#" class="badge badge-info">Реки</a>
            <a href="#" class="badge badge-info">Холм Нью-Кентон</a>
            <a href="#" class="badge badge-info">Еда</a>
            <a href="#" class="badge badge-info">Посиделки</a>
            <a href="#" class="badge badge-info">Путешествие</a>
            <a href="#" class="badge badge-info">Открытие</a>
            <a href="#" class="badge badge-info">Идеи для фото</a>
          </div> <!-- / .block -->

          <h3>Галерея</h3>
          <div class="block">
            <div class="row no-gutters">
              <div class="col-6">
                <img class="img-fluid" src="assets/i/gallery-1.jpg" alt="">
              </div>
              <div class="col-6">
                <img class="img-fluid" src="assets/i/gallery-2.jpg" alt="">
              </div>
               <div class="col-6">
                <img class="img-fluid" src="assets/i/gallery-3.jpg" alt="">
              </div>
              <div class="col-6">
                <img class="img-fluid" src="assets/i/gallery-4.jpg" alt="">
              </div>
               <div class="col-6">
                <img class="img-fluid" src="assets/i/gallery-2.jpg" alt="">
              </div>
              <div class="col-6">
                <img class="img-fluid" src="assets/i/gallery-6.jpg" alt="">
              </div>
            </div>
          </div> <!-- / .block -->
        </div> <!-- / .right-sidebar -->

      </div> <!-- /.row -->
    </div> <!-- /.container -->
  </main> <!-- /.main -->