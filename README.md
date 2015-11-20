yii2-artdialog-v4
=================
yii2-artdialog-v4

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist hoter/yii2-artdialog-v4 "*"
```

or add

```
"hoter/yii2-artdialog-v4": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \hoter\artdialog\AutoloadExample::widget(); ?>```

```
var dialog = art.dialog({
    title: '欢迎',
    content: '欢迎使用artDialog对话框组件！',
    icon: 'succeed',
    follow: document.getElementById('btn2'),
    ok: function(){
        return false;
    },okVal: '确定',
      cancelVal: '关闭',
    cancel: function(){
   	console.log(123);
    },fixed:true,
    resize:true
```