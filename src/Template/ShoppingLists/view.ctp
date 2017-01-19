<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Shopping List'), ['action' => 'edit', $shoppingList->shopping_list_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Shopping List'), ['action' => 'delete', $shoppingList->shopping_list_id], ['confirm' => __('Are you sure you want to delete # {0}?', $shoppingList->shopping_list_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Shopping Lists'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shopping List'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Shopping Lists'), ['controller' => 'ShoppingLists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shopping List'), ['controller' => 'ShoppingLists', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="shoppingLists view large-9 medium-8 columns content">
    <h3><?= h($shoppingList->shopping_list_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Shopping List') ?></th>
            <td><?= $shoppingList->has('shopping_list') ? $this->Html->link($shoppingList->shopping_list->shopping_list_id, ['controller' => 'ShoppingLists', 'action' => 'view', $shoppingList->shopping_list->shopping_list_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer') ?></th>
            <td><?= $shoppingList->has('customer') ? $this->Html->link($shoppingList->customer->customer_id, ['controller' => 'Customers', 'action' => 'view', $shoppingList->customer->customer_id]) : '' ?></td>
        </tr>
    </table>
</div>
