<?php dpsp_admin_header(); ?>

<?php if( time() < get_option( 'dpsp_first_activation', '' ) + 2 * MINUTE_IN_SECONDS ): ?>
	<div id="dpsp-toolkit-welcome">
		<?php echo '<h3>' . __( 'Welcome to Social Pug', 'socialpug' ) . '</h3>'; ?>
	</div>
<?php endif; ?>

<div class="dpsp-page-wrapper dpsp-page-toolkit wrap">

	<?php wp_nonce_field( 'dpsptkn', 'dpsptkn' ); ?>

	<h1 class="dpsp-page-title"><?php echo __( 'Share Tools', 'socialpug' ); ?></h1>

	<div class="dpsp-row dpsp-m-padding">

		<!-- Floating Sidebar -->
		<div class="dpsp-col-1-4">

			<div class="dpsp-tool-wrapper">

				<img src="<?php echo DPSP_PLUGIN_DIR_URL . '/assets/img/tool-sidebar.png'; ?>" />

				<h4 class="dpsp-tool-name">Floating Sidebar</h4>

				<div class="dpsp-tool-actions dpsp-<?php echo ( dpsp_is_location_active('sidebar') ? 'active' : 'inactive' ); ?>">

					<a class="dpsp-tool-settings" href="<?php echo admin_url( 'admin.php?page=dpsp-sidebar' ); ?>"><i class="dashicons dashicons-admin-generic"></i></a>

					<div class="dpsp-switch small">

						<?php echo ( dpsp_is_location_active('sidebar') ? '<span>' . __( 'Active', 'socialpug' ) . '</span>' : '<span>' . __( 'Inactive', 'socialpug' ) . '</span>' ); ?>

						<input id="dpsp-sidebar-active" data-location="sidebar" class="cmn-toggle cmn-toggle-round" type="checkbox" value="1" <?php echo ( dpsp_is_location_active('sidebar') ? 'checked' : '' ); ?> />
						<label for="dpsp-sidebar-active"></label>
					</div>
				</div>
			</div>

		</div>


		<!-- Content -->
		<div class="dpsp-col-1-4">

			<div class="dpsp-tool-wrapper">

				<img src="<?php echo DPSP_PLUGIN_DIR_URL . '/assets/img/tool-content.png'; ?>" />

				<h4 class="dpsp-tool-name">Inline Content</h4>

				<div class="dpsp-tool-actions dpsp-<?php echo ( dpsp_is_location_active('content') ? 'active' : 'inactive' ); ?>">
					<a class="dpsp-tool-settings" href="<?php echo admin_url( 'admin.php?page=dpsp-content' ); ?>"><i class="dashicons dashicons-admin-generic"></i></a>

					<div class="dpsp-switch small">
						<?php echo ( dpsp_is_location_active('content') ? '<span>' . __( 'Active', 'socialpug' ) . '</span>' : '<span>' . __( 'Inactive', 'socialpug' ) . '</span>' ); ?>

						<input id="dpsp-content-active" data-location="content" class="cmn-toggle cmn-toggle-round" type="checkbox" value="1" <?php echo ( dpsp_is_location_active('content') ? 'checked' : '' ); ?> />
						<label for="dpsp-content-active"></label>
					</div>
				</div>
			</div>

		</div>


		<!-- Mobile Sticky -->
		<div class="dpsp-col-1-4">

			<div class="dpsp-tool-wrapper dpsp-unavailable">

				<img src="<?php echo DPSP_PLUGIN_DIR_URL . '/assets/img/tool-mobile.png'; ?>" />

				<h4 class="dpsp-tool-name">Mobile Sticky</h4>

				<div class="dpsp-tool-actions">
					<a href="http://www.devpups.com/?utm_source=plugin&amp;utm_medium=toolkit-to-premium&amp;utm_campaign=social-pug#in-a-nutshell" target="_blank" class="button button-primary">Upgrade</a>
				</div>
			</div>

		</div>


		<!-- Pop-Up -->
		<div class="dpsp-col-1-4">

			<div class="dpsp-tool-wrapper dpsp-unavailable">

				<img src="<?php echo DPSP_PLUGIN_DIR_URL . '/assets/img/tool-pop-up.png'; ?>" />

				<h4 class="dpsp-tool-name">Pop-Up</h4>

				<div class="dpsp-tool-actions">
					<a href="http://www.devpups.com/?utm_source=plugin&amp;utm_medium=toolkit-to-premium&amp;utm_campaign=social-pug#in-a-nutshell" target="_blank" class="button button-primary">Upgrade</a>
				</div>
			</div>

		</div>

	</div>

</div>