<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
<META http-equiv="X-UA-Compatible" content="IE=8">
<TITLE>Generate Certificate of Completion</TITLE>
<STYLE type="text/css">

body {margin-top: 30px;margin-left: 0px;}

.dclr {clear:both;float:none;height:1px;margin:0px;padding:0px;overflow:hidden;}

.ft0{font: 18px 'Times New Roman';color: #2a2528;line-height: 20px;}
.ft1{font: 14px 'Times New Roman';color: #2a2528;line-height: 16px;}
.ft2{font: 21px 'Times New Roman';color: #2a2528;line-height: 23px;}
.ft3{font: 14px 'Times New Roman';line-height: 16px;}
.ft4{font: 14px 'Times New Roman';color: #555253;line-height: 18px;}
.ft5{font: 14px 'Times New Roman';color: #2a2528;line-height: 18px;}
.ft6{font: bold 14px 'Times New Roman';color: #2a2528;line-height: 17px;}
.ft7{font: 1px 'Times New Roman';line-height: 1px;}
.ft8{font: 16px 'Times';line-height: 19px;}

.p0{text-align: center;padding-left: 0px;margin-top: 0px;margin-bottom: 0px;}
.p1{text-align: center;padding-right: 10px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p2{text-align: center;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p3{text-align: center;padding-right: 4px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p4{text-align: center;padding-left: 0px;margin-top: 28px;margin-bottom: 0px;}
.p5{text-align: center;padding-left: 0px;margin-top: 19px;margin-bottom: 0px;}
.p6{text-align: center;padding-right: 50px;margin-top: 51px;margin-bottom: 0px;}
.p7{text-align: center;padding-left: 0px;padding-right: 0px;margin-top: 33px;margin-bottom: 0px;}
.p8{text-align: center;padding-right: 0px;margin-top: 16px;margin-bottom: 0px;}
.p9{text-align: center;padding-left: 0px;margin-top: 12px;margin-bottom: 0px;}
.p10{text-align: center;padding-right: 0px;margin-top: 2px;margin-bottom: 0px;}
.p11{text-align: left; padding-left: 300px; margin-top: 0px;margin-bottom: 0px;}
.p12{text-align: right;padding-right: 0px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p13{text-align: center;padding-left: 0px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}


.td0{padding: 0px;margin: 0px;width: 93px;vertical-align: bottom;}
.td1{padding: 0px;margin: 0px;width: 69px;vertical-align: bottom;}
.td2{padding: 0px;margin: 0px;width: 111px;vertical-align: bottom;}
.td3{padding: 0px;margin: 0px;width: 305px;vertical-align: bottom;}
.td4{padding: 0px;margin: 0px;width: 67px;vertical-align: bottom;}

.tr0{height: 23px;}
.tr1{height: 36px;}
.tr2{height: 34px;}
.tr3{height: 18px;}


.t1{width: 273px;font: 14px 'Times New Roman';color: #2a2528;}
.t2{width: 372px;font: 14px 'Times New Roman';color: #2a2528;}

</STYLE>
</HEAD>

<BODY>
<DIV align="center">
<DIV class="dclr"></DIV>
<p class="p0 ft0">Generate A Certificate of Completion</p>

<br/><br/>
<form name="cert" method="POST" action="./cert.php">



<table cellpadding="0" cellspacing="10" align="center">

<tr>
<td class="p6 ft3">Name</td><td><input type="text" name="name"></td>
</tr>
<tr>
<td class="p6 ft3">Code #</td><td><input type="text" name="code"></td>
</tr>
<tr>
<td class="p6 ft3">Date</td><td><input type="text" name="date" value="<?php echo date('m-d-Y'); ?>"></td>
</tr>
<tr>
<td class="p6 ft3">Quantity Number</td><td><input type="text" name="quantity"></td>
</tr>
</table>
<br/>
<p class="p5 ft1">Save As:  <input type="radio" name="group1" value="zip" checked="true"> ZIP <input type="radio" name="group1" value="pdf"> PDF <input type="radio" name="group1" value="jpg"> JPG
<br /><br />

</div>


</DIV>


<div align="center">

<p class="p13 ft8"><input type="submit" name="send" value="Generate"></p>


</div>

</DIV>
</body>
</HTML>
