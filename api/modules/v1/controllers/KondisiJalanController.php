<?php

namespace app\api\modules\v1\controllers;

use Yii;
use app\models\KondisiJalan;
use yii\rest\Controller;
use yii\web\Response;

class KondisiJalanController extends Controller
{
    public function actionById($id_kondisi_jalan)
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        $response = null;

        if (Yii::$app->request->isGet) {

            $sql = "SELECT * FROM tb_kondisi_jalan 
            WHERE tb_kondisi_jalan.id_kondisi_jalan = '$id_kondisi_jalan'";

            $response['kondisijalan'] = Yii::$app->db->createCommand($sql)->queryAll();
        }

        return $response;
    }

    public function actionGetAll()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        $response = null;

        if (Yii::$app->request->isGet) {

            $sql = "SELECT * FROM tb_kondisi_jalan";

            $response['kondisi_jalan'] = Yii::$app->db->createCommand($sql)->queryAll();
        }

        return $response;
    }

    public function actionSearch($query){
		Yii::$app->response->format = Response::FORMAT_JSON;

		$response = null;

		if (Yii::$app->request->isGet){

			// select * from tb_produk berdasarkan nama produk
			$data = "SELECT * FROM tb_kondisi_jalan WHERE nama_lokasi LIKE '%".$query."%'";

			$response['kondisijalan'] = Yii::$app->db->createCommand($data)->queryAll();
		}

		return $response;
	}
}
