<div style="min-height: 50px;">
	<!-- Jssor Slider Begin -->
	<!-- ================================================== -->

	<div id="slider1_container"
	style="display: none; position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
		<!-- Loading Screen -->
		<div u="loading" style="position: absolute; top: 0px; left: 0px;">
			<div
			style="filter: alpha(opacity = 70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
			<div
			style="position: absolute; display: block; background: url(http://www.jssor.com/img/loading.gif) no-repeat center center; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
		</div>
		<!-- Slides Container -->
		<div u="slides"
		style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px; height: 500px; overflow: hidden;">

			<?php

			$custom_jssor_fids = array(variable_get('custom_jssor_image1', ''), variable_get('custom_jssor_image2', ''), variable_get('custom_jssor_image3', ''), variable_get('custom_jssor_image4', ''), variable_get('custom_jssor_image5', ''));
			$custom_jssor_fids = array_filter($custom_jssor_fids);

			foreach ($custom_jssor_fids as $jssor_fid) {
				$custom_jssor_file = file_load($jssor_fid);
				$custom_jssor_uri = $custom_jssor_file -> uri;
				$custom_jssor_url = file_create_url($custom_jssor_uri);

				echo '
<div>
<img src="' . $custom_jssor_url . '" />
</div>
';

			}
			?>
		</div>

		<div u="navigator" class="jssorb21"
		style="position: absolute; bottom: 26px; left: 6px;">
			<!-- bullet navigator item prototype -->
			<div u="prototype"
			style="POSITION: absolute; WIDTH: 19px; HEIGHT: 19px; text-align: center; line-height: 19px; color: White; font-size: 12px;"></div>
		</div>
		<!-- Bullet Navigator Skin End -->
		<!-- Arrow Navigator Skin Begin -->
		<style>
		</style>
		<!-- Arrow Left -->
		<span u="arrowleft" class="jssora21l"
		style="width: 55px; height: 55px; top: 123px; left: 8px;"> </span>
		<!-- Arrow Right -->
		<span u="arrowright" class="jssora21r"
		style="width: 55px; height: 55px; top: 123px; right: 8px"> </span>
		<!-- Arrow Navigator Skin End -->
		<a style="display: none" href="http://www.jssor.com">jQuery Slider</a>
	</div>
	<!-- Jssor Slider End -->
</div>
</div>
