<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Element extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function alert()
    {
        $data['title'] = 'Alerts';


        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/bootstrapui/alert', $data);
        $this->load->view('_layout/footer');
    }

    public function button()
    {
        $data['title'] = 'Buttons';


        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/bootstrapui/button', $data);
        $this->load->view('_layout/footer');
    }

    public function dropdown()
    {
        $data['title'] = 'Dropdowns';


        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/bootstrapui/dropdown', $data);
        $this->load->view('_layout/footer');
    }

    public function modal()
    {
        $data['title'] = 'Modals';


        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/bootstrapui/modal', $data);
        $this->load->view('_layout/footer');
    }

    public function popovers()
    {
        $data['title'] = 'Popovers';


        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/bootstrapui/popovers', $data);
        $this->load->view('_layout/footer');
    }

    public function progressbar()
    {
        $data['title'] = 'Progress Bar';


        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/bootstrapui/progressbar', $data);
        $this->load->view('_layout/footer');
    }

    public function form()
    {
        $data['title'] = 'Form';


        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/form', $data);
        $this->load->view('_layout/footer');
    }

    public function simpletable()
    {
        $data['title'] = 'Simple Table';


        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/table/simple-tables', $data);
        $this->load->view('_layout/footer');
    }

    public function datatable()
    {
        $data['title'] = 'Data Table';


        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/table/data-tables', $data);
        $this->load->view('_layout/footer');
    }

    public function uicolors()
    {
        $data['title'] = 'UI Colors';


        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/ui-colors', $data);
        $this->load->view('_layout/footer');
    }

    public function register()
    {
        $data['title'] = 'Register';


        $this->load->view('_layout/auth-header', $data);
        $this->load->view('element/page/register', $data);
        $this->load->view('_layout/auth-footers', $data);
    }

    public function login()
    {
        $data['title'] = 'Login';


        $this->load->view('_layout/auth-header', $data);
        $this->load->view('element/page/login', $data);
        $this->load->view('_layout/auth-footers', $data);
    }

    public function blank()
    {
        $data['title'] = 'Blank';


        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/page/blank', $data);
        $this->load->view('_layout/footer');
    }

    public function error_page()
    {
        $data['title'] = '404 Page';


        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/page/404', $data);
        $this->load->view('_layout/footer');
    }

    public function charts()
    {
        $data['title'] = 'Example Charts';


        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/charts', $data);
        $this->load->view('_layout/footer');
    }
}
