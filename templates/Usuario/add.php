<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 * @var \Cake\Collection\CollectionInterface|string[] $persona
 * @var \Cake\Collection\CollectionInterface|string[] $rolDeLider
 */
?>
<h2>¡CREAR UN NUEVO USUARIO!</h2>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Lista de  usuarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usuario form content">
            <?= $this->Form->create($usuario) ?>
            <fieldset>
                <legend><?= __('Añadir Usuario') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('password');
                    echo $this->Form->control('persona_id', ['options' => $persona]);
                    echo $this->Form->control('rol_id', ['options' => $rolDeLider]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Guardar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
