<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;

$this->layout = false;

$cakeDescription = 'The Shopping List';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>
	<?= $this->Html->css('bootstrap.min.css') ?>
</head>
<body class="home">
        <div class="jumbotron">
            <?= $this->Html->image('http://cakephp.org/img/logo-cake.png') ?>
            <h1>The Shopping List</h1>
        </div>
    <div id="content">
		<div class="alert alert-info">
			Voici le panel administrateur. Vous pouvez accéder à toutes les fonctionnalités de l'application.<strong>Mode développeur.</strong> 
		</div>
		
		<div class="row">
		  <div class="col-lg-4">
			<h3>Brands</h3>
			<div class="list-group">
				<a href="/brands/add" class="list-group-item"> Add </a> 
				<a href="/brands/find" class="list-group-item disabled"> Find </a>
			</div>
		  </div>
		  <div class="col-lg-4">
			<h3>Categories</h3>
			<div class="list-group">
				<a href="/categories/add" class="list-group-item"> Add </a> 
				<a href="/categories/find" class="list-group-item disabled"> Find </a>
			</div>
		  </div>
		  <div class="col-lg-4">
			<h3>Customers</h3>
			<div class="list-group">
				<a href="/customers/add" class="list-group-item"> Add </a> 
				<a href="/customers/find" class="list-group-item disabled"> Find </a>
			</div>
		  </div>
		  <div class="col-lg-4">
			<h3>Grids</h3>
			<div class="list-group">
				<a href="/grids/add" class="list-group-item"> Add </a> 
				<a href="/grids/find" class="list-group-item disabled"> Find </a>
			</div>
		  </div>
		  <div class="col-lg-4">
			<h3>Levels</h3>
			<div class="list-group">
				<a href="/levels/add" class="list-group-item"> Add </a> 
				<a href="/levels/find" class="list-group-item disabled"> Find </a>
			</div>
		  </div>
		  <div class="col-lg-4">
			<h3>Products</h3>
			<div class="list-group">
				<a href="/products/add" class="list-group-item"> Add </a> 
				<a href="/products/find" class="list-group-item disabled"> Find </a>
			</div>
		  </div>
		  <div class="col-lg-4">
			<h3>ShoppingLists</h3>
			<div class="list-group">
				<a href="/shopping_lists/add" class="list-group-item"> Add </a> 
				<a href="/shopping_lists/find" class="list-group-item disabled"> Find </a>
			</div>
		  </div>
		  <div class="col-lg-4">
			<h3>Types</h3>
			<div class="list-group">
				<a href="/types/add" class="list-group-item"> Add </a> 
				<a href="/types/find" class="list-group-item disabled"> Find </a>
			</div>
		  </div>
		</div>
    </div>
</body>
</html>
