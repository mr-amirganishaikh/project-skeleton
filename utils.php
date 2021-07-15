<?php
/*
	function:
		render_with_props($template, $props, $print)
		ex.: render_with_props('header.php', array("key" => "value"))

	description:
		This function includes a $template and extracts variable from provided array of $props
	
	params:
		$template: (required)
			Template path to be included
		$props[]: (optional)
			An array of props which gets extracted as variable and can be used within $template
		$print: (optional)
			This is used for output buffering. Below is the ref link for ob method:
			https://notlaura.com/output-buffering/#:~:text=The%20Functions&text=ob_start()%20turns%20on%20output,assign%20this%20to%20a%20variable
*/
function render_with_props($template, $props = array(), $print = true)
{
	$output = NULL;

	if (file_exists($template)) {
		// extract variables to a local namespace
		if (isset($props)) {
			extract($props);
		}

		// start output buffering
		ob_start();

		// include template
		include $template;

		$output = ob_get_clean();
	}

	if ($print) {
		print $output;
	}

	return $output;
}

/*
	function: 
		get_page_meta($meta_for)
		ex: get_page_meta('home')

	description:
		This function returns page meta for required page. All page meta info are
		defined in /meta/page.meta.php file as constant;
		
	params:
		$meta_for:
			Page name for which meta info is required
*/
function get_page_meta($meta_for = "")
{
	$page_meta = array();
	switch ($meta_for) {
		case 'home':
			$page_meta = HOME_META;
			break;
	}

	return $page_meta;
}