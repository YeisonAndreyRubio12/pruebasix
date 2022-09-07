<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TipoDeIdentificacion $tipoDeIdentificacion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tipo De Identificacion'), ['action' => 'edit', $tipoDeIdentificacion->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tipo De Identificacion'), ['action' => 'delete', $tipoDeIdentificacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoDeIdentificacion->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tipo De Identificacion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tipo De Identificacion'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipoDeIdentificacion view content">
            <h3><?= h($tipoDeIdentificacion->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($tipoDeIdentificacion->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tipoDeIdentificacion->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Persona') ?></h4>
                <?php if (!empty($tipoDeIdentificacion->persona)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Tipo De Identificacion Id') ?></th>
                            <th><?= __('Numero De Identificacion') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Apellido') ?></th>
                            <th><?= __('Rol Id') ?></th>
                            <th><?= __('Correo Electronico') ?></th>
                            <th><?= __('Telefono') ?></th>
                            <th><?= __('Comision Id') ?></th>
                            <th><?= __('Numero De Horas') ?></th>
                            <th><?= __('Unidad Academica Id') ?></th>
                            <th><?= __('Dependencia') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($tipoDeIdentificacion->persona as $persona) : ?>
                        <tr>
                            <td><?= h($persona->id) ?></td>
                            <td><?= h($persona->tipo_de_identificacion_id) ?></td>
                            <td><?= h($persona->numero_de_identificacion) ?></td>
                            <td><?= h($persona->nombre) ?></td>
                            <td><?= h($persona->apellido) ?></td>
                            <td><?= h($persona->rol_id) ?></td>
                            <td><?= h($persona->correo_electronico) ?></td>
                            <td><?= h($persona->telefono) ?></td>
                            <td><?= h($persona->comision_id) ?></td>
                            <td><?= h($persona->numero_de_horas) ?></td>
                            <td><?= h($persona->unidad_academica_id) ?></td>
                            <td><?= h($persona->dependencia) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Persona', 'action' => 'view', $persona->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Persona', 'action' => 'edit', $persona->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Persona', 'action' => 'delete', $persona->id], ['confirm' => __('Are you sure you want to delete # {0}?', $persona->id)]) ?>
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
