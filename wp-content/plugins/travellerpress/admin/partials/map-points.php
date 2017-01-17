<table id="mappoints-datatable" class="tp-map-table widefat">

<?php 
$mappoints_value = get_post_meta($post->ID, 'mappoints_value', true); 
if(empty($mappoints_value)) { ?>
	<tr>
		<td colspan="3">Click "Add Marker" to add first point</td>
	</tr>
<?php } else {

	foreach ($mappoints_value as $key => $point) { ?>
	<tr data-markerid="<?php echo esc_attr($point['id']); ?>">
		<td class="tp-map-actions" style="width:40px;">
		    <a class="fold" href="#"><span class="dashicons dashicons-arrow-right toggle"></span></a>
		    <a class="linkto" href="#"><span class="dashicons dashicons-location"></span></a>
		</td>
		<td class="address <?php echo "marker".$point['id']; ?>" data-markerid="<?php echo esc_attr($point['id']); ?>">
			<div class="tp-over-fold">
				<p>
					<input name="mappoints_pointaddress[]"  type="text" placeholder="<?php esc_attr_e('Address','travellerpress'); ?>" value="<?php echo esc_attr($point['pointaddress']); ?>" class="regular-text address-search" autocomplete="off" /><br>
				</p>
			</div>
			<div class="tp-foldable">
				<p>
					<input name="mappoints_pointlat[]"  type="text" placeholder="<?php _e('Latitude','travellerpress'); ?>" value="<?php echo esc_attr($point['pointlat']); ?>" class="regular-text point-lat" />
					<input name="mappoints_pointlong[]" type="text" placeholder="<?php _e('Longitude','travellerpress'); ?>" value="<?php echo esc_attr($point['pointlong']); ?>" class="regular-text point-long" />
				</p>
			    <p>
	                <label><?php _e('Marker icon color','travellerpress'); ?></label>
	                <input name="mappoints_icon[]" type="text" value="<?php echo esc_attr($point['icon']); ?>" class="travellpress-color-field" />
	            </p>
	            <!-- Your add & remove image links -->
	            <hr/>
	            <h4><?php _e('InfoBox settings','travellerpress') ?></h4>
	            
	            <?php 
					$upload_link = esc_url( get_upload_iframe_src( 'image', $post->ID ) );
					$point_image_id = $point['image'];
					$point_image_src = wp_get_attachment_image_src( $point_image_id, 'medium' );
					$you_have_img = is_array( $point_image_src );
					?>
					<div class="point-img-container">
					    <?php if ( $you_have_img ) : ?>
					        <img src="<?php echo esc_url($point_image_src[0]); ?>" alt="" style="max-width:100%;" />
					    <?php endif; ?>
					</div>

					<p class="hide-if-no-js">
					    <a class="upload-point-image button <?php if ( $you_have_img  ) { echo 'hidden'; } ?>" 
					       href="<?php echo esc_url($upload_link); ?>">
					        <?php _e('Set image for marker\'s infobox', 'travellerpress') ?>
					    </a>
					    <a class="delete-point-image <?php if ( $you_have_img  ) { echo 'hidden'; } ?>" 
					      href="#">
					        <?php _e('Remove this image') ?>
					    </a>
					</p>
					<!-- A hidden input to set and post the chosen image id -->
					<input name="mappoints_image[]" type="hidden" value="<?php echo esc_attr( $point_image_id ); ?>" class="point-img-id" />

				<p>
			        <label><strong><?php _e('Title','travellerpress'); ?></strong></label>
			        <input  name="mappoints_pointtitle[]" type="text" class="point-title regular-text" value="<?php echo esc_attr($point['pointtitle']); ?>" />
			    </p>
			    <p>
			        <label><?php _e('<strong>Content</strong> (html tags friendly)','travellerpress'); ?></label>
			        <textarea rows="8" name="mappoints_pointdata[]" class="point-data large-text"><?php echo esc_textarea($point['pointdata']); ?></textarea><br>
			    </p>
				
				
				
		    </div>
		</td>
		<td class="tp-map-actions" style="width:40px;">
		    <a class="delete" href="#"><span class="dashicons dashicons-dismiss"></span></a>
		</td>
	</tr>	
<?php }
} ?>

</table>

<input class="button-primary" type="submit" id="mappoints_addnew" name="marker" value="<?php esc_attr_e( 'Add new marker','travellerpress' ); ?>" />

<div style="display:none">
    <table class="point-clone">
		<tr>
		<td class="tp-map-actions" style="width:40px;">
		    <a class="fold" href="#"><span class="dashicons dashicons-arrow-right toggle"></span></a>
		    <a class="linkto" href="#"><span class="dashicons dashicons-location"></span></a>
		</td>
		<td class="address">
			<div class="tp-over-fold">
				<p>
					<input name="mappoints_pointaddress[]"  type="text" placeholder="<?php _e('Address','travellerpress'); ?>" value="" class="regular-text address-search" autocomplete="off"/><br>
				</p>
			</div>
			<div class="tp-foldable">
				<p>
					<input name="mappoints_pointlat[]"  type="text" placeholder="<?php _e('Latitude','travellerpress'); ?>" value="" class="regular-text point-lat" />
					<input name="mappoints_pointlong[]" type="text" placeholder="<?php _e('Longitude','travellerpress'); ?>" value="" class="regular-text point-long" />
				</p>
				<p>
			    	<label><strong><?php _e('Marker icon color','travellerpress'); ?></strong></label>
	                <input name="mappoints_icon[]" type="text" value="#6db70c" class="travellpress-color-field" />
			    </p>
			    <hr/>
	            <h4><?php _e('InfoBox settings','travellerpress') ?></h4>
				<?php 
				$upload_link = esc_url( get_upload_iframe_src( 'image', $post->ID ) );
				
				?>
				<div class="point-img-container">
				  
				</div>

				<p class="hide-if-no-js">
				    <a class="upload-point-image button" 
				       href="<?php echo esc_url($upload_link); ?>">
				        <?php _e('Set image for marker\'s infobox') ?>
				    </a>
				    <a class="delete-point-image hidden" href="#">
				        <?php _e('Remove this image') ?>
				    </a>
				</p>
				<!-- A hidden input to set and post the chosen image id -->
				<input name="mappoints_image[]" type="hidden" value="" class="point-img-id" />

				<p>
			        <label><strong><?php _e('Title','travellerpress'); ?></strong></label>
			        <input  name="mappoints_pointtitle[]" type="text" class="point-title regular-text" />
			    </p>
			    <p>
			        <label><?php _e('<strong>Content</strong> (html tags friendly)','travellerpress'); ?></label>
			        <textarea rows="8" name="mappoints_pointdata[]" class="point-data large-text"></textarea><br>
			    </p>
		    </div>
		</td>
		<td class="tp-map-actions" style="width:40px;">
		    <a class="delete" href="#"><span class="dashicons dashicons-dismiss"></span></a>
		</td>
	</tr>
	</table>
</div>