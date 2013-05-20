<?php
/**
 * @file
 * Template for a 3 column panel layout.
 *
 *	[25/50/25] stacked
 */
	
?>
<div id="header" class="sixteen columns">
	<div class="inner">
			<?php print $content['header']; ?>
	</div>
</div>
<div id="asp-content" class="clearfix">
	<div id="content-col-first" class="four columns">
		<div class="inner">
				<?php print $content['column_first']; ?>
		</div>
	</div>
	
	<div id="content-col-second" class="eight columns">
		<div class="inner">
				<?php print $content['column_second']; ?>
		</div>
	</div>
	
	<div id="content-col-third" class="four columns last">
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
