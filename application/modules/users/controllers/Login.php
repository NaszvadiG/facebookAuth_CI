<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller
{
    function __construct() {
		parent::__construct();
		$this->load->model('user');
    }
    
    public function index()
    {
    	if ( ! empty($this->session->userdata('userData'))) {
			redirect('dashboard');
			exit();
		}

		// Include the facebook api php libraries
		include_once APPPATH.'libraries/facebook-api-php/facebook.php';
		
		// Facebook API Configuration
		$appId 			= 'xxx';
		$appSecret 		= 'xxx';
		
		// Call Facebook API
		$facebook = new Facebook(array(
		  	'appId'  => $appId,
		  	'secret' => $appSecret
		));
		
		$fbuser = $facebook->getUser();
		
        if ($fbuser) {
			$userProfile = $facebook->api('/me?fields=id,first_name,last_name,email,gender,locale,picture');
            
            // Preparing data for database insertion
			$userData['oauth_provider'] = 'facebook';
			$userData['oauth_uid'] 		= $userProfile['id'];
            $userData['first_name'] 	= $userProfile['first_name'];
            $userData['last_name'] 		= $userProfile['last_name'];
            $userData['email'] 			= $userProfile['email'];
			$userData['gender'] 		= $userProfile['gender'];
			$userData['locale'] 		= $userProfile['locale'];
            $userData['profile_url'] 	= 'https://www.facebook.com/'.$userProfile['id'];
            $userData['picture_url'] 	= $userProfile['picture']['data']['url'];

			// Insert or update user data
            $userID = $this->user->checkUser($userData);
            if (!empty($userID)) {
                $data['userData'] = $userData;
                $this->session->set_userdata('userData', $userData);
                redirect(site_url('dashboard'));
                exit();
            } 
            else {
            	$data['userData'] = array();
            }
        }
        else {
			$fbuser = '';
            $data['authUrl'] = $facebook->getLoginUrl(array('redirect_uri' => site_url(), 'scope' => 'email'));
        }

		$this->load->view('login', $data);
    }


    public function logout() {
		$this->session->unset_userdata('userData');
        $this->session->sess_destroy();
		redirect(site_url('users/login'));
    }
	
}
