<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class file_uploads extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('user/os_buyer_model');
    }

    public function image_upload(){

        $generated_key = $this->input->post('generated_key');
        $user_id = $this->session->user_id;

        $new_folder = $user_id."_".sha1(md5($user_id));
        
        $config['upload_path']   = './uploads/'.$new_folder; 
        $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|PNG|JPEG'; 
        $config['max_size']      = 2048;

        $this->load->library('upload', $config);

        if (!is_dir('uploads'))
        {
            mkdir('./uploads', 0777, true);
        }
        $dir_exist = true; // flag for checking the directory exist or not
        if (!is_dir('uploads/' . $new_folder))
        {
            mkdir('./uploads/' . $new_folder, 0777, true);
            $dir_exist = false; // dir not exist
        }
        else{

        }

        if (!$this->upload->do_upload('file'))
        {
            // upload failed
            //delete dir if not exist before upload
            if(!$dir_exist)
              rmdir('./uploads/' . $new_folder);

            return array('error' => $this->upload->display_errors('<span>', '</span>'));
        } else
        {
            // upload success
            $upload_data = $this->upload->data();
            
            $data = array(
                'user_id' => $user_id,
                'generated_key' => $generated_key,
                'images' => $upload_data['file_name']
            );

           if($this->os_buyer_model->save_images_products($data)){
                $output = array('msg' => "Success", 'status' => "success");
           }
            $this->output->set_content_type('application/json')
             ->set_output(json_encode($output));
           
        }

    }
}