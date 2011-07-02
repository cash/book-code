<?php
/**
 * remove once Elgg gets better layouts
 */
?>
<div id="elgg_content" class="clearfloat sidebar">
	<div id="elgg_sidebar">
		<?php
			echo elgg_view('page_elements/owner_block');
			if (isset($vars['area2'])) echo $vars['area2'];
			if (isset($vars['area3'])) echo $vars['area3'];

			echo elgg_view('elgg_sidebar/extend');
		?>
	</div>

	<div id="elgg_page_contents" class="clearfloat">
		<?php
			if (isset($vars['area1'])) echo $vars['area1'];
		?>
	</div>
</div>