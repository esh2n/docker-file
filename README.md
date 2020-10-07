<h1 align="center">Laravel Vue w/ Docker 👋</h1>

> Docker compose file

## 👍 Usage

```sh
// start containers
$ docker-compose build

// enter container's bash
$ docker-compose exec app bash

// just started
$ composer create-project --prefer-dist "laravel/laravel=6.8.*" app
```

~~~.env
.env
  DB_CONNECTION=mysql
  DB_HOST=db
  DB_PORT=3306
  DB_DATABASE=db_name(default:grave)
  DB_USERNAME=db_user(default:shunya)
  DB_PASSWORD=db_password(default:9283)

  APP_URL=http://localhost:8000
~~~


~~~sh
$ exit
$ docker-compose down
$ docker-compose up -d
~~~

~~~package.json
package.json
  "sass-loader": "^7.1.0",
  "vue": "^2.6.11",
  "vue-template-compiler": "^2.6.11"
~~~

## 👤 Author

shunyaendoh1215

- GitHub [shunyaendoh1215](https://github.com/shunyaendoh1215)

## 📝 License

Copyright © 2020 [shunyaendoh1215](https://github.com/shunyaendoh1215).<br />
This project is MIT licensed.

<p align="center">
  <img src="https://img.shields.io/twitter/url?style=social&url=https%3A%2F%2Fgithub.com%2Fshunyaendoh1215%2Fmarkup-template">
</p>

---