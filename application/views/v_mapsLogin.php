<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery-1.11.0.js"></script>

        <script src="<?php echo base_url(); ?>js/app/login.js"></script>
        <link href="<?php echo base_url(); ?>css/app/login.css" rel="stylesheet">
    </head>
    
    <body>
        <script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>

        <div id="flogin" class="container">
            <div class="row vertical-offset-200">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Inicie Sesion</h3>
                        </div>
                        <div class="panel-body">
                            <form accept-charset="UTF-8" role="form" action="index.php/maps/ubicar">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Usuario" name="email" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Contraseña" name="password" type="password" value="">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me"> Recuerdame
                                        </label>
                                    </div>
                                    <input id="btningresar" class="btn btn-lg btn-primary btn-block" type="submit" value="Ingresar">
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
