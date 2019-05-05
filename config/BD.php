<?php

	class BancoDados{

		private static $conexao;

		public static function obterConexao(){

			if(isset($conexao) == false){

				$conexao = new PDO("mysql:dbname=sae;host=localhost","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

				$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}

			return $conexao;

		}
	}


?>