$sql = "UPDATE  db_produk_forging 
					SET (nama_produk			='$nama_produk',
					model 					='$model',
					part_no_produk_forging			='$part_no_produk_forging',
					customer				='$customer',
					status_produk				='$status_produk',
					sp_mat_pro				='$sp_mat_pro',
					dim_mat_pro				='$dim_mat_pro',
					berat_mat				='$berat_mat',
					berat_pro				='$berat_pro',
					yield_pro				='$yield_pro',
					list_type_forging			='$list_type_forging',
					line_fg_01				='$type_forging_default',
					line_fg_02				='$type_forging_optional_1',
					line_fg_03				='$type_forging_optional_2',
					line_fg_04				='$type_forging_optional_3',
					line_fg_05				='$type_forging_optional_4',
					ct_pro 					='$ct_pro',
					forecast_pro				='$forecast_pro',
				WHERE 	kode_produk 				='$id_produk_forging'";
