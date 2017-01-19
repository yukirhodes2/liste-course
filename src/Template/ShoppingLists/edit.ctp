<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $shoppingList->shopping_list_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $shoppingList->shopping_list_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Shopping Lists'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Shopping Lists'), ['controller' => 'ShoppingLists', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Shopping List'), ['controller' => 'ShoppingLists', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="shoppingLists form large-9 medium-8 columns content">
    <?= $this->Form->create($shoppingList) ?>
    <fieldset>
        <legend><?= __('Edit Shopping List') ?></legend>
        <?php
            echo $this->Form->input('customer_id', ['options' => $customers]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
