<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class data_mua extends RestController {
    public function index_get()
    {
       $data = $this->db->get('tb_mua')->result();
       $this->response($data, RestController::HTTP_OK);
    }
}