<?php
get_header();
// postimi i titujve te posteve me ane te php dhe contetnit
while (have_posts()) {
	the_post(); ?> 

	 
 <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: 
   "></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title">  <?php the_title(); ?></h1>
      <div class="page-banner__intro">
        <p>replace later</p>
      </div>
    </div>  
  </div>

  <div class="container container--narrow page-section">
<?php
// if per child theme shfaqja dhe xhdukja e box
if( wp_get_post_parent_id(get_the_ID())){ ?>

<div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> Back to About Us</a> <span class="metabox__main">    <?php  the_title()  ?>    </span></p>
    </div>

 <?php  }
?>

<!-------KONTROLLI NQS KA CHILD THEMES DHE HEQJA E BOX------------->
    <?php
$testarray = get_pages(
  array('child_of'=> get_the_ID()
));

 if(

  $theparent or $testarray)
   
   { ?>
    
  <!----  about us history goals ne te djathete te tekstit,box ------>  
    <div class="page-links">
      <h2 class="page-links__title"><a href="<?php echo get_the_permalink($theparent)  ?>"><?php echo get_the_title($theparent)  ?></a></h2>
      <ul class="min-list">
        <!--- shtimi i kodit ne php---->
        <?php  
        // nqs the parent nuk eshte 0 ,kemi parent child theme condition
        if($theParent){
          $findchildernof = $thparent;}
          else{
            $findchildernof =get_the_ID();
          }
          wp_list_pages(array(
            'title_li' => NULL,
            'child_of' => $findchildernof     
          ));
        ?>
        <li class="current_page_item"><a href="#">Our History</a></li>
        <li><a href="#">Our Goals</a></li>
      </ul>
    </div>
  <?php }?>

  

    <div class="generic-content">
     <?php the_content();  ?>
    </div>

  </div>


   <?php }
   get_footer();

?>