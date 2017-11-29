<?php
class Merchant_model extends CI_Model {

        public function __construct()
        {
                //$this->load->database();

        }

        public function get_merchant($merchant_id = FALSE)
		{
		        if ($merchant_id === FALSE)
		        {
		                //$query = $this->db->order_by('id','ASC')->get('merchant');
		                //return $query->result_array();
		        }

		        //$query = $this->db->get_where('merchant', array('id' => $merchant_id));
		        //return $query->row_array();
		}

		public function get_mids($mid = FALSE){
			
			$this->load->library('PHPRequests');


			if ($mid === FALSE){
				
				$curl_headers = array('content-type' => 'application/json',
					'Accept' => 'application/json', 
					'Authorization' => 'Basic YWRtaW46c2VjcmV0', 
					);
				
				$options = array(
					'verify' => false
				);
			
				//$response = Requests::get($GLOBALS['b2b_merchant_url'],
				//$curl_headers,$options);
				
				//return $response;
			} else {

			}
				
		}

		public function set_merchant(){
			$this->load->helper('url');
			$this->load->library('PHPRequests');

			$payload = array(
						'bankingDetailsRequest' => array(
							'bankAccountNumber'=> $this->input->post('bankAccountNumber'),
							'country' => $this->input->post('bankCountry'),
							'currency' => $this->input->post('bankCurrency'),
							'routingNumber' => $this->input->post('routingNumber')
						),//end bankingDetailsRequest array
						'clientMerchantReference' => $this->input->post('dbaName'),
						'companyRequest' => array(
							'addressRequest' => array(
								'address' => $this->input->post('comp_address'),
								'address2' => $this->input->post('comp_address2'),
								'city' => $this->input->post('comp_city'),
								'country' => $this->input->post('comp_country'),
								'state' => $this->input->post('comp_state'),
								'zipCode' => $this->input->post('comp_zipCode')
							),//end addressRequest array
							'annualProcessing' => $this->input->post('annualProcessing'),
            				'averagePaymentAmount' => intval($this->input->post('averagePaymentAmount')),
            				'businessDescription' => $this->input->post('businessDescription'),
            				'businessType' => $this->input->post('businessType'),
            				'companyPhone' => $this->input->post('companyPhone'),
            				'countryOfIncorporation' => $this->input->post('countryOfIncorporation'),
            				'dbaName' => $this->input->post('dbaName'),
				            'descriptor' => $this->input->post('descriptor'),
				            'email' => $this->input->post('email'),
				            'legalName' => $this->input->post('legalName'),
				            'ownershipDetailsRequests' => array(
				            	array(
									'DateOfBirth' => '"'.str_replace("-","",$this->input->post('DateOfBirth')).'"',
                            		'alternatePhone' => $this->input->post('alternatePhone'),
                            		'driverLicenseRequest' => array(
                            			'country' => $this->input->post('license_country'),
                                    	'license' => $this->input->post('license_number'),
                                    	'state' => $this->input->post('license_state')
                            		),//end driverLicenseRequest
									'firstName' => $this->input->post('owner_firstName'),
									'lastName' => $this->input->post('owner_lastName'),
									'middleName' => $this->input->post('owner_middleName'),
									'ownerPercentage' => $this->input->post('ownerPercentage'),
									'position' => boolval($this->input->post('position')),
									'principalAddress' => array(
										'address' => $this->input->post('owner_address'),
										'address2' => $this->input->post('owner_address2'),
										'city' => $this->input->post('owner_city'),
										'country' => $this->input->post('owner_country'),
										'state' => $this->input->post('owner_state'),
										'zipCode' => $this->input->post('owner_zipCode')
									),//end principalAddress array
									'ssn' => $this->input->post('ssn')
				            	)//end 0 array

				            ),//end ownershipDetailsRequest array
				            'website' => $this->input->post('website'),

						),//end companyRequest array
						'creditCardPresent' => boolval($this->input->post('creditCardPresent')),
					    'mccCode' => $this->input->post('mccCode'),
					    'mid' => $this->input->post('mid'),
					    'ownershipTypes' => $this->input->post('ownershipTypes'),
					    'termsAccepted' => boolval($this->input->post('termsAccepted'))
					);
			$data['payload'] = $payload;

			$curl_headers = array('content-type' => 'application/json',
					'Accept' => 'application/json', 
					'Authorization' => 'Basic YWRtaW46c2VjcmV0', 
					);
				
				$options = array(
					//'verify' => false
				);
			
				$response = Requests::post($GLOBALS['b2b_merchant_url'], $curl_headers, json_encode($payload));
				
			$data['response'] = $response;
			return $data;
		}

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
			
