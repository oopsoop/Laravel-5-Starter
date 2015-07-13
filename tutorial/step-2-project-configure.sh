#复制。env文件
cp .env.example .env

#新建创建数据库
mysql -hlocalhost -p123456 -uroot -e"create database followtheart"

php artisan migrate

#生成key
php artisan key:generate

#修改文件权限
chown -R www-data *

