<?php
function mheader()
{
	global $step;
	global $steps;
	global $actionnow;
	global $source_ver;
	global $mymps_ver;
	global $scriptname;
	return "\r\n" . '<html>' . "\r\n" . '<head>' . "\r\n" . '<title>升级程序</title>' . "\r\n" . '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">' . "\r\n" . '<style>' . "\r\n" . '.msg{margin:10px; color:#585858;}' . "\r\n" . 'A:visited' . "\t" . '{COLOR: #000; TEXT-DECORATION: none}' . "\r\n" . 'A:link' . "\t\t" . '{COLOR: #000; TEXT-DECORATION: none}' . "\r\n" . 'A:hover' . "\t\t" . '{COLOR: #000; TEXT-DECORATION: underline}' . "\r\n" . 'body,table,td' . "\t" . '{COLOR: #000; FONT-FAMILY: Tahoma, Verdana, Arial; FONT-SIZE: 12px; LINE-HEIGHT: 20px; scrollbar-base-color: #E3E3EA; scrollbar-arrow-color: #5C5C8D}' . "\r\n" . 'input' . "\t\t" . '{COLOR: #009900; FONT-FAMILY: Tahoma, Verdana, Arial; FONT-SIZE: 12px; background-color: #FFFAF0; border-bottom:3px #ff9900 solid; border-right:1px #ff9900 solid; border-left:1px #ff9900 solid; border-top:1px #ff9900 solid; line-height:25px;padding-left:30px;padding-right:30px;}' . "\r\n" . 'td' . "\t" . '{padding-left:5px;padding-right:5px;}' . "\r\n" . '.install{border-left:1px #86B9D6 solid;border-right:1px #86B9D6 solid;border-bottom:1px #86B9D6 solid;border-top:5px #86B9D6 solid; padding-top:1px}' . "\r\n" . '.padding{padding:20px 28px;}' . "\r\n" . 'li{list-style-type:none!important;}' . "\r\n" . '</style>' . "\r\n" . '</head>' . "\r\n" . '<body bgcolor="#F5FBFF" text="#000000"><br /><br />' . "\r\n" . '<table width="70%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center" class="install">' . "\r\n" . '  <tr>' . "\r\n" . '    <td style="padding-left:1px;padding-right:1px;">' . "\r\n" . '      <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">' . "\r\n" . '        <tr> ' . "\r\n" . '          <td height="45" bgcolor="#e8f7fc">' . "\r\n" . '            <b><span style=\'font-size:14px\'>mymps 5.7S=>5.8SE企业版 数据库升级程序</span></b></td>' . "\r\n" . '        </tr>' . "\r\n" . '        <tr>' . "\r\n" . '          <td>' . "\r\n\t";
}
function mfooter()
{
	return "\r\n" . '          </td>' . "\r\n" . '        </tr>' . "\r\n" . '      </table>' . "\r\n" . '    </td>' . "\r\n" . '  </tr>' . "\r\n" . '</table>' . "\r\n" . '<br>' . "\r\n" . '<center>powered by <a href="http://www.mymps.com.cn" target=_blank>mymps</a> <a href="http://bbs.mymps.com.cn/" target=_blank>使用帮助</a><br />&nbsp;</center>' . "\r\n" . '</body>' . "\r\n" . '</html>' . "\r\n\t";
}
function msg($msg)
{
	echo '<div class=msg>' . $msg . '</div>';
	ob_flush();
	flush();
	@sleep(1);
}
function ck($agree_domain)
{
	if (empty($HTTP_HOST)) {
		if (myg('HTTP_HOST')) {
			$HTTP_HOST = myg('HTTP_HOST');
		}
		else {
			$HTTP_HOST = '';
		}
	}
	$agree_domain = '.127.0.0.1|localhost|' . $agree_domain;
	$now_domain = getr(htmlspecialchars($HTTP_HOST));
	$now_domain = str_replace('.www.', '', $now_domain);

	if (!in_array($now_domain, explode('|', $agree_domain))) {
		//exit('');
	}
}
function myg($var_name)
{
	if (isset($_SERVER[$var_name])) {
		return $_SERVER[$var_name];
	}
	if (isset($_ENV[$var_name])) {
		return $_ENV[$var_name];
	}
	if (getenv($var_name)) {
		return getenv($var_name);
	}
	if (function_exists('apache_getenv') && apache_getenv($var_name, true)) {
		return apache_getenv($var_name, true);
	}
	return '';
}
function getr($domain)
{
	$suffix = array('wang', 'ae', 'af', 'ag', 'ai', 'al', 'am', 'an', 'ao', 'aq', 'ar', 'as', 'at', 'au', 'aw', 'az', 'ba', 'bb', 'bd', 'be', 'bf', 'bg', 'bh', 'bi', 'bj', 'bm', 'bn', 'bo', 'br', 'bs', 'bt', 'bv', 'bw', 'by', 'bz', 'ca', 'cc', 'cf', 'cg', 'ch', 'ci', 'ck', 'cl', 'cm', 'cn', 'co', 'cq', 'cr', 'cu', 'cv', 'cx', 'cy', 'cz', 'de', 'dj', 'dk', 'dm', 'do', 'dz', 'ec', 'ee', 'eg', 'eh', 'es', 'et', 'ev', 'fi', 'fj', 'fk', 'fm', 'fo', 'fr', 'ga', 'gb', 'gd', 'ge', 'gf', 'gg', 'gh', 'gi', 'gl', 'gm', 'gn', 'gp', 'gr', 'gt', 'gu', 'gw', 'gy', 'hk', 'hm', 'hn', 'hr', 'ht', 'hu', 'id', 'ie', 'il', 'in', 'io', 'iq', 'ir', 'is', 'it', 'jm', 'jo', 'jp', 'ke', 'kg', 'kh', 'ki', 'km', 'kn', 'kp', 'kr', 'kw', 'ky', 'kz', 'la', 'lb', 'lc', 'li', 'lk', 'lr', 'ls', 'lt', 'lu', 'lv', 'ly', 'ma', 'mc', 'md', 'mg', 'mh', 'ml', 'mm', 'mn', 'mo', 'mp', 'mq', 'mr', 'ms', 'mt', 'mv', 'mw', 'mx', 'my', 'mz', 'na', 'nc', 'ne', 'nf', 'ng', 'ni', 'nl', 'no', 'np', 'nr', 'nt', 'nu', 'nz', 'om', 'qa', 'pa', 'pe', 'pf', 'pg', 'ph', 'pk', 'pl', 'pm', 'pn', 'pr', 'pt', 'pw', 'py', 're', 'ro', 'ru', 'rw', 'sa', 'sb', 'sc', 'sd', 'se', 'sg', 'sh', 'si', 'sj', 'sk', 'sl', 'sm', 'sn', 'so', 'sr', 'st', 'su', 'sy', 'sz', 'tc', 'td', 'tf', 'tg', 'th', 'tj', 'tk', 'tm', 'tn', 'to', 'tp', 'tr', 'tt', 'tv', 'tw', 'tz', 'ua', 'ug', 'uk', 'us', 'uy', 'va', 'vc', 've', 'vg', 'vn', 'vu', 'wf', 'ws', 'ye', 'yu', 'za', 'zm', 'zr', 'zw', 'com', 'edu', 'gov', 'int', 'mil', 'net', 'org');
	$domainArr = explode('.', $domain);
	$l = count($domainArr);
	$key = 0;

	for ($i = 0; $i < $l; $i++) {
		if (in_array($domainArr[$i], $suffix)) {
			$key = $i;
			break;
		}
	}
	$inSuffixs = '';

	for ($i = $key; $i < $l; $i++) {
		$inSuffixs .= '.' . $domainArr[$i];
	}
	return $domainArr[$key - 1] . $inSuffixs;
}
@set_time_limit(0);
define('IN_SMT', true);
define('CURSCRIPT', 'update');
define('IN_MYMPS', true);
require_once dirname(__FILE__) . '/include/global.php';
require_once dirname(__FILE__) . '/data/config.php';
require_once MYMPS_DATA . '/config.db.php';
require_once MYMPS_INC . '/db.class.php';
$rpp = 1500;
$_rpp = 1000;
$step = ($step ? intval($step) : 0);
$steparr = array(1 => '前期准备', 2 => '分类表升级', 3 => '信息表升级', 4 => '优化原始表', 5 => '清理缓存');
$start = (isset($_GET['start']) && (1 < $_GET['start']) ? $_GET['start'] : 1);
$limit_start = $start - 1;
$end = ($start + $rpp) - 1;
$_start = (isset($_GET['_start']) && (1 < $_GET['_start']) ? $_GET['_start'] : 1);
$_limit_start = $_start - 1;
$_end = ($_start + $_rpp) - 1;
$stay = (isset($_GET['stay']) ? $_GET['stay'] : 0);
$converted = $_converted = 0;
$totalrows = (isset($_GET['totalrows']) ? $_GET['totalrows'] : 0);
$convertedrows = (isset($_GET['convertedrows']) ? $_GET['convertedrows'] : 0);
echo mheader();

