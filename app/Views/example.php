<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
</head>
<body>
	<div>
		<a href='<?php echo site_url('crud')?>'>Filmes</a> |
		<a href='<?php echo site_url('sessao')?>'>Sessão</a> |
		<a href='<?php echo site_url('funcionario')?>'>Funcionarios</a> |
		<a href='<?php echo site_url('ingresso')?>'>Ingressos</a> | 
		<a href='<?php echo site_url('sessao_funcionario')?>'>Sessao por Funcionarios</a> |		 
		<a href='<?php echo site_url('cliente')?>'>Clientes</a>
	</div>
	<div style='height:20px;'></div>  
    <div style="padding: 10px">
		<?php echo $output; ?>
    </div>
    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
</body>
</html>
