<?php include_once('header.php'); ?>
    <!--==========================
        Intro Section
      ============================-->
    <section id="intro">

        <!--<div class="intro-content">
          <h2>Making <span>your ideas</span><br>happen!</h2>
          <div>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="#portfolio" class="btn-projects scrollto">Our Projects</a>
          </div>
        </div>-->

        <div id="intro-carousel" class="owl-carousel">
            <div class="item" style="background-image: url('img/intro-carousel/6.png');"></div>
            <div class="item" style="background-image: url('img/intro-carousel/7.jpg');"></div>
            <div class="item" style="background-image: url('img/intro-carousel/8.jpg');"></div>
            <div class="item" style="background-image: url('img/intro-carousel/4.png');"></div>

        </div>

    </section><!-- #intro -->

    <main id="main">

      
        <!--==========================
          Services Section
        ============================-->
        <section id="services">
            <div class="container">
                <div class="section-header">
                    <h2>Cursos Disponíveis </h2>
                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="box wow fadeInLeft">
                            <div class="icon"><img style="width: 80px; height: auto;" src="img/abc.jpg"/></div>
                            <h4 class="title"><a href="">Educação Infantil</a></h4>
                            <p class="description">Material didático especial e lúdico para o desenvolvimento da
                                criança,
                                integrando aspectos cognitivos e sociais nessa fase decisiva para o aprendizado.</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="box wow fadeInRight">
                            <div class="icon"><img style="width: 80px; height: auto;" src="img/fundamental.jpg"/></div>
                            <h4 class="title"><a href="">Ensino fundamental</a></h4>
                            <p class="description">Tecnologia e livros associados, estimulando a busca por conhecimento
                                e
                                desenvolvimento de habilidades e valores exigidos pelo mundo atual.</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="box wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="icon"><img style="width: 80px; height: auto;" src="img/medio.jpg"/></div>
                            <h4 class="title"><a href="">Ensino Médio</a></h4>
                            <p class="description">Metodologia e soluções educacionais que preparam o aluno para os
                                vestibulares e para serem cidadãos conscientes.</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="box wow fadeInRight" data-wow-delay="0.2s">
                            <div class="icon"><img style="width: 80px; height: auto;" src="img/prevestibular.png"/>
                            </div>
                            <h4 class="title"><a href="">Pré Vestibular</a></h4>
                            <p class="description">Curso preparatório com material exclusivo e de qualidade para que
                                nossos
                                alunos se superem nas provas.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- #services -->

        <!--==========================
        Noticias
      ============================-->

        <?php

        require_once 'conexao.php';
        $sql = "select * from noticia limit 3";
        $stmt = mysqli_query($mysqli, $sql);

        ?>
        <section id="noticias">
            <div class="container">
                <div class="section-header">
                    <h2>Mural de Notícias</h2>
                </div>
                <div class="row">
                    <?php

                    if (mysqli_num_rows($stmt) > 0) {
                    foreach (mysqli_fetch_all($stmt, MYSQLI_ASSOC) as $noticia) {

                        ?>
                        <div class="col-lg-4">
                            <div class="box wow float-right">
                                <div class="row">
                                    <div class="col-lg-12"><img src="img/<?= $noticia['foto_noticia'] ?>"/></div>
                                </div>
                                <h4 class="title"><a href="noticia.php?id=<?= $noticia['id_noticia'] ?>"><?= $noticia['titulo_noticia'] ?></a></h4>
                                <p class="description"><?= $noticia['subtitulo_noticia'] ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                    <div class="row">
                        <div class=" col-lg-2 col-ms-2 mais">
                            <a class="" href="noticias.php">Ver Tudo</a>
                        </div>
                    </div>
                </div>
                <?php } else { ?>

                    <div class="col-lg-4 text-white pb-3">
                        Nenhuma notícia disponível.
                    </div>

                <?php } ?>
        </section>
        <!--==========================
          Time
        ============================-->

        <section id="team" class="wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <h2>Aprovados nos Vestibulares</h2>
                </div>
                <div class="row">
                    <div class="owl-carousel testimonials-carousel">
                        <div class="testimonial-item">
                            <div class="col-lg-10 col-md-10">
                                <div class="member">
                                    <div class="pic"><img src="img/team-1.png" alt=""></div>
                                    <div class="details">
                                        <h4>Ana Martins</h4>
                                        <span>Sistemas</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="col-lg-10 col-md-10">
                                <div class="member">
                                    <div class="pic"><img src="img/team-1.png" alt=""></div>
                                    <div class="details">
                                        <h4>Sara Jhinson</h4>
                                        <span>sistemas</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="col-lg-10 col-md-10">
                                <div class="member">
                                    <div class="pic"><img src="img/team-1.png" alt=""></div>
                                    <div class="details">
                                        <h4>William Anderson</h4>
                                        <span>sistemas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="col-lg-10 col-md-10">
                                <div class="member">
                                    <div class="pic"><img src="img/team-1.png" alt=""></div>
                                    <div class="details">
                                        <h4>Amanda Jepson</h4>
                                        <span>sistemas</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- #team -->


        <!--==========================
         galeria
        ============================-->
        <section id="portfolio" class="wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <h2>MURAL DE FOTOS</h2>

                </div>
            </div>

            <div class="container-fluid">
                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-4">
                        <div class="portfolio-item wow fadeInUp">
                            <a href="img/portfolio/1.jpg" class="portfolio-popup">
                                <img src="img/portfolio/1.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-info"><h2 class="wow fadeInUp">Item 1</h2></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="portfolio-item wow fadeInUp">
                            <a href="img/portfolio/2.jpg" class="portfolio-popup">
                                <img src="img/portfolio/2.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-info"><h2 class="wow fadeInUp">Item 2</h2></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="portfolio-item wow fadeInUp">
                            <a href="img/portfolio/3.jpg" class="portfolio-popup">
                                <img src="img/portfolio/3.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-info"><h2 class="wow fadeInUp"> Item 3</h2></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="portfolio-item wow fadeInUp">
                            <a href="img/portfolio/4.jpg" class="portfolio-popup">
                                <img src="img/portfolio/4.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-info"><h2 class="wow fadeInUp">Item 4</h2></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="portfolio-item wow fadeInUp">
                            <a href="img/portfolio/5.jpg" class="portfolio-popup">
                                <img src="img/portfolio/5.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-info"><h2 class="wow fadeInUp">Item 5</h2></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="portfolio-item wow fadeInUp">
                            <a href="img/portfolio/6.jpg" class="portfolio-popup">
                                <img src="img/portfolio/6.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-info"><h2 class="wow fadeInUp">Item 6</h2></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="portfolio-item wow fadeInUp">
                            <a href="img/portfolio/7.jpg" class="portfolio-popup">
                                <img src="img/portfolio/7.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-info"><h2 class="wow fadeInUp">Item 7</h2></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="portfolio-item wow fadeInUp">
                            <a href="img/portfolio/8.jpg" class="portfolio-popup">
                                <img src="img/portfolio/8.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-info"><h2 class="wow fadeInUp">Item 8</h2></div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- #portfolio -->


        <!--==========================
          Testimonials Section
        ============================-->
        <section id="testimonials" class="wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <h2>MURAL DE DEPOIMENTOS</h2>
                    <p> xxxxxxxxxx x xxxxxxx xxxxxxx xxxxxxxx xxxxxx xxxxx xxxxxx xxx xxxxxxxxx xxxxxxxxxxx xx xxxxxx
                        xxxxxx xxxxxxx xx xx xxxxxx xxxx xxxxx xx x x xxxxx xxxxxxx xxxxxx xxxxx xxx xxxxxx </p>
                </div>
                <div class="owl-carousel testimonials-carousel">


                    <div class="testimonial-item">
                        <p>
                            <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                            xxxxxxxxx xx xxxxxxxxxx xxxxx xxxxxx xxxx xxxxx xxxxxxx xxxxxxx xxxxxx xxxxxxx xxxxxx xxxxx
                            xxxxxxxxx xxxxx xxxxxx xxxxxxxx xxxxxxx xxxxxx.
                            <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                        </p>
                        <img src="img/testimonial-5.jpg" class="testimonial-img" alt="">
                        <h3>John Larson</h3>
                        <h4>Entrepreneur</h4>
                    </div>

                </div>

            </div>
        </section><!-- #testimonials -->


       

    </main>
<?php include_once('rodape.php'); ?>