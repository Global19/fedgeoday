<?php
/*******************************************************************************
 * Copyright (c) 2015 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Christopher Guindon (Eclipse Foundation) - Initial implementation
 *******************************************************************************/
if (!defined('ABSPATH')) exit;
?>

<header>
  <nav class="navbar navbar-inverse navbar-fixed-top smoothscroll" id="main-menu">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./"><img src="../images/logo.png" alt="><?php print $config['pagetitle'];?>"/>
          <span class="sr-only"><?php print $config['pagetitle'];?></span>
        </a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <?php include 'menu.tpl.php';?>
      </div><!--/.navbar-collapse -->
    </div>
  </nav>
  <div id="about" class="section">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <h1 class="heading bg-primary pull-left"><?php print $config['conferencetitle'];?></h1>
          <h2 class="heading bg-secondary pull-left"><?php print $config['date'];?></h2>
          <h2 class="heading bg-secondary pull-left"><?php print $config['location'];?></h2>
        </div>
        <div class="col-xs-12 col-sm-6">
          <ul class="list-geo">
            <li><?php print $config['teaser'];?></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</header>

<div id="registration"  class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-6" id="register-about">
        <div class="content-left">
          <h2><?php print $config['registration_title'];?></h2>
          <?php print $config['registration_body'];?>
        </div>
      </div>
      <div class="col-md-6" id="register-box">
        <div class="content-right">
          <div class="box top-offset">
            <h2 class="heading bg-primary">Registration</h2>
            <div class="content">
              <?php print $config['registration_teaser'];?>
              <?php if (!empty($config['registration_link'])) :?>
                <p><a href="<?php print $config['registration_link']?>" class="btn btn-secondary" target="_blank">Register Now</a></p>
              <?php endif;?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="schedule" class="section">
  <div class="schedule-bg">
    <div class="container">
      <div class="row">
        <h2 class="heading bg-secondary pull-left">Schedule</h2>
        <?php if ($config['schedule']) :?>
          <div class="timeline clearfix">
            <?php foreach($sessions as $session) :?>
              <article class="timeline-entry clearfix">
                <div class="timeline-entry-inner">
                  <?php if (!isset($lastime) || (isset($lastime) && $lastime != (string)$session['time'])) :?>
                    <time class="timeline-time">
                      <span><?php print $session['time'];?></span>
                    </time>
                  <?php endif;?>
                  <div class="timeline-icon">
                    <i class="entypo-feather"></i>
                  </div>
                  <div class="timeline-label">
                    <h2><?php print $session['title'];?> <span class="badge" style="background: <?php print $session['room_data']['color'];?>"><?php print $session['room_data']['title'];?></span></h2>
                    <p><strong><?php print $session['teaser'];?></strong></p>
                    <div class="body" style="display:none">
                      <?php print $session['body'];?>
                    </div>
                    <a href="#" class="btn-showmore">+</a>
                  </div>
                </div>
              </article>
              <?php $lastime = $session['time']; ?>
            <?php endforeach;?>

          </div>
          <p class="text-center">
            <a href="#" id="btn-schedule-toggle"><span>View More</span>
              <img src="../images/btn-view-more.jpg">
            </a>
          </p>
        <?php else:?>
          <div class="alert alert-warning" role="alert">Stay tuned, we're crafting the agenda once the <a href="./cfp.php">Call for Proposals</a> closes, and will post it ASAP.</div>
        <?php endif;?>
      </div>
    </div>
  </div>
</div>

<div id="sponsorship"  class="section">
  <div class="container" id="sponsorship-container">
    <div class="col-md-6">
      <div class="content-left">
        <h2>Sponsorship Prices</h2>
        <?php foreach ($sponsorship as $sp): ?>
          <?php $class = (isset($class) && $class == 'price-badge-even') ? 'price-badge-odd' : 'price-badge-even'; ?>
          <div class="price-badge clearfix <?php print $class;?>">
            <div class="content-box col-sm-8">
              <h3><?php print $sp['title'];?></h3>
              <p><?php print $sp['body'];?></p>
            </div>
            <div class="arrow_box col-sm-4">
              <span class="price"><?php print $sp['price'];?></span>
              <?php print $sp['price_text'];?>
            </div>
          </div>
        <?php endforeach;?>
        <p><?php print $config['sponsorship_link']?></p>
        <br/>
      </div>
    </div>
    <div class="col-md-6">
      <div class="content-right text-center">
        <?php print $config['twitter_link'];?>
      </div>
    </div>
  </div>
</div>

<div id="sponsors" class="clearfix section">
  <div id="sponsors-bg">
    <div class="container">
      <div class="col-xs-12">
        <div class="row">
          <h2 class="heading bg-secondary top-offset-sm pull-left">Our Sponsors</h2>
        </div>
        <div class="row">
          <ul class="list-inline sponsor-list">
            <?php foreach ($sponsors as $sponsor) :?>
              <li>
                <a href="<?php print $sponsor['url'];?>" target="_blank">
                  <img src="<?php print $sponsor['src']?>" alt="<?php print $sponsor['title']?>" class="img-responsive"/>
                </a>
              </li>
            <?php endforeach;?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
