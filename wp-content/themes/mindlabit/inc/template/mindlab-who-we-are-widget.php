<!-- who we are title field -->
<p>
  <label for="<?php echo $this->get_field_id('title'); ?>">Title: </label>
  <input type="text" name="<?php echo $this->get_field_name('who_we_are_title'); ?>" value="<?php echo $frm_instance['who_we_are_title']; ?>" id="<?php echo $this->get_field_id('title'); ?>" class="widefat" />
</p>
<!-- who we are slider images fields -->
<p>
  <label for="<?php echo $this->get_field_id('who_we_are_first_img_id'); ?>">First Image: </label>
  <button onclick="who_we_are_first_img(this.id)" id="<?php echo $this->get_field_id('who_we_are_first_img_id'); ?>" type="button" class="button button-secondary widefat">Upload First Slider Image</button>
  <p><input type="text" name="<?php echo $this->get_field_name('who_we_are_first_image'); ?>" class="widefat" id="<?php echo $this->get_field_id('who_we_are_first_img_id'); ?>" value="<?php echo $frm_instance['who_we_are_first_image']; ?>" placeholder="Image Link"></p>
</p>

<p>
  <label for="<?php echo $this->get_field_id('who_we_are_second_img_id'); ?>">Second Image: </label>
  <button onclick="who_we_are_second_img(this.id)" id="<?php echo $this->get_field_id('who_we_are_second_img_id'); ?>" type="button" class="button button-secondary widefat">Upload Second Slider Image</button>
  <p><input type="text" name="<?php echo $this->get_field_name('who_we_are_second_image'); ?>" id="<?php echo $this->get_field_id('who_we_are_second_img_id'); ?>" class="widefat" value="<?php echo $frm_instance['who_we_are_second_image']; ?>" placeholder="Image Link"></p>
</p>

<p>
  <label for="<?php echo $this->get_field_id('who_we_are_third_img_id'); ?>">Third Image: </label>
  <button onclick="who_we_are_third_img(this.id)" id="<?php echo $this->get_field_id('who_we_are_third_img_id'); ?>" type="button" class="button button-secondary widefat">Upload Third Slider Image</button>
  <p><input type="text" name="<?php echo $this->get_field_name('who_we_are_third_image'); ?>" id="<?php echo $this->get_field_id('who_we_are_third_img_id'); ?>" class="widefat" value="<?php echo $frm_instance['who_we_are_third_image']; ?>" placeholder="Image Link"></p>
</p>
<!-- who we are description field -->
<p>
  <label for="<?php echo $this->get_field_id('who_we_are_desc'); ?>">Description: </label>
  <textarea name="<?php echo $this->get_field_name('who_we_are_desc'); ?>" id="<?php echo $this->get_field_id('who_we_are_desc'); ?>" rows="6" class="widefat"><?php echo $frm_instance['who_we_are_desc']; ?></textarea>
</p>
<!-- who we are signature field -->
<p>
  <label for="<?php echo $this->get_field_id('who_we_are_sign'); ?>">Signature: </label>
  <input type="text" name="<?php echo $this->get_field_name('who_we_are_sign'); ?>" value="<?php echo $frm_instance['who_we_are_sign']; ?>" id="<?php echo $this->get_field_id('who_we_are_sign'); ?>" class="widefat" />
</p>
