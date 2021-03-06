<?php
$this->view('Header_view');

//Declarações de tipo para formulário
$attributes_form = array('class' => 'form-horizontal');
$attributes_label = array('class' => 'col-sm-2 control-label');
$attributes_text = array('class' => 'form-control');
$attributes_dropdown = 'class="form-control"';
$attributes_submit = array('class' => 'btn btn-default');
?>
<div class="container-fluid">
    <h1><i class="fa fa-pencil  fa-3x"></i> <?= $cabecalho ?></h1>

    <?php
    echo form_open('Academia/edit', $attributes_form);
    echo form_hidden('idAcademia', $academia['idAcademia']);

    if (form_error('nomeAcademia')) {
        echo '<div class="form-group has-error">';
    } else {
        echo '<div class="form-group">';
    }

    echo form_label('Academia', 'nomeAcademia', $attributes_label);
    ?>
    <div class="col-xs-4">
        <?php
        //atributos extra do campo texto
        $attributes_text['name'] = 'nomeAcademia';
        $attributes_text['id'] = 'nomeAcademia';
        $attributes_text['value'] = $academia['nomeAcademia'];
        echo form_input($attributes_text);
        ?>
    </div>
    <?php echo form_error('nomeAcademia'); ?>
</div> 
<?php
if (form_error('logradouro')) {
    echo '<div class="form-group has-error">';
} else {
    echo '<div class="form-group">';
}

echo form_label('Endereço', 'logradouro', $attributes_label);
?>
<div class="col-xs-4">
    <?php
    //atributos extra do campo texto
    $attributes_text['name'] = 'logradouro';
    $attributes_text['id'] = 'logradouro';
    $attributes_text['value'] = $academia['logradouro'];

    echo form_input($attributes_text);
    ?>
</div>
<?php echo form_error('logradouro'); ?>
</div> 
<?php
if (form_error('numero')) {
    echo '<div class="form-group has-error">';
} else {
    echo '<div class="form-group">';
}

echo form_label('Número', 'numero', $attributes_label);
?>
<div class="col-xs-4">
    <?php
    //atributos extra do campo texto
    $attributes_text['name'] = 'numero';
    $attributes_text['id'] = 'numero';
    $attributes_text['value'] = $academia['numero'];
    echo form_input($attributes_text);
    ?>
</div>

<?php echo form_error('numero'); ?>
</div>
<?php
if (form_error('complemento')) {
    echo '<div class="form-group has-error">';
} else {
    echo '<div class="form-group">';
}

echo form_label('Complemento', 'complemento', $attributes_label);
?>
<div class="col-xs-4">
    <?php
    //atributos extra do campo texto
    $attributes_text['name'] = 'complemento';
    $attributes_text['id'] = 'complemento';
    $attributes_text['value'] = $academia['complemento'];
    echo form_input($attributes_text);
    ?>
</div>

<?php echo form_error('complemento'); ?>
</div> 
<?php
if (form_error('bairro')) {
    echo '<div class="form-group has-error">';
} else {
    echo '<div class="form-group">';
}

echo form_label('Bairro', 'bairro', $attributes_label);
?>
<div class="col-xs-4">
    <?php
    $attributes_text['name'] = 'bairro';
    $attributes_text['id'] = 'bairro';
    $attributes_text['value'] = $academia['bairro'];

    echo form_input($attributes_text);
    ?>
</div>

<?php echo form_error('bairro'); ?>
</div>
<?php
if (form_error('cidade')) {
    echo '<div class="form-group has-error">';
} else {
    echo '<div class="form-group">';
}

echo form_label('Cidade', 'cidade', $attributes_label);
?>
<div class="col-xs-4">
    <?php
    $attributes_text['name'] = 'cidade';
    $attributes_text['id'] = 'cidade';
    $attributes_text['value'] = $academia['cidade'];
    echo form_input($attributes_text);
    ?>
</div>

<?php echo form_error('cidade'); ?>
</div> 
<?php
if (form_error('estado')) {
    echo '<div class="form-group has-error">';
} else {
    echo '<div class="form-group">';
}

echo form_label('Estado', 'estado', $attributes_label);
?>
<div class="col-xs-4">
    <?php
    $selected = $academia['estado'];

    echo form_dropdown('estado', $estados, $selected, $attributes_dropdown);
    ?>
</div>
<?php echo form_error('estado'); ?>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php
        echo form_submit($attributes_submit, 'Salvar');

        $options = 'onClick="window.location=\'' . site_url('Academia') . '\'" class="btn"';
        echo form_button('cancel', 'Cancelar', $options);
        ?>
    </div>
</div>


<?php
echo form_close();
?>
</div>
<?php
$this->view('Footer_view');
?>
