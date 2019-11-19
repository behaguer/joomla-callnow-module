<?php
/**
 * @package    MOD_CALLNOW
 *
 * @author     Ryan Behague <support@isonic.net.au>
 * @copyright  2019
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       isonic.net.au
 */
use Joomla\CMS\Helper\ModuleHelper;
defined('_JEXEC') or die;
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
require ModuleHelper::getLayoutPath('mod_callnow', $params->get('layout', 'default'));