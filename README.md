Paginator
=========

zf2 module overrides Zend\Paginator\Paginator to allow to use setTotalItemCount()


-----
Set up


Install using composer.
---

``` xml
    "require": {
        "wormhit/Paginator": "*"
    },
    "repositories": [
        {
            "type": "git",
            "url":  "https://github.com/wormhit/Paginator.git"
        }
    ]
```

```sh
php composer.phar update
```


application.config
---

``` php

return array(
    'modules' => array(
        //'...',
        'Paginator',
    ),
    //...
);

```


Use it
----


``` php

$totalItemCount = $this->FOUND_ROWS(); // implement this

$paginator = new Paginator(new PaginatorIterator($result));
$paginator->setTotalItemCount($totalItemCount)

```
