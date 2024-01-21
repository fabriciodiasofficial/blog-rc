<?php
	class HomeController
	{
		public function index()
		{
			try{
				// echo 'teste';
				$colectPostagens = Postagem::selecionaTodos();

				 
			}catch(Exception $e){
				echo $e->getMessage();
			}
		}
	}