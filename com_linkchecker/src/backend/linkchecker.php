<?php
/*
 * @copyright  Copyright (C) 2016 - 2019 Marco Beierer. All rights reserved.
 * @license    http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
 */
defined('_JEXEC') or die('Restricted access');

if (!JFactory::getUser()->authorise('core.manage', 'com_linkchecker')) {
	throw new JAccessExceptionNotallowed(JText::_('JERROR_ALERTNOAUTHOR'), 403);
}

require_once(JPATH_COMPONENT . '/controller.php');

$controller = JControllerLegacy::getInstance('LinkChecker');
$controller->execute(JFactory::getApplication()->input->getCmd('task'));
$controller->redirect();
?>
