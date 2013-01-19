<h1>Welcome to CodeIgniter To Do List Application!</h1>
 
<h2>Next</h2>
<?php if($todo_list): ?>
<ul>
    <?php foreach($todo_list as $todo): ?>
    <li><h3><?= $todo->name ?></h3>
    <?php if($todo->description): ?><p><?= $todo->description ?></p><?php endif ?>
    </li>
    <?php endforeach ?>
</ul>
<?php else: ?>
None
<?php endif ?>
 
<h2>Completed</h2>
<?php if($completed_list): ?>
<ul>
    <?php foreach($completed_list as $todo): ?>
    <li><h3><?= $todo->name ?></h3>
    <?php endforeach ?>
</ul>
<?php else: ?>
None
<?php endif ?>