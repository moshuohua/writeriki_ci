<!-- --------------- add quick useful bar ------------- -->
    <div class="navbar navbar-fixed-bottom">
      <div class="navbar-inner">
        <div class="container">
            <div class="btn-group pull-right">
              <a class="btn btn-primary todolist" href="#" data-placement='top' title="Todolist"><i class="icon-leaf icon-white"></i> Todo</a>
              <a class="btn btn-primary mail" href="#" data-placement='top' title="Popover Title"><i class="icon-envelope icon-white"></i> 私信</a>
              <a class="btn btn-primary notice" href="#" data-placement='top' title="Popover Title"><i class="icon-bell icon-white"></i> 消息</a>
            </div>
        </div>
      </div>
    </div>

<!-- ---------------todolist popover---------------- -->
    <div id="todolist_content" style="display:none;">
      <div class="scrollable scrollheight">
        <!-- collapse -->

        <div class="accordion" id="accordion2">
          <div class="accordion-group">
            <button type="button" class="btn btn-primary btn-block" data-toggle="collapse" data-target="#demo">
              分类一
            </button>
            <div id="demo" class="accordion-body collapse">
              <div class="accordion-inner">
                <form class="navbar-form">
                  <input class="input-block-level" id="focusedInput" type="text" style="margin-bottom:10px;" value="添加新任务">
                </form>
                <div class="alert fade in alert-primary todo-alert-margin">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>Holy guacamole!</strong>
                </div>
                <div class="alert fade in todo-alert-margin">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>Holy guacamole!</strong>
                </div>
                <div class="alert fade in todo-alert-margin">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>Holy guacamole!</strong>
                </div>
                <div class="alert fade in todo-alert-margin">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>Holy guacamole!</strong>
                </div>
                <div class="alert fade in todo-alert-margin">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>Holy guacamole!</strong>
                </div>
                <hr>
                <p>
                  <a href="" class="btn">修改名称</a>
                  <a href="" class="btn">删除分类</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <button class="btn btn-large btn-block btn-danger" type="button" style="padding:9px !important;margin-top:-14px;">
          添加新分类
        </button>

      </div>
    </div>
<!-- ---------------mail popover---------------- -->
    <div id="mail_content" style="display:none;">
      <div class="scrollable scrollheight">
        <h4>Overflowing text to show optional scrollbar</h4>
      </div>    
    </div>
<!-- ---------------notice popover---------------- -->
    <div id="notice_content" style="display:none;">
      <div class="scrollable scrollheight">
        <h4>Overflowing text to show optional scrollbar</h4>
      </div>
    </div>

<!-- end container -->
    </div>
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

    <script src="<?=base_url();?>assets/js/jquery.masonry.min.js"></script>
    
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

    <script type="text/javascript">
      $(function(){
        // masonry plugin call
        $('#timebox').masonry({itemSelector : '.item'});
  
        //injecting arrow points
        function Arrow_Points(){
          var s = $("#timebox").find(".item");
          $.each(s,function(i,obj){
          var posLeft = $(obj).css("left");
          if(posLeft == "0px"){
           html = "<span class='rightCorner'></span>";
            $(obj).prepend(html);
          } else {
            html = "<span class='leftCorner'></span>";
            $(obj).prepend(html);
          }
          });
        }
        Arrow_Points();
      });
    </script>

  </body>
</html>