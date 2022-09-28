<?php

namespace app\modules\kingofsite\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\kingofsite\models\Booking;

/**
 * BookingSearch represents the model behind the search form of `app\modules\kingofsite\models\Booking`.
 */
class BookingSearch extends Booking
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'phone'], 'integer'],
            [['familiya', 'name', 'otchestvo', 'created_at', 'updated_at', 'comment', 'name_nomer'], 'safe'],
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
        $query = Booking::find();

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
            'phone' => $this->phone,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'name_nomer' => $this->name_nomer,
           
        ]);

        $query->andFilterWhere(['like', 'familiya', $this->familiya])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'otchestvo', $this->otchestvo])
            ->andFilterWhere(['like', 'comment', $this->comment]);

        return $dataProvider;
    }
}
