<?php
/**
 * @file
 * Template for Decreto Dashboard home.
 */
?>

<?php if (!empty($blocks)): ?>
  <?php foreach($blocks as $block): ?>
      <div class="col-sm-6">
        <div class="well well-sm">
          <?php print $block; ?>
        </div>
      </div>
  <?php endforeach; ?>
<?php endif; ?>
