<?php if (isset($images) && is_array($images)) { ?>

<div class="_container">

<?php foreach ($images as $imageKey => $image) { ?>

   <div class="_item ipsItem">

       <a

           <?php if ($image['type'] == 'lightbox' && !ipIsManagementState()) { ?>

               rel="lightbox"

               href="<?php echo escAttr($image['imageBig']); ?>"

           <?php } ?>

           <?php if ($image['type'] == 'link') { ?>

               href="<?php echo escAttr($image['url']); ?>"

               <?php echo $image['blank'] ? ' target="_blank" ' : ''; ?>

           <?php } ?>

           class="_link"

           title="<?php echo esc($image['title']); ?>"

           data-description="<?php echo isset($image['description']) ? escAttr($image['description']) : ''; ?>"

           >

           <img class="_image ipsImage" src="<?php echo escAttr($image['imageSmall']); ?>"

alt="<?php echo escAttr($image['title']); ?>" />

       </a>

   </div>

<?php } ?>

</div>

<?php } ?>

<?php

 

/**

* This comment block is used just to make IDE suggestions to work

* @var $items \Ip\Menu\Item[]

* @var $this \Ip\View

*/

?>

<?php if (!empty($items)){ ?>

<ul <?php echo $attributesStr; ?>><?php

   foreach($items as $menuItem) {

       $css = array();

       $submenu = '';

       $target = '';

       $class = '';

       $anchorToggleClass='';

 

       if($menuItem->isCurrent()) {

           $css[] = $active;

       } elseif ($menuItem->isInCurrentBreadcrumb()) {

           $css[] = $crumb;

       }

       if(sizeof($menuItem->getChildren()) > 0) {

           $css[] = "dropdown";

           $anchorToggleClass="dropdown-toggle";


 

       }

       if ($menuItem->isDisabled()) {

           $href = '';

           $css[] = $disabled;

       } else {

           $href = ' href="' . escAttr($menuItem->getUrl()) . '"';

       }

 

       if ($menuItem->getBlank()) {

           $target = ' target="_blank"';

       }

 

       if ($menuItem->getChildren()) {

           $submenuData = array(

               'items' => $menuItem->getChildren(),

               'depth' => $depth + 1,

               'attributesStr' => 'class="dropdown-menu" role="menu"'

           );

 

           $submenuData = array_merge($this->getVariables(), $submenuData);

           $submenu = ipView('menu.php', $submenuData)->render();

 

       }

 

       if (!empty($css)) {

           $class = ' class="'.implode(' ', $css).'"';

       }

       ?>

       <li<?php echo $class; ?>>

 

           <a <?php echo (strlen($anchorToggleClass) > 0) ? 'data-toggle="dropdown" ': '' ?> class="<?php

 

echo $anchorToggleClass ?>" <?php echo $href; ?><?php echo $target; ?> title="<?php echo escAttr($menuItem->getTitle()); ?>">

             <?php echo $menuItem->getTitle(); ?>

           </a>

           <?php echo $submenu; ?>

       </li><?php

   } ?>

</ul>

<?php }

<?php

if(!ipAdminId()):

?>

<?php echo ipAddJs('js/bootstrap.min.js'); ?>

<?php

endif;

?>