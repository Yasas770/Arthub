<?php
	class pages extends CI_controller{
		public function view($page = 'home'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();

			}

			$data['title'] = ucfirst($page);
			$this->loadview('templates/header);')
			$this->loadview('pages/'.$page , $data);
			$this->loadview('templates/footer);')
		}
	}