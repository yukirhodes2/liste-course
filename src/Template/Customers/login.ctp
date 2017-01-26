<?php  $this->assign('title', "Liste de course. Connexion"); ?>
<body class="bg-3">
	<?= $this->request->session()->read('Auth.Customer.pseudo'); ?>
	
	<?php 	if($this->request->session()->read('Auth.Customer.id')){?>				
		<div class="actions columns large-3 medium-3">
			<h3><?= __('Gestion du compte') ?></h3>
			<ul class="side-nav"><li>Re-bonjour, <?= $this->request->session()->read('Auth.Customer.username'); ?>.</li>
				<li><?= $this->Html->Link($this->Html->image('icone/book_closed.png',['class' => 'icon']).' Accéder à votre panel ',['controller' => 'customers' , 'action' => 'pannelRedirect'],['escape' => false]); ?></li>
				<li><?= $this->Html->Link($this->Html->image('icone/profil.png',['class' => 'icon']).' Vos infos ',['controller' => 'customers' , 'action' => 'view', $this->request->session()->read('Auth.Customer.id')],['escape' => false]); ?></li>
				<li><?= $this->Html->Link($this->Html->image('icone/logout.png',['class' => 'icon']).' Déconnexion ',['controller' => 'customers' , 'action' => 'logout'],['escape' => false]); ?></li>
				
			</ul>
		</div>	
	<?php }
		else{ 	?>	
		
		<div class="users view large-9 columns">
			<div class="row">		
				<div class="push-2">
					<h1 class="push-2 large-8 connexion h2">Connexion Liste de Course</h1>
						<div class="large-12 connexion-form">
							<?= $this->Form->create(null, [
							'url' => ['controller' => 'customers', 'action' => 'login']]) ?>
							<?= $this->Form->input('customer_pseudo',array('label'=>'identifiant')) ?>
							<br/>	
							<?= $this->Form->input('customer_password',array('label'=>'mot de passe')) ?>
							<br/>
							<a href="customers/add" class="large-4 columns admin adm-3">Pas encore inscrit ?</a>
							<?= $this->Form->button('Connexion') ?>
							<?= $this->Form->end() ?>
						</div>
				</div>
			</div>
		</div>
	<?php } ?>
			
		
	
</body>