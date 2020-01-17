<div class="single-blog-page">
              <div class="left-blog">
                <h4>categories</h4>
                <ul>
                  <?php foreach ($categories as $category): ?>
                    <li ><a  <?php echo ($current_id == $category->id) ? 'style="color: #3EC1D5;"' : ''; ?> href="<?php echo base_url()."category/".preg_replace('/[^A-Za-z0-9\-]/','',preg_replace('/\s+/', '', strtolower($category->category)))."/".$category->id ?>"><?=$category->category?> </a></li>
                  <?php endforeach ?>
                </ul>
              </div>
</div>