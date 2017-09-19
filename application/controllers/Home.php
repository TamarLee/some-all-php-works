<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model(["Menu_model", "Middle_model", "Works_model", "Contact_model", "Slides_model"]);

	}

	public function index($id='home')
	{
		$menu = $this->Menu_model->getMenu();
		$middleMenu = $this->Middle_model->getMiddleMenu();
		$works = $this->Works_model->getWorks();
		$contact = $this->Contact_model->getContact();
		$slides = $this->Slides_model->getSlides();

		$this->load->view('header', ['menu'=>$menu]);
		$this->load->view($id, ['middleMenu'=>$middleMenu,'works'=>$works, 'contact'=>$contact, 'slides'=>$slides]);
		$this->load->view('footer', ['middleMenu'=>$middleMenu,'menu'=>$menu]);
	}

}
