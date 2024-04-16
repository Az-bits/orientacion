<?php defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{
    public $data = [];

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library(['ion_auth', 'form_validation']);
        $this->load->helper(['url', 'language']);
        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
        $this->lang->load('auth');
        $this->load->helper('captcha');
    }

    /**
     * Redirect if needed, otherwise display the user list
     */
    public function index()
    {

        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect(base_url() . 'login', 'refresh');
        } else if (!$this->ion_auth->is_admin()) {
            // redirect them to the home page because they must be an administrator to view this
            //show_error('You must be an administrator to view this page.');
            //redirect(base_url().'inicio', 'refresh');
            redirect(base_url(Hasher::make(1)), 'refresh');
        } else {
            //redirect(base_url().'inicio', 'refresh');
            redirect(base_url(Hasher::make(1)), 'refresh');
        }
    }

    /**
     * Log the user in
     */
    public function login()
    {
        $this->data['title'] = $this->lang->line('login_heading');

        // validate form input
        $this->form_validation->set_rules('identity', str_replace(':', '', $this->lang->line('login_identity_label')), 'required');
        $this->form_validation->set_rules('password', str_replace(':', '', $this->lang->line('login_password_label')), 'required');

        if ($this->form_validation->run() === true) {
            // check to see if the user is logging in
            // check for "remember me"
            $remember = (bool) $this->input->post('remember');
            $tmptxt = mb_strtoupper($this->input->post('tmptxt'), 'utf-8');
            // echo ">".$tmptxt.' >>'.$this->session->userdata('captcha');exit();
            if ($tmptxt == $this->session->userdata('captcha')) {
                if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember)) {
                    echo json_encode(array(0 => 0));
                } else {
                    echo json_encode(array(0 => 1));
                }
            } else {
                echo json_encode(array(0 => 2));
            }
        } else {
            $this->load->view('login');
        }
    }
    public function refresh()
    {
        // Captcha configuration
        $config = array(
            'img_path' => 'captcha_images/',
            'img_url' => base_url() . 'captcha_images/',
            'font_path' => base_url() . 'system/fonts/texb.ttf',
            'img_width' => '250',
            'img_height' => 50,
            'word_length' => 6,
            'font_size' => 24,
            'img_id' => 'Imageid',
            'pool' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',

            // White background and border, black text and red grid
            'colors' => array(
                'background' => array(255, 255, 255),
                'border' => array(51, 181, 255),
                'text' => array(0, 0, 0),
                'grid' => array(51, 181, 255),
            ),
        );
        $captcha = create_captcha($config);

        // Unset previous captcha and set new captcha word
        $this->session->unset_userdata('captcha');

        if (is_array($captcha)) {
            $this->session->set_userdata('captcha', $captcha['word']);
            echo $captcha['image'];
        }

        // Display captcha image
    }

    /**
     * Log the user out
     */
    public function logout()
    {

        $this->ion_auth->logout();
        // redirect them to the login page
        //redirect(base_url().'paginaInicio', 'refresh');
        redirect(base_url() . 'login', 'refresh');
        //redirect(base_url(Hasher::make(61)), 'refresh');
    }

    public function redirectUser()
    {
        if ($this->ion_auth->is_admin()) {
            redirect(base_url() . 'login', 'refresh');
        }
        redirect(base_url() . 'login', 'refresh');
    }
}
