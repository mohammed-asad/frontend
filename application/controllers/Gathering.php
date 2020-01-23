<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gathering extends CI_Controller
{

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   * 		http://example.com/index.php/welcome
   *	- or -
   * 		http://example.com/index.php/welcome/index
   *	- or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see https://codeigniter.com/user_guide/general/urls.html
   */
  public function family()
  {
    // 		$data['mega_header'][] = (object) array('title' => 'portfolio image' ,
    //     'img' => 'https://complete path of image' );
    // $this->load->view('multiple_array', $data);
    $this->load->view('pages/header');
    $this->load->view('pages/family');
    $this->load->view('pages/footer');
  }
  public function friends()
  {
    // 		$data['mega_header'][] = (object) array('title' => 'portfolio image' ,
    //     'img' => 'https://complete path of image' );
    // $this->load->view('multiple_array', $data);
    $this->load->view('pages/header');
    $this->load->view('pages/gathering-friends');
    $this->load->view('pages/footer');
  }
  public function colleagues()
  {
    // 		$data['mega_header'][] = (object) array('title' => 'portfolio image' ,
    //     'img' => 'https://complete path of image' );
    // $this->load->view('multiple_array', $data);
    $this->load->view('pages/header');
    $this->load->view('pages/gathering-colleagues');
    $this->load->view('pages/footer');
  }
  public function solotrip()
  {
    // 		$data['mega_header'][] = (object) array('title' => 'portfolio image' ,
    //     'img' => 'https://complete path of image' );
    // $this->load->view('multiple_array', $data);
    $this->load->view('pages/header');
    $this->load->view('pages/solotrip');
    $this->load->view('pages/footer');
  }
}
