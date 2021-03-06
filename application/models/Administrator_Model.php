<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator_Model extends CI_Model{

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

  	public function create_account($data){
        $this->db->insert('vel_ami_admin',$data);
        return true;
    }

    public function display_account(){
        return $this->db->get('vel_ami_admin')->result();
    }

    public function update_account($data,$id){
        $this->db->where('id',$id);
        $this->db->update('vel_ami_admin',$data);
        return true;
    }

    public function delete_account($id){
       $this->db->where('id',$id);
        $this->db->delete('vel_ami_admin');
        return true;
    }

    public function create_category($data){
        $this->db->insert('vel_ami_categories',$data);
        return true;
    }

    public function display_categories(){
        return $this->db->get('vel_ami_categories')->result();
    }

    public function update_category($data,$id){
        $this->db->where('id',$id);
        $this->db->update('vel_ami_categories',$data);
        return true;
    }

     public function delete_category($id){
       $this->db->where('id',$id);
        $this->db->delete('vel_ami_categories');
        return true;
    }

    public function create_location($data){
        $this->db->insert('vel_ami_location',$data);
        return true;
    }

    public function display_locations(){
        return $this->db->get('vel_ami_location')->result();
    }

    public function update_location($data,$id){
        $this->db->where('id',$id);
        $this->db->update('vel_ami_location',$data);
        return true;
    }

     public function delete_location($id){
       $this->db->where('id',$id);
        $this->db->delete('vel_ami_location');
        return true;
    }

    public function check_access($email,$password){
        $this->db->where('email',html_escape($email));
        $this->db->where('password',sha1(md5(html_escape($password))));
         $query = $this->db->get('vel_ami_admin');
         return $query;

    }

    public function register_user($data){
        $this->db->insert('vel_ami_user',$data);
        return true;
    }

    public function login_user($email,$password){
        $this->db->where('email',html_escape($email));
        $this->db->where('password',sha1(md5(html_escape($password))));
        $query = $this->db->get('vel_ami_user');
        return $query;
    }

     public function create_shop($data){
        $this->db->insert('vel_ami_shops',$data);
        return true;
    }

    public function get_shopname($id){
        $this->db->where('user_id',$id);
         $query = $this->db->get('vel_ami_shops');
         return $query;
    }

    public function shop_image($data,$user_id){
        $this->db->where('id',$user_id);
        $this->db->update('vel_ami_shops',$data);
        return true;
    }

    public function get_profile($user_id){
        $this->db->where('id',$user_id);
        return $this->db->get('vel_ami_user')->result();
    }

    public function add_products($data){
        $this->db->insert('vel_ami_products',$data);
        return true;
    }

    public function product_list($user_id){
        $this->db->where('user_id',$user_id);
        return $this->db->get('vel_ami_products')->result();
    }

    public function all_product(){
        return $this->db->order_by('created_date','DESC')->get('vel_ami_products')->result();
    }
  
}