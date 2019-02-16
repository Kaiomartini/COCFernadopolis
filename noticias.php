<?php include_once('header.php'); ?>

<section id="tnoticias">
    <div class="container">

        <div class="section-header">
            <h2>Mural de Notícias</h2>
        </div>

        <div class="row">
            <?php

            require_once 'conexao.php';
            $sql = "select * from noticia";
            $stmt = mysqli_query($mysqli, $sql);
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
                            <a class="leia-mais"style="color:#fff">LEIA MAIS >></a>
                        </div>
                    </div>
                    <?php

                }
            } else {

                ?>

                <div class="col-lg-4">
                    Nenhuma notícia disponível.
                </div>

                <?php
            }

            ?>

        </div>


    </div>

</section>

<?php include_once('rodape.php'); ?>
