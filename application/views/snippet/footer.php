
<!-- --------------- add quick useful bar ------------- -->
    <div class="navbar navbar-fixed-bottom">
      <div class="navbar-inner">
        <div class="container">
            <div class="btn-group pull-right" data-toggle="buttons-radio">
              <a class="btn btn-primary" href="#Todolist" data-toggle="modal"><i class="icon-leaf icon-white"></i> Todo</a>
              <a class="btn btn-primary" href="#"><i class="icon-envelope icon-white"></i> Mail</a>
              <a class="btn btn-primary" href="#"><i class="icon-bell icon-white"></i> Notice</a>
            </div>
        </div>
      </div>
    </div>

    </div>
</div>

<!-- ----------------todolist modal---------------- -->
  <div id="Todolist" class="modal hide fade" tabindex="-1" role="dialog" 
      aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h3 id="myModalLabel">Modal header</h3>
    </div>
    <div class="modal-body">
      <p>One fine body…</p>
    </div>
    <div class="modal-footer">
      <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
      <button class="btn btn-primary">Save changes</button>
    </div>
  </div>

<!-- ----------------mail modal---------------- -->
  <div id="sitemail" class="modal hide fade" tabindex="-1" role="dialog" 
      aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h3 id="myModalLabel">Modal header</h3>
    </div>
    <div class="modal-body">
      <p>One fine body…</p>
    </div>
    <div class="modal-footer">
      <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
      <button class="btn btn-primary">Save changes</button>
    </div>
  </div>

<!-- ----------------notify modal---------------- -->
  <div id="Notice" class="modal hide fade" tabindex="-1" role="dialog" 
      aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h3 id="myModalLabel">Modal header</h3>
    </div>
    <div class="modal-body">
      <p>One fine body…</p>
    </div>
    <div class="modal-footer">
      <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
      <button class="btn btn-primary">Save changes</button>
    </div>
  </div>

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


  </body>
</html>