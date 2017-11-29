<?php
class Mid extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('mid_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['mids'] = $this->mid_model->get_mids();
                $data['title'] = 'Mids';

                $this->load->view('templates/header', $data);
                $this->load->view('mid/index', $data);
                $this->load->view('templates/footer');
        }

        public function view($mid = NULL)
        {
                $data['mid_item'] = $this->mid_model->get_mids($mid);

                if (empty($data['mid_item']))
                {
                        show_404();
                }

                $data['title'] = $data['mid_item']['mid'];
                
                $this->load->view('templates/header', $data);
                $this->load->view('mid/view', $data);
                $this->load->view('templates/footer');
        }

        public function create()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Create a MID';

            $this->form_validation->set_rules('mid', 'Mid', 'required');
            
            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('mid/create');
                $this->load->view('templates/footer');

            }
            else
            {
                $this->mid_model->set_mid();
                $this->load->view('mid/success');
            }
        }
}