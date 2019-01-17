<?php

namespace maswahyu\adminlte\widgets;

use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\helpers\Html;

/**
 * AdminLTE Menu widget.
 *
 * @inheritdoc
 */
class Menu extends \yii\widgets\Menu
{
    /**
     * @inheritdoc
     */
    public $options = [
        'class' => 'nav nav-pills nav-sidebar flex-column',
        'data-accordion' => 'false',
        'data-widget' => 'treeview',
        'role' => 'menu',
    ];

    /**
     * @inheritdoc
     */
    public $submenuTemplate = "\n<ul class=\"nav nav-treeview\">\n{items}\n</ul>\n";

    /**
     * @inheritdoc
     */
    public $linkTemplate = '<a class="nav-link" href="{url}">{icon} <p>{label} {icon-right}</p></a>';

    /**
     * @inheritdoc
     */
    public $labelTemplate = '{label}';

    public $defaultIconHtml = '<i class="fa fa-circle-o"></i> ';

    public $defaultIconRight = 'fa fa-angle-left';

    public $navHeaderClass = 'nav-header';

    public $navItemClass = 'nav-item';

    /**
     * @inheritdoc
     */
    protected function renderItem($item)
    {
        if (isset($item['items'])) {
            $item['icon-right'] = $this->defaultIconRight;
        }

        $template = ArrayHelper::getValue($item, 'template', isset($item['url']) ? $this->linkTemplate : $this->labelTemplate);
        $replacements = [
            '{label}' => strtr($this->labelTemplate, ['{label}' => $item['label'],]),
            '{icon}' => empty($item['icon']) ? $this->defaultIconHtml : '<i class="nav-icon ' . $item['icon'] . '"></i> ',
            '{icon-right}' => empty($item['icon-right']) ? $this->defaultIconHtml : '<i class="right ' . $item['icon-right'] . '"></i> ',
            '{url}' => isset($item['url']) ? Url::to($item['url']) : 'javascript:void(0);',
        ];
        return strtr($template, $replacements);
    }

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
            if (isset($item['url'])) {
                $class[] = $this->navItemClass;
            } else {
                $class[] = $this->navHeaderClass;
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
                if (isset($options['class'])) {
                    $options['class'] .= ' has-treeview';
                } else {
                    $options['class'] = 'has-treeview';
                }
            }
            $lines[] = Html::tag($tag, $menu, $options);
        }
        return implode("\n", $lines);
    }
}
