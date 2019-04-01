---
layout: blog
road: true
background: purple
background-image: http://ot1cc1u9t.bkt.clouddn.com/17-7-15/43335546.jpg
title:  "路由控制"
date:   2019-04-01
category: 交换路由
tags:
- 路由协议
- RIP
- OSPF
- 合并
---
 

## 制造路由环路和防止路由环路
![实验一](https://github.com/diqiu11/digongzi.github.io/raw/master/style/images/router-manager.PNG)  
基于ospf和rip的优先级和合并的错误
### 制造路由环路
在R2上将OSPF引入到RIP中，在R5上将RIP引入到OSPF中  
[R2]rip   
[R2-rip-1]import-route ospf  
[R2-rip-1]quit  
[R5]ospf 1  
[R5-ospf-1]import-route rip  
[R5-rip-1]quit  
由于RIP的路由优先级比OSPF外部路由的优先级高，线路速率的优先级。

### 防止路由环路

[R5]acl number 2001  
[R5-acl-basic-2001]rule 0 permit source 10.1.4.0 0.0.0.255 //配置策略  
[R5-acl-basic-2001]quit  
[R5]route-policy add_tag permit node 10  
[R5-route-policy]if-match acl 2001  
[R5-route-policy]apply tag 100 //打上标签  
[R5-route-policy]quit  
[R5]route-policy add_tag permit node 20  
[R5-route-policy]quit  




