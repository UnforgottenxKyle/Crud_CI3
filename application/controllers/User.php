<?php

class User extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->model('user_model');
    }

    public function index()
    {
        $this->load->view('auth/login');
    }

    public function register()
    {
        $this->load->view('auth/register');
    }

    public function home()
    {
        $query['datas'] = $this->user_model->retriveData();
        $this->load->view('home', $query);
    }

    // public function insertUser(){
    //     $this->input->get_post();
    //     $this->input->get();
    // }

    public function create()
    {

        $data = [
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'gender' => $this->input->post('gender'),
            'email' => $this->input->post('email'),
        ];

        $this->form_validation->set_error_delimiters('<div style="color: maroon; font-size:12px;">', '</div>');
        $this->form_validation->set_rules('first_name', 'Firstname', 'required|min_length[2 ]');
        $this->form_validation->set_rules('last_name', 'Lastname', 'required|min_length[2]');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/register');
        } else {
            $stats = $this->user_model->insertUser($data);
            if ($stats == TRUE) {
                $this->session->set_flashdata('message', 'Successful');
                redirect(base_url());
            } else {
                $this->session->set_flashdata('error', 'ERROR!');
                redirect(base_url('User/register'));
            }
        }

        // $this->user_model->
        // $this->session->set_flashdata('message','success'); // temporary
        // if(isset( $this->session->flashdata('message'))){
        //     echo $this->session->flashdata('message');
        // }
        // $admin_data['username'] = ; 
        // $this->session->set_userdata('admin_data',$admin_data);
        // redirect();
    }

    public function login()
    {



        $firstname = $this->input->post('first_name');
        $lastname = $this->input->post('last_name');
        $user_id = $this->user_model->userLogin($firstname, $lastname);

        $this->form_validation->set_error_delimiters('<div style="color: maroon; font-size:12px;">', '</div>');
        $this->form_validation->set_rules('first_name', 'Firstname', 'required|min_length[2 ]');
        $this->form_validation->set_rules('last_name', 'Lastname', 'required|min_length[2]');

        if ($user_id) {
            $result = [
                'first_name' => $user_id['first_name'],
                'last_name' => $user_id['last_name'],
                'is_login' => true
            ];

            $this->session->set_userdata($result);
            $this->session->set_flashdata('success', 'successfull');
            redirect(base_url('User/home'));
        }

        redirect(base_url());
        // if ($user_id) {
        //     
        //     redirect(base_url('User/home'));
        // }
    }

    public function edit($id)
    {
        $data['data'] = $this->user_model->getData($id);
        $this->load->view('edit', $data);
    }
    public function update($id)
    {

        $data = [
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'gender' => $this->input->post('gender'),
            'email' => $this->input->post('email'),
        ];

        $this->form_validation->set_error_delimiters('<div style="color: maroon; font-size:12px;">', '</div>');
        $this->form_validation->set_rules('first_name', 'Firstname', 'required|min_length[2 ]');
        $this->form_validation->set_rules('last_name', 'Lastname', 'required|min_length[2]');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        $this->user_model->updateData($id, $data);
        redirect(base_url('User/home'));
    }

    public function delete($id)
    {
        $this->user_model->deleteData($id);
        redirect(base_url('User/home'));
    }
}
