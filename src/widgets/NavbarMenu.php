<?php

namespace maswahyu\adminlte\widgets;

use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\helpers\Html;

/**
 * AdminLTE Navbar Menu widget.
 *
 * @inheritdoc
 */
class NavbarMenu extends \yii\widgets\Menu
{
    /**
     * @inheritdoc
     */
    public $options = ['class' => 'navbar-nav'];

    /**
     * @inheritdoc
     */
    public $linkTemplate = '<a class="nav-link" href="{url}">{label}</a>';

    /**
     * @inheritdoc
     */
    public $encodeLabels = false;

    public $navItemClass = 'nav-item d-none d-sm-inline-block';

    /**
     * @inheritdoc
     */
    public function renderItems($items)
    {
        $n = count($items);
        $lines = [];
        foreach ($items as $i => $item) {
            $options = array_merge($this->itemOptions, ArrayHelper::getValue($item, 'options', []));
            $tag = ArrayHelper::remove($options, 'tag', 'li');
            $class = [];
            if ($item['active']) {
                $class[] = $this->activeCssClass;
            }
            if ($i === 0 && $this->firstItemCssClass !== null) {
                $class[] = $this->firstItemCssClass;
            }
            if ($i === $n - 1 && $this->lastItemCssClass !== null) {
                $class[] = $this->lastItemCssClass;
            }
            if (isset($item['url']) && $item['url'] == '#') {
                $class[] = 'nav-item';
            } elseif (isset($item['url'])) {
                $class[] = $this->navItemClass;
            }
            if (!empty($class)) {
                if (empty($options['class'])) {
                    $options['class'] = implode(' ', $class);
                } else {
                    $options['class'] .= ' ' . implode(' ', $class);
                }
            }
            Html::addCssClass($options, $class);

            $menu = $this->renderItem($item);
            if (!empty($item['items'])) {
                $submenuTemplate = ArrayHelper::getValue($item, 'submenuTemplate', $this->submenuTemplate);
                $menu .= strtr($submenuTemplate, [
                    '{items}' => $this->renderItems($item['items']),
                ]);
            }
            $lines[] = Html::tag($tag, $menu, $options);
        }
        return implode("\n", $lines);
    }
}
