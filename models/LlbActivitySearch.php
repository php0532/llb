<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\LlbActivity;

/**
 * LlbActivitySearch represents the model behind the search form about `app\models\LlbActivity`.
 */
class LlbActivitySearch extends LlbActivity
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'age', 'ownerid', 'status', 'views', 'formid'], 'integer'],
            [['title', 'intro', 'guest', 'gender', 'job', 'guest_intro', 'createdate', 'enddate', 'starttime', 'address', 'address_intro', 'endintro', 'attachment'], 'safe'],
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
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = LlbActivity::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'age' => $this->age,
            'createdate' => $this->createdate,
            'enddate' => $this->enddate,
            'ownerid' => $this->ownerid,
            'status' => $this->status,
            'views' => $this->views,
            'formid' => $this->formid,
            'starttime' => $this->starttime,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'intro', $this->intro])
            ->andFilterWhere(['like', 'guest', $this->guest])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'job', $this->job])
            ->andFilterWhere(['like', 'guest_intro', $this->guest_intro])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'address_intro', $this->address_intro])
            ->andFilterWhere(['like', 'endintro', $this->endintro])
            ->andFilterWhere(['like', 'attachment', $this->attachment]);

        return $dataProvider;
    }
}
