<script src="<?=base_url();?>assets/ckeditor/ckeditor.js"></script>

<!-- --------------the main part-------------- -->
    <div class="span12">
      <hr style="margin-top:0px;">
      <div class="btn-group">
        <input class="btn btn-primary" onclick="createEditor();" type="button" value="">
        <input class="btn btn-primary" onclick="removeEditor();" type="button" value="">
      </div>
      <div id="editor">
  </div>
  <div id="contents" style="display: none">
    <p>
      Edited Contents:
    </p>
    <!-- This div will be used to display the editor contents. -->
    <div id="editorcontents">
    </div>
  </div>
    </div>


  </div>
</div>