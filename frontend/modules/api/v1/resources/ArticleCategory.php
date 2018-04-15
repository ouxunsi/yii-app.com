<?php

namespace frontend\modules\api\v1\resources;

use yii\helpers\Url;
use yii\web\Link;
use yii\web\Linkable;

/**
 * @author Eugene Terentev <eugene@terentev.net>
 */
class ArticleCategory extends \common\models\ArticleCategory implements Linkable
{
    public function fields()
    {
        return ['id', 'slug', 'title', 'status', 'parent_id'];
    }

    /**
     * Returns a list of links.
     *
     * @return array the links
     */
    public function getLinks()
    {
        return [
            Link::REL_SELF => Url::to(['join-us', 'id' => $this->id], true)
        ];
    }
}
