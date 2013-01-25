
    <script src="<?=base_url();?>assets/js/jquery.js"></script>
    <script src="<?=base_url();?>assets/js/bootstrap-transition.js"></script>
    <script src="<?=base_url();?>assets/js/bootstrap-alert.js"></script>
    <script src="<?=base_url();?>assets/js/bootstrap-modal.js"></script>
    <script src="<?=base_url();?>assets/js/bootstrap-dropdown.js"></script>
    <script src="<?=base_url();?>assets/js/bootstrap-scrollspy.js"></script>
    <script src="<?=base_url();?>assets/js/bootstrap-tab.js"></script>
    <script src="<?=base_url();?>assets/js/bootstrap-tooltip.js"></script>
    <script src="<?=base_url();?>assets/js/bootstrap-popover.js"></script>
    <script src="<?=base_url();?>assets/js/bootstrap-button.js"></script>
    <script src="<?=base_url();?>assets/js/bootstrap-collapse.js"></script>
    <script src="<?=base_url();?>assets/js/bootstrap-carousel.js"></script>
    <script src="<?=base_url();?>assets/js/bootstrap-typeahead.js"></script>
    <script src="<?=base_url();?>assets/js/bootstrap-affix.js"></script>

    <script src="<?=base_url();?>assets/js/holder/holder.js"></script>
    <script src="<?=base_url();?>assets/js/google-code-prettify/prettify.js"></script>
    <script src="<?=base_url();?>assets/js/select2.min.js"></script>

    <script src="<?=base_url();?>assets/js/application.js"></script>
    <script src="<?=base_url();?>assets/js/jquery.gridster.min.js"></script>

<!-- // this is for the bootstrap tooltip ------------------------------- -->
    <script type="text/javascript">
       $(function () {
           $("[rel='tooltip']").tooltip();
       });
    </script>

<!-- // this is for the grid issue--------------------------------------- -->
    <script type="text/javascript">
        $(function(){ //DOM Ready
            var gridster;
            gridster = $(".gridster ul").gridster({
                widget_margins: [2, 2],
                widget_base_dimensions: [160, 160]
            }).data('gridster');        

            $(".gridster li").hover(
                function(){
                   $(this).css({opacity:'0.8'})
                },
                function(){
                    $(this).css({opacity:'1'})
                }
            );  
        });
    </script>

  </body>
</html>