<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

/**
 * Controller: StudentsController
 * 
 * Automatically generated via CLI.
 */
class StudentsController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->call->database();
        $this->call->model('StudentsModel');
        $this->call->library('session');
        //$this->session->set_flashdata('hello','hello there');
        //var_dump($this->session->flashdata());exit;
    }
    public function get_all()
    {
        $data['students'] = $this->StudentsModel->all();
        $data['flashdata'] =$this->session->flashdata('success');
        $this->call->view('students/students_data', $data);
    }
    public function create()
    {
        
        if ($this->io->method() == 'post') {
            $fname = $this->io->post('first_name');
            $lname = $this->io->post('last_name');
            $email = $this->io->post('email');

            $data = [
                'first_name' => $fname,
                'last_name' => $lname,
                'email' => $email
            ];

            $this->StudentsModel->insert($data);

            $this->session->set_flashdata('success','A student has been added successfully!');
            redirect('students/get-all');
        }else {
            $this->call->view('students/create_new');
        }


    }
    public function update($id)
    {
        if ($this->io->method() == 'post') {
            $fname = $this->io->post('first_name');
            $lname = $this->io->post('last_name');
            $email = $this->io->post('email');
            $newdata = [
                'first_name'=> $fname,
                'last_name'=> $lname,
                'email' => $email
                ];

            $this->StudentsModel->update($id, $newdata);
            
            $this->session->set_flashdata('success','A student has been updated successfully!');
            redirect('students/get-all');
        }else {
            $data = $this->StudentsModel->find($id);
            $this->call->view('students/update_student', $data);
        }
    }
    public function delete($id)
    {
        $this->StudentsModel->delete($id);
        
        $this->session->set_flashdata('success','A student has been deleted successfully!');
        redirect('students/get-all');
    }
}