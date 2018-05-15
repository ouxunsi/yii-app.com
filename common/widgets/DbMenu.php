<?php
/**
 * Eugine Terentev <eugine@terentev.net>
 */

namespace common\widgets;

use common\models\WidgetMenu;
use Yii;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\Menu;

/**
 * Class DbMenu
 * Usage:
 * echo common\widgets\DbMenu::widget([
 *      'key'=>'stored-menu-key',
 *      ... other options from \yii\widgets\Menu
 * ])
 * @package common\widgets
 */
class DbMenu extends Menu
{

    /**
     * @var string Key to find menu model
     */
    public $key;

    public function init()
    {
        $cacheKey = [
            WidgetMenu::class,
            $this->key
        ];
        $this->items = Yii::$app->cache->get($cacheKey);
        if ($this->items === false) {
            if (!($model = WidgetMenu::findOne(['key' => $this->key, 'status' => WidgetMenu::STATUS_ACTIVE]))) {
                throw new InvalidConfigException;
            }
            $this->items = json_decode($model->items, true);
            Yii::$app->cache->set($cacheKey, $this->items, 60 * 60 * 24);
        }
    }

    /**
     * Recursively renders the menu items (without the container tag).
     * @param array $items the menu items to be rendered recursively
     * @return string the rendering result
     */
    protected function renderItems($items)
    {
        $n = count($items);
        $lines = [];
        foreach ($items as $i => $item) {
            if($item['display']=='none'){
                continue;
            }
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
            Html::addCssClass($options, $class);

            $menu = $this->renderItem($item);
            if (!empty($item['items'])) {
                $submenuTemplate = ArrayHelper::getValue($item, 'submenuTemplate', $this->submenuTemplate);
                $menu .= strtr($submenuTemplate, [
                    '{items}' => $this->renderItems($item['items']),
                ]);
            }
            $lines[] = $tag ? Html::tag($tag, $menu, $options) : $menu;
        }

        return implode("\n", $lines);
    }
}
