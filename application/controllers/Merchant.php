<?php
class Merchant extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('merchant_model');
                $this->load->helper('url_helper');
                $this->load->helper('includes_helper');
                
        }

        public function index()
        {
                $data['merchant'] = $this->merchant_model->get_merchant();
                $data['title'] = 'Merchants';



                $this->load->view('templates/header', $data);
                $this->load->view('merchant/index', $data);
                $this->load->view('templates/footer');
        }

        public function view($merchant_id = NULL)
        {
                $data['merchant_item'] = $this->merchant_model->get_merchant($merchant_id);

                if (empty($data['merchant_item']))
                {
                        show_404();
                }

                $data['title'] = $data['merchant_item']['reference'];
                
                $this->load->view('templates/header', $data);
                $this->load->view('merchant/view', $data);
                $this->load->view('templates/footer');
        }

        public function create()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Create a Merchant';
            $data['mids'] = $this->merchant_model->get_mids();

            $this->form_validation->set_rules('mid', 'Mid', 'required');
            
            if ($this->form_validation->run() === FALSE)
            {      



                $this->load->view('templates/header', $data);
                $this->load->view('merchant/create', $data);
                $this->load->view('templates/footer');

            }
            else
            {
                $data['payload'] = $this->merchant_model->set_merchant();
                $this->load->view('merchant/success',$data);
            }
        }

        public function test()
{
    $this->load->library('PHPRequests');
    $response = Requests::get('https://github.com/timeline.json');
    var_dump($response->body);
}

        private function get_mids(){

        }
}