---
layout: blog
road: true
background: blue
background-image: http://ot1cc1u9t.bkt.clouddn.com/17-7-15/48174506.jpg
title:  "Linux下改变Python版本"
date:   2018-09-23 23:13:54
category: 计算机科学
tags:
- Linux
- Git
- Python3


---
 
# 知识点
这份博客写的是我在Linux下学习Python时候搭建环境遇到的问题  
记录点：Git远程仓库，Python3.7环境搭建，解决push问题

# Git远程仓库
博主的本地环境是基于Ubuntu的背景，使用putty登陆的命令行模式  
## 安装Git工具
```
apt-get install git
```
## 创建本地仓库
先有本地仓库在有远程仓库，要在本地工作目录下创建一个文件夹作为与远程关联的地方  
```
mkdir repo
git init	//初始化仓库
```
## 远程仓库部分
远程仓库有两种方式：一种是通过https的方式进行访问，另外一种是通过SSH的方式进行访问  
两种加密方式的不同决定了不同的动作，如果通过https协议进行远程连接是需要每次输入账号和密码才可以的，这样对于运作是非常麻烦的，所以一般会通过以SSH的方式进行连接  
### 生成rsa密钥
```
ssh-keygen -t rsa -C "@"	//@是你的电子邮箱
```
在linux端，我是以root用户运行的，所以生成的密钥在~目录中的.ssh里面的ras.pub，将密钥的内容copy到github的ssh中，增加一条ssh密钥

### 远程仓库的命令
```
git remote add origin git@github.com:diqiu11/Python3.git	//添加远程仓库命令，其中diqiu11是github账户，origin是你给远程仓库联系的一个别称
git remote -v //查看本地仓库的远程联系有多少条
git remote rm '远程的名字'	//删除此远程联系
```

## push问题
我在push的时候碰到的一个问题  
报错：  
```
error: failed to push some refs to 'git@github.com:diqiu11/python.git' 
hint: Updates were rejected because the remote contains work that you do 
hint: not have locally. This is usually caused by another repository pushing 
hint: to the same ref. You may wan
```
解决：  
问题是因为没有将远程仓库自动生成的README文件同步到本地
```
git pull --rebase 'origin' master
```

# Python2到Python3
背景，博主的linux自带了python2.7的版本，但是在2020年python官方将不再支持2.7版本的python，所以博主以前学的Python2都喂狗了吗？  
为了跟上计算机的发展潮流，博主马不停蹄的将linux云主机上的python2换成python3了
## 安装需要的软件和工具
需要用到make，gcc，g++和python3.7
```
apt-get install make gcc g++	//安装了则不用
wget https://www.python.org/ftp/python/3.7.0/Python-3.7.0.tgz	//放到自己创建的工具目录里
```
## 解编译安装
```
tar -xf Python-3.7.0.tgz
cd Python-3.7.0
./configure
make
make install
```
在解编译的过程中需要些时间

## 改变软连接
python2在linux上只是作为一个默认运行的软连接，我们改掉它就好了  

```
which python2	//查看python2的位置
cd /usr/bin/
rm -f python2
mv python python2.7.ori		//移除软连接
ln -s python2.7 python2
ln -s /usr/local/bin/python3 /usr/bin/python
python -v 	//查看python运行版本
```
