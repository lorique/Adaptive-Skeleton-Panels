<?php
/**
 * @file
 * Template for a 1 column panel layout.
 */
?>
<div id="asp-content" class="clearfix row">
	<div id="content-row-first" class="sixteen columns">
		<div class="inner">
				<?php print $content['row_first']; ?>
		</div>
	</div>
</div>

<div id="asp-content" class="clearfix row">
  <div id="content-row-second" class="sixteen column">
    <div class="inner">
        <?php print $content['row_second']; ?>
    </div>
  </div>
</div>

<div id="asp-content" class="clearfix row">
  <div id="content-row-third" class="sixteen column">
    <div class="inner">
        <?php print $content['row_third']; ?>
    </div>
  </div>
</div>
