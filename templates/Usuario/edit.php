<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 * @var string[]|\Cake\Collection\CollectionInterface $persona
 * @var string[]|\Cake\Collection\CollectionInterface $rolDeLider
 */
?>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <center><h3>PROYECTO ORI</h3></center>
        <br/>
    <aside class="column">
        <div class="side-nav">
            <?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'delete', $usuario->id],
                ['confirm' => __('¿Estas seguro de eliminar el # {0}?', $usuario->id), 'class' => 'side-nav-item', 'class'=> 'btn btn-warning']
            ) ?>
            <?= $this->Html->link(__('Listas de usuario'), ['action' => 'index'], ['class' => 'side-nav-item', 'class'=>"btn btn-success"]) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usuario form content">
            <?= $this->Form->create($usuario) ?>
            <fieldset>
                <legend><?= __('Editar Usuario') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('password');
                    echo $this->Form->control('persona_id', ['options' => $persona]);
                    echo $this->Form->control('rol_id', ['options' => $rolDeLider]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
    </div>
</div>
