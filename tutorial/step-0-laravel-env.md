#Laravel 环境配置

###1.安装[composer](https://github.com/composer/composer)
```shell
sudo apt-get install php5
curl -sS https://getcomposer.org/installer | php
```
###2.Laravel 配置
```bash
sh composer.sh
composer global require "laravel/installer=~1.1"

 //加入环境变量
echo 'export PATH=$PATH:"~/.composer/vendor/bin/"' >> /etc/profile
sh /etc/profile
```

<hr/>
##[参考](https://github.com/followtheart/installer.git)
