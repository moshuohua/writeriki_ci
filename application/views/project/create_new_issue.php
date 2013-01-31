<script src="<?=base_url();?>assets/ckeditor/ckeditor.js"></script>

  <div class="span12">
      <hr style="margin-top:0px;">
      <h2>Create New Issue</h2>
	    <hr>
      <form class="form-horizontal">
        <div class="control-group">
          <label class="control-label" for="inputEmail">Titel</label>
          <div class="controls">
            <input type="text" id="inputTitle" placeholder="Title">
          </div>
        </div>
        <textarea class="ckeditor" name="editor1" style="width:300px !important;"></textarea>
        <div class="control-group">
          <label class="control-label" for="inputPassword">Password</label>
          <div class="controls">
            <input type="password" id="inputPassword" placeholder="Password">
          </div>
        </div>
        <div class="control-group">
          <div class="controls">
            <label class="checkbox">
              <input type="checkbox"> Remember me
            </label>
            <button type="submit" class="btn">Sign in</button>
          </div>
        </div>
        <select class="g-select span3" style="display:none;">
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select>
      </form>

  </div>