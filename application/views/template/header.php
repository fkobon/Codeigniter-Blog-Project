<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $this->config->item('title'); ?> | <?php if ($this->router->method == 'index') { echo $this->config->item('sub_title'); } else { echo $title; } ?></title>
<meta name="description" content="<?php if (!empty($metadescription)) { echo $metadescription; } else { echo $this->config->item('metadescription'); } ?>">
<meta name="keywords" content="<?php if (!empty($metakeywords)) { echo $metakeywords; } else { echo $this->config->item('metakeywords'); } ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/mobile.css" type="text/css" media="Screen" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/mobile.css" type="text/css" media="handheld" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/ui-darkness/jquery-ui-1.10.3.custom.css" type="text/css" />
<script src="<?php echo base_url(); ?>js/jqueryui/jquery-1.9.1.js" charset="utf-8"></script>
<script src="<?php echo base_url(); ?>js/jqueryui/jquery-ui-1.10.3.custom.js"></script>
<script src="<?php echo base_url(); ?>js/jqueryui/jquery-ui-all.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/prettyPhoto.css" type="text/css" media="screen" />
<script src="<?php echo base_url(); ?>js/jquery.prettyPhoto.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$("a[rel^='prettyPhoto']").prettyPhoto({social_tools:false, deeplinking: false, theme: 'dark_square',default_width: 800,default_height: 600,});
});
</script>
<?php if ($this->router->class == 'admin') { ?>
<script src="<?php echo base_url(); ?>js/tinymce/tinymce.min.js"></script>
<script src="<?php echo base_url(); ?>js/tinymce/tinymce-global.js"></script>
<?php } ?>
<?php if($this->router->method == 'blog_view') { ?>
<link rel="image_src" href="<?php echo base_url(); ?>images/posts/<?php echo $article['featured']; ?>"/>
<meta property="og:title" content="<?php echo $article['title']; ?>" />
<meta property="og:url" content="<?php echo base_url(); ?>blog/<?php echo $article['slug']; ?>" />
<meta property="og:image" content="<?php echo base_url(); ?>images/posts/<?php echo $article['featured']; ?>" />
<?php } ?>
</head>
<body>
<div id="container">
<header>
<h1><a href="<?php echo base_url(); ?>"><?php echo $this->config->item('title'); ?></a></h1>
<h2><?php echo $this->config->item('sub_title'); ?></h2>
</header>
<nav>
<?php foreach ($nav as $nav_item) { ?>
<a href="<?php echo eval('?>' .$nav_item['url']. '<?php ');; ?>"><?php echo $nav_item['title']; ?></a>
<?php } ?>
</nav>
<section>