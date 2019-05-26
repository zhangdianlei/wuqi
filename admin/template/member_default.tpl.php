<?php include mymps_tpl('inc_head_jq');
$admindir = getcwdOL();
?>
<script type="text/javascript" src="../include/datepicker/datepicker.js"></script>
<link rel="stylesheet" href="../include/datepicker/ui.css">
<script language='javascript'>
$(function(){
	$("#datepicker1").datepicker();
	$("#datepicker2").datepicker();
	$("#datepicker3").datepicker();
	$("#datepicker4").datepicker();
});
</script>
<script language="javascript" src="js/vbm.js"></script>

<div id="<?=MPS_SOFTNAME?>" style="padding-bottom:0">
	<div class="mpstopic-category">
		<div class="panel-tab">
			<ul class="clearfix tab-list">
                <?php if(!$admin_cityid){?><li><a href="member.php?if_corp=0" <? if($if_corp=='0'){?>class="current"<? }?>>个人会员</a></li><? }?>
				<li><a href="member.php?if_corp=1" <? if($if_corp=='1'){?>class="current"<? }?>>商家会员</a></li>
			</ul>
		</div>
	</div>
</div>

<div class="clear"></div>
<form action="member.php" method="get">
<input type='hidden' name='part' value='default'/>
<input name="if_corp" value="<?=$if_corp?>" type="hidden" />
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
  <tr class="firstr">
  	<td colspan="4">搜索符合条件的<?php echo $if_corp == '0' ? '个人会员' : '商家会员'; ?> <label for="moreoptions"><input name="moreoptions" value="yes" type="checkbox" class="checkbox" onclick="blocknone('showtbody');" id="moreoptions" <?php if($moreoptions == 'yes') echo 'checked'?>>全部条件</label></td>
  </tr>
  <?php if(!$admin_cityid){?>
  <tr bgcolor="#ffffff">
    <td style="background-color:#f1f5f8; width:22%">所属分站地区</td>
    <td colspan="3">&nbsp;<select name="cityid">
    <option value="">>城市分站</option>
    <?php echo get_cityoptions($cityid); ?>
    </select></td>
  </tr>
  <? }else{ ?>
  <input name="cityid" value="<?php echo $admin_cityid?>" type="hidden" />
  <? }?>
  <tr bgcolor="#ffffff">
    <td style="background-color:#f1f5f8; width:22%">用户名(UserID)</td>
    <td>&nbsp;<input name="userid" class="text" value="<?php echo $userid; ?>"></td>
     <td style="background-color:#f1f5f8; width:22%"><?php echo $if_corp == '1' ? '商家名称' : '用户姓名'; ?></td>
    <td>&nbsp;<input name="tname" class="text" value="<?php echo $tname; ?>"></td>
  </tr>
