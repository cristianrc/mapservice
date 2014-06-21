<?php
class Maps extends CI_Controller 
{
    public function index()
    {
        $this->load->view('v_mapslogin');
    }       
    public function ubicar()
    {
        $this->load->view('v_mapsform');
    }       
}
