# WordPress + Docker開発環境 サンプルコード
WordPressをDocker環境で実装するためのサンプル開発環境です。  
公開用として最小限のページ構成にし、コードの内容を変更している部分があります。  
また本来はリポジトリで管理するファイル・コード・プラグインなどを一部省いておりますので、実際の起動はできません。

## Languages / Environment
- EJS
- SCSS
- JavaScript
- PHP
- Docker
- MySQL
- ESLint
- Prettier
- webpack
- Node.js

## Install
```
$ npm i
```

## Development
```
$ npm start
```

## Build
```
$ npm run build
```

## Starting Docker Container
```
$ docker compose up -d
```

## Stopping Docker Container
```
$ docker compose down
```

## Initial installation for WordPress
```
$ npm start
$ docker compose up -d
$ docker exec -it sample（コンテナ名） /bin/bash
$ chmod +x /tmp/wp-install.sh
$ /tmp/wp-install.sh
```

## WordPress Admin
http://localhost:☓☓☓☓/wp/wp-login.php

## PHP Admin
http://localhost:☓☓☓☓
