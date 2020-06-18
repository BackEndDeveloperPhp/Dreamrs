<!-- include database -->
<?php require_once "config/database.php"; ?>

<?php $db = new Database(); ?>
<?php $d = $db->getConnection(); ?>


<?php require_once "partials/head.php"; ?>

<?php require_once "partials/header.php"; ?>


<?php 
   
if (isset($_GET['page'])) {

   switch ($_GET['page']) {
     case 'home':
      require_once "partials/banner.php"; 
      require_once "partials/about_us_part.php"; 
      require_once "partials/project.php"; 
      require_once "partials/services_part.php"; 
      require_once "partials/portfolio.php"; 
      require_once "partials/blog_part.php"; 

      
      break;
   
     case 'about':
      require_once "partials/about_breadcrumb_part.php";
      require_once "partials/about_us_part.php"; 
      require_once "partials/portfolio.php"; 
     // require_once "partials/testimonials.php"; 

       break;
   
     case 'services':
      require_once "partials/services_breadcrumb_part.php";
      require_once "partials/services_part.php"; 
     // require_once "partials/testimonials.php"; 
       break;
   
     case 'blog':
      require_once "partials/blog_breadcrumb_part.php";
      require_once "partials/blog.php";
      require_once "partials/sidebar_blog.php";
      break;
   
     case 'project':
      require_once "partials/project_breadcrumb_part.php";
      require_once "partials/project.php"; 
       break;
   
     case 'contact':
      require_once "partials/contact_breadcrumb_part.php";
      require_once "partials/contact_part.php"; 
      break;

   
   
   
     default:
      require_once "partials/error.php";
     break;
   }
   
   
   }else if(!isset($_GET['page'])) {
      header('Location: index.php?page=home');
   }

   
?>

<?php require_once "partials/footer.php"; ?>
  

