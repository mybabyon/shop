<?php
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/weebox.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/fanweUI.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/style.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/public.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/color.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/duobao.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/relate_goods.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/layer.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/pull_refresh.css";



$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery-1.6.2.min.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.bgiframe.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.timer.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.weebox.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/jquery.touchwipe.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/fastclick.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/TouchSlide.1.1.js";

$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/fanwe_utils/fanweUI.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/fanwe_utils/fanweUI.js";

$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/script.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/script.js";

$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/onload.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/swipe.js";

$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/duobao.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/duobao.js";


$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/relate_goods.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/relate_goods.js";

$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/layer.m/layer.m.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/layer.m/layer.m.js";

$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/duoobao_item_num.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/duoobao_item_num.js";

$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/jQuery.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/jQuery.js";

$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/jqplot.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/jqplot.js";

$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/pull_refresh/lib/touche.js";
$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/pull_refresh/pull-refresh.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/pull_refresh/pull-refresh.js";


?>

<?php echo $this->fetch('inc/header_title_home.html'); ?>
<script type="text/javascript">
    var cart_conf_json = <?php echo $this->_var['cart_conf_json']; ?>;
    var cart_data_json = <?php echo $this->_var['cart_data_json']; ?>;
    var to_cart_url = "<?php
echo parse_url_tag("u:index|cart#index|"."".""); 
?>";
    var totalbuy_cart_url='<?php
echo parse_url_tag("u:index|totalbuy#index|"."".""); 
?>';
    var duobao_detail_info = 1;
