<?php
/**
 * @file
 * Template for a page panel layout.
 */

?>
<div id="asp-content" class="clearfix container">
  <!-- First column -->
  <header>
    <div class="container row">
      <div class="sixteen columns">
        <div class="inner">
          <?php print $content['corporate_area']; ?>
        </div>
      </div>
    </div>

    <div class="container row">
      <div class="four columns">
        <div class="inner">
          <?php print $content['logo_area']; ?>
        </div>
      </div>
      <div class="eight columns">
        <div class="inner">
          <?php print $content['center_banner']; ?>
        </div>
      </div>
      <div class="four columns">
        <div class="inner">
          <?php print $content['call_to_action']; ?>
        </div>
      </div>
    </div>

    <div class="container row">
      <div class="sixteen columns">
        <div class="inner">
          <?php print $content['main_menu']; ?>
        </div>
      </div>
    </div>
  </header>

  <div id="main-content">
    <div class="container row">
      <div class="sixteen columns">
        <div class="inner">
          <?php print $content['main']; ?>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container row">
      <div class="four columns">
        <div class="inner">
          <?php print $content['branding']; ?>
        </div>
      </div>
      <div class="four columns">
        <div class="inner">
          <?php print $content['branding_two']; ?>
        </div>
      </div>
      <div class="eight columns">
        <div class="inner">
          <?php print $content['footer']; ?>
        </div>
      </div>
    </div>
  </footer>
</div>
