<?php 

	class Dashboard extends Controllers{
		public function __construct()
		{
			parent::__construct();

			session_start();
			if(empty($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
			}
			getPermisos(1);
		}

		public function dashboard()
		{
			$data['page_id'] = 2;
			$data['page_tag'] = "Tienda Virtual";
			$data['page_title'] = "Tienda Virtual";
			$data['page_name'] = "dashboard";
			$this->views->getView($this,"dashboard",$data);
		}

	}
 ?>