</script>
<style>
    .good>img{
        width: 25%;
        float:left;
    }
    .good>p{
        color: #0E0E0E;
        font-size: 14px;
    }
    .hr{
        width: 104%;
        height: 1px;
        background: #e8eddd;
        float: left;
        margin-left: -2%;
    }
    .prev_db{
        width: 100%;
        line-height: 50px;
    }
    .db_xx_left{
        float: left;
        margin-left: 6%;
    }
    .db_xx_right{
        float: right;
        margin-right: 8%;
    }
    .num{
        color:#FE9F4A;
    }
    .db_xx{
        line-height:30px;
    }
    .jdt{
        width: 95%;
        height: 20px;
        background: #fff;
        border-radius: 20px;
        border: 1px solid #FE9F4A;
        margin-left: 2.5%;
        position:relative;
        margin-top:3%;
    }
    .jdt_bar{
        width: 5%;
        background: linear-gradient(to right, #cc5345 35%, #ff7f36 68%);
        height: 100%;
        border-radius: 20px;
    }
    .jdt_dian{
        display: block;
        width: 10px;
        height: 10px;
        border-radius: 10px;
        background: #fff;
        float: right;
        margin-right: 5px;
        margin-top: 4px;
    }
    .jdt_code{
        position: absolute;
        top: -20px;
        border: 1px solid #FA9D49;
        line-height: 18px;
        border-radius: 5px;
        background: #fff;
    }
    .jdt_sj{
        position: absolute;
        top: -10%;
        width: 0;
        left:1%;
        height: 0;
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-top: 10px solid #fff;
    }
    .surplus{
        width: 60%;
        max-height: 50%;
        position: absolute;
        top: 20%;
        left: 20%;
        background: #fff;
        border: 1px solid #FA9D49;
        border-radius: 8px;
        overflow: hidden;
        display:none;
    }
    .surplus_code{
        margin-left: 4%;
        line-height: 32px;
        float: left;
    }
    .surplus_close{
        width: 16px;
        height: 16px;
        border: 1px solid #FA9D49;
        text-align: center;
        line-height: 16px;
        border-radius: 16px;
        position: absolute;
        left: 79%;
        top: 19%;
        z-index: 100;
        background: #fff;
        display:none;
    }
    .run_chart{
        width: 100%;
        height: 35%;
        background: #fff;
        /*position: absolute;*/
        /*margin-top: 1%;*/
    }
    .user{
        width:100%;
        margin-top:5px;
        min-height:200px;
    }
    .first_tr>th{
        border-left:1px solid #fff;
        border-right:1px solid #fff;
    }
    .tr_second{
        border-bottom: 1px solid #dac3c3;
        line-height: 26px;
        text-align: center;
    }
</style>
</head>
<body>
<div class="good">
    <img src="<?php echo $this->_var['good']['icon']; ?>">
    <p style="line-height: 300%;"><?php echo $this->_var['good']['name']; ?></p>
    <p style="margin-top:2%;">总需：<span style="color:#FE9F4A;"><?php echo $this->_var['good']['max_buy']; ?></span>人次</p>
</div>
<div class="clear"></div>
<div class="hr"></div>
<!--<div class="need">-->
<!--<div class="good-on">-->
<!--<div class="progress">-->
<!--<p>期号：<?php echo $this->_var['item_data']['id']; ?></p>-->
<!--<progress max="<?php echo $this->_var['item_data']['max_buy']; ?>" value="<?php echo $this->_var['item_data']['current_buy']; ?>"></progress>-->
<!--<p class="fl">总需<em id="pro-max"><?php echo $this->_var['item_data']['max_buy']; ?></em>人次</p>-->
<!--<p class="fr">剩余<span id="pro-rest"><?php echo $this->_var['item_data']['surplus_count']; ?></span></p>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--<div class="hr"></div>-->
<div class="prev_db">
    <span class="db_xx_left">第<?php echo $this->_var['luck_user']['id']; ?>期：</span>
    <span class="db_xx_right"><?php echo $this->_var['luck_user']['luck_user_name']; ?>购买了<span class="num"><?php echo $this->_var['luck_user']['luck_user_buy_count']; ?></span>人次</span>
</div>
<div class="clear"></div>
<div class="hr"></div>
<div class="db_xx prev_db">
    <span class="db_xx_left">正在进行</span>
    <span class="db_xx_right"><?php echo $this->_var['item_data']['id']; ?>期</span>
    <p style="width:100%;"></p>
    <div class="jdt">
        <div class="jdt_bar">
            <span class="jdt_dian"></span>
        </div>
        <span class="jdt_code"></span>
        <span class="jdt_sj"></span>
    </div>

    <p style="text-align: center;">
        <span style="float:left;margin-left:2%;">已购：<span class="num"><?php echo $this->_var['item_data']['current_buy']; ?></span>人次</span>
        <span>剩余：<span class="num"><?php echo $this->_var['item_data']['surplus_count']; ?></span>人次</span>
        <span style="float:right;margin-right:3%;">总需：<span class="num"><?php echo $this->_var['item_data']['max_buy']; ?></span>人次</span>
    </p>
</div>

<div class="hr"></div>
<div class="surplus_close">X</div>
<div class="surplus">
    <p class="surplus_p" style="text-align:center;margin-top: 4%;font-weight: bold;">剩余号码</p>
</div>
<div class="clear"></div>
<div class="run_chart" id="chart1"></div>
<div class="clear"></div>
<div class="user">
    <table style="width:100%;">
        <tr style="background:#FF8000;color:#fff;" class="first_tr">
            <th>期数</th>
            <th>中奖人</th>
            <th>中奖号码</th>
            <th>买入次</th>
        </tr>
        <?php $_from = $this->_var['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'v');if (count($_from)):
    foreach ($_from AS $this->_var['v']):
?>
        <tr class="tr_second">
            <td><?php echo $this->_var['v']['duobao_item_id']; ?></td>
            <td><?php echo $this->_var['v']['user_name']; ?></td>
            <td><?php echo $this->_var['v']['lottery_sn']; ?></td>
            <td><?php echo $this->_var['v']['buy_number']; ?></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </table>
</div>

<div class="joinin">
    <div class="joinin-box">
        <input type="hidden" name="data_id" value="<?php echo $this->_var['item_data']['id']; ?>"/>
        <a data-id="<?php echo $this->_var['item_data']['id']; ?>" class="jionin-in joinin-btn right-box" href="javascript:void(0);"  data-type="1">立即参与</a>
        <a href="<?php
echo parse_url_tag("u:index|cart#index|"."".""); 
?>" class="iconfont-box">
        <i class="iconfont">&#xe658;</i>
        <div class="goods-in-list">1</div>
        </a>
    </div>
</div>




<script>
    $(document).ready(function() {
        var duobao_id = <?php echo $this->_var['item_data']['duobao_id']; ?>;
        $.ajax({
            type: "POST",
            url: "<?php
echo parse_url_tag("u:index\|duobao#zst\|"."".""); 
?>",
            data: "id="+duobao_id,
            dataType: "json",
            success: function(datas){
                if(datas['status'] = 'success'){
                    var data = [datas['info']['code']];
                    var data_max = <?php echo $this->_var['item_data']['max_buy']; ?>; //Y轴最大刻度
                    var line_title = ["A","B"]; //曲线名称
                    var y_label = "中奖码"; //Y轴标题
                    var x_label = "期号(+100000000)"; //X轴标题
                    var x = datas['info']['num']; //定义X轴刻度值
                    var title = "这是标题"; //统计图标标题
                    j.jqplot.diagram.base("chart1", data, line_title, "往期中奖码", x, x_label, y_label, data_max,1);
                }else{
                    $("#chart1").html('暂时没有开奖信息');
                }
            }
        });


    });

    $(function(){
        function jdt(){
            var id = <?php echo $this->_var['item_data']['id']; ?>;
            var duobao_id = <?php echo $this->_var['item_data']['duobao_id']; ?>;
            $.ajax({
                type: "POST",
                url: "<?php
echo parse_url_tag("u:index\|duobao#jdt\|"."".""); 
?>",
                data: "id="+id+"&duobao_id="+duobao_id,
                dataType: "json",
                success: function(data){
                    if(data['progress']<=5){
                        data['progress'] = 5;
                    }
                    $(".jdt_bar").css("width",data['progress']+'%');
                    $(".jdt_sj").css("left",(data['progress']-3.8)+'%');
                    if(data['progress']>=95){
                        data['progress'] =95;
                    }
                    $(".jdt_code").css("right",(100-data['progress'])+'%').text(data['code'][0]['code']);

                }
            });
        }
        jdt();

        $(".surplus_close").click(function(){
            $(".surplus").css("display",'none');
            $(".surplus_close").hide();
        });

        $(".jdt").click(function(){
            var id = <?php echo $this->_var['item_data']['id']; ?>;
            $(".surplus_code").remove();
            $.ajax({
                type: "POST",
                url: "<?php
echo parse_url_tag("u:index\|duobao#surplus\|"."".""); 
?>",
                data: "id="+id,
                dataType: "json",
                success: function(data){
                    $(".surplus").show();
                    $(".surplus_close").show();
                    if(data['status'] = 'success'){
                        $.each(data['info'],function(i,item){
                            $(".surplus_p").after("<span class='surplus_code'>"+item['code']+"</span>");
                        });
                    }
                }
            });
        });
    });
</script>




<?php if ($this->_var['item_data']['duobao_status'] == 0): ?>
<?php echo $this->fetch('inc/add_to_list.html'); ?>
<?php endif; ?>
<?php echo $this->fetch('inc/no_footer.html'); ?>
