<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class data_gedung extends RestController {
    public function index_get()
    {
       $data = $this->db->get('tb_gedung')->result();
       $this->response($data, RestController::HTTP_OK);
    }
}