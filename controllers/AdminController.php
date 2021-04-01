<?php

namespace app\controllers;

use Yii;
use app\models\User;
use app\models\AdminSearch;
use app\models\SignupForm;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * AdminController implements the CRUD actions for User model.
 */
class AdminController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model = (new \Yii\db\query())
            ->select('*')
            ->from('tb_admin')
            ->all();

        return $this->render('index', ['model' => $model,]);
    }

    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new User();

        if ($model->load(Yii::$app->request->post())) {
            $passwordHash = Yii::$app->getSecurity()->generatePasswordHash($model->password);
            $authKey = Yii::$app->security->generateRandomString();
            $accesToken = Yii::$app->security->generateRandomString();

            $model->password = $passwordHash;
            $model->authKey = $authKey;
            $model->accesToken = $accesToken;

            $model->foto = UploadedFile::getInstance($model, 'foto');
            if ($model->foto) {
                $photos = $model->foto->name;
                if ($model->foto->saveAs('files/images/admin_images/' . $photos)) {
                    $model->foto = $photos;
                }
            }

            $model->save(false);

            Yii::$app->getSession()->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['view', 'id' => $model->id_admin]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $old_photo_user = $model->foto;

        if ($model->load(Yii::$app->request->post())) {
            $passwordHash = Yii::$app->getSecurity()->generatePasswordHash($model->password);
            $authKey = Yii::$app->security->generateRandomString();
            $accesToken = Yii::$app->security->generateRandomString();

            $model->password = $passwordHash;
            $model->authKey = $authKey;
            $model->accesToken = $accesToken;
            
            $model->foto = UploadedFile::getInstance($model, 'foto');
            if ($model->foto) {
                $pp = $model->foto->name;
                if ($model->foto->saveAs('files/images/admin_images/' . $pp)) {
                    $model->foto = $pp;
                }
            }
            if (empty($model->foto)) {
                $model->foto = $old_photo_user;
            }
            $model->save(false);

            Yii::$app->getSession()->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['view', 'id' => $model->id_admin]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
