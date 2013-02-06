<script src="<?=base_url();?>assets/ckeditor/ckeditor.js"></script>

<script>

    var editor, html = '';

    function createEditor() {
      if ( editor )
        return;

      // Create a new editor inside the <div id="editor">, setting its value to html
      var config = {};
      editor = CKEDITOR.appendTo( 'editor', config, html );
    }

    function removeEditor() {
      if ( !editor )
        return;

      // Retrieve the editor contents. In an Ajax application, this data would be
      // sent to the server or used in any other way.
      document.getElementById( 'editorcontents' ).innerHTML = html = editor.getData();
      document.getElementById( 'contents' ).style.display = '';

      // Destroy the editor.
      editor.destroy();
      editor = null;
    }

  </script>

<!-- --------------the main part-------------- -->

    <div class="span12">
      <hr style="margin-top:0px;">
      <div class="btn-group" data-toggle="buttons-radio">
        <input class="btn btn-primary" onclick="createEditor();" type="button" value="Show edit style">
        <input class="btn btn-primary" onclick="removeEditor();" type="button" value="Show the doc">
      </div>
      <hr>
      <div id="editor">
      </div>
      <div id="contents" style="display: none">
<!-- ---- Show the editor content  ------------- -->
        <div id="editorcontents">
        </div>
      </div>
    </div>