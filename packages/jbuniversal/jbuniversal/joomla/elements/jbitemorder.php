<?php
/**
* JBZoo App is universal Joomla CCK, application for YooTheme Zoo component
*
* @package     jbzoo
* @version     2.x Pro
* @author      JBZoo App http://jbzoo.com
* @copyright   Copyright (C) JBZoo.com,  All rights reserved.
* @license     http://jbzoo.com/license-pro.php JBZoo Licence
* @coder       Vitaliy Yanovskiy <joejoker@jbzoo.com>
*/
// no direct access
defined('_JEXEC') or die('Restricted access');


echo App::getInstance('zoo')->jbfield->itemorder($name, $value, $control_name, $node, $parent);
