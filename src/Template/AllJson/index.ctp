<?php
	// View code - src/Template/Articles/json/index.ctp
	foreach ($kampus as &$$kampuses) {
	    unset($kampuses->generated_html);
	}
	echo json_encode(compact('articles'));
?>