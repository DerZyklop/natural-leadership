<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'K2-PRO-ec4a566f1ab36e124b86b4bc24f47160');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

c::set('debug', true);
c::set('languages', array(
   array(
      'code'    => 'de',
      'name'    => 'Deutsch',
      'locale'  => 'de_DE',
      'default' => true,
      'url'     => '/'
   )
));
