<?php
/*
世界买家-各洲特别产品页模板
*/
require("../config.php");
require("../function.php");
$id=$_GET["id"];
$d=$_GET["day"];
$update=date("Y-m-d");
if(!$d)
{
  $d=1;
}
if(!$id)
{
	$id=1;
}
$Product_ID=$id;
echo "<!--the page system id is ".$id."-->";
$db=mysql_connect(DBSERVER,DBUSER,DBPASS);
mysql_select_db(DBDATABASE);
$query=mysql_query("SET NAMES 'utf8'",$db);
$sql="SELECT * FROM indexnum WHERE id=".$id;
$query=mysql_query($sql,$db);
$ClassName=mysql_result($query,0,"ClassName");
$ProductName=mysql_result($query,0,"ProductName");
$Title=mysql_result($query,0,"Title");
$Title=str_replace("采购商","采购商经销商进口商",$Title);
$SubName=mysql_result($query,0,"Subname");
$Price=mysql_result($query,0,"Price");
$URL=mysql_result($query,0,"URL");
$Content=mysql_result($query,0,"Content");
$Soft=mysql_result($query,0,"Soft");
$endsoft=mysql_result($query,0,"endsoft");
$ensoft=mysql_result($query,0,"ensoft");
$IOB=mysql_result($query,0,"IOB");
$indexnum=mysql_result($query,0,"indexnum");
$len=40;
if(!$Price || $Price==0)
{
	$Price="";
}else{
	$Price="￥".$Price;
}

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title><?php echo $Title;?></title>
<link href="http://css.beiei.com/industry.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="http://www.beiei.com/favicon.ico">

<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-37314854-4', 'beiei.com');
  ga('send', 'pageview');
</script>

<script type="text/javascript">
	var _hmt = _hmt || [];
	(function() {
	  var hm = document.createElement("script");
	  hm.src = "//hm.baidu.com/hm.js?6e52ded1ede55ddeb3e53275125ce12a";
	  var s = document.getElementsByTagName("script")[0]; 
	  s.parentNode.insertBefore(hm, s);
	})();
</script>

