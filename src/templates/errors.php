
<?php
if (isset($_SESSION['errors']))
foreach($_SESSION['errors'] as $err): ?>
	<div><?=$err?></div>
<?php endforeach ?>
<?php $_SESSION['errors'] = [] ?>
