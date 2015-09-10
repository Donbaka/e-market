<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view($layout.'/temp/header');
$this->load->view($layout.'/temp/sidebar');
$this->load->view($layout.'/'.$content);
$this->load->view($layout.'/temp/footer');
