<?php
defined('_JEXEC') or exit();

$controller = JControllerLegacy::getInstance('News');//NewsController
 //print_r($controller);
$input = JFactory::getApplication()->input;
$controller->execute($input->get('task','display'));
//print_r($input->get('task','display'));
$controller->redirect();
