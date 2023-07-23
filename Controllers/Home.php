<?php 

	class Home extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function home()
		{
			$data['page_id'] = 1;
		$data['page_tag'] = "Angelica Store";
		$data['page_title'] = "Pagina principal";
		$data['page_name'] = "home";
		$data['page_content'] = "Si puedes imaginarlo,puedes programarlo - Alejandro Taboada";
			$this->views->getView($this,"home",$data);
		}

	}
 ?>