<?php echo $this->render_table_name($mode); ?>
<div class="fruit-top-actions">
    <?php echo $this->render_button('save_new','save','create','fruit-button fruit-blue','','create,edit') ?>
    <?php echo $this->render_button('save_edit','save','edit','fruit-button fruit-green','','create,edit') ?>
    <?php echo $this->render_button('save_return','save','list','fruit-button fruit-purple','','create,edit') ?>
    <?php echo $this->render_button('return','list','','fruit-button fruit-orange') ?>
</div>
<div class="fruit-view">
<?php echo $this->render_fields_list($mode); ?>
</div>
<div class="fruit-nav">
    <?php echo $this->render_benchmark(); ?>
</div>
