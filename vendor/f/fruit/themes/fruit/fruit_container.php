<link rel="stylesheet" href="include/DT/css/jquery.dataTables.css" type="text/css">

<div class="fruit<?php echo $this->is_rtl ? ' fruit_rtl' : ''?>">
    <?php echo $this->render_table_name(false, 'div', true)?>
    <div class="fruit-container"<?php echo ($this->start_minimized) ? ' style="display:none;"' : '' ?>>
        <div class="fruit-ajax">
            <?php echo $this->render_view() ?>
        </div>
        <div class="fruit-overlay"></div>
    </div>
</div>

<script src="include/DT/js/jquery.dataTables.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#datatable').dataTable();
      });
    </script>