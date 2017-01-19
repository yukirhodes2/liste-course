<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Customer'), ['action' => 'edit', $customer->customer_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customer'), ['action' => 'delete', $customer->customer_id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->customer_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Shopping Lists'), ['controller' => 'ShoppingLists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shopping List'), ['controller' => 'ShoppingLists', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="customers view large-9 medium-8 columns content">
    <h3><?= h($customer->customer_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Customer') ?></th>
            <td><?= $customer->has('customer') ? $this->Html->link($customer->customer->customer_id, ['controller' => 'Customers', 'action' => 'view', $customer->customer->customer_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer Pseudo') ?></th>
            <td><?= h($customer->customer_pseudo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer Name') ?></th>
            <td><?= h($customer->customer_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer Surname') ?></th>
            <td><?= h($customer->customer_surname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer Mail') ?></th>
            <td><?= h($customer->customer_mail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer Password') ?></th>
            <td><?= h($customer->customer_password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Level Id') ?></th>
            <td><?= $this->Number->format($customer->level_id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Shopping Lists') ?></h4>
        <?php if (!empty($customer->shopping_lists)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Shopping List Id') ?></th>
                <th scope="col"><?= __('Customer Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($customer->shopping_lists as $shoppingLists): ?>
            <tr>
                <td><?= h($shoppingLists->shopping_list_id) ?></td>
                <td><?= h($shoppingLists->customer_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ShoppingLists', 'action' => 'view', $shoppingLists->shopping_list_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ShoppingLists', 'action' => 'edit', $shoppingLists->shopping_list_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ShoppingLists', 'action' => 'delete', $shoppingLists->shopping_list_id], ['confirm' => __('Are you sure you want to delete # {0}?', $shoppingLists->shopping_list_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
