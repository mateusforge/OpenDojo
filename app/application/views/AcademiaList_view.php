<?php
$this->view('Header_view');
$attributes_form = array('class' => 'form-inline');
$attributes_label = array('class' => 'sr-only');
$attributes_text = array('class' => 'form-control');
$attributes_dropdown = 'class="form-control"';
$attributes_submit = array('class' => 'btn btn-default');
?>
<div class="row">
    <div class="col-md-10"><h1><?= $cabecalho ?></h1></div>
    <div class="col-md-2"><?= anchor('Academia/add', '<i class="fa fa-plus-circle fa-4x"></i><br />Adicionar') ?></div>
</div>

<?php
if ($this->session->flashdata('message') <> '' ) {
    if ($this->session->flashdata('type_message')) {
        echo '<div class="alert alert-success">';
    } else {
        echo '<div class="alert alert-danger">';
    }
    echo $this->session->flashdata('message');
    echo '</div>';
}
?>
<div class="row">
    <div class="col-md-7">
<div class="bs-filter">
    <?php
    echo form_open('Academia', $attributes_form);
    ?>
    <div class="form-group">
        <?php
        echo form_error('filtro_nomeAcademia');
        echo form_label('Academia', 'filtro_nomeAcademia', $attributes_label);
        ?>
        
        <?php
        $attributes_text['name'] = 'filtro_nomeAcademia';
        $attributes_text['placeholder'] = 'Academia';
        $attributes_text['id'] = 'filtro_nomeAcademia';
        $attributes_text['value'] = $filtro_nomeAcademia;

        echo form_input($attributes_text);
        ?>    
        </div>
    <?php
    echo form_submit($attributes_submit, 'Filtrar');
    $attributes_button = array(
    'class' => 'btn btn-default',
    'onClick' => "location= 'Academia'",
    'value' => 'true',
    'type' => 'reset',
);
    echo form_button($attributes_button, 'Limpar');
    echo form_close();

    ?>
</div>
    </div>
<?php if ($academias != false): ?>
    <div class="col-md-5">
        <ul class="pagination">
            <?= $all_pages ?>
        </ul>
    </div>
    <?php endif ?>
</div>  
<table class="table table-bordered">
    <thead>
        <tr>
            <th>
                ID
            </th>
            <th>
                Nome
            </th>
            <th>
                Opções
            </th>
        </tr>
    </thead>
    <tbody>
        <?php if ($academias != false): ?>
            <?php foreach ($academias as $academia): ?>
                <tr>
                    <td>
                        <?= $academia->idAcademia ?>
                    </td>
                    <td>
                        <?= $academia->nomeAcademia ?>
                    </td>
                    <td style="text-align: center;">
                        <a class="btn btn-success" href="<?= site_url('Academia/edit/' . $academia->idAcademia) ?>">
                            <i class="fa fa-pencil fa-lg"></i> Editar</a>
                        <?php if(!isset($academia->dojos)) { ?>
                        <a class="btn btn-danger" href="<?= site_url('Academia/delete/' . $academia->idAcademia) ?>"
                           title="Deseja realmente deletar a academia?" data-toggle="confirmation-delete" data-singleton="true" data-placement="top">
                            <i class="fa fa-trash-o fa-lg" title="Deletar a academia"></i> Deletar</a>
                        <?php } ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
        <p>Não há registros cadastrados!</p>
    <?php endif ?>
</tbody>
</table>



</div>

<?php
$this->view('Footer_view');
?>
