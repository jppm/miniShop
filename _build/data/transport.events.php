<?php
/**
 * Add miniShop events for plugins to build
 * 
 * @package minishop
 * @subpackage build
 */
$events = array();

$events[0]= $modx->newObject('modEvent');
$events[0]->fromArray(array (
  'name' => 'msOnBeforeOrderCreate',
  'service' => 6,
  'groupname' => 'miniShop',
), '', true, true);

$events[1]= $modx->newObject('modEvent');
$events[1]->fromArray(array (
  'name' => 'msOnOrderCreate',
  'service' => 6,
  'groupname' => 'miniShop',
), '', true, true);

$events[2]= $modx->newObject('modEvent');
$events[2]->fromArray(array (
  'name' => 'msOnBeforeOrderUpdate',
  'service' => 6,
  'groupname' => 'miniShop',
), '', true, true);

$events[3]= $modx->newObject('modEvent');
$events[3]->fromArray(array (
  'name' => 'msOnOrderUpdate',
  'service' => 6,
  'groupname' => 'miniShop',
), '', true, true);

$events[4]= $modx->newObject('modEvent');
$events[4]->fromArray(array (
  'name' => 'msOnBeforeOrderChangeStatus',
  'service' => 6,
  'groupname' => 'miniShop',
), '', true, true);

$events[5]= $modx->newObject('modEvent');
$events[5]->fromArray(array (
  'name' => 'msOnOrderChangeStatus',
  'service' => 6,
  'groupname' => 'miniShop',
), '', true, true);

$events[6]= $modx->newObject('modEvent');
$events[6]->fromArray(array (
  'name' => 'msOnBeforeOrderDelete',
  'service' => 6,
  'groupname' => 'miniShop',
), '', true, true);

$events[7]= $modx->newObject('modEvent');
$events[7]->fromArray(array (
  'name' => 'msOnOrderDelete',
  'service' => 6,
  'groupname' => 'miniShop',
), '', true, true);

$events[8]= $modx->newObject('modEvent');
$events[8]->fromArray(array (
  'name' => 'msOnBeforeTVUpdate',
  'service' => 6,
  'groupname' => 'miniShop',
), '', true, true);

$events[9]= $modx->newObject('modEvent');
$events[9]->fromArray(array (
  'name' => 'msOnTVUpdate',
  'service' => 6,
  'groupname' => 'miniShop',
), '', true, true);

$events[10]= $modx->newObject('modEvent');
$events[10]->fromArray(array (
  'name' => 'msOnBeforeProductUpdate',
  'service' => 6,
  'groupname' => 'miniShop',
), '', true, true);

$events[11]= $modx->newObject('modEvent');
$events[11]->fromArray(array (
  'name' => 'msOnProductUpdate',
  'service' => 6,
  'groupname' => 'miniShop',
), '', true, true);

return $events;