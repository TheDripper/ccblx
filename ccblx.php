<?php
/*
 * Plugin Name: CCBLX
*/
?>
<?php 
Class CCBLX {
	public $blocks = [];
	public function __construct() {
		foreach(get_field('blocks') as $block):
			$this->blocks[] = $block;
		endforeach;
	}
	public function primary($block) {
		foreach($block['cells'] as $cell): ?>
		<div class=cell style=background-image:url(<?php echo $cell['image']; ?>);>
		<h2><?php echo $cell['title']; ?></h2>
		<p><?php echo $cell['blurb']; ?></p>
		</div>
		<?php endforeach;
	}
	public function show() {
		foreach($this->blocks as $block) {
			$out = $block['acf_fc_layout'];
			$this->$out($block);
		}
	}

}
?>
