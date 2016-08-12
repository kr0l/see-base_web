<?php echo ipView('_header.php')->render(); ?>

   <div id="ww">

        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-lg-offset-2 centered">

                    <?php

                $options = array(

                    'id' => 'homeImage',

                    'width' => '155',

                    'height'=>'155',

                    'class' => '',

                    'default' => ipThemeUrl('assets/img/user.png')

                );

                echo ipSlot('image', $options);

                ?>

                <h1><?php echo ipSlot('text', array(

   'id' => 'homeHeadText',

   'default' => "Hi My name is Okeowo Aderemi"

)); ?> </h1>

                    <?php echo ipSlot('text', array(

   'id' => 'homeText',

   'default' => "Hello everybody. I'm Stanley, a free handsome bootstrap theme coded by BlackTie.co. A really simple theme for those wanting to showcase their work with a cute & clean style.

 

Please, consider to register to our newsletter to be updated

with our latest themes and freebies. Like always, you can use this theme in any project freely. Share it with your friends."

)); ?>


 

                

                </div><!-- /col-lg-8 -->

            </div><!-- /row -->

        </div> <!-- /container -->

    </div>

    <div class="container pt">

<div class="row mt centered">

        <?php echo ipBlock('homeWidget')->render();?>

        </div>

    </div>

   <div class="clear"></div>

<?php echo ipView('_footer.php')->render(); ?>