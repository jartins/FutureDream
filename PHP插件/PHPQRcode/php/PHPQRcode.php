<?php

include 'phpqrcode/qrlib.php';

// QRcode::png('abc','abc.jpg');// 生成 abc 并且生成图片
// png($text, $是否为图片文件 = false, $容错级别 = QR_ECLEVEL_L, $尺寸 = 3, $边距 = 4, $保存并打印=false) 
// QRcode::png('abc',false,QR_ECLEVEL_L,10,0,false);
// QRcode::png('abc','abc.jpg',QR_ECLEVEL_L,10,0,true);



// 生成电子名片
$content = 'BEGIN:VCARD'."\n";
$content .= 'VERSION:2.1'."\n";
$content .= 'N:杨'."\n";			// 姓
$content .= 'FN:迎隆'."\n";		// 名
$content .= 'ORG:北京百度研发部'."\n";	// 公司地址
$content .= 'TEL;WORK;VOICE:17600128663'."\n";// 工作电话
$content .= 'TEL;HOME;VOICE:010-8100010'."\n";// 家里电话
$content .= 'TEL;TYPE=cell:17600128663'."\n"; // 移动电话
$content .= 'ADR;HOME:;;德外大街10;西城区;北京市;433330;中国'."\n";// 家庭住址
$content .= 'EMAIL:ceo@alivl.com'."\n";	// 邮箱
$content .= 'URL:http://alivl.com';		// 网址
$content .= 'END:VCARD';

QRcode::png($content);
