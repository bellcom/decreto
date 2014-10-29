<?php
/**
 * @file
 * page-meetings-overview.tpl.php
 */
?>

<h1><?php print t('Your meetings'); ?></h1>

<a href="/admin/content/meetingeditor/add"><?php print t('Create new'); ?></a>
<?php print $meetings_table; ?>
