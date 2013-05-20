<?php
/**
 * @file
 * Template for a 3 column panel layout.
 *
 * [33/33/33] stacked
 */
	
?>
<div id="header" class="sixteen columns">
	<div class="inner">
			<?php print $content['header']; ?>
	</div>
</div>
<div id="asp-content" class="clearfix">
	<div id="content-col-first" class="one-third column">
		<div class="inner">
				<?php print $content['column_first']; ?>
		</div>
	</div>
	
	<div id="content-col-second" class="one-third column">
		<div class="inner">
				<?php print $content['column_second']; ?>
		</div>
	</div>
	
	<div id="content-col-third" class="one-third column last">
		<div class="inner">
				<?php print $content['column_third']; ?>
		</div>
	</div>
</div>
<div id="footer" class="sixteen columns">
	<div class="inner">
			<?php print $content['footer']; ?>
	</div>
</div>
