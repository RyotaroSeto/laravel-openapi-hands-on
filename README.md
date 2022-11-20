#### 起動

```
make init
```

[http://localhost/](http://localhost/) にアクセス

#### API実行(curl)

```
$ curl http://localhost/api/status
$ curl -XPOST http://localhost/api/check
```

#### テスト実行

```
$ docker-compose exec laravel-openapi-test_app php artisan test
```
