<?php

class Extending_AffWP_Settings_Challenge {

	public function __construct() {
		// Add tab and settings.
		add_filter( 'affwp_settings_tabs', array( $this, 'setting_tab' ) );
		add_filter( 'affwp_settings',      array( $this, 'eas_challenge_settings' ) );
	}

	/**
	 * Register the new EAS Challenge settings tab.
	 * 
	 * @return array
	 */
	public function setting_tab( $tabs ) {
		$tabs['eas_challenge'] = __( 'EAS Challenge', 'extending-affwp-settings-challenge' );

		return $tabs;
	}

	/**
	 * Extending AffWP Settings Challenge settings.
	 * 
	 * @return array
	*/
	public function eas_challenge_settings( $settings = array() ) {

		$settings['eas_challenge'] = array(
			'eas_challenge_header'     => array(
				'name' => __( 'EAS Challenge Header', 'extending-affwp-settings-challenge' ),
				'type' => 'header'
			),

			'eas_challenge_multicheck' => array(
				'name'    => __( 'Select your favorites:', 'extending-affwp-settings-challenge' ),
				'type'    => 'multicheck',
				'options' => array(
					'apples'      => __( 'Apples',      'extending-affwp-settings-challenge' ),
					'bananas'     => __( 'Bananas',     'extending-affwp-settings-challenge' ),
					'cranberries' => __( 'Cranberries', 'extending-affwp-settings-challenge' ),
				),
			),

			'eas_challenge_checkbox'   => array(
				'name' => __( 'Enable Test Setting',   'extending-affwp-settings-challenge' ),
				'desc' => __( 'Explain what it does.', 'extending-affwp-settings-challenge' ),
				'type' => 'checkbox',
			),
 		);

		return $settings;
	}

}
new Extending_AffWP_Settings_Challenge;