<div class="position_6" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="box_map">
                    <div class="row">
                        <div class="col-xs-2">
                            <div class="icon">
                                <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-xs-10">
                            <div class="text">1801 SW 3 RD SUITE 390</div>
                            <div class="text">Miami Fl 33129 USA</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
               <div class="box_email">
                    <div class="row">
                        <div class="col-xs-2">
                            <div class="icon">
                                <i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-xs-10">
                            <div class="text">ventas@asiaven.com</div>
                            <div class="text">proyectos@asiaven.com</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="box_phone">
                    <div class="row">
                        <div class="col-xs-2">
                            <div class="icon">
                                <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-xs-10">
                            <div class="text">+1 305-436-5801</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="rigths">
                        Copyright ⓒ <?php echo date("Y"); ?>. Todos los derechos reservados de ASIAVEN.
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container-->
</div> <!-- end position-->
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $( ".bar" ).click(function() {
          $( ".mainmenu" ).toggle();
        });
        linkInterno = $('a[href^="#"]');
        linkInterno.on('click',function(e) {
        e.preventDefault();
        var href = $(this).attr('href');
        $('html, body').animate({ scrollTop : $( href ).offset().top }, 'slow');
        });
    </script>
    <?php wp_footer(); ?>
  </body>
</html>