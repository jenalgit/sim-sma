<?php

namespace Controllers;

use Resources,
    Models;

class Home extends Resources\Controller {

    private $db,$data;

    public function __construct() {
        parent::__construct();
        $this->db = new Models\Dict;
        $this->request = new Resources\Request;
        $this->data['baseurl']= $this->uri->baseUri;
        $this->data['title']= 'Welcome';
    }

    public function index() {
        $this->data['page']='home';
        $this->data['datas']='';
        $this->output('template', $this->data);
//        $this->redirect("home/manage");
    }

   

}
