<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:86:"/Volumes/Sierra_files/www/new/tp2/public/../application/index/view/article/article.htm";i:1521986614;s:72:"/Volumes/Sierra_files/www/new/tp2/application/index/view/public/head.htm";i:1521459228;s:74:"/Volumes/Sierra_files/www/new/tp2/application/index/view/public/footer.htm";i:1521459344;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>童老师ThinkPHP5交流群：484519446</title>
<meta name="description" content="童老师ThinkPHP5交流群：484519446" />
<meta name="keywords" content="童老师ThinkPHP5交流群：484519446" />
<link rel="stylesheet" type="text/css" media="all" href="http://tp2.com/public/static/index/style/style.css" />
<script src="http://tp2.com/public/static/index/style/jquery-1.4.1.min.js" type="text/javascript"></script>
    <script src="http://tp2.com/public/static/index/style/jquery.js" type="text/javascript"></script>
    <script src="http://tp2.com/public/static/index/style/jquery.error.js" type="text/javascript"></script>
    <script src="http://tp2.com/public/static/index/style/jtemplates.js" type="text/javascript"></script>
    <script src="http://tp2.com/public/static/index/style/jquery.form.js" type="text/javascript"></script>
    <script src="http://tp2.com/public/static/index/style/lazy.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://tp2.com/public/static/index/style/wp-sns-share.js"></script>
    <script type="text/javascript" src="http://tp2.com/public/static/index/style/voterajax.js"></script>
    <script type="text/javascript" src="http://tp2.com/public/static/index/style/userregister.js"></script>
    <link rel="stylesheet" href="http://tp2.com/public/static/index/style/pagenavi-css.css" type="text/css" media="all" />
    <link rel="stylesheet" href="http://tp2.com/public/static/index/style/votestyles.css" type="text/css" />
    <link rel="stylesheet" href="http://tp2.com/public/static/index/style/voteitup.css" type="text/css" />
    <link rel="stylesheet" href="http://tp2.com/public/static/index/style/article.css" type="text/css" />
<script language="javascript" type="text/javascript" src="http://tp2.com/public/static/index/style/dedeajax2.js"></script>
<script language="javascript" type="text/javascript">
<!--

function postBadGood(ftype,fid)
{
    var taget_obj = document.getElementById(ftype+fid);
    var saveid = GetCookie('badgoodid');
    if(saveid != null)
    {
        var saveids = saveid.split(',');
        var hasid = false;
        saveid = '';
        j = 1;
        for(i=saveids.length-1;i>=0;i--)
        {
            if(saveids[i]==fid && hasid) continue;
            else {
                if(saveids[i]==fid && !hasid) hasid = true;
                saveid += (saveid=='' ? saveids[i] : ','+saveids[i]);
                j++;
                if(j==10 && hasid) break;
                if(j==9 && !hasid) break;
            }
        }
        if(hasid) { alert('您刚才已表决过了喔！'); return false;}
        else saveid += ','+fid;
        SetCookie('badgoodid',saveid,1);
    }
    else
    {
        SetCookie('badgoodid',fid,1);
    }
    myajax = new DedeAjax(taget_obj,false,false,'','','');
    myajax.SendGet2("/plus/feedback.php?aid="+fid+"&action="+ftype+"&fid="+fid);
}
function postDigg(ftype,aid)
{
    var taget_obj = document.getElementById('newdigg');
    var saveid = GetCookie('diggid');
    if(saveid != null)
    {
        var saveids = saveid.split(',');
        var hasid = false;
        saveid = '';
        j = 1;
        for(i=saveids.length-1;i>=0;i--)
        {
            if(saveids[i]==aid && hasid) continue;
            else {
                if(saveids[i]==aid && !hasid) hasid = true;
                saveid += (saveid=='' ? saveids[i] : ','+saveids[i]);
                j++;
                if(j==20 && hasid) break;
                if(j==19 && !hasid) break;
            }
        }
        if(hasid) { alert("您已经顶过该帖，请不要重复顶帖 ！"); return; }
        else saveid += ','+aid;
        SetCookie('diggid',saveid,1);
    }
    else
    {
        SetCookie('diggid',aid,1);
    }
    myajax = new DedeAjax(taget_obj,false,false,'','','');
    var url = "/plus/digg_ajax.php?action="+ftype+"&id="+aid;
    myajax.SendGet2(url);
}
function getDigg(aid)
{
    var taget_obj = document.getElementById('newdigg');
    myajax = new DedeAjax(taget_obj,false,false,'','','');
    myajax.SendGet2("/plus/digg_ajax.php?id="+aid);
    DedeXHTTP = null;
}
-->
</script>
<script type="text/javascript">

