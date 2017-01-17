<?php
// this file contains the contents of the popup window
require_once('get_wp.php'); ?>
<div id="purethemes-popup">
	<div id="purethemes-popup-header">
		<table>
			<tr>
				<td><label for="shortcode-type">Select shortcode</label></td>
				<td><select name="shortcode-type" id="shortcode-type" class="notloaded" size="1">
					<option value="" selected="selected">Choose shortcode</option>
					<?php

                    $pt_shortcodes = ptsc_shortcodes_list();
					foreach ($pt_shortcodes as $shortcode => $key) {
						echo '<option value="'.$shortcode.'">'.$key['label'].'</option>';
					} ?>
				</select></td>
				<td><div id="purethemes-spinner" style="display:none"></div></td>
			</tr>
		</table>
	</div>
	<form  id="purethemes-popup-form" action="">
		<div id="form-container-ajax">
			<table class="form-table">

			</table>
			<table class="form-table-footer">
				<tr class="form-row">
					<td class="field"><a href="#" class="button button-primary button-large ptsc-insert">Insert Shortcode</a></td>
				</tr>
			</table>

		</div>
	</form>
	<script>
	jQuery(document).ready(function ($) {
		var t=setTimeout(function(){
    		var tbAjax = $('#TB_ajaxContent'),
                tbWindow = $('#TB_window');
            tbWindow.css({
                height: 150,
                width: 500
            });
            tbAjax.css({
                paddingTop: 0,
                paddingLeft: 0,
                paddingRight: 0,
                height: (tbWindow.outerHeight() - 47),
                overflow: 'auto', // IMPORTANT
                width: tbWindow.outerWidth()-2
            });
        },300)
	});

	</script>
</div>