<?php
/**
 * @file
 * Template for a 3 column panel layout.
 *
 * [50/50] stacked
 */
?>
<div id="header" class="sixteen columns">
	<div class="inner">
			<?php print $content['header']; ?>
	</div>
</div>
<div id="asp-content" class="clearfix">
	<div id="content-col-first" class="eight columns">
		<div class="inner">
				<?php print $content['column_first']; ?>
		</div>
	</div>

	<div id="content-col-second" class="eight columns">
		<div class="inner">
				<?php print $content['column_second']; ?>
		</div>
	</div>
</div>
<div id="footer" class="sixteen columns">
	<div class="inner">
			<?php print $content['footer']; ?>
	</div>
</div>
