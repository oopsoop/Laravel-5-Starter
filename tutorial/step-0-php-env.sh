
#可参考https://github.com/followtheart/installer.git
#首先，安装composer
#https://github.com/composer/composer
sudo apt-get install php5
curl -sS https://getcomposer.org/installer | php

#然后安装laravel 5.1
#laravel 配置
sh composer.sh
composer global require "laravel/installer=~1.1"


echo 'export PATH=$PATH:"~/.composer/vendor/bin/"' >> /etc/profile

sh /etc/profile
