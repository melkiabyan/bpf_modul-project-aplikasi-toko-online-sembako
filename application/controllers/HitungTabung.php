<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HitungTabung extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library(('tabung'));
    }

    function index()
    {
        $this->tabung->luasVolume('5', '3');
        echo "<br/>";
        $this->tabung->luasSelimut('5', '3');
    }
}
