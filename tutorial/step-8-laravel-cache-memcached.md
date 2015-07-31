#Laravel内置Cache配置Memcached

配置Laravel内置Cache框架，配置memcached作为数据存储服务器

##配置

###1.安装php扩展 ***php5-memcached***

```bash
    apt-get install php5-memcached
```
###2. **.env** 环境变量文件配置
```php
    CACHE_DRIVER=memcached
```
###3. install memcached-server
```
    apt-get install memcached
```

###4.In your Controller [Demo](app\Http\Controllers\CacheController.php):
```js
class CacheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        if(!Cache::has('cachetest')){///check exists?
          //set
            Cache::put('cachetest','Cache Test of Laravel-5-Starter',10);
        }

        $data=array(
            'key' => 'cachetest',
            'value' => Cache::get('cachetest')//get
        );
        Session::put('message','Hello');
        return view('cache')->with($data);
    }
}
```

##依赖
    php5-memcached
    laravel/installer=~1.1

<br/>

##欢迎反馈 [followtheart](https://github.com/followtheart)
