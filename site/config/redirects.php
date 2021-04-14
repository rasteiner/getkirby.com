<?php

return [
    // Simple
    'blog/kosmos-(:any)'              => 'kosmos/$1',
    'community'                       => 'https://chat.getkirby.com',
    'community/(:all?)'               => 'https://chat.getkirby.com',
    'docs/guide/installation'         => 'docs/guide/quickstart',
    'docs/cheatsheet'                 => 'docs/reference',
    'docs/cheatsheet/(:all?)'         => 'docs/reference/$1',
    'docs/toolkit'                    => 'docs/reference',
    'docs/toolkit/(:all?)'            => 'docs/reference/$1',
    'docs/cookbook/migration/sites'   => 'docs/cookbook/setup/migrate-site',
    'docs/cookbook/migration/files'   => 'docs/cookbook/setup/migrate-files',
    'docs/cookbook/migration/users'   => 'docs/cookbook/setup/migrate-users',
    'docs/cookbook/migration/plugins' => 'docs/cookbook/setup/migrate-plugins',
    'made-with-kirby-and-love'        => 'love',
    'product'                         => 'features/developers',
    'reference'                       => 'docs/reference',
    'reference/(:all)'                => 'docs/reference/$1',
    'resources'                       => 'kosmos',
    'v3'                              => 'releases/3.0',
    'v35'                             => 'releases/3.5',
    'why'                             => 'features/developers',

    // With logic
    'docs/reference/(:any)/(:all?)' => function ($group, $path = null) {
        if ($page = page('docs/reference')->grandChildren()->listed()->findBy('uid', $group)) {
            return $page->id() . '/'. $path;
        }

        return 'error';
    },
    'docs/cookbook/(:any)/(:all)'     => function ($category, $uid) {
        if ($page = page('docs/cookbook')->grandChildren()->listed()->findBy('uid', $uid)) {
            return $page->url();
        }

        return 'error';
    }
];
