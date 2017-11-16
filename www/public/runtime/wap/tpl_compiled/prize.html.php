<?php if ($this->_var['ajax_refresh'] == 0): ?>
<?php
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/style.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/color.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/public.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/pull_refresh.css";


$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/prize.css";
$this->_var['pagecss'][] = $this->_var['TMPL_REAL']."/css/bootstrap.min.css";

$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/utils/fastclick.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/utils/fastclick.js";



$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/jquery-1.10.2.min.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/jquery-1.10.2.min.js";


$this->_var['pagejs'][] = $this->_var['TMPL_REAL']."/js/awardRotate.js";
$this->_var['cpagejs'][] = $this->_var['TMPL_REAL']."/js/awardRotate.js";

?>

<?php echo $this->fetch('inc/header_title_home.html'); ?>


<?php endif; ?>
<style type="text/css">
    .cut_city a i {
        line-height: 50px;
        font-size:18px;
    }
    .split-line {
        height: 50px;
    }
    .logo_img{
        font-size:18px;
    }
    .hd-right{
        display:none;
    }
</style>
<?php if ($this->_var['date11']): ?>
<div class="date11">
    <img src="/wap/Tpl/main/images/date11.jpg" alt="" style="width:100%;">
</div>
<?php else: ?>
<div class="turbg">
    <img src="/wap/Tpl/main/images/prize/turbanner.png" class="img-responsive" style="max-width:80%;margin:0 auto;margin-top:20px;margin-bottom: -50px;">
    <img src="/wap/Tpl/main/images/prize/1.png" id="shan-img" style="display:none;" />
    <img src="/wap/Tpl/main/images/prize/2.png" id="sorry-img" style="display:none;" />
    <div class="banner">
        <div class="turnplate" style="background-image:url(/wap/Tpl/main/images/prize/turnplate-bg.png);background-size:100% 100%;">
          <div>
            <canvas class="item" id="wheelcanvas" width="422px" height="422px"></canvas>
            <img class="pointer" src="/wap/Tpl/main/images/prize/turnplate-pointer.png"/>
        </div>
    </div>
    <div class="">
        <img src="/wap/Tpl/main/images/prize/turshadow1.png" class="img-responsive" style="position:relative;top:-5px;">
        <img src="/wap/Tpl/main/images/prize/turshadow2.png" class="img-responsive" style="position:relative;bottom:-5px;">
    </div>
</div>
<div class="pt10lr10 mt20">
    <div class="pline" >
    </div>
    <div class="prizebox">
        <div class="res" style="display: none;"><?php echo $this->_var['restaraunts']; ?></div>
        <div class="ptitle"><strong>中奖榜单</strong><span class="pull-right font12">累计<span class="text-red"><?php echo $this->_var['count']; ?></span>人中奖</span></div>
        <div class="prizelistwrap" id="demo" style="position:relative;">
            <div class="prizelist" id="demo1">
                <?php $_from = $this->_var['winner']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                <div class="clearfix pb10">
                    <div class="col-xs-4 clearPadding text-red"><?php echo $this->_var['item']['user_name']; ?></div>
                    <div class="col-xs-6 clearPadding"><?php echo $this->_var['item']['prize']; ?></div>
                    <div class="col-xs-2 clearPadding"><?php echo $this->_var['item']['addtime']; ?></div>
                </div>
                   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>
            <div class="prizelist" id="demo2"></div>
        </div>
    </div>
</div>
</div>
<?php endif; ?>
<script type="text/javascript" src="/wap/Tpl/main/js/awardRotate.js"></script>
<script type="text/javascript">
    var speed=40;
    var demo=document.getElementById("demo");
    var demo2=document.getElementById("demo2");
    var demo1=document.getElementById("demo1");
    demo2.innerHTML=demo1.innerHTML;
    function Marquee(){
        if(demo2.offsetTop-demo.scrollTop<=0)
            demo.scrollTop-=demo1.offsetHeight;
        else{
            demo.scrollTop++;
        }
    }
    console.log(demo.scrollTop);
    MyMar=setInterval(Marquee,speed);
    var turnplate={
        restaraunts:[],				//大转盘奖品名称
        colors:[],					//大转盘奖品区块对应背景颜色
        outsideRadius:192,			//大转盘外圆的半径
        textRadius:155,				//大转盘奖品位置距离圆心的距离
        insideRadius:68,			//大转盘内圆的半径
        startAngle:0,				//开始角度
        bRotate:false				//false:停止;ture:旋转
    };

    $(document).ready(function(){
        var res = $("div[class='res']").text();
        var arr = res.split(',');
        //动态添加大转盘的奖品与奖品区域背景颜色
        turnplate.restaraunts = arr;
        turnplate.colors = ["#FFF4D6", "#FFFFFF", "#FFF4D6", "#FFFFFF","#FFF4D6", "#FFFFFF", "#FFF4D6", "#FFFFFF","#FFF4D6", "#FFFFFF"];


        var rotateTimeOut = function (){
            $('#wheelcanvas').rotate({
                angle:0,
                animateTo:2160,
                duration:8000,
                callback:function (){
                    alert('网络超时，请检查您的网络设置！');
                }
            });
        };
//        function stopRotate(){
//            for (var i=0,i0=this.length;i<i0;i++)
//            {
//                var element=this.get(i);
//                if (element.Wilq32 && element.Wilq32.PhotoEffect) {
//                    clearTimeout(element.Wilq32.PhotoEffect._timer);
//                }
//            }
//        };
        //旋转转盘 item:奖品位置; txt：提示语;
        var rotateFn = function (item, txt){
            var angles = item * (360 / turnplate.restaraunts.length) - (360 / (turnplate.restaraunts.length*2));
            if(angles<270){
                angles = 270 - angles;
            }else{
                angles = 360 - angles + 270;
            }
            $('#wheelcanvas').stopRotate();
            $('#wheelcanvas').rotate({
                angle:0,
                animateTo:angles+1800,
                duration:8000,
                callback:function (){
                    alert(txt);
                    turnplate.bRotate = !turnplate.bRotate;
                    window.location.href="";
                }
            });
        };
        function test(item){
            $.post('index.php?ctl=prize&act=save',{key:item},function (data) {
               return data;
            })
        }

        $('.pointer').click(function (){
            if(turnplate.bRotate)return;
            turnplate.bRotate = !turnplate.bRotate;
            //获取随机数(奖品个数范围内)
//            var item = rnd(1,turnplate.restaraunts.length);

            $.post("index.php?ctl=prize&act=ajax",callbackUp);
             function callbackUp(data){
                 var jsonobj=eval('('+data+')');
                 if(jsonobj.status == 1){
                     var  item =jsonobj.info;
                     rotateFn(item, turnplate.restaraunts[item-1]);
                 }else{
                     alert(jsonobj.info);
                 }
            };

        });
    });

