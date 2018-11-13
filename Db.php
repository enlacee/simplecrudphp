<?php

/**
 * DataBase Connection
 */
class Db
{
	
	private static $conexion = null;

	public static function conectar()
	{
		$pdoOption[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		self::$conexion = new PDO(
			'mysql:host=localhost;dbname=biblioteca',
			'root',
			'',
			$pdoOption
		);

		return self::$conexion;
	}
}