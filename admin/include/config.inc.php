<?php
$admin_global_class=array(
	"网站前台配置",
	"核心参数配置",
	"会员相关设置",
	"图片上传设置",
	"地图接口设置",
	"分类信息相关"
);

$admin_global = array(

	"SiteName"=>array("des"=>'网站名称',"type"=>'字符型',"class"=>'网站前台配置'),
	
	"SiteUrl"=>array("des"=>'使用域名,范例：http://www.yourdomain.com<br /><i style=color:#666666>若为二级目录安装，则需填写二级目录,范例:http://www.yourdamain.com/upload</i>',"type"=>'字符型',"class"=>'网站前台配置'),
	
	"SiteQQ"=>array("des"=>'客服QQ，请只填写一个',"type"=>'字符型',"class"=>'网站前台配置'),
	
	"SiteEmail"=>array("des"=>'客服邮箱',"type"=>'字符型',"class"=>'网站前台配置'),
	
	"SiteTel"=>array("des"=>'客服热线',"type"=>'字符型',"class"=>'网站前台配置'),
	
	"SiteBeian"=>array("des"=>'网站备案号',"type"=>'字符型',"class"=>'网站前台配置'),
	
	"SiteLogo"=>array("des"=>'网站Logo路径',"type"=>'字符型',"class"=>'网站前台配置'),
	
	"SiteStat"=>array("des"=>'第三方网站统计代码',"type"=>'字符型',"class"=>'网站前台配置'),

	"cfg_if_site_open"=>array("des"=>'开启关闭网站，<i style=color:#666666>请注意：非特殊情况，请勿关闭网站，对搜索引擎排名影响甚大！</i>',"type"=>'布尔型',"class"=>'核心参数配置'),
	
	"cfg_authcodefile"=>array("des"=>'验证码显示文件，默认为randcode.php<br /><i style=color:#666666>必须以.php结尾，更改后请在FTP中网站根目录下也作修改</i>',"type"=>'字符型',"class"=>'核心参数配置'),
	
	"cfg_site_open_reason"=>array("des"=>'若关闭网站，前台页面显示提示（关闭原因）',"type"=>'字符型',"class"=>'核心参数配置'),
	
	"cfg_list_page_line"=>array("des"=>'前台分页每页显示记录数',"type"=>'字符型',"class"=>'核心参数配置'),
	
	"cfg_page_line"=>array("des"=>'后台分页每页显示记录数',"type"=>'字符型',"class"=>'核心参数配置'),
	
	"cfg_raquo"=>array("des"=>'当前位置分界符',"type"=>'字符型',"class"=>'核心参数配置'),
	
	"cfg_backup_dir"=>array("des"=>'数据库备份文件夹,<font color=red>注意：相对网站根目录</font><br /><br />保存成功后，系统若无法自动创建该目录请手动创建',"type"=>'字符型',"class"=>'核心参数配置'),
	
	"cfg_member_logfile"=>array("des"=>'会员登录注册文件名，默认为login.php<br /><i style=color:#666666>必须以.php结尾，更改后请在FTP中也作修改</i>',"type"=>'字符型',"class"=>'会员相关设置'),
	
	"cfg_member_verify"=>array("des"=>'新会员审核方式',"type"=>'布尔型',"class"=>'会员相关设置'),
	
	"cfg_if_member_register"=>array("des"=>'是否开启新会员注册',"type"=>'布尔型',"class"=>'会员相关设置'),
	
	"cfg_if_member_log_in"=>array("des"=>'是否开启会员登录',"type"=>'布尔型',"class"=>'会员相关设置'),
	
	"cfg_if_corp"=>array("des"=>'是否开启商家会员功能',"type"=>'布尔型',"class"=>'会员相关设置'),
	
	"cfg_member_regplace"=>array("des"=>'限制会员注册地<font color=red>（即您指定地区<font color=red>以外</font>的省市不能注册会员）</font><br /><font color=red>格式：</font>地区名<br /><font color=red>范例：</font><font color=green>北京</font>表示北京<font color=red>以外</font>地区不允许注册会员<br /><i style=color:#666666>注意：多个地区请用,隔开如：<font color=green>北京,上海</font></i>',"type"=>'字符型',"class"=>'会员相关设置'),
	
	"cfg_forbidden_reg_ip"=>array("des"=>'禁止注册会员的IP。当用户处于本列表中的IP地址,将无法注册会员。<br /> 既可输入完整地址，也可只输入 IP 开头如 <font color=red>192.168.</font><br />多个IP用","(不含引号) 隔开，
例如 <font color=red>192.168.,203.171.</font> <br />可匹配 <font color=green>192.168.0.0～192.168.255.255</font> 以及<font color=green>203.171.0.0～203.171.255.255</font> 范围内的所有地址，留空为不设置。<br />',"type"=>'字符型',"class"=>'会员相关设置'),
	
	"cfg_member_reg_title"=>array("des"=>'注册欢迎短消息标题<br />
<i style=color:#666666>注意：若不发送短消息，请留空</i>',"type"=>'字符型',"class"=>'会员相关设置'),

	"cfg_member_reg_content"=>array("des"=>'注册欢迎短消息内容<br />
<i style=color:#666666>注意：若不发送短消息，请留空</i>',"type"=>'字符型',"class"=>'会员相关设置'),

	"cfg_if_affiliate"=>array("des"=>'是否开启会员自助注册推广<br /><i style=color:#666666>当用户在24小时内通过该会员发布的链接注册网站<br />该会员将获得积分奖励</i>',"type"=>'布尔型',"class"=>'会员相关设置'),
	
	"cfg_affiliate_score"=>array("des"=>'每个会员自助注册推广奖励积分<br /><i style=color:#666666>当开启会员自助注册推广时生效</i>',"type"=>'字符型',"class"=>'会员相关设置'),
	
	"cfg_pay_min"=>array("des"=>'会员充值一次最少充值多少金币',"type"=>'字符型',"class"=>'会员相关设置'),
	
	"cfg_member_perpost_consume"=>array("des"=>'会员每发布一条分类信息扣除金币<br /><i style=color:#666666>注意：该功能只对会员有效<br />若不扣除金币请留空</i>',"type"=>'字符型',"class"=>'会员相关设置'),
	
	"cfg_coin_fee"=>array("des"=>'会员充值 1 元能购买多少个金币，默认为1',"type"=>'字符型',"class"=>'会员相关设置'),
	
	"cfg_score_fee"=>array("des"=>'会员中心 1个金币需要多少积分兑换',"type"=>'字符型',"class"=>'会员相关设置'),
	
	"cfg_upimg_type"=>array("des"=>'允许上传的图片格式',"type"=>'字符型',"class"=>'图片上传设置'),
	
	"cfg_upimg_size"=>array("des"=>'允许上传的图片大小，单位为KB',"type"=>'字符型',"class"=>'图片上传设置'),
	
	"cfg_upimg_watermark"=>array("des"=>'上传图片是否开启水印，<i style=color:#666666>注意：该功能需要您的服务器支持GD库</i>',"type"=>'布尔型',"class"=>'图片上传设置'),
	
	"cfg_upimg_watermark_width"=>array("des"=>'水印图片宽度',"type"=>'字符型',"class"=>'图片上传设置'),
	
	"cfg_upimg_watermark_height"=>array("des"=>'水印图片高度',"type"=>'字符型',"class"=>'图片上传设置'),
	
	"cfg_upimg_watermark_img"=>array("des"=>'水印图片文件名',"type"=>'字符型',"class"=>'图片上传设置'),
	
	"cfg_upimg_watermark_text"=>array("des"=>'水印图片文字<br /><i style=color:#666666>注意：仅支持英文，不支持中文，一般填写网站的域名</i>',"type"=>'字符型',"class"=>'图片上传设置'),
	
	"cfg_upimg_watermark_color"=>array("des"=>'水印图片文字颜色<br /><i style=color:#666666>白色为#FFFFFF，红色为#FF0000，黑色为#000000，蓝色为#0000FF</i>',"type"=>'字符型',"class"=>'图片上传设置'),
	
	"cfg_upimg_watermark_size"=>array("des"=>'水印图片文字字体大小',"type"=>'字符型',"class"=>'图片上传设置'),

	"cfg_upimg_watermark_diaphaneity"=>array("des"=>'水印透明度（0—100，值越小越透明）',"type"=>'字符型',"class"=>'图片上传设置'),
	
	"cfg_upimg_watermark_position"=>array("des"=>'上传图片水印显示的位置',"type"=>'字符型',"class"=>'图片上传设置'),
	
	"cfg_postfile"=>array("des"=>'信息发布的程序文件，默认为post.php<br /><i style=color:#666666>必须以.php结尾，更改后请在FTP中也作修改</i>',"type"=>'字符型',"class"=>'分类信息相关'),
	
	"cfg_if_info_verify"=>array("des"=>'分类信息审核方式<br /><font color=red>开启人工审核时，新发布的所有分类信息将默认为待审状态</font>',"type"=>'布尔型',"class"=>'分类信息相关'),
	
	"cfg_if_nonmember_info"=>array("des"=>'游客能否发布分类信息',"type"=>'布尔型',"class"=>'分类信息相关'),
	
	"cfg_member_upgrade_top"=>array("des"=>'分类信息<font style=color:#ff3300>大类置顶</font>扣除金币',"type"=>'字符型',"class"=>'分类信息相关'),
	
	"cfg_member_upgrade_list_top"=>array("des"=>'分类信息<font style=color:#ff9900>小类置顶</font>扣除金币',"type"=>'字符型',"class"=>'分类信息相关'),
	
	"cfg_member_upgrade_index_top"=>array("des"=>'分类信息<font style=color:#ff9900>首页置顶</font>扣除金币',"type"=>'字符型',"class"=>'分类信息相关'),
	
	"cfg_member_info_red"=>array("des"=>'分类信息-标题套红扣除金币',"type"=>'字符型',"class"=>'分类信息相关'),
	
	"cfg_member_info_bold"=>array("des"=>'分类信息-标题加粗扣除金币',"type"=>'字符型',"class"=>'分类信息相关'),
	
	"cfg_member_info_refresh"=>array("des"=>'分类信息-标题刷新扣除金币<br /><i style=color:#666>设置为0时将不扣除金币</i>',"type"=>'字符型',"class"=>'分类信息相关'),
	
	"cfg_post_editor"=>array("des"=>'信息发布时文字编辑器是否启用KindEditor',"type"=>'布尔型',"class"=>'分类信息相关'),
	
	"cfg_info_if_img"=>array("des"=>'信息联系方式是否以图片形式显示<br /><i style=color:#666666>（默认为图片显示）</i>',"type"=>'布尔型',"class"=>'分类信息相关'),
	
	"cfg_info_if_gq"=>array("des"=>'信息过期后是否显示用户联系方式<br /><i style=color:#666666>（默认为关闭）</i>',"type"=>'布尔型',"class"=>'分类信息相关'),
	
	"cfg_allow_post_area"=>array("des"=>'限制信息发布者所在地区<br /><font color=red>（即您指定地区<font color=red>以外</font>的省市不能发布信息或需要审核）</font><br /><font color=red>格式：</font>地区名=0或-1<br /><font color=red>范例：</font><br /><font color=green>北京=-1</font>表示北京<font color=red>以外</font>地区不允许发布信息<br /><font color=green>北京=0</font>表示北京<font color=red>以外</font>地区发布的信息需要审核后显示<br /><i style=color:#666666>注意：多个地区请用,隔开如：<font color=green>北京,上海=-1</font></i>',"type"=>'字符型',"class"=>'分类信息相关'),
	
	"cfg_disallow_post_tel"=>array("des"=>'限制信息发布者的联系电话<br /><font color=red>（即您指定的电话号码不能发布信息或需要审核）</font><br /><font color=red>格式：</font>13788888888=0或-1<br /><font color=red>范例：</font><br /><font color=green>13788888888=-1</font>表示当电话为13788888888时不允许发布<br /><font color=green>13888888888=0</font>表示该电话为13788888888是，发布的信息需要审核<br /><i style=color:#666666>注意：多个电话请用,隔开如：<font color=green>13788888888,13888888888=-1</font></i>',"type"=>'字符型',"class"=>'分类信息相关'),
	
	"cfg_forbidden_post_ip"=>array("des"=>'禁止信息发布的IP。当用户处于本列表中的IP地址,将无法发布信息。<br /> 既可输入完整地址，也可只输入 IP 开头如 <font color=red>192.168.</font><br />多个IP用","(不含引号) 隔开，
例如 <font color=red>192.168.,203.171.</font> <br />可匹配 <font color=green>192.168.0.0～192.168.255.255</font> 以及<font color=green>203.171.0.0～203.171.255.255</font> 范围内的所有地址，留空为不设置。<br />',"type"=>'字符型',"class"=>'分类信息相关'),

	"cfg_if_post_othercity"=>array("des"=>'是否允许用户在其它分站发布信息',"type"=>'布尔型',"class"=>'分类信息相关'),

	"cfg_upimg_number"=>array("des"=>'发布信息至多能上传多少张图片，默认是4张',"type"=>'数字',"class"=>'分类信息相关'),
	
	"cfg_nonmember_perday_post"=>array("des"=>'游客每天至多发布多少条分类信息<br /><i style=color:#666666>注意：该功能在您设置了非会员可以发布信息时生效<br />若不限制游客发布信息的条数请留空</i>',"type"=>'字符型',"class"=>'分类信息相关'),
	
	"mapapi"=>array("des"=>'地图API的地址',"type"=>'字符型',"class"=>'地图接口设置'),
	
	"mapflag"=>array("des"=>'地图标识',"type"=>'字符型',"class"=>'地图接口设置'),
	
	"mapapi_charset"=>array("des"=>'地图API的编码',"type"=>'字符型',"class"=>'地图接口设置'),
	
	"mapview_level"=>array("des"=>'地图默认缩放等级',"type"=>'字符型',"class"=>'地图接口设置'),

);
?>