if ($action == 'delfile') {
	@unlink(dirname(__FILE__) . '/update_58.php');
	write_msg('', $mymps_global[SiteUrl] . '/admin/index.php');
}
else if ($action == 'update') {
	if ($step == 1) {
		msg('正在处理第 <b>' . $_start . '</b> 至 <b>' . $_end . '</b> 行数据');
		$query = $db->query('SELECT a.* FROM `' . $db_mymps . 'category` AS a ORDER BY a.catid DESC LIMIT ' . $_limit_start . ',' . $_rpp);

		while ($row = $db->fetchRow($query)) {
			$gid = ($row['parentid'] == 0 ? $row['catid'] : get_gid_($row['catid']));
			$db->query('UPDATE `' . $db_mymps . 'category` SET gid = \'' . $gid . '\' WHERE catid =\'' . $row['catid'] . '\'');
			$_converted = 1;
		}
		if ($_converted) {
			echo mymps_goto('?action=update&step=1&_start=' . ($_end + 1));
		}
		else {
			msg('数据准备完成...');
			echo mymps_goto('?action=update&step=2');
		}
	}
	else if ($step == 2) {
		msg('信息表数据升级准备...');
		echo mymps_goto('?action=update&step=3');
	}
	else if ($step == 3) {
		msg('信息数据表升级中......  程序会自动继续... 请勿关闭浏览器窗口！');
		$query = $db->query('SELECT a.* FROM `' . $db_mymps . 'information` AS a ORDER BY a.id DESC LIMIT ' . $limit_start . ',' . $rpp);

		while ($row = $db->fetchRow($query)) {
			$gid = get_gid_($row['catid']);
			$db->query('UPDATE `' . $db_mymps . 'information` SET gid = \'' . $gid . '\' WHERE id =\'' . $row['id'] . '\'');
			$converted = 1;
		}
		if ($converted) {
			msg('正在处理第 <b>' . $start . '</b> 至 <b>' . $end . '</b> 行数据...  程序会自动继续... 请勿关闭浏览器窗口！');
			echo mymps_goto('?action=update&step=3&totalrows=' . $totalrows . '&convertedrows=' . $convertedrows . '&start=' . ($end + 1));
		}
		else {
			msg('信息数据表升级已完成......  程序会自动继续... 请勿关闭浏览器窗口！');
			ob_end_flush();
			echo mymps_goto('?action=update&step=4&totalrows=' . $totalrows . '&convertedrows=' . $convertedrows);
		}
	}
	else if ($step == 4) {
		echo mymps_goto('?action=update&step=5&totalrows=' . $totalrows . '&convertedrows=' . $convertedrows);
	}
	else if ($step == 5) {
		msg('升级完成...<br><br><a style="font-weight:bold;color:red;font-size:14px;" href="?action=delfile">[点击此处进入]</a> 网站后台管理！</font>');
	}
	else {
		msg('前期数据准备中..');
		$sql[] = 'UPDATE  `my_admin_type` SET purviews = \'purview_焦点图列表,purview_上传焦点图,purview_栏目设置,purview_已发布公告,purview_发布公告,purview_问题帮助,purview_发布帮助主题,purview_友情链接,purview_增加链接,purview_链接导航,purview_生活百宝箱,purview_便民电话,purview_分类信息,purview_删除重复,purview_批量管理,purview_信息评论,purview_信息举报,purview_模型管理,purview_字段管理,purview_个人会员,purview_商家会员,purview_增加会员,purview_会员组类型,purview_实名认证,purview_会员文档,purview_站内短消息,purview_模板点评,purview_会员登录记录,purview_会员支付记录,purview_会员消费记录,purview_信息分类,purview_添加分类,purview_已建分站,purview_添加分站,purview_添加地区,purview_添加路段,purview_商家分类,purview_增加分类,purview_用户列表,purview_用户组,purview_管理记录,purview_数据库备份,purview_数据库还原,purview_数据库维护,purview_系统配置,purview_分站设置,purview_模板管理,purview_SEO伪静态,purview_验证过滤点评,purview_积分信用等级,purview_缓存设置,purview_优化大师,purview_文字内链设置,purview_附件管理,purview_手机访问设置,purview_已安装插件,purview_优惠券分类,purview_已上传优惠券,purview_团购分类,purview_已发起团购,purview_报名管理,purview_新闻管理,purview_新闻类别,purview_新闻评论,purview_商品分类,purview_商品管理,purview_订单管理,purview_邮件服务器,purview_邮件模板,purview_邮件发送记录,purview_管理支付接口,purview_管理广告位,purview_信息数据调用,purview_整合接口设置\' WHERE id = \'1\'';/*5.8se*/
		$sql[] = 'UPDATE  `my_category` SET  `template` =  \'list\' WHERE  `template` =  \'list_jyzh\';';
		$sql[] = 'UPDATE  `my_category` SET  `template` =  \'list\' WHERE  `template` =  \'list_xzlcz\';';
		$sql[] = 'UPDATE  `my_category` SET  `template` =  \'list_zhaopin\' WHERE  `template` =  \'list_zpqz\';';
		$sql[] = 'UPDATE  `my_category` SET  `template` =  \'list_qiuzhi\' WHERE  `template` =  \'list_jianli\';';
		$sql[] = 'UPDATE  `my_category` SET  `template` =  \'list_ershou\' WHERE  `template` =  \'list_tzsc\';';
		$sql[] = 'UPDATE  `my_category` SET  `template_info` =  \'info\' WHERE  `template_info` =  \'info_2\';';
		$sql[] = 'UPDATE  `my_category` SET  `template_info` =  \'info\' WHERE  `template_info` =  \'info_3\';';
		$sql[] = 'ALTER TABLE  `my_category` ADD  `gid` SMALLINT( 5 ) NOT NULL;';/**/
		$sql[] = 'ALTER TABLE  `my_information` ADD  `gid` SMALLINT( 5 ) NOT NULL;';/**/
		$sql[] = 'ALTER TABLE  `my_information` ADD  INDEX(`gid`,`info_level`,`areaid`);';/**/
		$sql[] = 'ALTER TABLE  `my_jswizard` change custom customtype char(8) NOT NULL ;';/*5.8se*/

		$sql[] = 'ALTER TABLE  `my_payrecord` CHANGE  `type`  `type` VARCHAR( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT  \'\';';/**/
		$sql[] = 'ALTER TABLE  `my_member` ADD  `openid_wx` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL AFTER  `openid`;';/**/
		$sql[] = 'ALTER TABLE  `my_member` ADD  `latitude` decimal(20,17) NOT NULL;';/*5.8se*/
		$sql[] = 'ALTER TABLE  `my_member` ADD  `longitude` decimal(20,17) NOT NULL;';/*5.8se*/

		$sql[] = 'INSERT INTO `my_member_tpl` (`id`, `if_view`, `tpl_name`, `tpl_path`, `displayorder`, `edittime`) VALUES (6, 2, \'紫色主题\', \'purple\', 6, 1466692165);';/*5.8se*/
		$sql[] = 'INSERT INTO `my_member_tpl` (`id`, `if_view`, `tpl_name`, `tpl_path`, `displayorder`, `edittime`) VALUES (7, 2, \'粉色主题\', \'pink\', 7, 1466692175);';/*5.8se*/
		
		$sql[] = 'ALTER TABLE  `my_member` ADD INDEX (  `openid_wx` ) ;';/**/

		$sql[] = 'DROP TABLE IF EXISTS `my_member_wx`;';/**/
		$sql[] = 'CREATE TABLE IF NOT EXISTS `my_member_wx` (' . "\r\n\t\t" . '  `id` int(10) NOT NULL AUTO_INCREMENT,' . "\r\n\t\t" . '  `actionkey` varchar(50) NOT NULL,' . "\r\n\t\t" . '  `openid` varchar(50) NOT NULL,' . "\r\n\t\t" . '  `userid` varchar(20) NOT NULL,' . "\r\n\t\t" . '  `userpwd` char(36) NOT NULL,' . "\r\n\t\t" . '  PRIMARY KEY (`id`)' . "\r\n\t\t" . ') ENGINE=MyISAM DEFAULT CHARSET=utf8;';/**/
		$sql[] = 'CREATE TABLE IF NOT EXISTS `my_mobile_nav` (' . "\r\n\t\t" . '  `id` smallint(5) NOT NULL AUTO_INCREMENT,' . "\r\n\t\t" . '  `title` char(50) NOT NULL,' . "\r\n\t\t" . '  `url` char(250) NOT NULL,' . "\r\n\t\t" . '  `color` varchar(7) NOT NULL,' . "\r\n\t\t" . '  `ico` varchar(200) NOT NULL,' . "\r\n\t\t" . '  `flag` varchar(50) NOT NULL,' . "\r\n\t\t" . '  `target` varchar(10) NOT NULL,' . "\r\n\t\t" . '  `isview` tinyint(1) NOT NULL,' . "\r\n\t\t" . '  `displayorder` int(5) NOT NULL,' . "\r\n\t\t" . '  `createtime` int(10) NOT NULL,' . "\r\n\t\t" . '  `typeid` tinyint(1) NOT NULL,' . "\r\n\t\t" . '  PRIMARY KEY (`id`),' . "\r\n\t\t" . '  KEY `typeid` (`typeid`,`isview`)' . "\r\n\t\t" . ') ENGINE=MyISAM  DEFAULT CHARSET=utf8;';/**/
		$sql[] = 'INSERT INTO `my_mobile_nav` (`id`, `title`, `url`, `color`, `ico`, `flag`, `target`, `isview`, `displayorder`, `createtime`, `typeid`) VALUES(\'\', \'信息分类\', \'index.php?mod=category\', \'\', \'\', \'category\', \'_self\', 2, 2, 1469520429, 1);';/**/
		$sql[] = 'INSERT INTO `my_mobile_nav` (`id`, `title`, `url`, `color`, `ico`, `flag`, `target`, `isview`, `displayorder`, `createtime`, `typeid`) VALUES(\'\', \'热点资讯\', \'index.php?mod=news\', \'\', \'\', \'news\', \'_self\', 2, 3, 1469520458, 1);';/**/
		$sql[] = 'INSERT INTO `my_mobile_nav` (`id`, `title`, `url`, `color`, `ico`, `flag`, `target`, `isview`, `displayorder`, `createtime`, `typeid`) VALUES(\'\', \'商家店铺\', \'index.php?mod=corp\', \'\', \'\', \'corp\', \'_self\', 2, 4, 1469520485, 1);';/**/
		$sql[] = 'INSERT INTO `my_mobile_nav` (`id`, `title`, `url`, `color`, `ico`, `flag`, `target`, `isview`, `displayorder`, `createtime`, `typeid`) VALUES(\'\', \'mymps首页\', \'index.php?mod=index\', \'\', \'\', \'index\', \'_self\', 2, 1, 1469521176, 1);';/**/
		$sql[] = 'DROP TABLE IF EXISTS `my_mobile_gg`;';/**/
		$sql[] = 'CREATE TABLE IF NOT EXISTS `my_mobile_gg` (' . "\r\n\t\t" . '  `id` smallint(5) NOT NULL AUTO_INCREMENT,' . "\r\n\t\t" . '  `typeid` tinyint(1) NOT NULL,' . "\r\n\t\t" . '  `image` varchar(100) NOT NULL,' . "\r\n\t\t" . '  `url` varchar(100) NOT NULL,' . "\r\n\t\t" . '  `words` varchar(50) NOT NULL,' . "\r\n\t\t" . '  `pubdate` int(11) NOT NULL,' . "\r\n\t\t" . '  `displayorder` smallint(5) NOT NULL,' . "\r\n\t\t" . '  PRIMARY KEY (`id`)' . "\r\n\t\t" . ')  ENGINE=MyISAM DEFAULT CHARSET=utf8;';/**/
		$sql[] = 'INSERT INTO `my_mobile_gg` (`id`, `typeid`, `image`, `url`, `words`, `pubdate`, `displayorder`) VALUES' . "\r\n" . '(1, 1, \'/attachment/mobile_gg/1469676806dzt6z.jpg\', \'index.php\', \'天猫超市\', 1469676806, 1),' . "\r\n" . '(2, 2, \'/attachment/mobile_gg/14696777801tuyl.jpg\', \'index.php\', \'疯狂猜车\', 1469677780, 2),' . "\r\n" . '(3, 1, \'/attachment/mobile_gg/1469677858x6r1c.png\', \'index.php\', \'海量物品免费获取\', 1469677858, 3),' . "\r\n" . '(4, 2, \'/attachment/mobile_gg/1469677887yuini.png\', \'index.php\', \'7天退换\', 1469677887, 4);';/**/
		$sql[] = 'DROP TABLE IF EXISTS `my_sms_sendlist`;';/**/
		$sql[] = 'CREATE TABLE IF NOT EXISTS `my_sms_sendlist` (' . "\r\n" . '  `id` int(10) NOT NULL AUTO_INCREMENT,' . "\r\n" . '  `mobile` varchar(20) NOT NULL,' . "\r\n" . '  `status` varchar(100) NOT NULL,' . "\r\n" . '  `sendtime` int(10) NOT NULL,' . "\r\n" . '  `sms_service` char(30) NOT NULL,' . "\r\n" . '  `sms_content` varchar(250) NOT NULL,' . "\r\n" . '  PRIMARY KEY (`id`)' . "\r\n" . ') ENGINE=MyISAM DEFAULT CHARSET=utf8;';/**/
		$sql[] = 'ALTER TABLE  `my_payapi` ADD  `appid` VARCHAR( 60 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL AFTER  `paykey` ';/**/
		$sql[] = 'ALTER TABLE  `my_payapi` ADD  `appkey` VARCHAR( 60 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL AFTER  `appid` ;' . "\r\n";/**/
		$sql[] = 'INSERT INTO  `my_payapi` (`payid`, `paytype`, `buytype`, `myorder`, `payfee`, `payuser`, `partner`, `paykey`, `paylogo`, `paysay`, `payname`, `isclose`, `payemail`) VALUES(4, \'alipay_h5\', 0, 0, \'0\', \'\', \'\', \'\', \'\', \'    支付宝手机网站支付\', \'支付宝接口—手机H5\', 0, \'\');';/**/
		$sql[] = 'INSERT INTO  `my_payapi` (`payid` ,`paytype` ,`buytype` ,`myorder` ,`payfee` ,`payuser` ,`partner` ,`paykey` ,`appid` ,`appkey` ,`paylogo` ,`paysay` ,`payname` ,`isclose` ,`payemail`) VALUES (NULL ,  \'wxpay\',  \'0\',  \'0\',  \'\',  \'\',  \'\',  \'\',  \'\', \'\',  \'\',  \'微信支付\',  \'微信支付\',  \'0\',  \'\');';/**/

		foreach ($sql as $k => $v ) {
			$db->query($v);
		}
		echo mymps_goto('?action=update&step=1');
	}
}
else if (!$action) {
	echo '<br />' . "\r\n" . '<table border="0" width="100%">' . "\r\n" . '<tr>' . "\r\n" . '<td style="line-height:150%">' . "\r\n" . '<div class="padding">' . "\r\n" . '<ul>' . "\r\n" . '<li>您的系统升级时间大约为';
	$count_extra = $db->getOne('SELECT COUNT(catid) FROM `' . $db_mymps . 'category`');
	$count_info = $db->getOne('SELECT COUNT(id) FROM `' . $db_mymps . 'information`');
	$count = round($count_extra / $rpp) + round($count_info / $_rpp);

	if (is_int($count / 3600)) {
		echo '<b><font color=blue>' . ($count / 3600) . '小时</font></b>';
	}
	else if (is_int($count / 60)) {
		echo '<b><font color=blue>' . ($count / 60) . '分钟</font></b>';
	}
	else {
		echo '<b><font color=blue>' . ($count + 10) . '秒</font></b>';
	}
	echo '，如果数据量较大，执行时间可能会较长，程序执行期间请勿关闭浏览器</li>' . "\r\n" . '</ul>' . "\r\n" . '<ul>' . "\r\n" . '<li><br /><br /><b>声明</b>：' . "\r\n" . '在点击升级前请确认您当前的系统为<font color="#cd0000">mymps5.7S utf8多城市版</font>并且符合以下运行环境：<br />php5 + mysql5 + zend' . "\r\n" . '<br /><br /><br /><br />' . "\r\n" . '<b>如果您不符合要求，请勿点击以下按钮，否则后果自负，官方不予提供任何技术支持</b><br>' . "\r\n" . '</li>' . "\r\n" . '</ul>' . "\r\n" . '<div>' . "\r\n" . '</div>' . "\r\n" . '<br>' . "\r\n" . '<ul><li><input onclick="location.href=\'?action=update\'" style="cursor:pointer"  value="我已确认，现在开始运行5.8S升级主程序" type="button"/></li>' . "\r\n" . '</ul>' . "\r\n" . '<br><ul>' . "\r\n" . '<li></li></ul></td></tr></table><br />' . "\r\n";
}
echo mfooter();

function get_gid_($catid){
	global $db,$db_mymps,$mymps_global;
	$sid = $db->getOne("SELECT parentid FROM `{$db_mymps}category` WHERE catid='$catid'");
	if(empty($sid)){
		return $catid;
	}else{
		$fid = $db->getOne("SELECT parentid FROM `{$db_mymps}category` WHERE catid = '$sid'");
		if(empty($fid)){
			return $sid;
		}else{
			$did = $db->getOne("SELECT parentid FROM `{$db_mymps}category` WHERE catid = '$fid'");
			if(empty($did)){
				return $fid;
			}
		}
	}
}
?>