function ILike(th, v) {
    if (v) {
        $(th).addClass("single_views_over");
    }
    else {
        $(th).removeClass("single_views_over");
    }
}

</script>

</head>
<body class="single2">
   <script>
 function subForm()
 {

 formsearch.submit();
 //form1为form的id
 }
 </script>
<script type="text/javascript">
    function showMask() {
        $("#mask").css("height", $(document).height());
        $("#mask").css("width", $(document).width());
        $("#mask").show();
    }
</script>
<div id="mask" class="mask" onclick="CloseMask()"></div>
<div id="header_wrap">
    <div id="header">
        <div style="float: left; width: 310px;">
            <h1>
                <a href="/" title="宽屏大气文章类--41天鹰模板">宽屏大气文章类--41天鹰模板</a>
                <div class="" id="logo-sub-class">
                </div>
            </h1>
        </div>
        <div id="navi">

<ul id="jsddm">
<li><a class="navi_home" href="/">首页</a></li>
<li><a class="navi_home" target="_blank" href="http://www.chuanke.com/s2260700.html">ThinkPHP5视频教程</a></li>
<li><a href="/lookbike/">单车分类</a>
<ul>

<li><a href="/lookbike/fixed-gear/">死飞车</a></li>

<li><a href="/lookbike/vintagebicycle/">复古骑行</a></li>

<li><a href="/lookbike/roadbicycle/">公路车</a></li>

<li><a href="/lookbike/mountainbike/">山地车</a></li>

<li><a href="/lookbike/small/">折叠/小径车</a></li>

<li><a href="/lookbike/bmx/">BMX</a></li>

<li><a href="/lookbike/otherbike/">城市车及其他</a></li>


</ul>

 </li2><li><a href="/gear/">骑行装备</a>
<ul>

<li><a href="/gear/accessories/">车身装备</a></li>

<li><a href="/gear/rs/">人身装备</a></li>


</ul>

 </li2><li><a href="/life/">单车生活</a>





 </li2><li><a href="/news/">行业资讯</a>





 </li2>

</ul>

            <div style="clear: both;">
            </div>


        </div>
        <div style="float: right; width: 209px;">
            <div class="widget" style="height: 30px; padding-top: 20px;">
                <div style="float: left;">
      <form  name="formsearch" action="/plus/search.php"><input type="hidden" name="kwtype" value="0" />
<input name="q" type="text" style="background-color: #000000;padding-left: 10px; font-size: 12px;font-family: 'Microsoft Yahei'; color: #999999;height: 29px; width: 160px; border: solid 1px #666666; line-height: 28px;" id="go" value="在这里搜索..." onfocus="if(this.value=='在这里搜索...'){this.value='';}"  onblur="if(this.value==''){this.value='在这里搜索...';}" />
        </form>
                        </div>
                <div style="float: left;">
                    <img src="http://tp2.com/public/static/index/images/search-new.png" id="imgSearch" style="cursor: pointer; margin: 0px;
                        padding: 0px;" onclick="subForm()"  /></div>
                <div style="clear: both;">
                </div>
            </div>
        </div>

    </div>
