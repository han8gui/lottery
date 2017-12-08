$.fn.extend({
    lottery: function(conf) {
        var def = {
            prize: 0,//中奖（从1开始）
            active: 'active',//当前奖品
            item: 'lottery-unit', //奖品的公共类名
            done: function() {}   // 抽奖结束后的回调函数
        };
        if (typeof conf.prize === "undefined") {
            return
        }

        def = $.extend({}, def, conf);

        var lotteryControl = {
            prize: def.prize,
            active: def.active,//
            item: def.item,
            done: def.done,
            current_pos: 1,
            slowest: 800,
            speed_cur: 0,
            current_step: 0,
            element: this.selector,
            roll: function() {
                var self = this;
                if (self.prize <= 0) {
                    console.log('prize必须大于0');
                    return false;
                }
                var length = $(self.element).find('.' + self.item).length;
                if (self.prize > length) {
                    console.log('prize必须小于等于' + length);
                    return false;
                }
                var is_stop = self.isStop(self.speed_cur, self.slowest, self.current_pos, self.prize);
                if (is_stop) {
                    this.done();
                    return this;
                }

                self.current_pos = self.getNextActive(length, self.current_pos);
                self.current_step ++;
                self.setActive($(self.element).find('.' + self.item), self.active, '.' + self.item + '-' + self.current_pos);

                self.speed_cur = this.getTimeGap(self.speed_cur, self.slowest, length, self.current_step, self.prize);
                setTimeout(function(){
                    self.roll();
                }, self.speed_cur);
            },
            isStop: function(speed_cur, slowest, current_pos, prize)
            {
                //速度最小 & 当前奖品
                return (speed_cur == slowest && current_pos == prize);
            },
            getNextActive: function(length, current_pos)
            {
                current_pos = current_pos >= length ? 1 : current_pos + 1;
                return current_pos;
            },
            //获取时间间隔
            getTimeGap: function(speed_cur, slowest, length, step, prize)
            {
                //计算速度，下面的参数全靠测试看效果

                //如果在1/3圈以内就可以达到最大速度，直接边为最大速度
                var temp_step = step;
                var temp_speed_cur = speed_cur;
                var i = 1;
                while(i <= (length / 3)) {
                    temp_speed_cur = Math.min(slowest, temp_speed_cur + (temp_step - length) * 1.2);
                    i++;
                }

                if (temp_speed_cur >= slowest) {
                    speed_cur = slowest;//如果在1/3圈以内就可以达到最大速度，直接边为最大速度
                } else if (step >= 3 * length + prize) {
                    speed_cur = Math.min(slowest, speed_cur + (step - length) * 1.2); //加速度增大
                } else if (step >= 2 * length + prize + (length / 2)) {
                    speed_cur = Math.min(slowest, speed_cur + step);//加速
                } else {
                    speed_cur = Math.min(slowest, speed_cur + 2);//前两圈半，间隔定量递增
                }

                return speed_cur;
            },
            setActive: function(element, active, add_class)
            {
                $(element).removeClass(active);
                $(add_class).addClass(active);
            }
        };

        lotteryControl.roll();

        return this;
    }
});
