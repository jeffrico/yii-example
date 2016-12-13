<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pedidos;

/**
 * PedidosSearch represents the model behind the search form about `app\models\Pedidos`.
 */
class PedidosSearch extends Pedidos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'clientes_id', 'oficinas_id'], 'integer'],
            [['fecha-pedido', 'importe'], 'safe'],
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
        $query = Pedidos::find();

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
            'fecha-pedido' => $this->fecha-pedido,
            'clientes_id' => $this->clientes_id,
            'oficinas_id' => $this->oficinas_id,
        ]);

        $query->andFilterWhere(['like', 'importe', $this->importe]);

        return $dataProvider;
    }
}
