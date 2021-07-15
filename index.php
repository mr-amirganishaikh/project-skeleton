<?php
include './config.php';

// common head
render_with_props(INCLUDES_PATH.'/head.php', array("page" => "home"));

// render body content here
render_with_props(COMPONENT_PATH.'/header.php', array("page" => "home"));

render_with_props(COMPONENT_PATH.'/home/banner.php');
render_with_props(COMPONENT_PATH.'/home/section2.php', array("section_title" => "Section 2 props based title"));

render_with_props(COMPONENT_PATH.'/footer.php', array("page" => "home"));

// common scripts
render_with_props(INCLUDES_PATH.'/scripts.php', array("page" => "home"));