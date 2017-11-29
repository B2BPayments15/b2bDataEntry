<?php
class Rates extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('rates_model');
                $this->load->helper('url_helper');
                $this->load->helper('form');
                $this->load->library('form_validation');
        }

        public function index()
        {
                //$data['merchant'] = $this->merchant_model->get_merchant();
                $data['title'] = 'Rates';

                $this->load->view('templates/header', $data);
                $this->load->view('rates/index', $data);
                $this->load->view('templates/footer');
        }

        // public function view($merchant_id = NULL)
        // {
        //         $data['merchant_item'] = $this->merchant_model->get_merchant($merchant_id);

        //         if (empty($data['merchant_item']))
        //         {
        //                 show_404();
        //         }

        //         $data['title'] = $data['merchant_item']['reference'];
                
        //         $this->load->view('templates/header', $data);
        //         $this->load->view('merchant/view', $data);
        //         $this->load->view('templates/footer');
        // }
}