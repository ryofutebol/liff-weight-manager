# LIFF-WEIGHT-MANAGER

### ngrok接続
ngrokを使用する際は`docker-compose.yml`の下記内容のコメントアウトを削除する
```
#    ports:
#      - "8080:8080"
```
リバースプロキシを利用しているため、ポート番号が重複してしまうため