<?php
/**
 * Group profile summary
 *
 * Icon and profile fields
 *
 * @uses $vars['group']
 */

if (!isset($vars['entity']) || !$vars['entity']) {
	echo elgg_echo('groups:notfound');
	return true;
}

$group = $vars['entity'];
$owner = $group->getOwnerEntity();

if (!$owner) {
	// not having an owner is very bad so we throw an exception
	$msg = "Sorry, '" . 'group owner' . "' does not exist for guid:" . $group->guid;
	throw new InvalidParameterException($msg);
}

?>
<div class="groups-profile clearfix elgg-image-block">
	<div class="elgg-image">
		<div class="groups-profile-icon">
			<?php
				// we don't force icons to be square so don't set width/height
				echo elgg_view_entity_icon($group, 'large', array(
					'href' => '',
					'width' => '',
					'height' => '',
				)); 
			?>
		</div>
		<div class="groups-stats">
			<p>
				<b><?php echo elgg_echo("groups:owner"); ?>: </b>
				<?php

  					echo elgg_view('output/url', array(
  						'text' => $owner->name,
  						'value' => $owner->getURL(),
  						'is_trusted' => true,
  					));
				?>
			</p>
			<p>
			<?php
				$num_members = $group->getMembers(array('count' => true));
				echo elgg_echo('groups:members') . ": " . $num_members;
			?>
			</p>
      <?php 
  			echo elgg_view('groups/profile/fields', $vars);     
  		?>
		</div>
	</div>

	<div class="groups-profile-fields elgg-body">
    <?php
      if (elgg_group_gatekeeper(false)) {
      	if (!$group->isPublicMembership() && !$group->isMember()) {
      		echo elgg_view('groups/profile/closed_membership');
      	}
      
      	if( elgg_view_exists('thewire_tools/group_module_thewire'))
        {
          echo elgg_view('thewire_tools/group_module_thewire');
        } 
      } else {
      	if ($group->isPublicMembership()) {
      		echo elgg_view('groups/profile/membersonly_open');
      	} else {
      		echo elgg_view('groups/profile/membersonly_closed');
      	}
      }
      
		 ?> 
	</div>
</div>