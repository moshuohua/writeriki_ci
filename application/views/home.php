<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap-responsive.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?=base_url();?>assets/css/docs.css" type="text/css" media="screen"/>
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>
    <body>

        <!--===================================login style===============================-->
        <div class="row "> 
            <div class="" style="max-width:300px; margin: 30px auto 0px;">
                <a href="#"><img src="<?=base_url();?>assets/img/bolishu.png"></a>
            </div>
            <form style="max-width:300px; margin: 70px auto 0px;">
                <div class="">
                  <p>
                    <div class="input-prepend">
                        <span class="add-on" style="height:40px;">&nbsp<i class="icon-envelope" style="margin-top:10px;"></i>&nbsp</span>
                        <input class="span3" style="height:40px;" id="prependedInput" size="16" type="text" name="email" placeholder="邮箱地址">
                     </div>
                  </p>
                </div>
                <div>
                  <p>
                    <div class="input-prepend">
                        <span class="add-on" style="height:40px;">&nbsp<i class="icon-user" style="margin-top:10px;"></i>&nbsp</span>
                        <input class="span3" style="height:40px;" id="prependedInput" size="16" type="text" name="username" placeholder="用户名称">
                    </div>
                  </p>
                </div>
                <div class="">
                  <p>
                    <div class="input-prepend">
                        <span class="add-on" style="height:40px;">&nbsp<i class="icon-lock" style="margin-top:10px;"></i>&nbsp</span>
                        <input class="span3" style="height:40px;" id="prependedInput" size="16" type="password" name="password" placeholder="密码">
                    </div>
                  </p>
                </div>
                <div class="">
                  <p>
                    <div class="input-prepend">
                        <span class="add-on" style="height:40px;">&nbsp<i class="icon-retweet" style="margin-top:10px;"></i>&nbsp</span>
                        <input class="span3" style="height:40px;" id="prependedInput" size="16" type="password" name="password" placeholder="重复密码">
                    </div>
                  </p>
                </div>
                <button class="btn btn-large btn-info pull-right " type="button">注册</button>
            </form>
            <a href="#" class="btn btn-large btn-success pull-right" style="margin-right:10px;" type="button">随便逛逛</a>
        </div>
            
          <script src="<?=base_url();?>assets/js/jquery.js"></script>
          <script src="<?=base_url();?>assets/js/jquery.backstretch.min.js"></script>
          <script>
              $.backstretch("<?=base_url();?>assets/img/b.jpg");
          </script>
      </div>

  </body>
</html>
