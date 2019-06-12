<?php
declare(strict_types=1);
/**
 * @author Lukas Reschke
 * @copyright 2014 Lukas Reschke lukas@owncloud.com
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 * See the COPYING-README file.
 */

namespace OCA\files_castviewer\AppInfo;

use OCP\Util;

Util::addScript('files_castviewer', 'previewplugin');
Util::addStyle('files_castviewer', 'style');
