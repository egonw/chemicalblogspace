<div class='title_submenu'>
<a <? if (!$_SAFE['area']) {print "class='tab_selected'";} ?> href='<? $page_vars['tag'] = false; plinkto("stats.php", $page_vars); ?>'>Overview</a>
<a <? if ($_SAFE['area'] == "blogs") {print "class='tab_selected'";} ?> href='<? plinkto("stats.php", $page_vars, array("area" => "blogs")); ?>'>Blogs</a>
<a <? if ($_SAFE['area'] == "journals") {print "class='tab_selected'";} ?> href='<? plinkto("stats.php", $page_vars, array("area" => "journals")); ?>'>Journals</a>
</div>