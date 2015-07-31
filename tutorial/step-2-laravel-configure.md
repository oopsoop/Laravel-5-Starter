#Laravel 项目配置(***不是运行环境配置***)

##1.复制***.env***文件
```
cp .env.example .env
```

##2.创建数据库
```
mysql -hlocalhost -p123456 -uroot -e"create database followtheart"
```
##3.数据表迁移
```
php artisan migrate
```
##4.生成key
```
php artisan key:generate
```
##5.修改文件权限
```
chown -R www-data *
```
##6.运行
```shell
php artisan serve --host localhost --port 81
```
