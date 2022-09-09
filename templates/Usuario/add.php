<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 * @var \Cake\Collection\CollectionInterface|string[] $persona
 * @var \Cake\Collection\CollectionInterface|string[] $rolDeLider
 */
?>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
    <aside class="column">
        <br/>
        <br/>
        <div class="side-nav">

            <?= $this->Html->link(__('Lista de  usuarios'), ['action' => 'index'], ['class' => 'side-nav-item', 'class'=>'btn btn-info'] ) ?>
        </div>
        <br/>
    </aside>
        <div class="column-responsive column-80">
            <div class="usuario form content">
            <?= $this->Form->create($usuario) ?>
            <fieldset>
                <legend><?= __('Añadir Usuario') ?></legend>
                <?php
                    echo $this->Form->control('nombre',['label'=> 'Nombre']);
                    echo $this->Form->control('password', ['label'=> 'Contraseña']);
                    echo $this->Form->control('persona_id', ['options' => $persona , 'label'=>'Indentificador de la persona']);
                    echo $this->Form->control('rol_id', ['options' => $rolDeLider]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Guardar')) ?>
            <?= $this->Form->end() ?>
            </div>
        </div>

    </div>
</div>
