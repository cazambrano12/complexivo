<?php
	//Modelo de conexión para BBDD
	class conectar{

		public static function conexion(){

			try {
				$bd = new PDO (
					'mysql:host=localhost;
					dbname=proyecto',
					'root',
					'',
					array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")

				);
			} catch (Exception $e) {
				die("Problema con la conexion: ".$e->getMessage());
			}

			return $bd;

		}
	}
?>