<?php echo $this->render_table_name(); ?>
<?php if ($this->is_create or $this->is_csv or $this->is_print){?>
        <div class="fruit-top-actions">
            <div class="btn-group pull-right">
                <div class="col-md-12">
                <?php //echo $this->add_button('btn btn-danger','glyphicon glyphicon-plus-sign'); ?>
                </div>
            </div>
                <?php //echo $this->render_search(); ?>
           
            <div class="clearfix"></div>
        </div>
<?php } ?>
        <div class="fruit-list-container">
        <table id="datatable" class="fruit-list table table-striped table-hover table-bordered table-responsive">
            <thead>
                <?php echo $this->render_grid_head('tr', 'th'); ?>
            </thead>
            <tbody>
                <?php echo $this->render_grid_body('tr', 'td'); ?>
            </tbody>
            <tfoot>
                <?php echo $this->render_grid_footer('tr', 'td'); ?>
            </tfoot>
        </table>
        </div>
        <div class="row">
        <br>
        <div class="col-md-4">
                <?php echo $this->add_button('btn btn-default ','glyphicon glyphicon-plus-sign'); ?>
        </div>
        <div class="col-md-8">
            <div class="btn-group pull-right">
                <?php echo $this->print_button('btn btn-default','glyphicon glyphicon-print');
                echo $this->csv_button('btn btn-default','glyphicon glyphicon-file'); ?>

            </div>
            </div>
        </div>

        <div class="fruit-nav">
            <center>
                 <?php //echo $this->render_limitlist(true); ?>
                <?php //echo $this->render_pagination(); ?>
                <?php //echo $this->render_benchmark(); ?>  
            </center>
        </div>

        <script type="text/javascript">$(document).ready(function(){$("#datatable").dataTable();});</script>