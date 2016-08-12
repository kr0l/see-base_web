<?php echo ipView('_header.php')->render(); ?>

<div id="white">

   <div class="container">

       <div class="row">

<div class="col-lg-8 col-lg-offset-2 centered">

<?php

$options = array(

   'id' => 'contact',

   'width' => '155',

   'height'=>'155',

   'class' => 'cssclass(optional)',

   'default' => ipThemeUrl('assets/img/user.png')

);

echo ipSlot('image', $options);

?>

 

                    

                    <h1>About</h1>

                    <p><?php echo ipSlot('text', array(

   'id' => 'contactText',

   'default' => 'The default text'

)); ?>

</p>

                

                </div>

                </div>

                </div>

                </div>

<?php echo ipView('_footer.php')->render(); ?>