<?php
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/public.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/style.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/user_login.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/user_register_next.css";

$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery-1.6.2.min.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.bgiframe.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.timer.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.weebox.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.touchwipe.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/fastclick.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/exif.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/lrz.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/uploadPreview.min.js";

$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/fanwe_utils/fanweUI.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/fanwe_utils/fanweUI.js";

$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/script.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/script.js";

$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/user_register_next.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/user_register_next.js";
?>
<?php echo $this->fetch('inc/header_register.html'); ?>
<div class="wrap" id="user-register-loginform" >
    <div class="content">
    <script type="text/javascript">
        var suce_url = '<?php
echo parse_url_tag("u:index|user#user_register_next_do|"."".""); 
?>';
        var user_center_index='<?php
echo parse_url_tag("u:index|index|"."".""); 
?>'
    </script>
    <form action="" id="register_box">
    <section class="register">

        <ul class="input-list split-line-top split-line">

            <div class="file_img">
                <div class="item-add" style="width:100%;height:100%;border: 1px solid #ddd;float:left;text-align:center;">
                    <img id="fileimg" src="./public/avatar/noavatar_big.gif" style="height:200px;">
                    <input class="file-btn" id="file-btn" type="file" capture="camera">
                </div>
           </div>
            <li>
                <i class="iconfont">&#xe6f1;</i>
                <div class="input-box split-line">
                    <label class="com-input">
                        <input class="testing third" type="text" id = "user_name" name="user_name"  placeholder="请输入昵称" style="width:80%">
                    </label>
                </div>
            </li>
        </ul>
        <div class="login-btn-box">
            <input type="button" id="change_info" value="修改" class="login-btn login-btn-red">&nbsp;&nbsp;
            <input type="button" id="skip_change" value="跳过" class="login-btn login-btn-red">
        </div>
    </section>
    </form>
    </div>
</div>
<script type="text/javascript">
	<?php if ($this->_var['signin_result']): ?>
	show_signin_message(<?php echo $this->_var['signin_result']; ?>);
	<?php endif; ?>
</script>
<?php echo $this->fetch('inc/footer_index.html'); ?>
