<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins" />
<h2 class="text-center"><?php esc_attr_e( 'Create a new My Sticky Bar for your website. What can you use it for?', 'mystickymenu' ); ?></h2>
<div class="mystickymenu-new-widget-row">
	<div class="mystickymenu-features new_widget_row">
		<ul>
			<li>
				<div class="mystickymenu-feature">
					<div class="mystickymenu-feature-top">
						<img src="<?php echo esc_url(MYSTICKYMENU_URL) ?>/images/pro-devices.png" />
					</div>
					<div class="feature-title"><?php esc_html_e('Create separate designs for desktop and mobile', 'mystickymenu'); ?></div>
					<div class="feature-description"><?php esc_html_e('E.g. the mobile version can have a different color and a different position', 'mystickymenu'); ?></div>
				</div>
			</li>
			<li>
				<div class="mystickymenu-feature">
					<div class="mystickymenu-feature-top">
						<img src="<?php echo esc_url(MYSTICKYMENU_URL) ?>/images/pro-language.png" />
					</div>
					<div class="feature-title"><?php esc_html_e('Do you have a multi-language website or WPML plugin installed?', 'mystickymenu'); ?></div>
					<div class="feature-description">You can show different bars based on URL (E.g. French bar for the French version of your website)</div>
				</div>
			</li>
			<li>
				<div class="mystickymenu-feature">
					<div class="mystickymenu-feature-top">
						<img src="<?php echo esc_url(esc_url(MYSTICKYMENU_URL)) ?>/images/pro-widget.png" />
					</div>
					<div class="feature-description"><b><?php esc_html_e('Show separate bars for different products on your website', 'mystickymenu'); ?></b> (e.g. you can show the bar for products in the https://yourdomain.com/high-end/* category)</div>
				</div>
			</li>
			<li>
				<div class="mystickymenu-feature second">
					<div class="mystickymenu-feature-top">
						<img src="<?php echo esc_url(MYSTICKYMENU_URL) ?>/images/pro-page.png" />
					</div>
					<div class="feature-title"><?php esc_html_e('Display different channels for your landing pages', 'mystickymenu'); ?></div>
					<div class="feature-description"><?php esc_html_e('This way you can track the results better and have the right bars for your landing pages.', 'mystickymenu'); ?></div>
				</div>
			</li>
			<li>
				<div class="mystickymenu-feature second">
					<div class="mystickymenu-feature-top">
						<img src="<?php echo esc_url(MYSTICKYMENU_URL) ?>/images/pro-support.png" />
					</div>
					<div class="feature-title"><?php esc_html_e('Show one bar on your support and contact pages', 'mystickymenu'); ?>,</div>
					<div class="feature-description"> <?php esc_html_e('and a different bar on your sales pages.', 'mystickymenu'); ?></div>
				</div>
			</li>
			<li>
				<div class="mystickymenu-feature second">
					<div class="mystickymenu-feature-top">
						<img src="<?php echo esc_url(MYSTICKYMENU_URL) ?>/images/pro-chat.png" />
					</div>
					<div class="feature-title"><?php esc_html_e('Display different call-to-action buttons', 'mystickymenu'); ?></div>
					<div class="feature-description"><?php esc_html_e('for different pages on your website or buttons for mobile and desktop', 'mystickymenu'); ?></div>
				</div>
			</li>
		</ul>
		<div class="clear clearfix"></div>
	</div>
	<a href="<?php echo esc_url(admin_url("admin.php?page=my-stickymenu-upgrade")); ?>" class="new-upgrade-button" target="blank"><?php esc_html_e('Upgrade to Pro', 'mystickymenu'); ?></a>
</div>
