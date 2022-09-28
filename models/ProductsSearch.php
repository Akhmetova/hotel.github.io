<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Products;

/**
 * ProductsSearch represents the model behind the search form of `app\models\Products`.
 */
class ProductsSearch extends Products
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['updated_at'], 'date'],
            [['category', 'name', 'img', 'description'], 'safe'],
			[['date_from', 'date_to'], 'date', 'format' => 'php:d-m-Y'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }
	public $date_from;
	public $date_to;
	
    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Products::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'price' => $this->price,
            'visible' => $this->visible=0,
            'products_id' => $this->products_id,
            'updated_at' => $this->updated_at,
        ]);
        $query->andFilterWhere(['like', 'category', $this->category])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['>=', 'updated_at', $this->date_from ])
            ->andFilterWhere(['>=', 'updated_at', $this->date_to])
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'description', $this->description]);
			
        return $dataProvider;
		
    }
}