</head>
<body>
<center>
  <table width="800" border="0" cellspacing="0" cellpadding="0">
    <tr>
	<td width="140" rowspan="2" valign="bottom" style=" padding-bottom:19px; padding-left:13px;border:solid 1px #eee5de; border-bottom:0; border-right:0;"><a href="http://www.<?php echo WEBURLNEW;?>"><img src="http://css.beiei.com/b-logo.jpg" border="none" width="144" height="55"></a></td>
	<td align="right" style="padding-right:5px; padding-top:5px; border:solid 1px #eee5de; border-bottom:0; border-left:0;"><div style="float:right"> | <a href="http://www.beiei.com/aboutus.html" class="toptitlemenu1">关于我们</a> | <a href="http://www.beiei.com/pay.html" class="toptitlemenu1">在线订购</a> | <a href="http://www.beiei.com/enaboutus.html" class="toptitlemenu1">ENGLISH</a></div><div style="float:right; padding:4px 2px 0px 0px;"><script language='JavaScript' type='text/javascript' src='http://css.beiei.com/lasu-chat.js'></script></div><div style="float:right; padding:1px 5px 2px 0px;"><font color="#ff0000"><strong>TEL：40<font style="border-right:solid 3px #ffffff">0</font>61<font style="border-right:solid 3px #ffffff">6</font>9600</font></strong> | </div></td>
    </tr>	
	<tr>
	  <td align="right" valign="top" style="padding-top:4px; border-right:solid 1px #eee5de; padding-right:4px; padding-bottom:8px;" >
	  <div id="business-data" style="width: 620px; height: 53px"></div>
	  </td>
	</tr>
  </table>
  <table width="800" height="24" border="0" cellpadding="0" cellspacing="0">
    <tr>
	   <td width="1px" bgcolor="#eee5de"></td>
	  <td width="1"></td>
      <td width="159" height="30" align="center" valign="middle" background="http://css.beiei.com/btn_industry.jpg"><a href="http://www.<?php echo WEBURLNEW;?>/" class="titlemenu1"><span style="letter-spacing:10px;" >网站首页</span></a></td>
      <td width="1"></td>
      <td width="159" align="center" valign="middle" background="http://css.beiei.com/btn_industry.jpg"><a href="http://www.<?php echo WEBURLNEW;?>/industries.html" class="<?php if($IOB==0) {?>titlemenu2<?php } else {?>titlemenu1<?php }?>"><span style="letter-spacing:10px; ">行业数据</span></a><?php if($IOB==0) {?><sup style="color:#FF0000"> here</sup><?php }?></td>
      <td width="1"></td>
      <td align="center" valign="middle" background="http://css.beiei.com/btn_industry.jpg"><a href="http://www.<?php echo WEBURLNEW;?>/region.html" class="titlemenu1"><span style="letter-spacing:10px; ">省市名录</span></a></td>
      <td width="1"></td>
      <td width="159" align="center" valign="middle" background="http://css.beiei.com/btn_industry.jpg"><a href="http://www.<?php echo WEBURLNEW;?>/buyers.html" class="<?php if($IOB==0) {?>titlemenu1<?php } else {?>titlemenu2<?php }?>"><span style="letter-spacing:10px; ">世界买家</span></a><?php if(!($IOB==0)) {?><sup style="color:#FF0000"> here</sup><?php }?></td> 
      <td width="1"></td>
      <td width="159" align="center" valign="middle" background="http://css.beiei.com/btn_industry.jpg"><a href="http://www.<?php echo WEBURLNEW;?>/international.html" class="titlemenu1"><span style="letter-spacing:10px; ">国际数据</span></a></td>
       <td width="1"></td>
	   <td width="1px" bgcolor="#eee5de"></td>
	 </tr>
  </table>
  <table width="800" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="1px" bgcolor="#eee5de"></td>
      <td><table width="798" border="0" cellpadding="0" cellspacing="0">
        <tr>
		  <td width="1"></td>
          <td>
		  <div id="international-buyers" style="width: 796px; height: 125px"></div>
		  </td>
		  <td width="1"></td>
        </tr>
		<tr><td width="1px" bgcolor="#eee5de"></td>
          <td bgcolor="#DFE4FF"></td>
		  <td width="1px" bgcolor="#eee5de"></td></tr>
      </table>
        <table width="798" border="0" cellspacing="0" cellpadding="0">
        <tr>
		 <td bgcolor="#ffffff" width="1"></td>
          <td width="170" valign="top">
		    <table width="100%" border="0" cellspacing="0" cellpadding="0">					  
					  <tr>
                <td align="left" valign="top" style="padding-left:8px;">
				  <div style="width:136px;border:solid 1px #F1F2F2;margin-top:9px;">
				  <div id="left1" style="width: 134px; height: 452px"></div>
				  </div>                       
				  <div style="width:136px;margin-top:10px; border:solid 1px #F1F1F2;">
				  <div id="left2" style="width: 134px; height: 377px"></div>				  						  
				  </div>
				 </td>
              </tr>  	  
                    
                  </table>
		  </td>         
          <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="18" class="ProductName"></td>
              </tr>
			  
			  <tr>
				<td class="Title"><h1 style="font-size:10pt; padding:0; margin:0;"><?php echo $ProductName;?></h1></td>
			  </tr>
			  <tr>
				<td class="TitleList2"><div style="float:left; padding-left:2px"><span style="margin-right:5px;"><img src="http://css.beiei.com/dot.jpg" style=" margin-bottom:1px;" width="8" height="8"></span> <?php echo $Price;?> <?php echo $SubName;?></div></td>
			  </tr>
			  <tr>
				<td style='padding:8px 0px 22px 0px;'><script language='JavaScript' type='text/javascript' src='http://css.beiei.com/lasu-view-data.js'></script></td>
			  </tr>
				<tr>
					<td style="padding-bottom:5px;border-left:dashed #DFE4FF 1px;border-right:dashed #DFE4FF 1px; border-top:dashed DFE4FF 1px;padding-left:10px; padding-top:10px;"><table cellpadding="0" cellspacing="0"><tr><td width="371px" style="font-weight:bolder; color:red;">7天 | <font style="color:#3935D5;">无条件退款</font></td>
					<td align="right"><a style="color:#3935D5;" href="http://www.beiei.com/sample.php">查看数据样本</a></td></tr></table></td>
			    </tr>
				<tr>
					<td style="color:#666666;border-left:dashed #DFE4FF 1px;border-right:dashed #DFE4FF 1px;border-bottom:dashed #DFE4FF 1px; padding-left:10px; padding-bottom:10px;">购买后，可不限次登入我方实时数据查看系统，浏览你所订购的名录，若您对数据有任何不满，可不予下载；我方将不问原因，即刻无条件退款。</td>
			    </tr>
              <tr>
                <td style="padding-top:27px; text-align:justify; color:#666666;"><?php echo $Content;?></td>
              </tr>
              <tr>
                <td  style="padding-top:20px; text-align:justify; color:#666666;"><?php echo $Soft;?></td>
              </tr>
			  <?php 
			  	if($id<8)
				{
					echo "<tr><td><font style='color:#FFFFFF; background-color:#DDDDDD;padding:2px 2px 2px 2px;font-weight:bolder;'>行业划分</font><div class='clear_world' style='padding-top:10px;'><ul style='margin-bottom:10px;'>";
				}
				if($IOB==1)  // 世界
				{	 
					echo ad_buyer_hangye("world",1);   // 广告产品推荐（一、二级行业）
					echo "</ul></div></td></tr>";	
					
					echo "<tr><td><font style='color:#FFFFFF; background-color:#DDDDDD;padding:2px 2px 2px 2px;font-weight:bolder;'>区域划分</font><div class='clear_world' style='padding-top:10px;'><ul style='margin-bottom:10px;'>";
					echo ad_buyer_quyu();   // 广告产品推荐（洲，国家）
				}			   	   
				else if($IOB==2)// 欧洲
				{		
					echo ad_buyer_hangye("european",1);  
				}
				else if($IOB==3)// 南美洲
				{
					echo ad_buyer_hangye("southamerica",1);  
				}
				else if($IOB==4)// 北美洲
				{
					echo ad_buyer_hangye("northamerica",1);  			
				}
				else if($IOB==5)//亚洲
				{	
					echo ad_buyer_hangye("asian",1);  				
				}
				else if($IOB==6)//非洲
				{
					echo ad_buyer_hangye("african",1);  									
				}
				else if($IOB==7)//大洋洲 
				{
					echo ad_buyer_hangye("oceanian",1);  		
				}
				if($id<8)
				{
					echo "</ul></div></td></tr>";	
					
					echo "<tr><td style='padding-top:5px; text-align:justify; color:#666666;'>".$endsoft."</td></tr>";
					
					// 查询英文广告变量
					$sql="SELECT * FROM oversea_keyword_country WHERE url='".$URL."'";
					$query=mysql_query($sql,$db);
					if(mysql_result($query,0,"url"))
					{
						$ensoft = str_replace("Export | Trade",mysql_result($query,0,"keyword")." | Export | Trade",$ensoft);
					}
					$ensoft = str_replace(":","<b>:</b>",$ensoft);
					echo "<tr><td style='padding-top:18px; color:#666666;'>".$ensoft."</td></tr>";
				}
			  ?>  
			  <tr>
					<td style="padding-top:18px; color:#575757"><table cellpadding='0' cellspacing='0'><tr><td style="color:#575757">■ 如果这不是您所需的名录，可点击</td><td style="padding-bottom:1px; padding-left:2px;"><script language="JavaScript" type="text/javascript" src="http://css.beiei.com/lasu-chat.js"></script></td><td style="color:#575757">。环球企业资料，中国公司名录，全</td></tr></table>球进口商数据，应有尽有；更可按行业及地区任意组合定制。■</td>
				</tr>
          </table> 
		  <table width="100%" height="50" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td>
			<div class="introducelink_new">
			  <?php 
				// 产品推荐
				echo "<div style='clear:both'></div><div class='floatlefts'><br><br><span class='product'>本类目关联产品推荐</span>";
											   
				echo "<span class='bigtitle'><a href='http://www.".WEBURLNEW."/buyers.html' style='font-weight:bolder;'>世界买家</a></span></div><div style='clear:both;'></div>";
				echo indexnum_newlist_oversea_rand($IOB,"");
				
				echo "<div style='clear:both;padding-top:1px;'><span class='bigtitleH'><a href='http://www.".WEBURLNEW."/industries.html' target='_blank' style='font-weight:bolder;'>行业数据</a></span></div><div style='clear:both'></div>";
				echo indexnum_newlist_industry_rand($IOB);
			  ?>
			</div>			</td>
          </tr>
        </table>
		<table width="100%" height="185" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td>			
			</td>
          </tr>
        </table>
		  </td>
          <td width="165" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
           <tr>
                  <td height="11"></td>
                </tr>
                <tr>
                  <td align="right" style="padding-right:7px;"><div style="width:136px;margin-bottom:2px; text-align:center; ">
				  <form name="form1" action="http://www.<?php echo WEBURLNEW;?>/Search.php" method="get" target="_blank">
				    <input name="key" type="text" style="height:20px; width:136px;font-size:12px;font-family:'宋体';color: #A0A0A0; border:solid 1px #97ABDF; text-align:left;" onFocus="if (this.value=='输入单个中文关键词检索') { this.value=''; }" onBlur="if (this.value=='') { this.value='输入单个中文关键词检索';}" value="输入单个中文关键词检索"  >
				    <a href="javascript:form1.submit();" class="searchbtn" style="padding-left:3px; color:blue;"><span style="letter-spacing:5px;">现在开始查询|G</span>O</a>	
				  </form>
				 </div>
				 <div style="width:136px;border:solid 1px #F1F2F2;">
				 <div id="buyers" style="width: 134px; height: 94px"></div>
				  </div></td>
                </tr>
                <tr>
                  <td align="right" style="padding-right:7px;"><div style="width:136px;margin-top:8px; border:solid 1px #F1F2F2;">
				  <div id="right1" style="width: 134px; height: 247px"></div>
				  </div>
				  <div style="width:136px; border:solid 1px #F1F2F2; margin-top:10px;">
				  <div id="right2" style="width: 134px; height: 452px"></div>
				  </div>
					<div style="height:185px"></div>
				  </td>
                </tr>
          </table></td>
        </tr>
      </table>
      </td>
      <td width="1px" bgcolor="#eee5de"></td>
    </tr>
  </table>
  <table width="800" height="6" border="0" cellpadding="0" cellspacing="0" >
    <tr>
	 <td width="1px" bgcolor="#eee5de"></td>
	 <td width="1"></td>
       <td bgcolor="#0000cc" width="796px"></td>
	  <td width="1"></td>
	  <td width="1px" bgcolor="#eee5de"></td>
    </tr>
  </table>
  <table width="800" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td style=" padding-left:1px; padding-top:3px; padding-bottom:3px; border-left:solid 1px #eee5de; border-bottom:solid 1px #eee5de;"><span style="font-family:'Times New Roman', Times, serif; color:#ff0000; font-weight:bold;">&copy; 2007-<?php echo date("Y"); ?> BEIEI</span> | <a href="http://www.beiei.com/copyright.html" class="toptitlemenu1">版权声明</a> | <a href="http://www.beiei.com/userguide.html" class="toptitlemenu1">使用条款</a> | <a href="http://www.beiei.com/legal.html" class="toptitlemenu1">书册印制·法律范畴</a></td>
      <td align="right" style="padding-top:3px; padding-right:1px; padding-bottom:3px; border-bottom:solid 1px #eee5de; border-right:solid 1px #eee5de;"><span style="color:#0000cc; font-family:'Times New Roman', Times, serif;">Partners</span> | 

	  <a href="http://www.acxiom.com/" class="toptitlemenu1"><span style="font-family:'Times New Roman', Times, serif">Acxiom</span></a>

	  <a href="http://www.dnb.com/us/" class="toptitlemenu1"><span style="font-family:'Times New Roman', Times, serif">D&B </span></a>

	  <a href="http://www.infousa.net/" class="toptitlemenu1"><span style="font-family:'Times New Roman', Times, serif">Infousa</span></a>&nbsp;|&nbsp;<a href="http://www.<?php echo WEBURLNEW;?>/sitemap.html" class="toptitlemenu1">网站地图</a></td>
    </tr>
	  </table>
</center>
<script src="http://css.beiei.com/swf-html5-load.js"></script>
</body>
</html>
