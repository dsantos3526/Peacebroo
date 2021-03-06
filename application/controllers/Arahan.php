<!--
    __                       __
   /\ \                     /\ \
  _\_\ \      __     __  ___\ \ \__._     ___
 /, _ . \   /'__`\  /\ \ \  \\ \  __ \   / __`\
/\  \L\  \ /\ \L\.\_\ \  V   \\ \ \_\ \ /\ \L\ \
\ \____,__\\ \__/.\_\\ \  /\  \\ \ ___,\\ \____/
 \/___, _ / \/__/\/_/ \_\_\ \__\\/__,__/ \/___/

-->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arahan extends CI_Controller{

  public function __construct(){

    parent::__construct();

    //model yang di gunakan
    $this -> load -> model('insert_model');
    $this -> load -> model('update_model');
    $this -> load -> model('delete_model');
    $this -> load -> model('get_model');
    //$this -> load -> model('shout_model');

    //helper yang di gunakan
    $this -> load -> helper('url_helper');

    date_default_timezone_set("Asia/Bangkok");

  }

  public function index()
	{
      $data['isi_status'] = $this->get_model->get_all();
    //$this->load->view("pages/tampil_data",$data);

	}

  //function dinamis view lihat di config/Router ----> $router[(:any)] = "view/pages/$1"
  public function view($pagenya = 'login'){

  // parameter $data harus sama dengan nama entitas
  $data['isi_status'] = $this->get_model->get_all();//class->model->function
  $data['judul'] = "Statusnya";

  //melihat apakah data ada di dalam view
  if(!file_exists(APPPATH."views/pages/".$pagenya.'.php')){

    //fungsi bawaan
			show_404();

		}

    //meload view sesuai dengan url yang di masukkan
		$this -> load -> view("pages/".$pagenya , $data);

    }

    //fungsi tambah
    public function tambah(){
    		$status_nya = $this -> input -> post('tweet');
        $waktunya = date('h:i A M d',time());
        $komentar = "Ini adalah komentar";

    		$data = array(

    			'isi_status' => $status_nya,
          'time' => $waktunya,
          'komentar' => $komentar

    			);

    		$this->insert_model->input_data($data,'status');
    	}

      //fungsi hapus
      public function hapus( $id_nya ){

	        $where = array('id_status' => $id_nya);//nama atribute
	        $this->delete_model->hapus_data($where,'status');
          redirect('http://danboru.dev/Peacebroo/profil');
        }

}
