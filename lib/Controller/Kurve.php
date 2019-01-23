<?php

namespace OCA\Kurve\Controller;

use OCP\AppFramework\Controller;
use OCP\AppFramework\Http\TemplateResponse;
use OCP\IRequest;

class Kurve extends Controller {

	public function __construct($appName,
								IRequest $request) {
		parent::__construct($appName, $request);
	}

	/**
	 * @NoAdminRequired
	 * @NoCSRFRequired
	 */
	public function show() {
		return new TemplateResponse('kurve', 'main');
	}
}
