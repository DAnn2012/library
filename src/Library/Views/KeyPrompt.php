<div id="container_boldgrid_api_key_notice"
	class="boldgrid-notice library error notice is-dismissible"
	data-notice-id="bg-key-prompt"
	data-notice-state="<?php echo \Boldgrid\Library\Library\Notice\KeyPrompt::getState() ?>"
	>
	<div class="premium-key-active key-entry-message">
		<h2 class="dashicons-before dashicons-admin-network">
			<?php esc_html_e( 'Premium BoldGrid Connect Key', 'boldgrid-connect' )?></h2>
		<p>
			<?php esc_html_e( 'Awesome! You have a Premium Connect Key saved on this site.', 'boldgrid-connect' ) ?>
		</p>
		<p>
			<?php printf( esc_html__( 'Make sure you\'re getting the most out of your premium subscription by installing our other %sBoldGrid plugins%s. As a Premium user, you also have access to %sCloud WordPress%s where you can create new WordPress sites for free. If you need any help, our support team is eager to serve!', 'boldgrid-connect' ),
				'<a href="https://www.boldgrid.com/wordpress-plugins/" target="_blank">', '</a>',
				'<a href="https://www.boldgrid.com/central/" target="_blank">', '</a>'
			) ?>
		</p>
		<p class='change-key'><a href="#" data-action="change-connect-key"><?php _e( 'Click here to change your Connect Key', 'boldgrid-connect' ) ?></a></p>
	</div>
	<div class="basic-key-active key-entry-message">
		<h2 class="dashicons-before dashicons-admin-network">
			<?php esc_html_e( 'Free BoldGrid Connect Key', 'boldgrid-connect' )?></h2>

		<?php if ( ! $enableClaimMessage ) { ?>
		<p>
			<?php esc_html_e( 'Thank you for adding your Connect Key. Try upgrading to a Premium subscription for full access to BoldGrid!', 'boldgrid-connect' ); ?>
		</p>
		<p><a target="_blank" href="https://www.boldgrid.com/connect-keys?source=library-prompt"
				class="button button-primary"><?php esc_html_e( 'Upgrade', 'boldgrid-connect' ) ?></a>
		</p>
		<?php } else {
			include __DIR__ . '/EnvatoFreeKey.php';
		} ?>
		<p class='change-key'><a href="#" data-action="change-connect-key"><?php _e( 'Click here to change your Connect Key', 'boldgrid-connect' ) ?></a></p>
	</div>
	<div class="api-notice">
		<h2 class="dashicons-before dashicons-admin-network">
			<?php esc_html_e( 'Enter Your BoldGrid Connect Key', 'boldgrid-connect' ); ?>
		</h2>
		<p id="boldgrid_api_key_notice_message">
			<?php printf( esc_html__( 'Please enter your %s32 digit BoldGrid Connect Key%s below and click submit.', 'boldgrid-connect' ), '<b>', '</b>' ); ?>
		</p>
		<form id="boldgrid-api-form" autocomplete="off">
			<?php wp_nonce_field( 'boldgrid_set_key', 'set_key_auth' ); ?>
			<div class="tos-box">
				<label><input id="tos-box" type="checkbox" value="0">
				<?php printf( esc_html__( 'I agree to the %sTerms of Use and Privacy Policy%s.', 'boldgrid-connect' ), '<a href="https://www.boldgrid.com/software-privacy-policy/" target="_blank">', '</a>' ); ?></label>
			</div>
			<br />
			<input type="text" id="boldgrid_api_key" maxlength="37" placeholder="XXXXXXXX - XXXXXXXX - XXXXXXXX - XXXXXXXX" autocomplete="off" />
			<button id="submit_api_key" class="button button-primary">
				<?php esc_html_e( 'Submit', 'boldgrid-connect' ); ?>
			</button>
			<span>
				<div id="boldgrid-api-loading" class="boldgrid-wp-spin"></div>
			</span>
		</form>
		<?php
		if ( $enableClaimMessage ) {
			include __DIR__ . '/Envato.php';
		} else {
			// Display either the Envato message or the default signup message.
			?>
				<p><a href="#" class="boldgridApiKeyLink button button-secondary">
				<?php
			esc_html_e( 'Don\'t have a Connect Key yet or lost your Key?', 'boldgrid-connect' );
				?>
			</a></p>
		<?php } ?>
	</div>
	<?php
	// Display either the Envato message or the default signup message.

	?>
	<div class="new-api-key hidden">
		<h2 class="dashicons-before dashicons-admin-network">
			<?php esc_html_e( 'Request or Reset a BoldGrid Connect Key', 'boldgrid-connect' ); ?>
		</h2>
		<div class="key-request-content">
			<p id="requestKeyMessage">
				<?php printf(
					esc_html__(
						'You may obtain two different types of Connect Keys: A Free Key or a Premium Connect Key (%4$sclick here%5$s for the benefits of a Premium Key).
						%1$sA Premium Connect Key is highly recommended and may already come with your hosting account.%2$s
						%3$s
						To get your Free Key (or to have it emailed to you if you\'ve lost it), enter your info below:',
						'boldgrid-connect'
					),
					'<b>',
					'</b>',
					'<br /><br />',
					'<a href="https://www.boldgrid.com/connect-keys/" target="_blank">',
					'</a>' );
				?>
				<br />
			</p>
			<p class="error-alerts"></p>
			<form id="requestKeyForm">
				<label>
					<?php esc_html_e( 'First Name', 'boldgrid-connect' ); ?>:
				</label>
				<input type="text" id="firstName" maxlength="50" placeholder="<?php esc_html_e( 'First Name', 'boldgrid-connect' ); ?>" value="<?php echo esc_attr( $first_name ); ?>" />
				<label>
					<?php esc_html_e( 'Last Name', 'boldgrid-connect' ); ?>:
				</label>
				<input type="text" id="lastName" maxlength="50" placeholder="<?php esc_html_e( 'Last Name', 'boldgrid-connect' ); ?>" value="<?php echo esc_attr( $last_name ); ?>" />
				<label>
					<?php esc_html_e( 'E-mail', 'boldgrid-connect' ); ?>:
				</label>
				<input type="text" id="emailAddr" maxlength="50" placeholder="your@name.com" value="<?php echo esc_attr( $email ); ?>" />
				<p>
					<label>
						<input id="requestTos" type="checkbox" value="0">
						<?php printf( esc_html__( 'Check here to agree to our %sTerms of Use and Privacy Policy%s.', 'boldgrid-connect' ), '<a href="https://www.boldgrid.com/software-privacy-policy/" target="_blank">', '</a>' ); ?>
					</label>
				</p>
				<input type="hidden" id="siteUrl" value="<?php echo get_admin_url(); ?>" />
				<button id="requestKey" class="button button-primary">
					<?php esc_html_e( 'Submit', 'boldgrid-connect' ); ?>
				</button>
				<span class="spinner"></span>
				<input type="hidden" id="generate-api-key" value="<?php echo esc_attr( $api ); ?>" />

				<a href="#" class="enterKeyLink">
					<?php esc_html_e( 'Have a Connect Key to enter?', 'boldgrid-connect' ); ?>
				</a>
			</form>
		</div>
	</div>
</div>
