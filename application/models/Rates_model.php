<?php
class Rates_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

  //       public function get_rates($rate_id = FALSE)
		// {
		//         if ($merchant_id === FALSE)
		//         {
		//                 $query = $this->db->order_by('id','ASC')->get('merchant');
		//                 return $query->result_array();
		//         }

		//         $query = $this->db->get_where('merchant', array('id' => $merchant_id));
		//         return $query->row_array();
		// }

		// public function set_mid()
		// {
		//     $this->load->helper('url');

		//     $mid = $this->input->post('mid');

		//     $data = array(
		//         'mid' => $this->input->post('mid'),
		//         'created_by' => 'chris script',
		//         'modified_by' => 'chris script',
		//         'created_date' => 'now()',
		//         'modified_date' => 'now()'
	 //        );

		//     return $this->db->insert('mid', $data);
		// }
}