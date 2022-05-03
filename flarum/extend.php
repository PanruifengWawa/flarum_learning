<?php

/*
 * This file is part of Flarum.
 *
 * For detailed copyright and license information, please view the
 * LICENSE file that was distributed with this source code.
 */

require_once __DIR__.'/extensions/hello.php';
require_once __DIR__.'/extensions/TagController.php';

use Flarum\Extend;
use PRF\HelloWorld\HelloWorldController;
use PRF\ListTags\ListTagsController;



return [
	(new Extend\Routes('api'))
        ->get('/hello-world', 'hello.index', HelloWorldController::class)
        ->get('/mytags', 'mytags.index', ListTagsController::class)
];