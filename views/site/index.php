<main>

  <?php

  use yii\widgets\ListView;
  ?>




  <!-- Introduccion -->
  <div class="page-banner home-banner">
    <div class="container h-100">
      <div class="row align-items-center h-100">
        <div class="col-lg-6 py-3 wow fadeInUp">
          <h1 class="mb-4">Administrador de Gastos Estudiantiles</h1>
          <p class="text-lg mb-5">
          <h3>¡Gestiona tus Finanzas como Estudiante de Manera Inteligente!<br></h3>
          La herramienta definitiva para administrar y controlar tus gastos como estudiante.
          Sabemos que la vida universitaria puede ser costosa,
          por eso hemos creado una plataforma intuitiva y
          fácil de usar que te ayudará a organizar tus finanzas, optimizar tu presupuesto y
          alcanzar tus metas económicas sin preocupaciones.
          </p>

          <a href="#" class="btn btn-outline border text-secondary">Leer mas..</a>
          <a href="#" class="btn btn-primary btn-split ml-2">Inicio<div class="fab"><span class="mai-play"></span></div></a>
        </div>
        <div class="col-lg-6 py-3 wow zoomIn">
          <div class="img-place">
            <img src="plantilla/img/bg_image_1.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-index">
    <div class="body-content">
      <div class="jumbotron text-center">
        <h1 class="display-4"><?= Yii::t('app', 'Bienvenid@s') ?></h1>
      </div>
      <br><br>
      <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'options' => [
          'class' => 'row row-cols-lg-4 row-cols-md-4 row-cols-sm-3'
        ],
        'layout' => '{items}',
        'summary' => false,
        'itemView' => '_dashboard',
      ]) ?>
    </div>
  </div>

  <!-- contenedor banco -->
  <div class="page-section features">
    <div class="container">
      <div class="row justify-content-center">

        <?php foreach ($bancos as $banco) { ?>

          <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
            <div class="d-flex flex-row">
              <div class="img-fluid mr-3">
                <img src="plantilla/img/icon_pattern.svg" alt="">
              </div>
              <div>
                <h5><?= $banco->ban_nombre ?></h5>
                <p><?= $banco->ban_descripcion ?></p>
              </div>
            </div>
          </div>

        <?php } ?>

      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 py-3 wow zoomIn">
          <div class="img-place text-center">
            <img src="plantilla/img/bg_image_2.png" alt="">
          </div>
        </div>
        <div class="col-lg-6 py-3 wow fadeInRight">
          <h2 class="title-section">We're <span class="marked">Dynamic</span> Team of Creatives People</h2>
          <div class="divider"></div>
          <p>We provide marketing services to startups & small business to looking for partner for their digital media, design & dev lead generation & communication.</p>
          <div class="img-place mb-3">
            <img src="plantilla/img/testi_image.png" alt="">
          </div>
          <a href="#" class="btn btn-primary">More Details</a>
          <a href="#" class="btn btn-outline border ml-2">Success Stories</a>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section counter-section">
    <div class="container">
      <div class="row align-items-center text-center">
        <div class="col-lg-4">
          <h2>Ingreso</h2>
          <h2>$<span class="number" data-number="816278"></span></h2>
        </div>
        <div class="col-lg-4">
          <h2>Egreso</h2>
          <h2>$<span class="number" data-number="216422"></span></h2>
        </div>
        <div class="col-lg-4">
          <h2>Ahorro</h2>
          <h2>$<span class="number" data-number="216422"></span></h2>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 py-3 wow fadeInLeft">
          <h2 class="title-section">We're <span class="marked">ready to</span> Serve you with best</h2>
          <div class="divider"></div>
          <p class="mb-5">We provide marketing services to startups & small business to looking for partner for their digital media, design & dev lead generation & communication.</p>
          <a href="#" class="btn btn-primary">More Details</a>
          <a href="#" class="btn btn-outline ml-2">See pricing</a>
        </div>
        <div class="col-lg-6 py-3 wow zoomIn">
          <div class="img-place text-center">
            <img src="plantilla/img/bg_image_3.png" alt="">
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="subhead"><span class="marked">Carreras</span></div>
        <h2>¡Formas parte de una de ellas!</h2>
        <div class="divider mx-auto"></div>
      </div>

      <!-- contenedor carrera -->
      <div class="row" justify-content-center>
        <?php foreach ($carreras as $carrera) { ?>
          <div class="col-md-3 col-lg-4 py-2 wow fadeInUp">

            <div class="text-center">
              <div class="display-3"><img src="img/carreras/<?= $carrera->car_id ?>.png" width="30%" heigth="50px"></div>
              <h5><?= $carrera->car_nombre ?></h5>
              <p><?= $carrera->car_semestres ?> Semestres <br> <?= $carrera->car_clave ?></p>
            </div>
          </div> <!-- Cierre correcto dentro del foreach -->
        <?php } ?>
      </div> <!-- Cierre de row -->

</main>