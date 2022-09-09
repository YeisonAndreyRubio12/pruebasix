<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>


    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <center><h3 class="titulo"> PROYECTO ORI!</h3>
                <br/>
                <aside class="column"></center>
            <div class="side-nav">
            <?= $this->Html->link(__('Editar usuario'), ['action' => 'edit', $usuario->id], ['class' => 'side-nav-item', 'class'=>'btn btn-outline-primary']) ?>
            <?= $this->Form->postLink(__('Eliminar usuario'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id), 'class' => 'side-nav-item', 'class'=>'btn btn-outline-primary']) ?>
            <?= $this->Html->link(__('Listas de usuarios'), ['action' => 'index'], ['class' => 'side-nav-item', 'class'=>'btn btn-outline-primary' ]) ?>
            <?= $this->Html->link(__('Nuevo usuario'), ['action' => 'add'], ['class' => 'side-nav-item','class'=>'btn btn-outline-primary']) ?>
            </div>
            </aside>
    <div class="column-responsive column-80">
        <div class="usuario view content">
            <h3><?= h($usuario->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($usuario->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Persona') ?></th>
                    <td><?= $usuario->has('persona') ? $this->Html->link($usuario->persona->id, ['controller' => 'Persona', 'action' => 'view', $usuario->persona->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Rol De Lider') ?></th>
                    <td><?= $usuario->has('rol_de_lider') ? $this->Html->link($usuario->rol_de_lider->id, ['controller' => 'RolDeLider', 'action' => 'view', $usuario->rol_de_lider->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($usuario->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Relacion Gestion De Convenio') ?></h4>
                <?php if (!empty($usuario->gestion_de_convenio)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Usuario Id') ?></th>
                            <th><?= __('Convenio Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($usuario->gestion_de_convenio as $gestionDeConvenio) : ?>
                        <tr>
                            <td><?= h($gestionDeConvenio->usuario_id) ?></td>
                            <td><?= h($gestionDeConvenio->convenio_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'GestionDeConvenio', 'action' => 'view', $gestionDeConvenio->usuario_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'GestionDeConvenio', 'action' => 'edit', $gestionDeConvenio->usuario_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'GestionDeConvenio', 'action' => 'delete', $gestionDeConvenio->usuario_id], ['confirm' => __('Are you sure you want to delete # {0}?', $gestionDeConvenio->usuario_id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
         </div>
        </div>

    </div>



