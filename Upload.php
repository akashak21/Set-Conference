<?php
class Upload extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('upload');
    }
    public function upload()
    {
        $id=$_GET['id'];
        $this->load->model('vellorecon');
      $sss['carts']=$this->vellorecon->upload($id);
        $this->load->view('upload',$sss);
    }
    public function participate()
    {
        $id=$_GET['id'];
        $file_name=$_FILES['paper']['name'];
        $tmp_name=$_FILES['paper']['tmp_name'];
        $gowtham=array(
            'title'=>$_POST['title'],
            'eventtype'=>$_POST['eventtype'],
            'eventcategory'=>$_POST['eventcategory'],
            'organizer'=>$_POST['organizer'],
            'pname'=>$_POST['pname'],
            'phone'=>$_POST['phone'],
            'email'=>$_POST['email'],
            'cname'=>$_POST['cname'],
            'paper'=>$file_name,
        );
//        print_r($gowtham);
//        exit();
        $this->load->model('vellorecon');
      $ddd= $this->vellorecon->participate($gowtham);

      if($ddd)
        {
            move_uploaded_file($tmp_name,'C:\xampp\htdocs\vellorecon\application\ '.$file_name);
            echo '<script>alert("paper successfully added!!");window.location.replace("' . base_url() .'home")</script>';
        }
        else{
            echo '<script>alert("paper not added!!");window.location.replace("' . base_url() .'upload/upload?id='.$id.'")</script>';
        }

    }
}