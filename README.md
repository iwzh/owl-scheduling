# Owl Admin Scheduling Extension
 **一个在 owl-admin 中 显示 laravel 任务调度的包**

> 修改 laravel admin 的 scheduling 扩展，使其支持owl admin
> https://github.com/laravel-admin-extensions/scheduling


## Installation
```bash
composer require iwzh/owl_scheduling
```


Try to add a scheduling task in **app/Console/Kernel.php** like this:

```php 

class Kernel extends ConsoleKernel
{
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('inspire')->everyTenMinutes();

        $schedule->command('route:list')->dailyAt('02:00');
    }
}
```
![img.png](img.png)