//    function rnd(n, m){
//        var random = Math.floor(Math.random()*(m-n+1)+n);
//        return random;
//
//    }
    //页面所有元素加载完毕后执行drawRouletteWheel()方法对转盘进行渲染
    window.onload=function(){
        drawRouletteWheel();
    };

    function drawRouletteWheel() {
        var canvas = document.getElementById("wheelcanvas");
        if (canvas.getContext) {
            //根据奖品个数计算圆周角度
            var arc = Math.PI / (turnplate.restaraunts.length/2);
            var ctx = canvas.getContext("2d");
            //在给定矩形内清空一个矩形
            ctx.clearRect(0,0,422,422);
            //strokeStyle 属性设置或返回用于笔触的颜色、渐变或模式
            ctx.strokeStyle = "#FFBE04";
            //font 属性设置或返回画布上文本内容的当前字体属性
            ctx.font = '16px Microsoft YaHei';
            for(var i = 0; i < turnplate.restaraunts.length; i++) {
                var angle = turnplate.startAngle + i * arc;
                ctx.fillStyle = turnplate.colors[i];
                ctx.beginPath();
                //arc(x,y,r,起始角,结束角,绘制方向) 方法创建弧/曲线（用于创建圆或部分圆）
                ctx.arc(211, 211, turnplate.outsideRadius, angle, angle + arc, false);
                ctx.arc(211, 211, turnplate.insideRadius, angle + arc, angle, true);
                ctx.stroke();
                ctx.fill();
                //锁画布(为了保存之前的画布状态)
                ctx.save();

                //----绘制奖品开始----
                ctx.fillStyle = "#E5302F";
                var text = turnplate.restaraunts[i];
                var line_height = 17;
                //translate方法重新映射画布上的 (0,0) 位置
                ctx.translate(211 + Math.cos(angle + arc / 2) * turnplate.textRadius, 211 + Math.sin(angle + arc / 2) * turnplate.textRadius);

                //rotate方法旋转当前的绘图
                ctx.rotate(angle + arc / 2 + Math.PI / 2);

                /** 下面代码根据奖品类型、奖品名称长度渲染不同效果，如字体、颜色、图片效果。(具体根据实际情况改变) **/
                if(text.indexOf("M")>0){//流量包
                    var texts = text.split("M");
                    for(var j = 0; j<texts.length; j++){
                        ctx.font = j == 0?'bold 20px Microsoft YaHei':'16px Microsoft YaHei';
                        if(j == 0){
                            ctx.fillText(texts[j]+"M", -ctx.measureText(texts[j]+"M").width / 2, j * line_height);
                        }else{
                            ctx.fillText(texts[j], -ctx.measureText(texts[j]).width / 2, j * line_height);
                        }
                    }
                }else if(text.indexOf("M") == -1 && text.length>6){//奖品名称长度超过一定范围
                    text = text.substring(0,6)+"||"+text.substring(6);
                    var texts = text.split("||");
                    for(var j = 0; j<texts.length; j++){
                        ctx.fillText(texts[j], -ctx.measureText(texts[j]).width / 2, j * line_height);
                    }
                }else{
                    //在画布上绘制填色的文本。文本的默认颜色是黑色
                    //measureText()方法返回包含一个对象，该对象包含以像素计的指定字体宽度
                    ctx.fillText(text, -ctx.measureText(text).width / 2, 0);
                }

                //添加对应图标
                if(text.indexOf("夺宝币")>0){
                    var img= document.getElementById("shan-img");
                    img.onload=function(){
                        ctx.drawImage(img,-15,10);
                    };
                    ctx.drawImage(img,-15,10);
                }else if(text.indexOf("谢谢参与")>=0){
                    var img= document.getElementById("sorry-img");
                    img.onload=function(){
                        ctx.drawImage(img,-15,10);
                    };
                    ctx.drawImage(img,-15,10);
                }
                //把当前画布返回（调整）到上一个save()状态之前
                ctx.restore();
                //----绘制奖品结束----
            }
        }
    }
</script>
<?php if ($this->_var['ajax_refresh'] == 0): ?>

<?php echo $this->fetch('inc/footer_index.html'); ?>
<?php endif; ?>