

<script src="<?php echo base_url();?>assest/admin/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url();?>assest/admin/bower_components/jquery-ui/jquery-ui.min.js"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<!-- <script src="<?php echo base_url();?>assest/admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assest/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script> -->
<script src="<?php echo base_url();?>assest/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assest/admin/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url();?>assest/admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url();?>assest/admin/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<script src="<?php echo base_url();?>assest/admin/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url();?>assest/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="<?php echo base_url();?>assest/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url();?>assest/admin/bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?php echo base_url();?>assest/admin/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url();?>assest/admin/dist/js/demo.js"></script>
<script src="<?php echo base_url();?>assest/JqueryAjaxFormSubmit.js"></script>
<script src="<?php echo base_url();?>assest/jquery.form.js"></script>
<script src="<?php echo base_url();?>assest/jquery-blockUI.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assest/summernote/summernote-lite.js"></script>
<script type="text/javascript">
  $('.summernote').summernote({
      height:300
  });
  function remove_err(err_Id){
    $('#'+err_Id).html('');
  }
  function loadpage(url){
    $.blockUI
        ({ 
          css: 
          { 
              border: 'none', 
              padding: '15px', 
              backgroundColor: '#000', 
              '-webkit-border-radius': '10px', 
              '-moz-border-radius': '10px', 
              opacity: .5, 
              color: '#fff' 
          } 
        });
      $("#mainContentdiv").load(url);
      setTimeout($.unblockUI, 1000);
      
    }
function refresh(){
      $.ajax('<?php echo base_url();?>index.php?adminController/index/',   // request url
      {
        success: function (data, status, xhr) {// success callback function
          data=JSON.parse(data)
          //$('#total_response').html(data.count2121);          
        }
      });
    }
    $(document).ready(function() {
      setInterval(function() {
        refresh();
      }, 3000);
    });

</script>
