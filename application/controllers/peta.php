<?php

class Peta extends CI_Controller {

 public function __construct() {
        parent::__construct();
      
  $this->load->library('GMap');
    
    }



function index() {

$this->load->library('GMap'); //-> memanggil library gmap

$this->gmap->GoogleMapAPI();

$this->gmap->setMapType('satellite'); //-> hybrid, satellite, terrain, map

$this->gmap->setZoomLevel(18);//zoom level

//alamat yang kita cari

$this->gmap->addMarkerByAddress("nama_lokasi ", "nama_lokasi", "nama_lokasi");

$data['headerjs'] = $this->gmap->getHeaderJS();

$data['headerpeta'] = $this->gmap->getMapJS();

$data['onload'] = $this->gmap->printOnLoad();

$data['peta'] = $this->gmap->printMap();

$data['judul'] = $this->gmap->printSidebar();

show('peta/peta', $data);

}


function search() {
        if ($_POST == NULL) {
            show('peta/peta', $data);
        } else
  {
   $this->load->library('GMap'); //-> memanggil library gmap
   $this->gmap->GoogleMapAPI();
   $this->gmap->setMapType('satellite'); //-> hybrid, satellite, terrain, map
   $this->gmap->setZoomLevel(18);//zoom level

   //alamat yang kita cari
   $alamat = $this->input->post('search');
   $this->gmap->addMarkerByAddress( "$alamat", "$alamat", "$alamat");

   $data['headerjs'] = $this->gmap->getHeaderJS();
   $data['headerpeta'] = $this->gmap->getMapJS();
   $data['onload'] = $this->gmap->printOnLoad();
   $data['peta'] = $this->gmap->printMap();
   $data['judul'] = $this->gmap->printSidebar();
   show('peta/peta_search', $data);
            
           
        }


}
}