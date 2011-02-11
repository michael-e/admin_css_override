<?php

	Class extension_admin_css_override extends Extension{

		public function about() {
			return array(
				'name'         => 'Admin CSS Override',
				'version'      => '1.2',
				'release-date' => '2011-02-11',
				'author'       => array(
					'name'    => 'Michael Eichelsdoerfer',
					'website' => 'http://www.michael-eichelsdoerfer.de',
					'email'   => 'info@michael-eichelsdoerfer.de'
				),
				'description'	=> 'Override the Symphony admin CSS rules using a custom stylesheet.'
			);
		}

		public function getSubscribedDelegates(){
			return array(
				array(
					'page'     => '/backend/',
					'delegate' => 'InitaliseAdminPageHead',
					'callback' => 'appendAssets'
				),
			);
		}

	/*-------------------------------------------------------------------------
		Delegates:
	-------------------------------------------------------------------------*/

		public function appendAssets() {
			Administration::instance()->Page->addStylesheetToHead(URL . '/extensions/admin_css_override/assets/admin_css_override.css', 'screen', 1000, false);
		}

	}
