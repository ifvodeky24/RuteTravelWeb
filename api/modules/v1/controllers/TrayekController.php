<?php
namespace app\api\modules\v1\controllers;

use Yii;
use app\models\Trayek;
use yii\rest\Controller;
use yii\web\Response;

class TrayekController extends Controller
{

	/*
	GET
	Fungsi untuk mendapatkan semua data keranjang berdasarkan id konsumen
	*/
	// public function actionById($id_konsumen){
	// 	Yii::$app->response->format = Response::FORMAT_JSON;

	// 	$response = null;

	// 	if (Yii::$app->request->isGet){

	// 		//select data from tb keranjang
	// 		$sql = "SELECT tb_produk.id_produk, tb_produk.id_user, tb_produk.nama_produk, tb_produk.merk_produk, tb_produk.harga, tb_produk.deskripsi, tb_produk.kondisi, tb_produk.stok, tb_produk.foto_1, tb_produk.foto_2, tb_produk.foto_3,

	// 			tb_keranjang.id_keranjang, tb_keranjang.id_konsumen, tb_keranjang.jumlah_harga, tb_keranjang.catatan_opsional,

	// 			tb_detail_keranjang.jumlah

	// 			FROM tb_keranjang INNER JOIN tb_produk, tb_detail_keranjang
	// 			WHERE tb_keranjang.id_keranjang = tb_detail_keranjang.id_keranjang
	// 			AND tb_detail_keranjang.id_produk = tb_produk.id_produk
	// 			AND tb_keranjang.id_konsumen = '$id_konsumen'
	// 			AND tb_keranjang.status = 'Tersedia'";

	// 		$response['master'] = Yii::$app->db->createCommand($sql)->queryAll();
	// 	}

	// 	return $response;
	// }

	// public function actionCheck($id_produk, $id_konsumen){
	// 	Yii::$app->response->format = Response::FORMAT_JSON;

	// 	$response = null;

	// 	if (Yii::$app->request->isGet){

	// 		$sql = "SELECT tb_keranjang.id_keranjang, tb_keranjang.id_konsumen, tb_detail_keranjang.id_produk FROM tb_keranjang INNER JOIN tb_detail_keranjang WHERE tb_keranjang.id_keranjang = tb_detail_keranjang.id_keranjang AND tb_keranjang.id_konsumen='$id_konsumen' AND tb_detail_keranjang.id_produk = '$id_produk'
	// 			AND tb_keranjang.status = 'Tersedia';";

	// 		$response['master'] = Yii::$app->db->createCommand($sql)->queryAll();
	// 	}

	// 	return $response;
	// }

	public function actionGetAll(){
		Yii::$app->response->format = Response::FORMAT_JSON;

		$response = null;

		if (Yii::$app->request->isGet){

			// $sql = "SELECT tb_trayek.*, tb_jadwal.*, tb_perusahaan.nama_perusahaan FROM tb_trayek INNER JOIN tb_jadwal, tb_perusahaan WHERE tb_jadwal.id_jadwal = tb_trayek.id_jadwal
			// AND tb_perusahaan.id_trayek = tb_trayek.id_trayek AND tb_trayek.status = 'Aktif';";

			$sql = "SELECT tb_trayek.*, tb_jadwal.*, tb_perusahaan.nama_perusahaan FROM tb_trayek INNER JOIN tb_jadwal, tb_perusahaan WHERE tb_trayek.status = 'Aktif' 
			AND tb_jadwal.id_jadwal = tb_trayek.id_jadwal
			AND tb_perusahaan.id_trayek = tb_trayek.id_trayek;";

			$response['trayek'] = Yii::$app->db->createCommand($sql)->queryAll();
		}

		return $response;
	}

}
