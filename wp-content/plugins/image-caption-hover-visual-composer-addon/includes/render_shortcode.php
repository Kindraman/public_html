<div class="wcp-caption-plugin" data-height="responsive" id="wcp-widget-<?php echo $image_id; ?>" style="<?php echo $border_styling; ?>">
		<?php if (isset($caption_url) && $caption_url != '') { ?>
			<a href="<?php echo $caption_url; ?>" target="<?php echo $caption_url_target; ?>">
		<?php } ?>
			<div class="image-caption-box"> 
	        	<div
	        		class="caption <?php echo $hover_effect; ?> captiontext"
	        		style="background-color: <?php echo $caption_bg; ?>;
	        		    color: <?php echo $caption_text_color; ?>;"
	        	>
	        		<div style="display:table;height:100%;width: 100%;">
			    		<div class="centered-text" style="text-align:padding: 5px;">
			    			<?php echo $content; ?>
			    		</div>
		    		</div>
	        </div>
	        	<img class="wcp-caption-image img-make-responsive" src="<?php echo $image_url; ?>" title="<?php echo $image_title; ?>" alt="<?php echo $image_alt; ?>"/>
	</div>

	    <?php if (isset($caption_url) && $caption_url != '') { ?>
			</a>
		<?php } ?>
</div>