</div>


    <div id="wrapper">

    <div id="wrapper">
        <div id="container">
            <div id="content">
                <div class="post" id="post-19563" style="border-right: solid 1px #000000; min-height: 1700px;
                    margin-top: 10px;">
                    <div class="path"><a href='#'>主页</a> > <a href='/life/'>单车生活</a> > </div>
                    <div class="single_entry single2_entry">
                        <div class="entry fewcomment">
                            <div class="title_container">
                                <h2 class="title single_title">
                                    <span>子弹传球：北京-香港4000多公里单车寻爱之旅</span><span class="title_date"></span></h2>
                                <p class="single_info">时间：2014-02-06 12:28&nbsp;&nbsp;&nbsp;编辑：童攀</p>
                            </div>
                            <div class="div-content">

                                <p>
                                    <p>（本文作者：子弹传球）</p><p>《有些事现在不做，一辈子都不会做了》这首歌里面有一句歌词是这样唱的：“想像你的孙子孙女充满光的瞳孔，正等着你开口等着你说，你最光辉的一次传说”。</p>这是我做过的一件既疯狂又有意义的事。 回到北京已经数月，一直想要把2012年夏天骑车的故事写下来，把路上有意思的见闻与感受写下来，写给自己看，也写给喜爱运动的朋友们看。<br /><br /><strong>北京-香港&nbsp;单车寻爱之旅<br />&nbsp;<br />第一章 - 起</strong><br />&nbsp;<br />2010年夏天，我走出了大学校园。在那段难舍的毕业季，我曾经无数次想象过要用“骑车上高原”的毕业旅行为大学生涯画上句号。偏偏在那段时间，我报考的体育新闻专业研究生止步在了最后的复试环节。慌了阵脚的我放弃了毕业旅行计划，一头扎进了求职的大潮中。凭借着大学期间参加橄榄球比赛的宝贵经历，我进入了一家高度发达的体育联盟工作，从此真正地与体育事业密不可分。<br /> <p style="text-align: center;"><img src="http://www.700bike.com/upload/2013/09/201309300525073616.jpeg" alt="" /><br /></p><p>两年的工作时光匆匆流过，现在回想这段时期也许是我人生中最宝贵的阶段。在这里我从同事、前辈们身上学习知识，在上下班路上坚持骑车锻炼。使我明确了追求体育的人生目标，更重要的是，我遇到了生命中最重要的她。这便是她，我一生最爱的人。</p><p style="text-align: center;"><img src="http://www.700bike.com/upload/2013/09/201309300525277893.jpeg" alt="" /><br /></p><br />我们是大学同学，不在同一个学院，四年间互不相识也未曾见过面，参加工作后才走到了一起。2012年由于特殊原因，我离开了深爱的橄榄球事业，这时的她也已在香港研究生毕业后工作满一年。长时间的异地和居住在香港的水土不服，让她产生了回北京的念头。于是在安置好下一份工作的去处之后，我做了一个决定：骑自行车去香港把她接回来。她听了之后非但没有高兴，反而发起了脾气。原因是担心我在骑车过程中发生危险，毕竟是4000多公里的独自旅程。<br />&nbsp;<br /><p>过去两年多以来，每天30多公里地骑着、积累着，这不仅点燃了我骑车去香港的念头，也在体能方面给了我极大的信心。我相信，只要按照严格的计划，劳逸结合得当，一定能完成这次骑行。在制定了完整的行程计划和做足了充分准备之后，我终于在7月底征得了她和双方父母的同意，可以出发了。</p><p style="text-align: center;"><img src="http://www.700bike.com/upload/2013/09/201309300525424172.jpeg" alt="" /><br /></p> <br />出发之前我对这一路南下途径的城市和线路做了研究，根据路况难度、天气、沿途景观、补给以及住宿等因素，我从两条备选的方案中最终选择了蓝线，并制定了详细的行程表。虽然舍近求远，但沿海路段中的补给和安全性是更好的，这也大大降低了家人的担心。<br /><br /><p>蓝线全长4000公里，耗时28天.经北京-天津-沧州-德州-济南-泰安-临沂-宿迁-淮安-南京-溧阳-湖州-绍兴-宁波-台州-温州-福鼎-福安-宁德-福州-莆田-泉州-漳州-云霄-潮州-汕头-陆丰-惠东-深圳罗湖关口。</p><p style="text-align: center;"><img src="http://www.700bike.com/upload/2013/09/201309300526047935.jpeg" alt="" /><br /></p>&nbsp;<br /><p>手机里存着每日的行程安排，我那时信心满满，虽然预想到了路上会出现“计划赶不上变化”的情况，但怎么也想不到有五股台风也在悄悄地酝酿着，更想不到会有三个命中注定的朋友会和我走到一起。</p><p></p><p class="pagepage"></p>

                                <center id="pagenav">
                                    </center>
                                <div id="BottomNavOver" style="height: 80px;">
                                    <div style="float: left; font-size: 12px;">

                                    </div>
                                    <div style="float: right; padding-right: 20px; width: 120px;" class="div">
                                        <table cellpadding="0" cellspacing="0" border="0" style="background-color: transparent;
                                            border: 0px solid #EEEEEE; border-collapse: collapse; margin: 5px 0 10px;">
                                            <tr>
                                                <td style="border-width: 0px; padding: 0px; padding-right: 4px;">

                                                </td>
                                                <td style="border-width: 0px; padding: 0px;">
                                                    <!-- JiaThis Button BEGIN -->
                                                    <div class="jiathis_style">
                                                        <a class="jiathis_button_qzone"></a><a class="jiathis_button_tqq"></a><a class="jiathis_button_renren">
                                                        </a><a class="jiathis_button_kaixin001"></a><a href="http://www.jiathis.com/share"
                                                            class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
                                                    </div>
                                                    <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1365565447348652"
                                                        charset="utf-8"></script>
                                                    <!-- JiaThis Button END -->
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div style="float: right; width: 60px; font-size: 12px;">
                                        分享至：</div>
                                    <div style="clear: both;">
                                    </div>
                                </div>
                            </div>
                            <div class="clear">
                            </div>
                            <div id="ctl00_ctl00_ContentPlaceHolder1_contentPlace_divRead">
                                <div style="text-align: left; width: 100%; border-bottom: solid 1px #e0e0e0; padding-bottom: 4px;
                                    color: Black; vertical-align: middle; font-weight: bold;">
                                    &nbsp;&nbsp;猜您喜欢的文章
                                </div>
                                <ul class="read" style="list-style-type: none; margin-top: 10px; width: 780px;">
