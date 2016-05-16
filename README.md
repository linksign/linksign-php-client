# 运行环境要求
PHP 5.3.3 or higher [http://www.php.net/].

# 安装
##编译
You can install the bindings via Composer. Run the following command:
```
composer require linksign/linksign-php-client

To use the bindings, use Composer's autoload:
```
require_once(__DIR__ . '/vendor/autoload.php');

###手动安装

If you do not wish to use Composer, you can download the latest release. Then, to use the bindings, include the init.php file.
```
require_once('/path/to/linksign-esign-client/autoload.php');

###依赖
This client has the following external dependencies:

*PHP Curl extension [http://www.php.net/manual/en/intro.curl.php]
*PHP JSON extension [http://php.net/manual/en/book.json.php]
*PHP ext-mbstring extension
