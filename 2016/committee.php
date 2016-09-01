<?php
/*******************************************************************************
 * Copyright (c) 2016 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Andrea Ross(Eclipse Foundation) - Initial implementation
 *******************************************************************************/

/** 
 * Define ABSPATH as this files directory 
 */
define('ABSPATH', dirname(__FILE__) . '/2016/');

require_once '../tpl/head.tpl.php';
require_once '../tpl/top.tpl.php';
?>


<h1>Our Committee</h1>

<p>The conference would not happen without the efforts of our wonderful team. Please help us thank them!</p>

<p>Table with bios and pictures TBD</p>

<table>
  <tr valign="top">
    <td valign="top"><p>Patrick Cozzi</p><image src="../images/committee/Cozzi.jpg" /><p>bio goes here</p></td>
    <td valign="top"><p>Liz Lyon<image</p><image src="../images/committee/Lyon.jpg" /><p>bio goes here</p></td>
    <td valign="top"><p>Dale Kunce<image</p><image src="../images/committee/Kunce.jpg" /><p>bio goes here</p></td>
  </tr>
<table>


<?
require_once '../tpl/footer.tpl.php';
?>
