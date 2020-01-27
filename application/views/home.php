<div class="container">
	<?php foreach($show as $key=> $value): ?>
	    <h3><?= $value['title'] ?></h3>
	    <p><?= $value['content'] ?></p>
	<?php endforeach ?>  
</div>
