<!doctype html>
<html>
<head>
	<title>抽奖程序</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<style>
		.lottery-unit.active{background:#444;}
	</style>
</head>
<body>
	<table border="0" cellpadding="0" cellspacing="0" id="lottery-warp">
		<tr>
			<td class="lottery-unit lottery-unit-1" id="reward_0"><img src="http://img2.ciurl.cn/flashsale/upload/comdpic/20160603/org/1464938614_4824.jpg_a_80x80"></td>
			<td class="lottery-unit lottery-unit-2" id="reward_1"><img src="http://img2.ciurl.cn/flashsale/upload/comdpic/20160603/org/1464938614_4824.jpg_a_80x80"></td>
			<td class="lottery-unit lottery-unit-3" id="reward_2"><img src="http://img2.ciurl.cn/flashsale/upload/comdpic/20160603/org/1464938614_4824.jpg_a_80x80"></td>
            <td class="lottery-unit lottery-unit-4" id="reward_3"><img src="http://img2.ciurl.cn/flashsale/upload/comdpic/20160603/org/1464938614_4824.jpg_a_80x80"></td>
		</tr>
		<tr>
			<td class="lottery-unit lottery-unit-12" id="reward_11"><img src="http://img2.ciurl.cn/flashsale/upload/comdpic/20160603/org/1464938614_4824.jpg_a_80x80"></td>
			<td colspan="2" rowspan="2" class="td_a"><a href="#"></a>
				<input type="button" id="lottery_confirm" value="抽奖"></td>
			<td class="lottery-unit lottery-unit-5" id="reward_4"><img src="http://img2.ciurl.cn/flashsale/upload/comdpic/20160603/org/1464938614_4824.jpg_a_80x80"></td>
		</tr>
		<tr>
			<td class="lottery-unit lottery-unit-11" id="reward_10"><img src="http://img2.ciurl.cn/flashsale/upload/comdpic/20160603/org/1464938614_4824.jpg_a_80x80"></td>
			<td class="lottery-unit lottery-unit-6" id="reward_5"><img src="http://img2.ciurl.cn/flashsale/upload/comdpic/20160603/org/1464938614_4824.jpg_a_80x80"></td>
		</tr>
        <tr>
			<td class="lottery-unit lottery-unit-10" id="reward_9"><img src="http://img2.ciurl.cn/flashsale/upload/comdpic/20160603/org/1464938614_4824.jpg_a_80x80"></td>
			<td class="lottery-unit lottery-unit-9" id="reward_8"><img src="http://img2.ciurl.cn/flashsale/upload/comdpic/20160603/org/1464938614_4824.jpg_a_80x80"></td>
			<td class="lottery-unit lottery-unit-8" id="reward_7"><img src="http://img2.ciurl.cn/flashsale/upload/comdpic/20160603/org/1464938614_4824.jpg_a_80x80"></td>
            <td class="lottery-unit lottery-unit-7" id="reward_6"><img src="http://img2.ciurl.cn/flashsale/upload/comdpic/20160603/org/1464938614_4824.jpg_a_80x80"></td>
		</tr>
	</table>

<script src="js/jquery.js"></script>
<script src="js/lottery.js"></script>
<script>
$("#lottery_confirm").click(function() {
	$('#lottery-warp').lottery({
		prize:2,
		item: 'lottery-unit',
		done: function(){
			alert('恭喜您中奖了！');
		}
	});
});
</script>
</body>
</html>
