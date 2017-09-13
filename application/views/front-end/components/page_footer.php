<footer id="footer" class="top-space">
    <div class="subFooter1">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-md-3 widget">
                    <h3 class="widget-title">Contacto</h3>
                    <div class="widget-body">
                        <p>+54-341-2369878<br>
                            <a href="mailto:#">alejandro@purrello.com</a><br>
                            <br>
                            Argentina, Santa Fe, Rosario, San luis 200
                        </p>	
                    </div>
                </div>

                <div class="col-xs-12 col-md-3 widget">
                    <h3 class="widget-title">Siguenos</h3>
                    <div class="widget-body">
                        <p class="follow-me-icons">
                            <a href=""><i class="fa fa-twitter fa-2"></i></a>
                            <a href=""><i class="fa fa-dribbble fa-2"></i></a>
                            <a href=""><i class="fa fa-github fa-2"></i></a>
                            <a href=""><i class="fa fa-facebook fa-2"></i></a>
                        </p>	
                    </div>
                </div>

                <div class="col-xs-12 col-md-6 widget">
                    <h3 class="widget-title">SP-Gestion</h3>
                    <div class="widget-body">
                        <p>
                            Sistema de gestion.
                        </p>                       
                    </div>
                </div>

            </div> <!-- /row of widgets -->
        </div>
    </div>

    <div class="subFooter2">
        <hr class="border-line"/>
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-md-6 widget">
                    <div class="widget-body">
                        <p class="simplenav">
                            <a href="<?php echo base_url(); ?>">Inicio</a> | 
                            <a href="<?php echo base_url('empresa'); ?>">Nosotros</a> |
                            <a href="<?php echo base_url('promociones'); ?>">Promociones</a> |
                            <a href="<?php echo base_url('contacto'); ?>">Contacto</a> |
                            <b><a href="<?php echo base_url('login'); ?>">Ingresar</a></b>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 widget">
                    <div class="widget-body">
                        <p class="text-right">
                            Copyright &copy; 2017, <strong>SPgestion</strong>
                        </p>
                    </div>
                </div>

            </div> <!-- /row of widgets -->
        </div>
    </div>

</footer>	


<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url('vendors/jquery/jquery_1.12.3.min.js'); ?>"></script>
<script src="<?php echo base_url('vendors/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('vendors/headroom/headroom.min.js'); ?>"></script>
<script src="<?php echo base_url('vendors/headroom/jQuery.headroom.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/front-end/js/template.js'); ?>"></script>

<!-- Carga jquery grocery_CRUD solo si llega la variable js_files -->
<?php if (isset($js_files)): ?>
    <?php foreach ($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>

<?php if(isset($uri_seccion)) : ?>
<!--script para manejar los active del menu-->
    <script>
        $(document).ready(function(){
            $('ul.navbar-nav > :nth-child(1)').removeAttr('class'); 
            $('#<?php echo $uri_seccion; ?>').attr('class', 'active');
        });
    </script>
<?php endif; ?>
</body>
</html>