<li style="margin-left: -10px; margin-right: 16px; margin-top: 20px; height: 180px;"> <a href="/life/379.html" target="_blank"><img src="./images/342.jpg" style="width: 250px; height: 150px; margin-bottom: 0px;" />
<span style="margin: 0px; padding: 0px; margin-top: -5px;">众里寻她千百度，蓦然回首，那景却在，延京深</span></a></li>
<li style="margin-left: -10px; margin-right: 16px; margin-top: 20px; height: 180px;"> <a href="/life/377.html" target="_blank"><img src="./images/336.jpg" style="width: 250px; height: 150px; margin-bottom: 0px;" />
<span style="margin: 0px; padding: 0px; margin-top: -5px;">周末4+2出行 到北京怀柔喇叭沟门赏红叶</span></a></li>
<li style="margin-left: -10px; margin-right: 16px; margin-top: 20px; height: 180px;"> <a href="/life/363.html" target="_blank"><img src="./images/323.jpg" style="width: 250px; height: 150px; margin-bottom: 0px;" />
<span style="margin: 0px; padding: 0px; margin-top: -5px;">周末随拍：北京单车生活</span></a></li>

                                </ul>
                            </div>
                            <div class="clear">
                            </div>
                            <div class="comments_wrap" style="margin-top: 35px;">
                                <a name="comment"></a>
          <!-- Duoshuo Comment BEGIN -->
          <div class="ds-thread" data-thread-key=""
    data-title="" data-author-key="" data-url=""></div>
          <script type="text/javascript">
    var duoshuoQuery = {short_name:"dede58"};
    (function() {
        var ds = document.createElement('script');
        ds.type = 'text/javascript';ds.async = true;
        ds.src = 'http://static.duoshuo.com/embed.js';
        ds.charset = 'UTF-8';
        (document.getElementsByTagName('head')[0]
        || document.getElementsByTagName('body')[0]).appendChild(ds);
    })();
    </script>
          <!-- Duoshuo Comment END -->
                            </div>
                            <div class="clear">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sidebar">
                <div class="widget single" style="margin-bottom: 0px; margin-left: 0px; margin-top: 40px;
                    padding-bottom: 0px;" id="newdigg">
                    <div class="single_views" onmouseout="ILike(this,false)" onmouseover="ILike(this,true)">
                        <span class="textcontainer"><span class="votecount26536">0</span></span> <span class="bartext voteid26536"><a href="#"
                                id="aZanImg" onclick="javascript:postDigg('good',382)"></a></span><span class="text" id="spanZan">赞</span>
                        <span class="text love">人</span>
                    </div>


                </div>
  <script language="javascript" type="text/javascript">getDigg(382);</script>
<!-- 右侧 -->

         <div class="widget">

<div style="background: url('./images/hots_bg.png') no-repeat scroll 0 0 transparent;width:250px;height:52px;margin-bottom:15px;">
</div>
<ul id="ulHot">

