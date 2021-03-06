<?php

namespace common\models;

use common\helper\HelperFunction;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Products;

/**
 * ProductsSearch represents the model behind the search form of `common\models\Products`.
 */
class ProductsSearch extends Products
{
    /**
     * {@inheritdoc}
     */
    public $archives;

    public function rules()
    {
        return [
            [['id', 'created_at', 'updated_at'], 'integer'],
            [['name', 'slug', 'status', 'content', 'language', 'excerpt', 'attributes', 'archives'], 'safe'],
            [['default_price', 'default_archive', 'default_sale_type', 'default_sale_price'], 'number'],
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

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params, $filter = null)
    {
        $query = Products::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);


        $this->load($params, '');

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        if ($filter) {
            $query->andFilterWhere($filter);
        }

        // grid filtering conditions
//        $query->andFilterWhere([
//            'id' => $this->id,
//            'default_price' => $this->default_price,
//            'default_sale_type' => $this->default_sale_type,
//            'default_sale_price' => $this->default_sale_price,
//            'created_at' => $this->created_at,
//            'updated_at' => $this->updated_at,
//        ]);
        if ($this->archives) {
            $query->innerJoin('products_archive', 'products_archive.product_id = products.id')
                ->innerJoin('archives', 'archives.id = products_archive.archive_id')
                ->where(['archives.id' => $this->archives])
                ->andFilterWhere(['products.language' => HelperFunction::getLanguage()]);
        }

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'slug', $this->slug])
            //->andFilterWhere(['=', 'id', $this->id])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'excerpt', $this->excerpt])
            ->andFilterWhere(['like', 'attributes', $this->attributes])
            ->andFilterWhere(['=', 'language', $this->language])
            ->andFilterWhere(['=', 'default_archive', $this->default_archive]);

        return $dataProvider;
    }
}
