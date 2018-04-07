<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// print_r($contato);exit;
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CodeIgniter CRUD</title>

	<style type="text/css">
	</style>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<div class="jumbotron">
	<div class="container">
		<h1 class="display-4">CRUD CI!</h1>
		<p class="lead">Criando um CRUD com CodeIgniter</p>
		<hr class="my-4">
		<p>Criando um CRUD com CodeIgniter</p>
	</div>
</div>
<div class="container">
	<h1></h1>

	<div id="body">
	<div>
		
	<div>
		<h3></h3>
	</div>

	<?php if ($this->session->flashdata('error') == TRUE): ?>
		<div class="alert alert-danger" role="alert">
			<?php echo $this->session->flashdata('error'); ?>
		</div>
	<?php endif; ?>

	<?php if ($this->session->flashdata('success') == TRUE): ?>
		<div class="alert alert-success" role="alert">
			<?php echo $this->session->flashdata('success'); ?>
		</div>
	<?php endif; ?>

	<?php if (isset($contato)): ?>
		<form method="post" action="<?=base_url('dash/atualizar')?>" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $contato['id'] ?>"/>
	<?php endif; ?>
	<?php if (!isset($contato)): ?>
		<form method="post" action="<?=base_url('dash/salvar')?>" enctype="multipart/form-data">
	<?php endif; ?>

		<div class="form-group">
			<label class="form-check-label">Nome:</label>
			<?php if (!isset($contato)): ?>
				<input class="form-control" type="text" name="nome" value="" required/>
			<?php endif; ?>
			<?php if (isset($contato)): ?>
				<input class="form-control" type="text" name="nome" value="<?= $contato['nome']?>" required/>
			<?php endif; ?>
		</div>

		<div class="form-group">
			<label class="form-check-label">Email:</label>
			<?php if (!isset($contato)): ?>
				<input class="form-control" type="email" name="email" value="" required/>
			<?php endif; ?>
			<?php if (isset($contato)): ?>
				<input class="form-control" type="email" name="email" value="<?= $contato['email']?>" required/>
			<?php endif; ?>
			
		</div>
		<div>
			<label><em>Todos os campos são obrigatórios.</em></label><br>
			<input class="btn btn-success" type="submit" value="Salvar"/>
			<?php if (isset($contato)): ?>
				<a class="btn btn-danger" href="/">Cancelar</a>
			<?php endif; ?>
		</div>
	</form>
	<hr>
	<div>
		<table class="table table-dark">
			<caption>Contatos</caption>
			<thead>
				<tr>
					<th>Nome</th>
					<th>Email</th>
					<th>Operações</th>
				</tr>
			</thead>
			<tbody>
				<?php if ($contatos == FALSE): ?>
					<tr><td colspan="2">Nenhum contato encontrado</td></tr>
				<?php else: ?>
					<?php foreach ($contatos as $row): ?>
						<tr>
							<td><?= $row['nome'] ?></td>
							<td><?= $row['email'] ?></td>
							<td><a class="btn btn-info" href="<?= $row['editar_url'] ?>">[Editar]</a> <a class="btn btn-danger" href="<?= $row['excluir_url'] ?>">[Excluir]</a></td>
						</tr>
					<?php endforeach; ?>
				<?php endif; ?>
			</tbody>
		</table>
	</div>

</div>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>