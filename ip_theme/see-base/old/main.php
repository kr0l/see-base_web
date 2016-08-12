<?php echo ipView('_header.php')->render(); ?>

<div id="white">

   <div class="container">

       <div class="row">

           <?php echo ipSlot('breadcrumb'); ?>

           <div class="col-lg-8 col-lg-offset-2">

           <p><?php echo ipBlock('main')->render(); ?></p>

			

           </div>

<div class="col-lg-2">

               <p>Sidebar Goes Here</p>

               <p><?php echo ipBlock(‘side’)->render(); ?></p>

</div>


 

       </div><!-- /row -->

   </div> <!-- /container -->

</div><!-- /white -->

<?php echo ipView('_footer.php')->render(); ?>