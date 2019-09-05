<!-- Why Choose Us title field -->
<p>
  <label for="<?php echo $this->get_field_id('title'); ?>">Title: </label>
  <input type="text" name="<?php echo $this->get_field_name('why_choose_us_title'); ?>" value="<?php echo $frm_instance['why_choose_us_title']; ?>" id="<?php echo $this->get_field_id('title'); ?>" class="widefat" />
</p>

<!-- Why Choose Us Icon field -->
<p>
  <label for="<?php echo $this->get_field_id('why-choose-us-icon-field'); ?>">Icon: </label>
  <input type="text" name="<?php echo $this->get_field_name('why_choose_us_icon_field'); ?>" value="<?php echo $frm_instance['why_choose_us_icon_field']; ?>" id="<?php echo $this->get_field_id('why-choose-us-icon-field'); ?>" class="widefat" />
</p>

<!-- Why choose us description field -->
<p>
  <label for="<?php echo $this->get_field_id('why-choose-us-desc'); ?>">Description: </label>
  <textarea name="<?php echo $this->get_field_name('why_choose_us_desc'); ?>" id="<?php echo $this->get_field_id('why-choose-us-desc'); ?>" rows="6" class="widefat"><?php echo $frm_instance['why_choose_us_desc']; ?></textarea>
</p>
