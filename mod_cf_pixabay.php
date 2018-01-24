<?php
/**
 * @version     1.0
 * @package     mod_cf_pixabay
 * @copyright   Copyright (C) 2018. All rights reserved.
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @author      Maarten Blokdijk / info@cloudfaction.nl / www.cloudfaction.nl
 */
//No Direct Access
defined('_JEXEC') or die;

/* Params */
$pixabay_apikey= $params->get('pixabay_apikey');
$pixabay_username= $params->get('pixabay_username');
$pixabay_search= $params->get('pixabay_search');
$pixabay_rows= $params->get('pixabay_rows');
$pixabay_navpos=$params->get('pixabay_navpos');
$pixabay_safesearch=$params->get('pixabay_safesearch');
$pixabay_rowheight=$params->get('pixabay_rowheight');
$pixabay_order=$params->get('pixabay_order');
$pixabay_prev=$params->get('pixabay_prev');
$pixabay_next=$params->get('pixabay_next');
$pixabay_searchtype=$params->get('pixabay_searchtype');
$pixabay_branding=$params->get('pixabay_branding');
$pixabay_perpage=$params->get('pixabay_perpage');
// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

require JModuleHelper::getLayoutPath('mod_cf_pixabay', $params->get('layout', 'default'));
?>