<?php

	abstract class Connection 
	{
		private static $conn;

		public static function getConn()
		{    

			if(self::$conn == null){
			   self::$conn = new PDO('mysql: host=localhost; dbname=criando-site;', 'root', ''); 
			   //self quando é static, senão pode usar o this
			}
			

			return self::$conn;
		}
	}