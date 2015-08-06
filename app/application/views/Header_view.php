<?php
echo doctype('xhtml11');
?>

<html>
    <head>
        <title><?= $titulo ?> - <?= $cabecalho ?></title>


        <?php
        if($this->config->item('cdn')){
            echo '<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">';
            echo '<link rel = "stylesheet" href = "//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">';
            echo '<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>';
            echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>';
            echo '<link href = "https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/'.$this->config->item('theme').'/bootstrap.min.css" rel = "stylesheet">';
        } else{
            echo '<link href="'.base_url().'assets/css/bootstrap-3.3.5.min.css" rel="stylesheet">';
            echo '<link href="'.base_url().'assets/css/bootstrap-theme-3.3.5.min.css" rel="stylesheet">';
            echo '<link href="'.base_url().'assets/css/font-awesome-4.4.0.min.css" rel="stylesheet">';
            echo '<script src="'.base_url().'assets/js/jquery-1.11.3.min.js"></script> ';
            echo '<script src="'.base_url().'assets/js/bootstrap-3.3.5.min.js"></script> ';
        }
        ?>
        <link href = "<?php echo base_url(); ?>assets/css/opendojo.min.css" rel = "stylesheet">
        <script src="<?php echo base_url(); ?>assets/js/bootstrap-confirmation-2.1.3.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/opendojo.js"></script>
</head>
<body>

    <?php
    $this->view('Navbar_view');
    ?>
    

