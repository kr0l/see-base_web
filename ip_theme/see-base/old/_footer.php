<div id="footer">

   <div class="container">

    <div class="row">

           <div class="col-lg-4">

               <h4><?php echo ipSlot('text', array(

   'id' => 'footerHeaderText',

   'default' => 'My Address'

)); ?></h4>

               <p><?php echo ipSlot('text', array(

   'id' => 'footerContextText',

   'default' => 'The default text'

)); ?>

           </div><!-- /col-lg-4 -->

<div class="col-lg-4">

               <p><?php echo ipBlock('footerBlock')->render(); ?></p>

           </div><!-- /col-lg-4 -->

<div class="col-lg-4">

</div>

<?php echo ipJs(); ?>

</body>

</html>