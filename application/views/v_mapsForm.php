<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery-1.11.0.js"></script>
        <script src="<?php echo base_url(); ?>js/app/ubicar.js"></script>

        <style type="text/css">
            @import url(http:////maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css);
            body{margin-top:20px;}
            .fa-fw {width: 2em;} 
            body{
                background: url(http://mymaplist.com/img/parallax/back.png);
                background-color: #444;
                background: url(http://mymaplist.com/img/parallax/pinlayer2.png),url(http://mymaplist.com/img/parallax/pinlayer1.png),url(http://mymaplist.com/img/parallax/back.png);    
            }
            .vertical-offset-200{
                padding-top:200px;
            }
            a{
               background-color: #c0c0c0; 
            }
        </style>
    </head>

    <body>
        <script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <ul class="nav nav-pills nav-stacked admin-menu">
                        <li class="active"><a href="#" data-target-id="home"><i class="fa fa-graduation-cap fa-fw"></i>Facultades UIGV</a></li>
                        <li><a href="" data-target-id="f1"><i class="fa fa-slack fa-fw"></i>Sistemas, Computo y Telecomunicaciones</a></li>
                        <li><a href="" data-target-id="f2"><i class="fa fa-file-o fa-fw"></i>Otra Facultad 1</a></li>
                        <li><a href="" data-target-id="f3"><i class="fa fa-bar-chart-o fa-fw"></i>Otra Facultad 2</a></li>
                        <li><a href="" data-target-id="f4"><i class="fa fa-table fa-fw"></i>Otra Facultad 3</a></li>
                        <li><a href="" data-target-id="f5"><i class="fa fa-tasks fa-fw"></i>Otra Facultad 4</a></li>
                        <li><a href="" data-target-id="f6"><i class="fa fa-calendar fa-fw"></i>Otra Facultad 5</a></li>
                        <li><a href="" data-target-id="f7"><i class="fa fa-book fa-fw"></i>Otra Facultad 6</a></li>
                        <li><a href="" data-target-id="f8"><i class="fa fa-pencil fa-fw"></i>Otra Facultad 7</a></li>
                        <li><a href="" data-target-id="f9"><i class="fa fa-cogs fa-fw"></i>Otra Facultad 8</a></li>
                    </ul>
                </div>
                <div class="col-md-9 well admin-content" id="home">
                    <p>
                        Facultades
                    </p>
                </div>
                <div class="col-md-9 well admin-content" id="f1">
                    <p>
                        Facultad de Ingeniería de Sistemas, Computo y Telecomunicaciones
                    </p>
                </div>
                <div class="col-md-9 well admin-content" id="f2">
                </div>
                <div class="col-md-9 well admin-content" id="f3">
                </div>
                <div class="col-md-9 well admin-content" id="f4">
                </div>
                <div class="col-md-9 well admin-content" id="f5">
                </div>
                <div class="col-md-9 well admin-content" id="f6">
                </div>
                <div class="col-md-9 well admin-content" id="f7">
                </div>
                <div class="col-md-9 well admin-content" id="f8">
                </div>
                <div class="col-md-9 well admin-content" id="f9">
                </div>
            </div>
        </div>
    </body>
</html>
