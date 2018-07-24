      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>Zé Wagner Excursões, Transportes e Turismo &copy; 20182019</p>
            </div>
            <div class="col-sm-6 text-right">
              <p>Desenvolvido by <a href="#" class="external">Monick Nogueira</a></p>
              <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- JavaScript files-->
    <script src="<?php echo base_url('resources/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('resources/vendor/popper.js/umd/popper.min.js');?>"> </script>
    <script src="<?php echo base_url('resources/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('resources/js/grasp_mobile_progress_circle-1.0.0.min.js');?>"></script>
    <script src="<?php echo base_url('resources/vendor/jquery.cookie/jquery.cookie.js');?>"> </script>
    <script src="<?php echo base_url('resources/vendor/chart.js/Chart.min.js');?>"></script>
    <script src="<?php echo base_url('resources/vendor/jquery-validation/jquery.validate.min.js');?>"></script>
    <script src="<?php echo base_url('resources/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js');?>"></script>
    <script src="<?php echo base_url('resources/js/charts-home.js');?>"></script>
    <!-- Main File-->
    <script src="<?php echo base_url('resources/js/front.js');?>"></script>
    <?php if (isset($script)) {
        echo $script;
    }?>
    <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
  </body>
</html>