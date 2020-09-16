<?php

namespace frontend\components;


class selectJson
    {
        public function selectProfiles(){

            $query = new \yii\db\Query();
            $profiles = $query->select(['*'])->from(['profiles'])
                ->orderBy(['id' => SORT_DESC ])->all();
            //return $profiles;
            $prof['hits'] = $profiles;
            return json_encode($prof);
    }
}