<?php if($if_corp == '1'){?>
  <tr bgcolor="#ffffff">
    <td style="background-color:#f1f5f8;">所在分类</td>
    <td>&nbsp;<?=get_member_cat($catid,false)?></td>
    <td style="background-color:#f1f5f8;">是否推荐显示</td>
    <td>&nbsp;<select name="tuijian">
    <option value="all" <?php if($tuijian == 'all'){?>selected="selected"<?php }?>>全部商家</option>
	<option value="index" <?php if($tuijian == 'index'){?>selected="selected"<?php }?>>首页推荐商家</option>
	<option value="list" <?php if($tuijian == 'list'){?>selected="selected"<?php }?>>店铺列表页推荐商家</option>
    </select></td>
  </tr>
  <?php }?>
  </tr>
  <tbody id="showtbody" <?php if($moreoptions != 'yes'){?>style="display:none"<?php }?>>
  <tr bgcolor="#ffffff">
    <td style="background-color:#f1f5f8">金币 低于:</td>
    <td>&nbsp;<input name="moneylower" class="txt" value="<?php echo $moneylower; ?>"> <img src="../member/images/mymps_icon_incomes.gif" align="absmiddle"></td>
    <td style="background-color:#f1f5f8" width="22%">金币 高于:</td>
    <td>&nbsp;<input name="moneyhigher" class="txt" value="<?php echo $moneyhigher; ?>"> <img src="../member/images/mymps_icon_incomes.gif" align="absmiddle"></td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="background-color:#f1f5f8">注册IP开头 (通配符 "*" 如 "127.0.*.*"(不含引号)):</td>
    <td>&nbsp;<input name="regip" class="text" value="<?php echo $regip; ?>"></td>
    <td style="background-color:#f1f5f8">上次访问IP开头 (通配符 "*" 如 "127.0.*.*"(不含引号)):</td>
    <td>&nbsp;<input name="lastip" class="text" value="<?php echo $lastip; ?>"></td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="background-color:#f1f5f8">注册日期早于(书写格式：yy-mm-dd):</td>
    <td>&nbsp;<input name="regdatebefore" style="width:100px;" class="text" value="<?php echo $regdatebefore; ?>"  id="datepicker1"></td>
  	<td style="background-color:#f1f5f8">注册日期晚于(书写格式：yy-mm-dd):</td>
    <td>&nbsp;<input name="regdateafter" style="width:100px;" class="text" value="<?php echo $regdateafter; ?>"  id="datepicker2"></td>
  
  </tr>
  <tr bgcolor="#ffffff">
    <td style="background-color:#f1f5f8">最后访问时间早于(书写格式：yy-mm-dd):</td>
    <td>&nbsp;<input name="lastvisitbefore" style="width:100px;" class="text" value="<?php echo $lastvisitbefore; ?>"  id="datepicker3"></td>
	<td style="background-color:#f1f5f8">最后访问时间晚于(书写格式：yy-mm-dd):</td>
    <td>&nbsp;<input name="lastvisitafter" style="width:100px;"  class="text" value="<?php echo $lastvisitafter; ?>"  id="datepicker4"></td>
  </tr>
  
  </tbody>
</table>
</div>
<center><input type="submit" value="搜 索" class="mymps large" /></center>
<div class="clear" style="margin-bottom:5px"></div>
</form>
<div class="clear"></div>

<form name='form1' method='post' action='member.php' onSubmit='return checkSubmit();'>
<input type='hidden' name='part' value='default'/>
<input name="url" type="hidden" value="<?=GetUrl()?>">
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
    <tr class="firstr">
      <td width="30">选择</td>
      <td width="30">编号</td>
      <td>用户名</td>
      <? if($if_corp == 1){?><td>机构名称</td><? }?>
      <td width="100">认证情况</td>
      <td width="100">用户组</td>
      <td width="100">注册地IP</td>
      <td>注册时间</td>
      <td>上次登录</td>
      <td width="60">操作</td>
    </tr>
    <tbody onmouseover="addMouseEvent(this);">
