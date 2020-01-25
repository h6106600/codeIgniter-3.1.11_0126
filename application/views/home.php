<div class="container">
	<?php foreach($show as $key=> $value): ?>
        <div><?= $value['lid'] ?></div>
	    <h3><?= $value['title'] ?></h3>
	    <p><?= $value['content'] ?></p>
	<?php endforeach ?>  
</div>
