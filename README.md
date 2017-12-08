# 抽奖插件

演示地址：https://han8gui.github.io/lottery/

使用方法：

```
lottery.lottery({
  selector:     '#lottery',
  width:        4,
  height:       4,
  index:        0,    // 初始位置
  initSpeed:    500,  // 初始转动速度
  // upStep:       50,   // 加速滚动步长
  // upMax:        50,   // 速度上限
  // downStep:     30,   // 减速滚动步长
  // downMax:      500,  // 减速上限
  // waiting:      5000, // 匀速转动时长
  beforeRoll: function () { // 重写滚动前事件：beforeRoll
    // console.log(this);
    // alert(1);
  },
  beforeDown: function () { // 重写减速前事件：beforeDown
    // console.log(this);
    // alert(1);
  },
  aim: function () { // 重写计算中奖号的方法：aim
    // console.log(this);
    // this.options.target = 11;
  }
});
```
