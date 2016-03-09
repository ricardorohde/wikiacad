<section class="content-header">
	<h1>
		Artigos
	</h1>
	<ol class="breadcrumb">
		<li><a href="default"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="dashboard/artigos"><i class="fa fa-book"></i> Artigos</a></li>
		<li class="active"><?php echo Text::limit_chars($article->title, 65); ?></li>
	</ol>
</section>

<!-- Main content -->
<section class="content">

<h1><?php echo $article->title; ?></h1>
<?php echo $article->content; ?>

</section>