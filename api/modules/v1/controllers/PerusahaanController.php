<?php

namespace app\api\modules\v1\controllers;

use Yii;
use app\models\Perusahaan;
use yii\rest\Controller;
use yii\web\Response;

class PerusahaanController extends Controller
{
	public function actionById($id_perusahaan)
	{
		Yii::$app->response->format = Response::FORMAT_JSON;

		$response = null;

		if (Yii::$app->request->isGet) {

			$sql = "SELECT tb_perusahaan.*, tb_trayek.*

            FROM tb_perusahaan INNER JOIN tb_trayek
            WHERE tb_trayek.id_trayek = tb_perusahaan.id_trayek
            AND tb_perusahaan.id_perusahaan = '$id_perusahaan'";

			$response['perusahaan'] = Yii::$app->db->createCommand($sql)->queryAll();
		}

		return $response;
	}

	public function actionGetAll()
	{
		Yii::$app->response->format = Response::FORMAT_JSON;

		$response = null;

		if (Yii::$app->request->isGet) {

			$sql = "SELECT tb_perusahaan.*, tb_trayek.*

            FROM tb_perusahaan INNER JOIN tb_trayek
            WHERE tb_trayek.id_trayek = tb_perusahaan.id_trayek";

			$response['perusahaan'] = Yii::$app->db->createCommand($sql)->queryAll();
		}

		return $response;
	}
}
