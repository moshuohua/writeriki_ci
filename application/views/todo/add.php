<h1>Add new to do</h1>
 
<?php echo validation_errors(); ?>
 
<form method="post" action="<?php echo site_url('todo/add')?>" >
    <label>Title</label><br/>
    <input type="text" name="title" value="<?php echo set_value('title'); ?>" /><br/>
    <label>Description</label><br/>
    <textarea name="description"><?php echo set_value('description'); ?></textarea><br/>
    <input type="submit" value="Add to do"/><br/>
</form>