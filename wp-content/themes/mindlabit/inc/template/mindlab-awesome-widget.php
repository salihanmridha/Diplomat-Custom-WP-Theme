<!-- awesome title field -->
<p>
  <label for="<?php echo $this->get_field_id('title'); ?>">Title: </label>
  <input type="text" name="<?php echo $this->get_field_name('awesome_title'); ?>" value="<?php echo $frm_instance['awesome_title']; ?>" id="<?php echo $this->get_field_id('title'); ?>" class="widefat" />
</p>
<!-- awesome slider images fields -->
<p>
  <label for="<?php echo $this->get_field_id('awesome_first_img_id'); ?>">First Image: </label>
  <button onclick="awesome_first_img(this.id)" id="<?php echo $this->get_field_id('awesome_first_img_id'); ?>" type="button" class="button button-secondary widefat">Upload First Slider Image</button>

  <p><input type="text" name="<?php echo $this->get_field_name('awesome_first_image'); ?>" class="widefat" id="<?php echo $this->get_field_id('awesome_first_img_id'); ?>" value="<?php echo $frm_instance['awesome_first_image']; ?>" placeholder="Image Link"></p>
</p>

<p>
  <label for="<?php echo $this->get_field_id('awesome_second_img_id'); ?>">Second Image: </label>
  <button onclick="awesome_second_img(this.id)" id="<?php echo $this->get_field_id('awesome_second_img_id'); ?>" type="button" class="button button-secondary widefat">Upload Second Slider Image</button>

  <p><input type="text" name="<?php echo $this->get_field_name('awesome_second_image'); ?>" id="<?php echo $this->get_field_id('awesome_second_img_id'); ?>" class="widefat" value="<?php echo $frm_instance['awesome_second_image']; ?>" placeholder="Image Link"></p>
</p>

<p>
  <label for="<?php echo $this->get_field_id('awesp,e_third_img_id'); ?>">Third Image: </label>
  <button onclick="awesome_third_img(this.id)" id="<?php echo $this->get_field_id('awesome_third_img_id'); ?>" type="button" class="button button-secondary widefat">Upload Third Slider Image</button>
  <p><input type="text" name="<?php echo $this->get_field_name('awesome_third_image'); ?>" id="<?php echo $this->get_field_id('awesome_third_img_id'); ?>" class="widefat" value="<?php echo $frm_instance['awesome_third_image']; ?>" placeholder="Image Link"></p>
</p>
<!-- awesome description field -->
<p>
  <label for="<?php echo $this->get_field_id('awesome_desc'); ?>">Description: </label>
  <textarea name="<?php echo $this->get_field_name('awesome_desc'); ?>" id="<?php echo $this->get_field_id('awesome_desc'); ?>" rows="6" class="widefat"><?php echo $frm_instance['awesome_desc']; ?></textarea>
</p>
<!-- awesome widget button text field -->
<p>
  <label for="<?php echo $this->get_field_id('awesome_btn_txt'); ?>">Button Text: </label>
  <input type="text" name="<?php echo $this->get_field_name('awesome_btn_txt'); ?>" value="<?php echo $frm_instance['awesome_btn_txt']; ?>" id="<?php echo $this->get_field_id('awesome_btn_txt'); ?>" class="widefat" />
</p>

<!-- awesome widget button Url field -->
<p>
  <label for="<?php echo $this->get_field_id('awesome_btn_txt_url'); ?>">Button Url: </label>
  <input type="text" name="<?php echo $this->get_field_name('awesome_btn_txt_url'); ?>" value="<?php echo $frm_instance['awesome_btn_txt_url']; ?>" id="<?php echo $this->get_field_id('awesome_btn_txt_url'); ?>" class="widefat" />
</p>
