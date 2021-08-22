<?php
class Home extends CI_Controller
{
    public function DocmsHome()
    {
        if ($this->session->userdata('username') != "") {
            $this->load->view('DocmsHome.php');
        } else {
            redirect('User/LogoutUser');
        }
    }
}
