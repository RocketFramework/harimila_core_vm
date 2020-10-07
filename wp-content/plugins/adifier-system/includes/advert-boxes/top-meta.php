<div class="top-advert-meta flex-wrap">
	<div class="advert-cat text-overflow">
		<?php 
		$ad_category = adifier_get_advert_category();
		$date = get_ad_publish_date();

		if( !empty( $date ) ):
			?>
			<i class="aficon-dot-circle-o"></i>
			<?php echo $date; ?>			
		<?php endif; ?>
	</div>
	<div class="advert-city text-overflow">
		<?php
		$view = adifier_get_advert_views();
		if( !empty( $view ) ):
			?>( 
			<i class="aficon-map-marker-alt-o"></i>
			<?php echo $view .')'; ?>
		<?php endif; ?>
	</div>			
	<div class="advert-city text-overflow">
		<?php
		$view = adifier_get_advert_views();
		$location = adifier_get_advert_location();
		if( !empty( $location ) ):
			?>
			<i class="aficon-map-marker-alt-o"></i>
			<?php echo $location; ?>
		<?php endif; ?>
	</div>
</div>