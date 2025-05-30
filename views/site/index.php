<main>

  <?php

  use yii\widgets\ListView;
  ?>
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

      <div class="page-section border-top">
        <div class="container">
          <div class="text-center wow fadeInUp">
            <h2 class="title-section">Pricing Plan</h2>
            <div class="divider mx-auto"></div>
          </div>

          <div class="row justify-content-center">
            <div class="col-12 col-lg-auto py-3 wow fadeInLeft">
              <div class="card-pricing">
                <div class="header">
                  <div class="price-icon"><span class="mai-people"></span></div>
                  <div class="price-title">Membership</div>
                </div>
                <div class="body py-3">
                  <div class="price-tag">
                    <span class="currency">$</span>
                    <h2 class="display-4">30</h2>
                    <span class="period">/monthly</span>
                  </div>
                  <div class="price-info">
                    <p>Choose the plan that right for you</p>
                  </div>
                </div>
                <div class="footer">
                  <a href="#" class="btn btn-outline rounded-pill">Choose Plan</a>
                </div>
              </div>
            </div>

            <div class="col-12 col-lg-auto py-3 wow fadeInUp">
              <div class="card-pricing active">
                <div class="header">
                  <div class="price-labled">Best</div>
                  <div class="price-icon"><span class="mai-business"></span></div>
                  <div class="price-title">Dedicated</div>
                </div>
                <div class="body py-3">
                  <div class="price-tag">
                    <span class="currency">$</span>
                    <h2 class="display-4">60</h2>
                    <span class="period">/monthly</span>
                  </div>
                  <div class="price-info">
                    <p>Choose the plan that right for you</p>
                  </div>
                </div>
                <div class="footer">
                  <a href="#" class="btn btn-outline rounded-pill">Choose Plan</a>
                </div>
              </div>
            </div>

            <div class="col-12 col-lg-auto py-3 wow fadeInRight">
              <div class="card-pricing">
                <div class="header">
                  <div class="price-icon"><span class="mai-rocket-outline"></span></div>
                  <div class="price-title">Private</div>
                </div>
                <div class="body py-3">
                  <div class="price-tag">
                    <span class="currency">$</span>
                    <h2 class="display-4">90</h2>
                    <span class="period">/monthly</span>
                  </div>
                  <div class="price-info">
                    <p>Choose the plan that right for you</p>
                  </div>
                </div>
                <div class="footer">
                  <a href="#" class="btn btn-outline rounded-pill">Choose Plan</a>
                </div>
              </div>
            </div>

          </div>
        </div> <!-- .container -->
      </div> <!-- .page-section -->

      <div class="page-section bg-light">
        <div class="container">

          <div class="owl-carousel wow fadeInUp" id="testimonials">
            <div class="item">
              <div class="row align-items-center">
                <div class="col-md-6 py-3">
                  <div class="testi-image">
                    <img src="plantilla/img/person/person_1.jpg" alt="">
                  </div>
                </div>
                <div class="col-md-6 py-3">
                  <div class="testi-content">
                    <p>Necessitatibus ipsum magni accusantium consequatur delectus a repudiandae nemo quisquam dolorum itaque, tenetur, esse optio eveniet beatae explicabo sapiente quo.</p>
                    <div class="entry-footer">
                      <strong>Melvin Platje</strong> &mdash; <span class="text-grey">CEO Slurin Group</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="row align-items-center">
                <div class="col-md-6 py-3">
                  <div class="testi-image">
                    <img src="plantilla/img/person/person_2.jpg" alt="">
                  </div>
                </div>
                <div class="col-md-6 py-3">
                  <div class="testi-content">
                    <p>Repudiandae vero assumenda sequi labore ipsum eos ducimus provident a nam vitae et, dolorum temporibus inventore quaerat consectetur quos! Animi, qui ratione?</p>
                    <div class="entry-footer">
                      <strong>George Burke</strong> &mdash; <span class="text-grey">CEO Letro</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div> <!-- .container -->
      </div> <!-- .page-section -->

      <div class="page-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 py-3 wow fadeInUp">
              <h2 class="title-section">Get in Touch</h2>
              <div class="divider"></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Laborum ratione autem quidem veritatis!</p>

              <ul class="contact-list">
                <li>
                  <div class="icon"><span class="mai-map"></span></div>
                  <div class="content">123 Fake Street, New York, USA</div>
                </li>
                <li>
                  <div class="icon"><span class="mai-mail"></span></div>
                  <div class="content"><a href="#">info@digigram.com</a></div>
                </li>
                <li>
                  <div class="icon"><span class="mai-phone-portrait"></span></div>
                  <div class="content"><a href="#">+00 1122 3344 55</a></div>
                </li>
              </ul>
            </div>
            <div class="col-lg-6 py-3 wow fadeInUp">
              <div class="subhead">Contact Us</div>
              <h2 class="title-section">Drop Us a Line</h2>
              <div class="divider"></div>

              <form action="#">
                <div class="py-2">
                  <input type="text" class="form-control" placeholder="Full name">
                </div>
                <div class="py-2">
                  <input type="text" class="form-control" placeholder="Email">
                </div>
                <div class="py-2">
                  <textarea rows="6" class="form-control" placeholder="Enter message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary rounded-pill mt-4">Send Message</button>
              </form>
            </div>
          </div>
        </div> <!-- .container -->
      </div> <!-- .page-section -->

      <div class="page-section border-top">
        <div class="container">
          <div class="text-center wow fadeInUp">
            <div class="subhead">Our Blog</div>
            <h2 class="title-section">Read our latest <span class="marked">News</span></h2>
            <div class="divider mx-auto"></div>
          </div>
          <div class="row my-5 card-blog-row">
            <div class="col-md-6 col-lg-3 py-3 wow fadeInUp">
              <div class="card-blog">
                <div class="header">
                  <div class="entry-footer">
                    <div class="post-author">Sam Newman</div>
                    <a href="#" class="post-date">23 Apr 2020</a>
                  </div>
                </div>
                <div class="body">
                  <div class="post-title"><a href="blog-single.html">What is Business Management?</a></div>
                </div>
                <div class="footer">
                  <a href="blog-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 py-3 wow fadeInUp">
              <div class="card-blog">
                <div class="header">
                  <div class="avatar">
                    <img src="plantilla/img/person/person_1.jpg" alt="">
                  </div>
                  <div class="entry-footer">
                    <div class="post-author">Sam Newman</div>
                    <a href="#" class="post-date">23 Apr 2020</a>
                  </div>
                </div>
                <div class="body">
                  <div class="post-title"><a href="blog-single.html">What is Business Management?</a></div>
                  <div class="post-excerpt">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                </div>
                <div class="footer">
                  <a href="blog-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 py-3 wow fadeInUp">
              <div class="card-blog">
                <div class="header">
                  <div class="avatar">
                    <img src="plantilla/img/person/person_2.jpg" alt="">
                  </div>
                  <div class="entry-footer">
                    <div class="post-author">Sam Newman</div>
                    <a href="#" class="post-date">23 Apr 2020</a>
                  </div>
                </div>
                <div class="body">
                  <div class="post-title"><a href="blog-single.html">What is Business Management?</a></div>
                  <div class="post-excerpt">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                </div>
                <div class="footer">
                  <a href="blog-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 py-3 wow fadeInUp">
              <div class="card-blog">
                <div class="header">
                  <div class="avatar">
                    <img src="plantilla/img/person/person_3.jpg" alt="">
                  </div>
                  <div class="entry-footer">
                    <div class="post-author">Sam Newman</div>
                    <a href="#" class="post-date">23 Apr 2020</a>
                  </div>
                </div>
                <div class="body">
                  <div class="post-title"><a href="blog-single.html">What is Business Management?</a></div>
                  <div class="post-excerpt">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                </div>
                <div class="footer">
                  <a href="blog-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
                </div>
              </div>
            </div>
          </div>

          <div class="text-center">
            <a href="blog.html" class="btn btn-outline-primary rounded-pill">Discover More</a>
          </div>
        </div> <!-- .container -->
      </div> <!-- .page-section -->

      <div class="page-section client-section">
        <div class="container-fluid">
          <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 justify-content-center">
            <div class="item wow zoomIn">
              <img src="plantilla/img/clients/airbnb.png" alt="">
            </div>
            <div class="item wow zoomIn">
              <img src="plantilla/img/clients/google.png" alt="">
            </div>
            <div class="item wow zoomIn">
              <img src="plantilla/img/clients/stripe.png" alt="">
            </div>
            <div class="item wow zoomIn">
              <img src="plantilla/img/clients/paypal.png" alt="">
            </div>
            <div class="item wow zoomIn">
              <img src="plantilla/img/clients/mailchimp.png" alt="">
            </div>
          </div>
        </div> <!-- .container-fluid -->
      </div> <!-- .page-section -->
</main>