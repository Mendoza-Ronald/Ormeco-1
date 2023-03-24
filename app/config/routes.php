<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');
/**
 * ------------------------------------------------------------------
 * LavaLust - an opensource lightweight PHP MVC Framework
 * ------------------------------------------------------------------
 *
 * MIT License
 * 
 * Copyright (c) 2020 Ronald M. Marasigan
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package LavaLust
 * @author Ronald M. Marasigan <ronald.marasigan@yahoo.com>
 * @copyright Copyright 2020 (https://ronmarasigan.github.io)
 * @since Version 1
 * @link https://lavalust.pinoywap.org
 * @license https://opensource.org/licenses/MIT MIT License
 */

/*
| -------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| $route['translate_uri_dashes'] = TRUE will enable to use dash(-) instead 
| of underscore(_) in URI
|
| $route['404_override'] is use if you want to add custom 404 error page.
| 
|	example: $route['404_override'] = 'default/404'
|
|	if you have 'default folder' and '404.php file' inside error folder in view
*/
$route['404_override']           = '';
$route['translate_uri_dashes']     = TRUE;

/**
 * 
 * USER PAGE ROUTING STARTPOINT
 * 
 */
$route['ormeco']           = 'Usercontroller/index';
$route['timeline']         = 'Usercontroller/timeline';
$route['profile']          = 'Usercontroller/about';
$route['settings']         = 'Usercontroller/setting';
$route['events']           = 'Usercontroller/events';
$route['chat']             = 'Usercontroller/chat_messenger';
$route['post-detail']      = 'Usercontroller/post_detail';

/**
 * 
 * USER PAGE ROUTING ENDPOINT
 * 
 */

/**
 * 
 *  ADMIN PAGE ROUTING STARTPOINT
 * 
 */

$route['dashboard']             = 'AdminController/index';

$route['user-list']             = 'AdminController/user_list';


/**
 * Create event route
 */
$route['create-an-event']      = 'AdminController/create_an_event';
$route['event-list']            = 'AdminController/event';

$route['createEvent']          = 'CreateEventController/createEvent';
$route['event-detail']          = 'AdminController/event_detail';
$route['try']                  = 'CreateEventController/try';




/**
 * 
 *  ADMIN PAGE ROUTING ENDPOINT
 * 
 */

/**
 *  ADMIN AUTHENTICATION PAGE ROUTING
 */


$route['create-a-account']        = 'AdminAuth/register';
$route['login-a-account']         = 'AdminAuth/login';
$route['forgot-a-password']       = 'AdminAuth/forgot_password';
$route['account-a-verification']  = 'AdminAuth/user_verify';
$route['logout-a-account']        = 'AdminAuth/admin_logout';
$route['admin-logout']            = 'AdminAuth/logout';

// 






/**
 * 
 *  ADMIN PAGE ROUTING ENDPOINT
 * 
 */








/**
 * 
 * USER AUTHENTICATION ROUTING STARTING:
 
 */
$route['user-authentication']           = 'UserAuth/user_login';
$route['create-account']                = 'UserAuth/user_signup';
$route['account-verification']          = 'UserAuth/user_verify';
$route['forgot-password']               = 'UserAuth/forgot_password';
$route['logout']                        = 'UserAuth/logout';
$route['reset-password-code']           = 'UserAuth/reset_confirm';
$route['change-password']               = 'UserAuth/reset_password';
$route['logout']                        = 'UserAuth/user_logout';

/**
 * 
 *  USER AUTHENTICATION ENDPOINT:
 */



/**
 * 
 *  CREATE POST STARTPOINT
 * 
 */
$route['create-post']                  = 'PostController/insert_post';