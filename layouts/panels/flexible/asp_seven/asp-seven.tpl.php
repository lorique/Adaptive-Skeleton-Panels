<?php
/**
 * @file
 * Template for a 3 column panel layout.
 *
 *	[25/50/25] stacked
 */

if (empty($content['column_first']) && empty($content['column_third'])) {
	$col_class = 'sixteen';
} elseif (empty($content['column_first']) || empty($content['column_third'])) {
	$col_class = 'twelve';
} else {
	$col_class = 'eight';
}
?>
<div id="header" class="sixteen columns">
	<div class="inner">
			<?php print $content['header']; ?>
	</div>
</div>
<div id="asp-content" class="clearfix">
	<?php if (!empty($content['column_first'])): ?>
		<div id="content-col-first" class="four columns">
			<div class="inner">
					<?php print $content['column_first']; ?>
			</div>
		</div>
	<?php endif; ?>
	
	<div id="content-col-second" class="<?php print $col_class; ?> columns">
		<div class="inner">
				<?php print $content['column_second']; ?>
		</div>
	</div>
	
	<?php if (!empty($content['column_third'])): ?>
		<div id="content-col-third" class="four columns last">
			<div class="inner">
					<?php print $content['column_third']; ?>
			</div>
		</div>
	<?php endif; ?>
</div>

<?php if (!empty($content['column_third'])): ?>
	<div id="footer" class="sixteen columns">
		<div class="inner">
				<?php print $content['footer']; ?>
		</div>
	</div>
<?php endif; ?>

