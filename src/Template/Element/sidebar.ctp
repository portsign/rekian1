<?php
	$path = $this->request->here
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li <?php if ($path=='/dashboard') { echo 'class="active"'; } ?> ><a href="/dashboard">Dashboard</a></li>
        <li <?php if ($path=='/final-relasi') { echo 'class="active"'; } ?> ><a href="/final-relasi">All rell</a></li>
        <li <?php if ($path=='/sma') { echo 'class="active"'; } ?> ><a href="/sma">SMA</a></li>
        <li <?php if ($path=='/sma-jurusan') { echo 'class="active"'; } ?> ><a href="/sma-jurusan">SMA Jurusan</a></li>
        <li <?php if ($path=='/kampus') { echo 'class="active"'; } ?> ><a href="/kampus">Kampus</a></li>
        <li <?php if ($path=='/kampus-jurusan') { echo 'class="active"'; } ?> ><a href="/kampus-jurusan">Kampus Jurusan</a></li>
        <li <?php if ($path=='/all-json.json') { echo 'class="active"'; } ?> ><a href="/all-json.json">JSON DATA</a></li>
        <li><a href="/users/logout">Logout</a></li>
    </ul>
</nav>
