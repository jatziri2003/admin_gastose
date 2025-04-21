<?php
use webvimark\modules\UserManagement\UserManagementModule;
?>
  <nav class="navbar navbar-expand-lg navbar-light navbar-float">
      <div class="container">
        <a href="" class="navbar-brand">Admin<span class="text-primary">Gast</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-lg-4 pt-3 pt-lg-0">
            <li class="nav-item active">
              <a href="" class="nav-link">Inicio</a>
            </li>
            <li class="nav-item">
              <a href="about" class="nav-link">Conocenos</a>
            </li>
            <li class="nav-item">
              <a href="services.html" class="nav-link">Servicios</a>
            </li>
            <li class="nav-item">
              <a href="blog.html" class="nav-link">Informe</a>
            </li>
            <li class="nav-item">
              <a href="contact.html" class="nav-link">Contacto</a>
            </li>
            <?= UserManagementModule::menuItems() ?>
          </ul>

          <div class="ml-auto">
            <a href="/usuario/create" class="btn btn-outline rounded-pill">REGISTRATE</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- <div class="page-banner home-banner">
      <div class="container h-100">
        <div class="row align-items-center h-100">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1 class="mb-4">Administrador de Gastos Estudiantiles</h1>
            <p class="text-lg mb-5"> <h3>¡Gestiona tus Finanzas como Estudiante de Manera Inteligente!<br></h3>
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
    </div> -->
