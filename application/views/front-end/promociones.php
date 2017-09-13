    <header id="head" class="secondary"></header>

    <!-- container -->
    <div class="container">

       

        <div class="row">

            <!-- section main content -->
            <section class="col-md-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Promociones</h1>
                </header>
                
<?php if(count($promociones)): foreach($promociones as $valor): ?>
                <article class="post well">
                    <span class="imgArticle pull-left ">
                        <img src="assets/uploads/files/<?php echo $valor->rutaImagen; ?>" class="img-thumbnail" />
                    </span>
                    <h3 class="title">
                        <a href="#"><?php echo $valor->titulo; ?></a>
                    </h3>
                    <p>
                        <span class="post-fecha">11 junio 2016</span> por <span class="post-autor">GonzaH</span>
                    </p>
                    <p class="text-justify">
                        <?php echo $valor->descripcion; ?>
                    </p>
                    <p class="text-right container-button">
                        <a href="#" class="btn btn-action">Ver</a>
                    </p>
                </article>
<?php endforeach; else: ?>
                <div class="alert alert-danger" role="alert">
                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                    <span class="sr-only">Error:</span>
                    No hay promociones disponibles!!!
                </div>
<?php endif; ?>
            </section>
            <!-- /section -->
        </div>
    </div>	<!-- /container -->
