<?php

class Biodata extends Controller {
    public function index() {
        $data['nama'] = 'Andre Tri Rizky';
        $data['nim'] = 'D112111003';
        $data['kelas'] = 'IF-4B';
    
        $this->view('biodata', $data);
    }
}
