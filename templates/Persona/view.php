<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Persona $persona
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Persona'), ['action' => 'edit', $persona->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Persona'), ['action' => 'delete', $persona->id], ['confirm' => __('Are you sure you want to delete # {0}?', $persona->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Persona'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Persona'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="persona view content">
            <h3><?= h($persona->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Tipo De Identificacion') ?></th>
                    <td><?= $persona->has('tipo_de_identificacion') ? $this->Html->link($persona->tipo_de_identificacion->id, ['controller' => 'TipoDeIdentificacion', 'action' => 'view', $persona->tipo_de_identificacion->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero De Identificacion') ?></th>
                    <td><?= h($persona->numero_de_identificacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($persona->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Apellido') ?></th>
                    <td><?= h($persona->apellido) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rol De Lider') ?></th>
                    <td><?= $persona->has('rol_de_lider') ? $this->Html->link($persona->rol_de_lider->id, ['controller' => 'RolDeLider', 'action' => 'view', $persona->rol_de_lider->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Correo Electronico') ?></th>
                    <td><?= h($persona->correo_electronico) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefono') ?></th>
                    <td><?= h($persona->telefono) ?></td>
                </tr>
                <tr>
                    <th><?= __('Comision') ?></th>
                    <td><?= $persona->has('comision') ? $this->Html->link($persona->comision->id, ['controller' => 'Comision', 'action' => 'view', $persona->comision->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Unidad Academica') ?></th>
                    <td><?= $persona->has('unidad_academica') ? $this->Html->link($persona->unidad_academica->id, ['controller' => 'UnidadAcademica', 'action' => 'view', $persona->unidad_academica->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Dependencia') ?></th>
                    <td><?= h($persona->dependencia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($persona->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero De Horas') ?></th>
                    <td><?= $this->Number->format($persona->numero_de_horas) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Gestion De Operacion') ?></h4>
                <?php if (!empty($persona->gestion_de_operacion)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Persona Id') ?></th>
                            <th><?= __('Operacion Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($persona->gestion_de_operacion as $gestionDeOperacion) : ?>
                        <tr>
                            <td><?= h($gestionDeOperacion->persona_id) ?></td>
                            <td><?= h($gestionDeOperacion->operacion_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'GestionDeOperacion', 'action' => 'view', $gestionDeOperacion->persona_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'GestionDeOperacion', 'action' => 'edit', $gestionDeOperacion->persona_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'GestionDeOperacion', 'action' => 'delete', $gestionDeOperacion->persona_id], ['confirm' => __('Are you sure you want to delete # {0}?', $gestionDeOperacion->persona_id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Usuario') ?></h4>
                <?php if (!empty($persona->usuario)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Persona Id') ?></th>
                            <th><?= __('Rol Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($persona->usuario as $usuario) : ?>
                        <tr>
                            <td><?= h($usuario->id) ?></td>
                            <td><?= h($usuario->nombre) ?></td>
                            <td><?= h($usuario->password) ?></td>
                            <td><?= h($usuario->persona_id) ?></td>
                            <td><?= h($usuario->rol_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Usuario', 'action' => 'view', $usuario->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Usuario', 'action' => 'edit', $usuario->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Usuario', 'action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?>
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
