<?php

	if(!empty($vars["entity"])){
		
		$tabs = array(
			"edit" => array(
				"text" => elgg_echo("group_tools:group:edit:profile"),
				"href" => "#profile",
				"link_class" => "group-tools-group-edit-profile",
				"priority" => 200,
				"selected" => true
			),
			"other" => array(
				"text" => elgg_echo("group_tools:group:edit:other"),
				"href" => "#other",
				"link_class" => "group-tools-group-edit-other",
				"priority" => 300
			)
		);
		
		// Plugin hook to add new tabs
		//$params = array('group' => elgg_get_page_owner_entity());
		//$tabs = elgg_trigger_plugin_hook('group_tools:tabs', 'register',  $params, $tabs);
		
		foreach($tabs as $name => $tab){
			$tab["name"] = $name;
			
			elgg_register_menu_item("filter", $tab);
		}

		
		echo "<div id='group_tools_group_edit_tabbed'>";
		echo elgg_view_menu("filter", array("sort_by" => "priority", "class" => "elgg-menu-hz"));
		echo "</div>";
	} 