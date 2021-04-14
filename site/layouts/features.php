<!DOCTYPE html>
<html lang="en">
<head>
  <?php snippet('layouts/head') ?>
  <?= css('assets/css/layouts/features.css') ?>
</head>
<body>
  <?php snippet('layouts/header') ?>
  <main id="main" class="main">
    <?php slot('container') ?>
    <div class="container">
      <article>
        <header class="mb-36">
          <div class="columns" style="--columns-md: 1; --columns: 2; --column-gap: var(--spacing-24)">
            <div>
              <h1 class="h1 max-w-xl mb-6"><?= $page->headline()->or($page->description()) ?></h1>
              <p class="h1 font-thin">&darr;</p>
            </div>
            <div class="pt-3">
              <p class="h6 mb-3"><?= $page->title() ?></p>
              <ul class="features-checklist">
                <?php foreach ($page->benefits()->yaml() as $item): ?>
                <li>
                  <?= icon('check') ?> <?= $item ?>
                </li>
                <?php endforeach ?>
              </ul>
            </div>
          </div>
        </header>

        <?php slot() ?>
        <?php endslot() ?>

        <section id="get-started" class="mb-42">
          <h2 class="h2 text-center mb-6">What are you waiting for?</h2>
          <?php snippet('cta', [
            'buttons' => [
              [
                'text' => 'Try now',
                'link' => '/try',
                'icon' => 'download'
              ],
              [
                'text'  => 'Guide',
                'link'  => '/docs/guide',
                'icon'  => 'flash',
                'style' => 'outlined'
              ]
            ]
          ]) ?>
        </section>

        <section id="for">
          <?php snippet('audience') ?>
        </section>

      </article>
    </div>
    <?php endslot() ?>
  </main>
  <?php snippet('layouts/footer') ?>
</body>
</html>
