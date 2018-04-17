<?php

namespace backend\models\search;

use common\models\Contact;
use yii\data\ActiveDataProvider;

/**
 * UserSearch represents the model behind the search form about `common\models\Contact`.
 */
class ContactSearch extends Contact
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'body', 'created_at'], 'safe'],
        ];
    }


    /**
     * 方法描述：用搜索创建数据实例
     * @param $params
     * @return ActiveDataProvider
     * 注意：
     */
    public function search($params)
    {
        $query = Contact::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }
        if ($this->created_at !== null) {
            $query->andFilterWhere(['between', 'created_at', date('Y-m-d',strtotime($this->created_at)), date('Y-m-d',strtotime($this->created_at)+3600*24)]);
        }

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'body', $this->body]);

        return $dataProvider;
    }
}
