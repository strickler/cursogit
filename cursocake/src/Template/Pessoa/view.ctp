<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pessoa $pessoa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pessoa'), ['action' => 'edit', $pessoa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pessoa'), ['action' => 'delete', $pessoa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pessoa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pessoa'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pessoa'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pessoa view large-9 medium-8 columns content">
    <h3><?= h($pessoa->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($pessoa->Nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($pessoa->Telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CPF') ?></th>
            <td><?= h($pessoa->CPF) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($pessoa->Email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pessoa->id) ?></td>
        </tr>
    </table>
</div>
