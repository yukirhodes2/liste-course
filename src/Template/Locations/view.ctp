<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Location'), ['action' => 'edit', $location->location_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Location'), ['action' => 'delete', $location->location_id], ['confirm' => __('Are you sure you want to delete # {0}?', $location->location_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Locations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Location'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Locations'), ['controller' => 'Locations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Location'), ['controller' => 'Locations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="locations view large-9 medium-8 columns content">
    <h3><?= h($location->location_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= $location->has('location') ? $this->Html->link($location->location->location_id, ['controller' => 'Locations', 'action' => 'view', $location->location->location_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= $location->has('product') ? $this->Html->link($location->product->product_id, ['controller' => 'Products', 'action' => 'view', $location->product->product_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location Row') ?></th>
            <td><?= $this->Number->format($location->location_row) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location Column') ?></th>
            <td><?= $this->Number->format($location->location_column) ?></td>
        </tr>
    </table>
</div>
