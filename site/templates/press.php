<?php layout() ?>

<article>
  <header class="max-w-xl mb-24">
    <h1 class="h1 mb-12">Download logos and screenshots for use in digital and print media</h1>
    <a class="btn btn--filled" href="<?= $page->file('kirby-3-presskit.zip')->url() ?>" download>
      <?= icon('download') ?> Download the press kit
    </a>
  </header>
  <section id="logo" class="mb-24">
    <h2 class="h2 mb-6">Logo</h2>
    <ul class="columns" style="--columns: 2; --gap: var(--spacing-12)">
      <?php foreach ($page->images()->filterBy('extension', 'svg') as $logo): ?>
      <li>
        <a href="<?= $logo->url() ?>" download>
          <figure>
            <p class="block p-6 mb-3 bg-light"><?= $logo->read() ?></p>
            <figcaption class="h6">
              <?= $logo->filename() ?>
              <small class="color-gray-700"><?= $logo->niceSize() ?></small>
            </figcaption>
          </figure>
        </a>
      </li>
      <?php endforeach ?>
    </ul>
  </section>
  <section id="screenshots">
    <h2 class="h2 mb-6">Screenshots</h2>
    <ul class="columns" style="--columns: 2; --gap: var(--spacing-12)">
      <?php foreach ($page->images()->filterBy('extension', 'png') as $screenshot): ?>
      <li>
        <a href="<?= $screenshot->resize(1400)->url() ?>" download>
          <?= $screenshot->html(['class' => 'shadow-2xl']) ?>
        </a>
      </li>
      <?php endforeach ?>
    </ul>
  </section>
</article>
