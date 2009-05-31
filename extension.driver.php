<?php

	Class extension_admin_css_override extends Extension{

		public function about() {
			return array(
				'name'         => 'Admin CSS Override',
				'version'      => '1.0',
				'release-date' => '2009-05-31',
				'author'       => array(
					'name'    => 'Michael Eichelsdoerfer',
					'website' => 'http://www.michael-eichelsdoerfer.de',
					'email'   => 'info@michael-eichelsdoerfer.de'
				)
			);
		}

		public function getSubscribedDelegates(){
			return array(
				array(
					'page'     => '/backend/',
					'delegate' => 'InitaliseAdminPageHead',
					'callback' => 'appendStylesheet'
				),
			);
		}

	/*-------------------------------------------------------------------------
		Delegates:
	-------------------------------------------------------------------------*/

		public function appendStylesheet($context) {
			$context['parent']->Page->addStylesheetToHead(URL . '/extensions/admin_css_override/assets/aco.css', 'screen', 1000);
		}

	}