<li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
<div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="/life/368.html" target="_blank"><img src="http://tp2.com/public/static/index/images/327.jpg" width="83" title="骑摆记：比利时车手Joris的尼泊尔野马河谷山地车之旅" /></a></div>
<div style="float:right;width:145px;height:52px; overflow:hidden;"><a href="/life/368.html" target="_blank" title="骑摆记：比利时车手Joris的尼泊尔野马河谷山地车之旅">骑摆记：比利时车手Joris的尼泊尔野马河谷山</a></div>
</li>
<li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
<div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="/life/378.html" target="_blank"><img src="http://tp2.com/public/static/index/images/335.jpg" width="83" title="深圳设计师浩子和77的11天成都-稻城自虐骑行" /></a></div>
<div style="float:right;width:145px;height:52px; overflow:hidden;"><a href="/life/378.html" target="_blank" title="深圳设计师浩子和77的11天成都-稻城自虐骑行">深圳设计师浩子和77的11天成都-稻城自虐骑行</a></div>
</li>
<li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
<div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="/life/389.html" target="_blank"><img src="http://tp2.com/public/static/index/images/347.jpg" width="83" title="执着的小辫与西藏的骑车旅行" /></a></div>
<div style="float:right;width:145px;height:52px; overflow:hidden;"><a href="/life/389.html" target="_blank" title="执着的小辫与西藏的骑车旅行">执着的小辫与西藏的骑车旅行</a></div>
</li>
<li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
<div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="/life/388.html" target="_blank"><img src="http://tp2.com/public/static/index/images/351.jpg" width="83" title="玄白朱单骑英国第二季 芒特索洛尔骑行" /></a></div>
<div style="float:right;width:145px;height:52px; overflow:hidden;"><a href="/life/388.html" target="_blank" title="玄白朱单骑英国第二季 芒特索洛尔骑行">玄白朱单骑英国第二季 芒特索洛尔骑行</a></div>
</li>
<li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
<div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="/life/382.html" target="_blank"><img src="http://tp2.com/public/static/index/images/345.jpg" width="83" title="子弹传球：北京-香港4000多公里单车寻爱之旅" /></a></div>
<div style="float:right;width:145px;height:52px; overflow:hidden;"><a href="/life/382.html" target="_blank" title="子弹传球：北京-香港4000多公里单车寻爱之旅">子弹传球：北京-香港4000多公里单车寻爱之旅</a></div>
</li>



</ul>
                </div>

            <div class="widget portrait">
    <div>
        <div class="textwidget">
            <a href="/tougao.html"><img src="http://tp2.com/public/static/index/style/img/tg.jpg" alt="鎶曠ǹ"></a><br><br>
<script type="text/javascript">BAIDU_CLB_fillSlot("870073");</script>
<script type="text/javascript">BAIDU_CLB_fillSlot("870080");</script>
<script type="text/javascript">BAIDU_CLB_fillSlot("870081");</script>
        </div>
    </div>
</div>


            </div>
            <div class="clear">
            </div>
        </div>
    </div>
    <script type="text/javascript" src="http://tp2.com/public/static/index/style/z700bike_global.js"></script>
    <script type="text/javascript" src="http://tp2.com/public/static/index/style/z700bike_single.js"></script>

    <script type='text/javascript' src='/blog4./style/jquery.colorbox-min.js?ver=1.3.17.2'></script>


    </div>


<div id="footer_wrap">
    <div id="footer">
        <div class="footer_navi">
            <ul id="menu-%e5%b0%be%e9%83%a8%e5%af%bc%e8%88%aa" class="menu">
                <li id="menu-item-156" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-156">
                    <a href="/aboutus.html">关于我们</a></li>
                <li id="menu-item-157" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-157">
                    <a href="/news/">行业资讯</a></li>
                <li id="menu-item-158" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-158">
                    <a href="/tougao.html">我要投稿</a></li>
            </ul>
        </div>
        <div class="footer_info">
            <span class="legal">Copyright &#169; 2016-2020 qq群：484519446 版权所有&#160;&#160;&#160;<a href="#">
                琼ICP备******号</a>&#160;&#160;&#160;

        </div>
    </div>
</div>

<div style="display: none;" id="scroll">
</div>
<script type="text/javascript" src="http://tp2.com/public/static/index/style/z700bike_global.js"></script>


</body>
</html>
