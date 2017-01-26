<?php
namespace frontend\controllers;


use Yii;
use yii\web\Controller;
use frontend\models\SignupForm;
use frontend\models\LoginForm;


/**
 * Site controller
 */
class SiteController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSignup()
    {
        $model = new SignupForm();

        if(isset($_POST['SignupForm']))
        {
            $model->attributes = Yii::$app->request->post('SignupForm');

            if($model->validate() && $model->signup())
            {
                return $this->goHome();
            }
        }

        return $this->render('signup', ['model' => $model]);
    }

    public function actionLogin()
    {
        $model = new LoginForm();

        if (Yii::$app->request->post('LoginForm'))
        {
            $model->attributes = Yii::$app->request->post('LoginForm');

            if ($model->validate())
            {
                Yii::$app->user->login($model->getUser());
                return $this->goHome();
            }
        }

        return $this->render('login', ['model' => $model]);
    }
}
