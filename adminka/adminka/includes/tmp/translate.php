<?php 
defined( '_V' ) or die( 'Restricted access' );
///////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////
Class ShowTranslate
{
	////////////////////////////////////////////////////////////////////////////////
	function show_sub_menu($languages, $url, $active, $subId='')
	{
		?>

		<ul id="sub-menu<?php echo $subId;?>"><?php
			if($languages){
				foreach($languages as $l){
					?>

					<li><a<?php echo $l['friend_url']==$active ? ' id="active-sub-menu"' : '';?> href="<?php echo $url;?>/<?php echo $l['friend_url'];?>.html" title="<?php echo $l['name'];?>"><?php echo $l['name'];?></a></li><?php
				}
			}
			?>

		</ul><?php
	}
	////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////
	function display_saved($s)
	{
		?>

		<div id="saved"><?php echo $s;?></div><?php
	}
	////////////////////////////////////////////////////////////////////////////////
	function display_all($items, $params, $url)
	{
		$viewFields = $params['view_fields'];
		$translateFields = count($params['edit_fields']);
		?>

		<table id="navigation">
			<thead>
				<tr>
					<td><?php echo lng('Edit');?></td>
					<?php
					if(is_array($viewFields)){
						foreach($viewFields as $f)
						{
							?>

							<td><?php echo lng($f);?></td><?php
						}
					}?>

					<td>
						<?php echo lng('Translated');?>
					</td>
				</tr>
			</thead>
			<tbody><?php
					foreach($items as $i)
					{
						?>

						<tr>
							<td><a title="<?php echo lng('Edit');?>" href="<?php echo $url;?>/<?php echo $i['item_id'];?>.html"><?php echo lng('Edit');?></a></td><?php
							foreach($viewFields as $f)
							{
								?>

								<td><?php echo $i[$f];?></td><?php
							}?>

							<td><?php echo !empty($i['translated']) ? $i['translated'] . '/' . $translateFields : lng('No');?></td>
						</tr><?php
					}?>

			</tbody>
		</table><?php
	}
	////////////////////////////////////////////////////////////////////////////////
	function display_one($item, $params)
	{
		$editFields = $params['edit_fields'];
		//$translation
		//dmp($item);
		?>

			<form action="" method="post" name="edit"><?php
				foreach($params['edit_fields'] as $name=>$f){
					$f['name'] = array_key_exists('name', $f) ? $f['name'] : $name;
					?>

					<label for="<?php echo $f['name'];?>"><?php echo lng($f['name']);?></label><?php
					switch($f['type'])
					{
						case 'text':
							?>

							<input type="text" id="<?php echo $f['name'];?>" name="<?php echo $f['name'];?>" value="<?php echo array_key_exists($f['name'], $item['t']) ? $item['t'][$f['name']] : $item['r'][$f['name']];?>" /><?php
						break;
						case 'friend_url':
							?>

							<input type="text" id="<?php echo $f['name'];?>" name="<?php echo $f['name'];?>" value="<?php echo array_key_exists($f['name'], $item['t']) ? $item['t'][$f['name']] : $item['r'][$f['name']];?>" /><?php
						break;
						case 'textarea':
							?>

							<textarea cols="20" rows="10" class="textarea" id="<?php echo $f['name'];?>" name="<?php echo $f['name'];?>"><?php echo array_key_exists($f['name'], $item['t']) ? $item['t'][$f['name']] : $item['r'][$f['name']];?></textarea><?php
						break;
						case 'textareaEdit':
							?>

							<textarea cols="20" rows="10" class="textarea edit" id="<?php echo $f['name'];?>" name="<?php echo $f['name'];?>"><?php echo array_key_exists($f['name'], $item['t']) ? $item['t'][$f['name']] : $item['r'][$f['name']];?></textarea><?php
						break;
						case 'json':
							?>

							<textarea rel="<?php echo $f['edit'];?>" cols="20" rows="10" class="textarea jsonTranslate" id="<?php echo $f['name'];?>" name="<?php echo $f['name'];?>"><?php echo array_key_exists($f['name'], $item['t']) ? $item['t'][$f['name']] : $item['r'][$f['name']];?></textarea><?php

						break;
					}
					?>

					 <span class="original-text-show"><?php echo lng('Show original');?></span><div class="original"><?php echo $item['r'][$f['name']];?></div><?php

				}?><br />

			<input type="hidden" name="action" value="update-element" />
			<button type="submit" class="submit"><?php echo lng('Submit');?></button>
		</form><?php

	}
	////////////////////////////////////////////////////////////////////////////////
	function display_ones($parent, $obj)
	{
		//dmp($parent);
		?>

		<form action="" method="post" name="edit">
			<label for="name"><?php echo lng('name');?></label>
			<input type="text" id="name" name="name" value="<?php echo $obj['name'];?>" />
			<input type="hidden" name="modified" value="now" />
			<label for="friend_url"><?php echo lng('friend_url');?></label>
			<input type="text" id="friend_url" name="friend_url" value="<?php echo $obj['friend_url'];?>" /> (<?php echo lng('Shown in address bar');?>)
			<label for="parent_id"><?php echo lng('parent_id');?></label>
			<?php option(add_sub_level($parent), $obj['category'], 'category', 'id="category"');?>

			<label for="description"><?php echo lng('description');?></label>
			<textarea cols="20" rows="10" class="textarea" id="description" name="description"><?php echo $obj['description'];?></textarea><br />
			<input type="hidden" name="action" value="update-element" />
			<button type="submit" class="submit"><?php echo lng('Submit');?></button>
		</form>
		<p>
		<a href="<?php echo $obj['id'];?>/gallery.html"><?php echo lng('gallery');?></a>
		</p><?php
	}
	////////////////////////////////////////////////////////////////////////////////

	////////////////////////////////////////////////////////////////////////////////
}
/////////////////////////////////////////////////////////////////////////////
//echo $menu->link['componentUrl'];

ShowTranslate::show_sub_menu($translate->get_languages(), $menu->link['componentUrl'], $activeLang);
if($activeLang)
	ShowTranslate::show_sub_menu($translate->get_translations(), $menu->link['componentUrl'] . '/' . $activeLang, $activeComponent, '-2');
if($activeComponent)
	if(isset($menu->other[2]))
	{
		if(!empty($updatedElements))
			ShowTranslate::display_saved($updatedElements);
		ShowTranslate::display_one($translate->get_component_one_item(), $translate->get_component_params());
	}
	else
	{
		ShowTranslate::display_all($translate->get_component_items(), $translate->get_component_params(), $menu->link['componentUrl'] . '/' . $activeLang . '/'  . $activeComponent);
	}

?>