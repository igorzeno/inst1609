<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Profiles;

class ProfilesController extends Controller
{
    public function actionIndex()
    {
        $this->layout = 'profile';
        $model = new Profiles();
        $dataProvider = Profiles::listProfiles();
        if(!$dataProvider->totalCount > 0){
            $result =  Yii::$app->parseJson->parseProfiles();
        }       
        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'model'=> $model, 
            'result'=> $result, 
        ]);
    }
    public function actionList()
    {
        $this->layout = 'profile';
        $data = Yii::$app->selectJson->selectProfiles();
        echo $data;
        exit();
    }
}