<?php foreach($member AS $member){
?>
    <tr align="center" bgcolor="white">
      <td><input type='checkbox' name='id[]' value='<?=$member[id]?>' class='checkbox' id="<?=$member[id]?>" <?php if($userid) echo ' checked ';?>></td>
      <td><?=$member[id]?></td>
	  <td><a href="javascript:void(0);" onclick="
setbg('<?=MPS_SOFTNAME?>会员中心',400,110,'../box.php?part=member&userid=<?=$member[userid]?>&admindir=<?=$admindir?>')"><?=$member[userid]?></a></td>
	  <? if($if_corp == 1){?><td><?php if($member['if_corp'] == 1 && $member['ifindex'] == 2){ echo '[<a href="?ifindex=2&if_corp=1" style="color:red" title="首页推荐">首页</a>] ';}?><?php if($member['if_corp'] == 1 && $member['iflist'] == 2){ echo '[<a href="?iflist=2&if_corp=1" style="color:#ff6600" title="列表推荐">列表</a>] ';}?><font color="#000"><?=$member[tname]?></font></td><? }?>
      <td>
	  <?php if($member['per_certify'] == 1){?><img src="../images/person1.gif" align="absmiddle" title="已通过身份证认证"/><?php }else{?><img src="../images/person0.gif" align="absmiddle" title="未通过身份证认证"/><? }?>
	  <?php if($if_corp ==1){if($member['com_certify'] == 1){?><img src="../images/company1.gif" align="absmiddle" title="已通过营业执照证认证"/><?php }else{?><img src="../images/company0.gif" align="absmiddle" title="未通过营业执照认证"/><? }}?></td>
      <td><?=$member[levelname]?><?php if(!empty($member['levelup_time'])){ echo '<br /><em style=color:red>截至'.date("Y-m-d",$member['levelup_time']).'</em>';}?></td>
      <td><a href="
javascript:setbg('查看IP所在地',400,110,'../box.php?part=iptoarea&ip=<?=$member[joinip]?>&admindir=<?=$admindir?>')" title="点击查看注册地"><?=$member[joinip]=='wap'?'手机端':$member[joinip]?></a></td>
      <td><em><?=GetTime($member[jointime])?></em></td>
      <td><em><?=GetTime($member[logintime])?></em></td>
      <td><a href="member.php?part=edit&id=<?=$member[id]?>">编辑</a> | <a href="member.php?part=pay&id=<?=$member[id]?>">充值</a></td>
    </tr>
<?php }?>
</tbody>
<tr bgcolor="#ffffff" height="28">
    <td style="border-right:1px #fff solid;"><input name="checkall" type="checkbox" id="checkall" onClick="CheckAll(this.form)" class="checkbox"/></td>
    <td colspan="10">
    <label for="delall">
	<b>转为-></b> <label for="status"><input name="do_action" class="radio" id="status" value="status" type="radio">待审核</label> | <?php echo get_member_level_label(); ?> | <?php if($if_corp == '1'){?><label for="person"><input name="do_action" class="radio" id="person" value="person" type="radio">个人会员</label><?}else{?><label for="corp"><input name="do_action" class="radio" id="corp" value="corp" type="radio">商家会员</label><?php }?>
	  <hr><b>通过-></b>
	  <label for="per_certify"><input type="radio" id="per_certify" value="per_certify" name="do_action">身份证认证</label> <label for="com_certify"><input type="radio" id="com_certify" value="com_certify" name="do_action">营业执照认证</label>
      <hr>
      <b>删除-></b> <label for="delall"><input type="radio" value="delall" id="delall" name="do_action" class="radio">该会员以及他的全部信息</label><?php if($if_corp == '1'){?> | <label for="delinfo"><input type="radio" value="delinfo" id="delinfo" name="do_action" class="radio">分类信息</label> <label for="deldoc"><input type="radio" value="deldoc" id="deldoc" name="do_action" class="radio">空间文档</label> <label for="delalbum"><input type="radio" value="delalbum" id="delalbum" name="do_action" class="radio">相册</label> <label for="delcomment"><input type="radio" value="delcomment" id="delcomment" name="do_action" class="radio">网友点评</label><?php }?> <label for="delpm"><input type="radio" value="delpm" id="delpm" name="do_action" class="radio">短消息</label>
	  <?php if($if_corp == 1){?>
	  <hr>
	  <b>显示在-></b>
	  <label for="ifindex2"><input name="do_action" value="ifindex2" id="ifindex2" type="radio">首页推荐</label>
	  <label for="ifindex1"><input name="do_action" value="ifindex1" id="ifindex1" type="radio">去除首页推荐</label>
	  |
	  <label for="iflist2"><input name="do_action" value="iflist2" id="iflist2" type="radio">店铺列表推荐</label>
	  <label for="iflist1"><input name="do_action" value="iflist1" id="iflist1" type="radio">去除列表推荐</label>
	  <?php }?>
    </td>
</tr>
</table>
</div>
<center>
<input type="submit" value="提 交" class="mymps large"/></center>
</form>
<div class="pagination"><?=page2()?></div>
<?=mymps_admin_tpl_global_foot();?>