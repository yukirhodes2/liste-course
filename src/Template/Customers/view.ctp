<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Customer'), ['action' => 'edit', $customer->customer_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customer'), ['action' => 'delete', $customer->customer_id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->customer_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
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
    </table>
</div>
