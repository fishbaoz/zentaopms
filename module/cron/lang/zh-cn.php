<?php
$lang->cron->common  = '计划任务';
$lang->cron->list    = '任务列表';
$lang->cron->create  = '添加';
$lang->cron->edit    = '编辑';
$lang->cron->delete  = '删除';
$lang->cron->toggle  = '激活/禁用';
$lang->cron->turnon  = '打开/关闭';

$lang->cron->m        = '分';
$lang->cron->h        = '小时';
$lang->cron->dom      = '天';
$lang->cron->mon      = '月';
$lang->cron->dow      = '周';
$lang->cron->command  = '命令';
$lang->cron->status   = '状态';
$lang->cron->type     = '任务类型';
$lang->cron->remark   = '备注';
$lang->cron->lastTime = '最后执行';

$lang->cron->turnonList['1'] = '打开';
$lang->cron->turnonList['0'] = '关闭';

$lang->cron->statusList['normal']  = '正常';
$lang->cron->statusList['running'] = '运行中';
$lang->cron->statusList['stop']    = '停止';

$lang->cron->typeList['zentao'] = '禅道自调用';
$lang->cron->typeList['system'] = '操作系统命令';

$lang->cron->toggleList['start'] = '激活';
$lang->cron->toggleList['stop']  = '禁用';

$lang->cron->confirmDelete = '是否删除该计划任务？';
$lang->cron->introduction  = <<<EOD
<p>计划任务功能可以定时执行诸如更新燃尽图、备份等操作，免除自己布置定时任务。</p>
<p>该功能还有待完善，所以默认关闭该功能</p>
<p>是否开启该功能？<a href="%s" target='hiddenwin'>打开计划任务</a></p>
EOD;

$lang->cron->notice = new stdclass();
$lang->cron->notice->m   = '取值范围:0-59，"*"代表取值范围内的数字，"/"代表"每"， "-"代表从数字范围。';
$lang->cron->notice->h   = '取值范围:0-23';
$lang->cron->notice->dom = '取值范围:1-31';
$lang->cron->notice->mon = '取值范围:1-12';
$lang->cron->notice->dow = '取值范围:0-6';