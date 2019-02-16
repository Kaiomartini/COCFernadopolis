<?php include_once('header.php'); ?>

    <section id="noticia">
        <?php

        require_once 'conexao.php';
        if (isset($_GET['id'])) {

            $id = (int)$_GET['id'];
            $noticia = $sql = "select * from noticia where id_noticia = $id";
            $stmt = mysqli_query($mysqli, $sql);

        } else {
            $id = 0;
        }

        if ($id == 0 or mysqli_num_rows($stmt) == 0) {

            ?>

            <div class="container">
                <div class="section-header">
                    <h2>Notícia inválida</h2>
                </div>
                <a href="index.php">Voltar a página inicial.</a>
            </div>

            <?php

        } else {

            $noticia = mysqli_fetch_assoc($stmt);

            ?>
            <div class="capa-noticia row" style="
    height: 315px;
    background-image: url(img/<?= $noticia['foto_noticia'] ?>); background-size: cover;"></div>
            <div class="container">
                <div class="section-header">
                    <h2><?= $noticia['titulo_noticia'] ?></h2>
                    <p class="text-muted font-italic"><?= $noticia['subtitulo_noticia'] ?></p>
                </div>

                
                <p class="pt-5">
                    <?= $noticia['descricao_noticia'] ?>
                </p>

                <a href="index.php"> << Voltar a página inicial.</a>

            </div>

        <?php } ?>
    </section>

<?php include_once('rodape.php'); ?>