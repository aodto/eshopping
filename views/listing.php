<div class="content">
	<h1>Listing All</h1>
	<?php 
	for($i=0; $i<count($this->items); $i++){
		$item = $this->items[$i];
		?>
		<div><?php echo $item['title'];?></div>
		<?php
	}
	?>
</div>