<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\helpers\Url;
use app\models\EventsRegister;

class AdminController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->checkLogin();
        $model = new EventsRegister();
        $person = [];
        $label = array_keys($model->attributeLabels());
        $i=0;
        
        $data =  $model->find()->where(['event_id' => '37'])->all();

        foreach($data as $key=>$item)
        {
            foreach($item as $key2=>$item2)
            {
                if($key2 == 'name')
                {
                    $item_json = json_decode($item->name,true);
                    foreach($item_json as $key3=>$item3)
                    {
                        $person[$i]['index'] = $i+1;
                        foreach($label as $labels)
                        {
                            if($labels !== 'name' && $labels !== 'extra')
                            {
                                $person[$i][$labels] = $data[$key][$labels];
                            }else{
                                if($labels == 'name')
                                {
                                    $person[$i][$labels] = $item_json[$key3][$labels];
                                    $person[$i]['code'] = $item_json[$key3]['code'];
                                    $person[$i]['company'] = $item_json[$key3]['company'];
                                }else{
                                    $extra_array = json_decode($data[$key][$labels],true);
                                    foreach($extra_array as $key4=>$item4)
                                    {
                                        $person[$i][$key4] = $item4;
                                    }
                                }
                            }
                        }
                        $i++;
                    }
                }
            }
        }
        $person = json_decode(json_encode($person));
        //echo "<pre/>"; print_r($person);
        //exit;
        return $this->render('index',[
            'data' => $person
        ]);
    }


    private function checkLogin(){
        if (Yii::$app->user->getIsGuest()) {      //Check user permission
            return $this->redirect(Url::toRoute(["site/login"], true));
        }
    }

    public function actionTest()
    {
        Yii::$app->mailer->compose()
        ->setFrom('bpinventory.test@gmail.com')
        ->setTo('watcharapon.piam@gmail.com')
        ->setSubject('Test Email')
        ->setTextBody('Test text content')
        ->setHtmlBody('<b>HTML content</b>')
        ->send();

        return "success";
    }
}
