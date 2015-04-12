# Yii2-postgres
This component use [php PDO library](http://php.net/manual/en/book.pdo.php)

## Config

```
"components"=>[
  'pg'=>[
    'class'=>'\xezzus\yii\postgres\Connection',
    'servers'=>[
      'main'=>['host'=>'127.0.0.1','port'=>'6379','base'=>'name base','user'=>'name user','pass'=>'***']
    ]
  ]
]
```

# Example

```
Yii::$app->pg->shard('main')->query('select 1')->fetch();
```
