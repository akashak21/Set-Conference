<?php
class Adddetails extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('Adddetails');
    }
    public function events()
    {
        $pandi=array(
            'eventname'=>$_POST['eventname'],
            'eventtype'=>$_POST['eventtype'],
            'eventcategory'=>$_POST['category'],
            'date'=>$_POST['date'],
            'month'=>$_POST['month'],
            'year'=>$_POST['year'],
            'title'=>$_POST['title'],
            'contact'=>$_POST['contact'],
            'description'=>$_POST['description'],
            'organizer'=>$_SESSION['name']

        );
//        print_r($pandi);
//        exit();
        $this->load->model('vellorecon');
        $this->vellorecon->events($pandi);

    }

}