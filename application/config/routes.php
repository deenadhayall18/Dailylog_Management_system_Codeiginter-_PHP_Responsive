<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'AdminCon';
$route['404_override'] = 'AdminCon/notfound';
$route['translate_uri_dashes'] = FALSE;

$route['adminindex']  ='AdminCon/index';
$route['common']  ='AdminCon/AdminDashboard';
$route['dashboard']  ='AdminCon/AdminDashboardMain';
$route['dailyLogList'] = 'AdminCon/DailyLogList';
$route['AddLog'] = 'AdminCon/AddLog';
$route['edit-log'] = 'AdminCon/EditLog';
$route['AddTask'] = 'AdminCon/AddTaskMethod';
$route['edit-task'] = 'AdminCon/EditTaskMethod';
$route['dailyTaskList'] = 'AdminCon/DailyTaskList';