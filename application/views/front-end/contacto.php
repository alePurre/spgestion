    <header id="head" class="secondary"></header>

    <!-- container -->
    <div class="container">

       

        <div class="row">
            <article class="col-sm-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Contacto</h1>
                </header>
                <div class='col-sm-8 col-md-6'>
                    <?php if($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                          Consulta enviada con exito!!!
                         </div>
                    <?php endif; ?>                    
                    <?php if(! empty(validation_errors())) : ?>
                        <ul class="alert alert-danger" role="alert">
                            <?php echo validation_errors('<li>', '</li>'); ?>
                        </ul>
                     <?php endif; ?>
                    <form method="post" action="" id="frmContacto">
                        <fieldset class="form-group">
                            <label for="nombreLabel" class="control-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre" autofocus>
                            <span class="help-block"></span>
                        </fieldset>
                        
                        <fieldset class="form-group">
                            <label for="apellidoLabel" class="control-label">Apellido</label>
                            <input type="text" class="form-control" name="apellido" placeholder="Ingrese su apellido">
                            <span class="help-block"></span>
                        </fieldset>
                        
                        <fieldset class="form-group">
                            <label for="emailLabel" class="control-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                            <span class="help-block"></span>
                        </fieldset>
                        
                        <fieldset class="form-group">
                            <label for="numeroLabel" class="control-label">Número Telefonico</label>
                            <input type="text" class="form-control" name="telefono" placeholder="Teléfono">
                            <span class="help-block"></span>
                        </fieldset>
                        
                        <fieldset class="form-group">
                            <label for="consultaLabel" class="control-label">Ingrese su consulta:</label>
                            <textarea class="form-control" rows="5" name="consulta" placeholder="Consulta..."></textarea>
                            <span class="help-block"></span>
                        </fieldset>
                        <input type="submit" class="btn btn-primary">                    
                    </form>
                </div>
                
                <div class='col-sm-4 col-md-6'>
                    <h5>Encuentrenos</h5>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13392.11179519391!2d-60.6547370525927!3d-32.95027150169081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x31a37a7cef94fde8!2sEx+Superior+De+Comercio+Nro.+2+Gral.+Urquiza!5e0!3m2!1ses-419!2sar!4v1462889464913" 
                    width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe><br>
                    <h5>O comuniquese al:</h5>
                    <h5>0800-examinar</h5>
                </div>
            </article>
        </div>
    </div>
