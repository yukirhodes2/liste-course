<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Grid'), ['action' => 'edit', $grid->grid_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Grid'), ['action' => 'delete', $grid->grid_id], ['confirm' => __('Are you sure you want to delete # {0}?', $grid->grid_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Grids'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grid'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grids'), ['controller' => 'Grids', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grid'), ['controller' => 'Grids', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="grids view large-9 medium-8 columns content">
    <h3><?= h($grid->grid_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Grid') ?></th>
            <td><?= $grid->has('grid') ? $this->Html->link($grid->grid->grid_id, ['controller' => 'Grids', 'action' => 'view', $grid->grid->grid_id]) : '' ?></td>
        </tr>
    </table>
</div>
