
<!-- --------------- add quick useful bar ------------- -->
    <div class="navbar navbar-fixed-bottom">
      <div class="navbar-inner">
        <div class="container">
            <div class="btn-group pull-right">
              <a class="btn btn-primary todolist" href="#" data-placement='top' title="Popover Title"><i class="icon-leaf icon-white"></i> Todo</a>
              <a class="btn btn-primary mail" href="#" data-placement='top' title="Popover Title"><i class="icon-envelope icon-white"></i> Mail</a>
              <a class="btn btn-primary notice" href="#" data-placement='top' title="Popover Title"><i class="icon-bell icon-white"></i> Notice</a>
            </div>
        </div>
      </div>
    </div>

    </div>
</div>

<!-- ---------------todolist popover---------------- -->
    <div id="todolist_content" style="display:none;">
      <a class="btn btn-primary" href="#"><i class="icon-bell icon-white"></i> Notice</a>
    </div>
<!-- ---------------mail popover---------------- -->
    <div id="mail_content" style="display:none;">
      <a class="btn btn-primary" href="#"><i class="icon-bell icon-white"></i> Notice</a>
    </div>
<!-- ---------------notice popover---------------- -->
    <div id="notice_content" style="display:none;">
      <a class="btn btn-primary" href="#"><i class="icon-bell icon-white"></i> Notice</a>
    </div>

<!-- ----------------the js files----------------- -->
    <script src="<?=base_url();?>assets/js/jquery.js"></script>
    <script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url();?>assets/js/holder/holder.js"></script>
    <script src="<?=base_url();?>assets/js/google-code-prettify/prettify.js"></script>
    <script src="<?=base_url();?>assets/js/select2.min.js"></script>

    <script src="<?=base_url();?>assets/js/application.js"></script>

    <script src="<?=base_url();?>assets/js/wysihtml5-0.3.0.min.js"></script> 
    <script src="<?=base_url();?>assets/js/bootstrap-wysihtml5.js"></script>
    
<!-- -- this is for the bootstrap tooltip ------------------------------- -->
    <script type="text/javascript">
       $(function () {
           $("[rel='tooltip']").tooltip();
       });
    </script>

    <script type="text/javascript">
        $('.textarea').wysihtml5();
    </script>

    <script type="text/javascript">
      $(document).ready(function(){
        $('.todolist').popover({ 
          html : true,
          width : '396px',
          content: function() {
          return $('#todolist_content').html();
          }
        });
        $('.mail').popover({ 
          html : true,
          content: function() {
          return $('#mail_content').html();
          }
        });
        $('.notice').popover({ 
          html : true,
          content: function() {
          return $('#notice_content').html();
          }
        }); 
      });
    </script>

  </body>
</html>