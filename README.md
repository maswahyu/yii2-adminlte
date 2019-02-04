Yii2 AdminLTE 3.x Asset Bundle
==============================

This is [AdminLTE 3.x](https://adminlte.io/themes/dev/AdminLTE/index3.html) Asset Bundle for Yii 2

# Installation

The preferred way to install this extension is through composer.

```
composer require maswahyu/yii2-adminlte "*"
```

Add `@bower` alias in `config/web.php`

```
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
    ],
```

To use as default layout, you can set in `config/web.php`

```
    /* set default layout */
    'layout' => '@vendor/maswahyu/yii2-adminlte/src/views/layouts/admin.php',
```

This Asset Bundle can be customized in config `assetManager`.

```
        'assetManager' => [
            'bundles' => [
                'maswahyu\adminlte\assets\AdminLteAsset' => [
                    'logo' => 'logo.png',
                    'navbarVariant' => 'navbar-light bg-white',
                    'sidebarMenu' => [
                        ['icon' => 'fa fa-tachometer-alt', 'label' => 'Dashboard', 'url' => ['site/index']],
                        ['label' => 'MARKETING'],
                        ['icon' => 'fa fa-th', 'label' => 'Widgets', 'url' => ['site/widget'], 'items' => [
                            ['icon' => 'fa fa-angle-right', 'label' => 'Widget 1', 'url' => ['site/dash1']],
                            ['icon' => 'fa fa-angle-right', 'label' => 'Widget 2', 'url' => ['site/dash2']],
                        ]],
                    ],
                ],
            ],
        ],
```

## Navbar, Sidebar, and Brand Variant

You can change the navbar, sidebar, and brand variant as provided by AdminLTE by setting the `navbarVariant`, `sidebarVariant`, and `brandVariant` in config file as follow.

```
        'assetManager' => [
            'bundles' => [
                'maswahyu\adminlte\assets\AdminLteAsset' => [
                    'navbarVariant' => 'navbar-light bg-white',
                    'sidebarVariant' => 'sidebar-dark-primary',
                    'brandVariant' => 'bg-white',
                ],
            ],
        ],
```

You can use any available variant from AdminLTE.

## Menu Placements

There are three menu placements available. Each menu inherits `\yii\widgets\Menu` so you can customize it as you need.

- navbarMenuLeft
- navbarMenuRight
- sidebarMenu

```
        'assetManager' => [
            'bundles' => [
                'maswahyu\adminlte\assets\AdminLteAsset' => [
                    'navbarMenuRight' => [
                        ['label' => '<i class="fa fa-sign-out-alt"></i> Logout', 'url' => ['site/logout']],
                    ],
                ],
            ],
        ],
```