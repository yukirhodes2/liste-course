<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Brand'), ['action' => 'edit', $brand->brand_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Brand'), ['action' => 'delete', $brand->brand_id], ['confirm' => __('Are you sure you want to delete # {0}?', $brand->brand_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Brands'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Brand'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Brands'), ['controller' => 'Brands', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Brand'), ['controller' => 'Brands', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="brands view large-9 medium-8 columns content">
    <h3><?= h($brand->brand_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Brand') ?></th>
            <td><?= $brand->has('brand') ? $this->Html->link($brand->brand->brand_id, ['controller' => 'Brands', 'action' => 'view', $brand->brand->brand_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Brand Name') ?></th>
            <td><?= h($brand->brand_name) ?></td>
        </tr>
    </table>
</div>
