<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Shopping List'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="shoppingLists index large-9 medium-8 columns content">
    <h3><?= __('Shopping Lists') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('shopping_list_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($shoppingLists as $shoppingList): ?>
            <tr>
                <td><?= $shoppingList->has('shopping_list') ? $this->Html->link($shoppingList->shopping_list->shopping_list_id, ['controller' => 'ShoppingLists', 'action' => 'view', $shoppingList->shopping_list->shopping_list_id]) : '' ?></td>
                <td><?= $shoppingList->has('customer') ? $this->Html->link($shoppingList->customer->customer_id, ['controller' => 'Customers', 'action' => 'view', $shoppingList->customer->customer_id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $shoppingList->shopping_list_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $shoppingList->shopping_list_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $shoppingList->shopping_list_id], ['confirm' => __('Are you sure you want to delete # {0}?', $shoppingList->shopping_list_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
