<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MX_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function penawaran(){
		$data["content"] = "penawaran";
		$this->load->view('template', $data);
	}

	public function proses_penawaran(){
		

$total="";
        $lamaran = $this->input->post("lamaran");
        $lokasi_lamaran =$this->input->post("lokasi_lamaran");
        $akad = $this->input->post("akad");
        $o_akad = $this->input->post("akad");
        $o_akad = $this->input->post("o_akad");
        $lokasi_akad =$this->input->post("lokasi_akad");
		$resepsi = $this->input->post("resepsi");
		$o_resepsi = $this->input->post("o_resepsi");
		$lokasi_resepsi = $this->input->post("lokasi_resepsi");
		$jt_resepsi = $this->input->post("jt_resepsi");
		$penambahan = $this->input->post("penambahan");
		$lokasi_penambahan = $this->input->post("lokasi_penambahan");
		$penambahan_sp = $this->input->post("penambahan_sp");

		if ($o_akad == "p" AND $o_resepsi == "s"){
			$harga = "20000000";
		}elseif($o_akad == "s" AND $o_resepsi == "m"){
			$harga = "20000000";
		}elseif ($o_akad =="p" AND $o_resepsi == "m"){
			$harga = "25000000";
		}elseif ($o_resepsi == "bh" AND ($o_akad == "p" OR $o_akad == "s")){
			$harga = "30000000";
		}elseif ($resepsi == "y" AND $akad == "n"){
			$harga = "17500000";
		}else{
			$harga = "0";
		}

		if ($penambahan =="y" AND $penambahan_sp == "n" AND $lamaran == "n"){
			$total = "17500000" + $harga;
		}elseif ($penambahan_sp == "y" AND $penambahan == "n" AND $lamaran == "n"){
			$total = "20000000" + $harga;
		}elseif ($penambahan_sp == "y" AND $penambahan == "y" AND $lamaran == "n"){
			$total = "17500000" + "20000000" + $harga;
		}elseif ($penambahan_sp == "n" AND $penambahan == "n" AND $lamaran == "y"){
			$total = "15000000" + $harga;
		}elseif ($penambahan_sp == "y" AND $penambahan == "n" AND $lamaran == "y"){
			$total = "15000000" + "20000000" + $harga;
		}elseif ($penambahan_sp == "y" AND $penambahan == "y" AND $lamaran == "y"){
			$total = "15000000" + "20000000" + "17500000" + $harga;
		}elseif ($penambahan_sp == "n" AND $penambahan == "n" AND $lamaran == "n"){
			$total = $harga;
		}
		

		echo json_encode(array("status" => 1 ,"message" => 'Penawaran telah kami kirim ke email anda, mohon cek email anda. harga'.$total ));
	}
}
