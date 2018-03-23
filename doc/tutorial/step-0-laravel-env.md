# Laravel 环境配置

### 0.安装php5,apache2
```shell
sudo apt-get install php5 php5-cli apache2 -y
```

### 1.安装[composer](https://github.com/composer/composer)
```shell
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
```
### 2.Laravel 配置
```bash
composer global require "laravel/installer=~1.1"
//加入环境变量
echo 'export PATH=$PATH:"~/.composer/vendor/bin/"' >> ~/.bashrc
source ~/.bashrc
```

<hr/>
## [参考](https://github.com/followtheart/installer.git)
