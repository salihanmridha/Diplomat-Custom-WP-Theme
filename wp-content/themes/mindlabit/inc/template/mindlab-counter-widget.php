<!-- counter widget title field -->
<p>
  <label for="<?php echo $this->get_field_id('title'); ?>">Title: </label>
  <input type="text" name="<?php echo $this->get_field_name('counter_widget_title'); ?>" value="<?php echo $frm_instance['counter_widget_title']; ?>" id="<?php echo $this->get_field_id('title'); ?>" class="widefat" />
</p>

<!-- counter widget number target field -->
<p>
  <label for="<?php echo $this->get_field_id('number-Target'); ?>">Target Number: </label>
  <input type="text" name="<?php echo $this->get_field_name('number_target'); ?>" value="<?php echo $frm_instance['number_target']; ?>" id="<?php echo $this->get_field_id('number-target'); ?>" class="widefat" />
</p>

<!-- counter widget number delay field -->
<p>
  <label for="<?php echo $this->get_field_id('number-delay'); ?>">Number Delay: </label>
  <input type="text" name="<?php echo $this->get_field_name('number_delay'); ?>" value="<?php echo $frm_instance['number_delay']; ?>" id="<?php echo $this->get_field_id('number-delay'); ?>" class="widefat" />
</p>

<!-- counter widget number increment field -->
<p>
  <label for="<?php echo $this->get_field_id('number-increment'); ?>">Number Increment: </label>
  <input type="text" name="<?php echo $this->get_field_name('number_increment'); ?>" value="<?php echo $frm_instance['number_increment']; ?>" id="<?php echo $this->get_field_id('number-increment'); ?>" class="widefat" />
</p>
