  <?php 
      if($this->router->fetch_class() == 'Frontend_Controller'){
        $this->load->view('includes/frontend/user_footer');
      }elseif($this->router->fetch_class() == 'Administrator_Controller'){
        $this->load->view('includes/frontend/administrator_footer');
      }
  ?>
</body>
</html>
