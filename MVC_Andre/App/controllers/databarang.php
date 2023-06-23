<?php

class Databarang extends Controller {
    public function index() {
        $data['nama'] = 'Handphone';
        $data['harga'] = '1000.000';
        $data['stok'] = '5';
    
        $this->view('databarang', $data);
    }
}
