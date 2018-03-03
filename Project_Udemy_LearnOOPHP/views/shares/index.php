<div>
	<a class="btn btn-success btn-share mb-20" href="<?php echo ROOT_URL; ?>shares/add"> Share something</a>
	<?php
		foreach($viewmodel as $item){
	?>
		<div class="well">
			<h3><?php echo $item['title']; ?></h3>
			<small><?php echo $item['date']; ?></small>
			<br/>
			<p><?php echo $item['body']; ?></p>
			<br/>
			<a class="btn btn-default" href="<?php echo $item['link']; ?>" target="_blank">Go to Website</a>
		</div>

	<?php

		}

	?>
</div>