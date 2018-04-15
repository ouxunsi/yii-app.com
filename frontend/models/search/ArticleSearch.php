<?php

namespace frontend\models\search;

use common\models\Article;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * ArticleSearch represents the model behind the search form about `common\models\Article`.
 */
class ArticleSearch extends Article
{

    public $limit = 3;
    public $offset = 0;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'category_id', 'offset', 'limit'], 'integer'],
            [['slug', 'title'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     * @param $params
     * @return array
     */
    public function search($params)
    {
        $query = Article::find()->published();
        $this->offset = $params['offset'] ?? $this->offset;
        $this->limit  = $params['limit'] ?? $this->limit;
        if (!($this->load($params) && $this->validate())) {
            return [];
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'slug' => $this->slug,
            'category_id' => $this->category_id,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title]);
        $query->offset($this->offset)->limit($this->limit);
        $models = $query->all();
        return $models;
    }
}
