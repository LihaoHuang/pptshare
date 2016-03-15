<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {


	public function __construct()
        {
            parent::__construct();
            // Your own constructor code
            $this->load->helper('url');
        }

	public function view($page = 'show')
	{
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $this->load->helper('directory');
        $data = array(
            'title' => ucfirst($page), // Capitalize the first letter",
            'filename' => directory_map('PPT') #檔名陣列送入
            );
        $this->load->view('templates/header');
		$this->load->view('pages/'.$page,$data);
        $this->load->view('templates/footer');
	}

    public function filedownload($name)
    {
        $this->load->helper('download');
        $data = file_get_contents("../PPT/".$name);
        force_download($name,$data,TRUE);
    }

     public function file_upload()
    {
        $config = array(
                'upload_path' => './PPT/',
                'allowed_types' => 'gif|jpg|png|txt|ppt|pptx',
                'overwrite' => TRUE
            );

        // $config['file_name']     = $fileupload; // $this->$filename

        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('fileupload')){
            // 顯示上傳錯誤
               show_error($this->upload->display_errors());
        }
        else {
            // 若無錯誤，則上傳檔案
            $file = $this->upload->data('fileupload');
            redirect('show');
        }
    }
}