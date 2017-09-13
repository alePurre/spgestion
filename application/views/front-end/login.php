<header id="head" class="secondary">
    
    
</header>

<div class="container">
    <div class="row">

        <article class="col-md-12 maincontent">
            <header class="page-header">
                <h1 class="page-title">Login</h1>
            </header>
            <div class="row">
                <div class="col-sm-offset-2 col-sm-8 col-md-offset-4 col-md-4">
                    <div class="text-center">
                        <img id="profile-img" src="<?php echo base_url('assets/front-end/img/perfil.png') ?>" />                    
                    </div>
                    <?php echo form_open('php'); ?>
                    <div id="LoginUsuarios">
                        <span id="reauth-email" class="reauth-email"></span>
                        <input type="email" class="form-control" placeholder="Nombre de Usuario"  name="maillogin" value="<?= set_value('maillogin'); ?>" required autofocus><br/>
                            
                            <div class="LoginUsuariosError"></div>
                            
                        <input type="password" name="passwordlogin" value="<?= set_value('passwordlogin'); ?>" class="form-control" placeholder="Password" required>
                            
                        <div class="LoginUsuariosError"><?= form_error('passwordlogin');?></div>
                        </br>
                            <div>
                                <?php if(isset($error)) echo "<b><span style='color:red;'>$error</span></b>"; ?>                                       
                            </div>
                        <div id="remember" class="checkbox">
                            <label>
                                <input type="checkbox" value="remember-me"> Recordarme!
                            </label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Ingresar</button><br/>
                    </form><!-- /form -->
                    <a href="#" class="forgot-password">
                        Olvidó su contraseña?
                        
                    </a>
                    
                    </div>
                </div>
            </div>
        </article>  
    </div>
</div>
