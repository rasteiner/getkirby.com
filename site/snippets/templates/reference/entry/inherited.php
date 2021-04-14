<?php
extract([
  'inherited' => $page->inheritedFrom() ?? null
]);
?>
<?php if ($inherited): ?>
<strong id="inherited"><a href="#inherited">Inherited from</a></strong>
<?= Type::format(is_a($inherited, Page::class) ? $inherited->class() : $inherited) ?>
<?php endif ?>
