<?php
/*
 * 退出登录.
 *
 * This file is part of wulacms.
 *
 * (c) Leo Ning <windywany@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace dashboard\controllers;

use dashboard\classes\BackendController;
use wulaphp\app\App;
use wulaphp\io\Response;

class LogoutController extends BackendController {

	public function index() {
		$this->passport->logout();
		Response::redirect(App::url('~login'));
	}
}