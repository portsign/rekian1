<?php
	$path = $this->request->here
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li <?php if ($path=='/dashboard') { echo 'class="active"'; } ?> ><a href="/dashboard">Dashboard</a></li>
        <li <?php if ($path=='/tb-all-rel') { echo 'class="active"'; } ?> ><a href="/tb-all-rel">All rell</a></li>
        <li <?php if ($path=='/tb-sma') { echo 'class="active"'; } ?> ><a href="/tb-sma">SMA</a></li>
        <li <?php if ($path=='/tb-sma-jrs') { echo 'class="active"'; } ?> ><a href="/tb-sma-jrs">SMA JRS</a></li>
        <li <?php if ($path=='/tb-sma-jrs-rel') { echo 'class="active"'; } ?> ><a href="/tb-sma-jrs-rel">SMA JRS Rel</a></li>
        <li <?php if ($path=='/tb-univ') { echo 'class="active"'; } ?> ><a href="/tb-univ">Univ</a></li>
        <li <?php if ($path=='/tb-univ-jrs') { echo 'class="active"'; } ?> ><a href="/tb-univ-jrs">Univ JRS</a></li>
        <li <?php if ($path=='/tb-univ-jrs-rel') { echo 'class="active"'; } ?> ><a href="/tb-univ-jrs-rel">Univ JRS Rel</a></li>
        <li><a href="/users/logout">Logout</a></li>
    </ul>
</nav>
