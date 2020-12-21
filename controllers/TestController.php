<?php


namespace app\controllers;


use app\models\EntryForm;
use yii\web\Controller;

class TestController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'test' => 'app\components\HelloAction',
        ];
    }

    public function actionIndex()
    {
        $this->layout = 'test';
        $this->view->title = 'Learn yii2 test';
        $this->view->registerMetaTag(['name' => 'description', 'content' => '2Мета описание2']);

        $model = new EntryForm();

        if($model->load(\Yii::$app->request->post()) && $model->validate()) {

            if (\Yii::$app->request->isPjax) {
                \Yii::$app->session->setFlash('success', 'Данные приняты через Pjax');
                $model = new EntryForm();
            } else {
                \Yii::$app->session->setFlash('success', 'Данные приняты стандартно');
                return $this->refresh();
            }
        }


        return $this->render('index', [
            'model' => $model,
        ]);
    }

    public function actionMyTest()
    {
        return __METHOD__;
    }
}