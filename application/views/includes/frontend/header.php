<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo strtoupper($title); ?></title>
  <?php 
      if($this->router->fetch_class() == 'Frontend_Controller'){
        $this->load->view('includes/frontend/user_header');
      }elseif($this->router->fetch_class() == 'Administrator_Controller'){
        $this->load->view('includes/frontend/administrator_header');
      }
  ?>