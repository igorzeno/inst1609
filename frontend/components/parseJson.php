<?php    

namespace frontend\components;
use Yii;

class parseJson
    {
        public function parseProfiles(){
            $parse_link =  __DIR__ . '/data.json';
            $result = '';
            if (file_exists($parse_link)) {
                $j = file_get_contents($parse_link); 
                $data = json_decode($j, true);                  
            
                if($j != false && !is_null($data)){
                    $arrData = [];
                    foreach($data['data'] as $k => $e){
                       // print_r($e);die;

                        $id_inst=($e['caption']['from']['id']);
                        if(!empty($id_inst)){
                            $arrData[$k]['id_inst'] = $id_inst;
                        }
                        $username=($e['caption']['from']['username']);
                        if(!empty($username)){
                            $arrData[$k]['username'] = $username;
                        }
                        $text=($e['caption']['text']);
                        if(!empty($text)){
                            $arrData[$k]['text'] = $text;
                        }
                        $link=($e['link']);
                        if(!empty($link)){
                            $arrData[$k]['link'] = $link;
                        }
                        $created_time=($e['caption']['created_time']);
                        if(!empty($created_time)){
                            $arrData[$k]['created_time'] = $created_time;
                        }
                    }
                    Yii::$app->db->createCommand()->batchInsert('profiles', 
                       ['id_inst', 'username', 'text', 'link', 'created_time'], $arrData )->execute("set names utf8mb4");
                    unset($arrData);
                    $result = "Данные сохранены";
                    //die('OKI');
                }
                else{
                    $result = "Ошибка записи";
                }
            }
            else {
                $result = "Ошибочный путь к файлу";
            }
        return $result;
    }
}
    