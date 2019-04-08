<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
        <?php foreach($this->Dados['seo'] as $seo): 
            extract($seo);
        ?>
        <meta name="robots" content="<?php echo $tipo_rob ;?>">
        <meta name="description" content="<?php echo $descricao;?>">
        <meta name="author" content="<?php echo $author ;?>">
        <link rel="canonical" href="<?php echo URL .$endereco;?>">
        <meta name="keywords" content="<?php echo $keywords;?>">

        <meta property='fb:admins' content="<?php echo $fb_admins;?>">
        <meta property='og:url' content="<?php echo URL .$endereco;?>">
        <meta property='og:title' content= "<?php echo $titulo ;?>">
        <meta property='og:description' content="<?php echo $description;?>">
        <meta property='og:image' content="<?php echoURL . 'assets/imagens/$dir_img/$id/$imagem';?>">
        <meta property='og:type' content='website'>
        <meta property='og:image:width' content='1200'>
        <meta property='og:image:height' content='630'>
        

        <meta name='twitter:site' content="<?php echo $twitter_site;?>">
        <meta name='twitter:card' content="<?php echo summary_large_image;?>">
        <meta name='twitter:title' content="<?php echo $titulo;?>">
        <meta name='twitter:description' content="<?php echo $description;?>">
        <meta name='twitter:image:src' content="<?php echo  URL . 'assets/imagens/$dir_img/$id/$imagem';?>">

        <?php endforeach ;?>
        <link rel="icon" href="<?php echo URL; ?>assets/imagens/icone/favicon.ico">
        <link rel="stylesheet" href="<?php echo URL; ?>assets/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo URL; ?>assets/css/ionicons.min.css">
		<link rel="stylesheet" href="<?php echo URL; ?>assets/css/personalizado.css">
    </head>
    <body>