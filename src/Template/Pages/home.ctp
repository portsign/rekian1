<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
// use Cake\Network\Exception\NotFoundException;

$this->layout = false;

// if (!Configure::read('debug')):
//     throw new NotFoundException('Please replace Pages/home.ctp with your own version.');
// endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
</head>
<body class="home">
    <header>
        <div class="header-image">
            <?= $this->Html->image('http://cakephp.org/img/cake-logo.png') ?>
            <h1>Get the Ovens Ready</h1>
        </div>
    </header>
    <div id="content">
        <div class="row">

			<!-- src/Template/Users/add.ctp -->

			<div class="users form">
			<?= $this->Form->create($user) ?>
			    <fieldset>
			        <legend><?= __('Add User') ?></legend>
			        <?= $this->Form->input('username') ?>
			        <?= $this->Form->input('password') ?>
			        <?= $this->Form->input('role', [
			            'options' => ['admin' => 'Admin', 'author' => 'Author']
			        ]) ?>
			   </fieldset>
			<?= $this->Form->button(__('Submit')); ?>
			<?= $this->Form->end() ?>
			</div>


        </div>
    </div>
    <footer>
    </footer>
</body>
</html>
