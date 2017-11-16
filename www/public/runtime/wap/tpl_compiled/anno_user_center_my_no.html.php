<?php
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/weebox.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/fanweUI.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/style.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/color.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/public.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/anno_user_center.css";

$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery-1.6.2.min.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.bgiframe.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.timer.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.weebox.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.touchwipe.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/fastclick.js";

$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/fanwe_utils/fanweUI.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/fanwe_utils/fanweUI.js";

$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/script.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/script.js";

?>
<?php echo $this->fetch('inc/header_title_home.html'); ?>

<div class="dbdeatail">
	<a class="tit" href="javascript:void(0);"><?php echo $this->_var['data']['duobao_item']['name']; ?></a>
	<div class="lable">期号&nbsp;:&nbsp;<?php echo $this->_var['data']['duobao_item']['id']; ?></div>
	<div class="lable">参与了<em><?php echo $this->_var['data']['duobao_count']; ?></em>人次</div>
</div>
<div class="dbdeatailcon">
<div class="dbdeatailtit">
	<span class="fl">夺宝时间</span>
	<span class="fr">参与人次</span>
</div>
<div class="clear"></div>
<ul class="dbtimelist">
	<?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'duobao');if (count($_from)):
    foreach ($_from AS $this->_var['duobao']):
?>
	<li>
		<div class="dbtimel"><?php echo $this->_var['duobao']['create_time']; ?></div>
		<div class="dbtimer">
			<div class="times"><em><?php echo $this->_var['duobao']['number']; ?></em>人次</div>
			<a class="lookno" href='<?php
echo parse_url_tag("u:index|anno_user_center#my_no_all|"."id=".$this->_var['data']['duobao_item']['id']."&uid=".$this->_var['user_info']['id']."".""); 
?>'><?php echo $this->_var['user_info']['uid']; ?>查看夺宝号码</a>
		</div>
	</li>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	<div class="clear"></div>
</ul>
</div>
<div class="dbdeatailcon">

</div>
<?php echo $this->fetch('inc/footer_index.html'); ?>