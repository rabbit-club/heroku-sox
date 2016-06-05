# 構築手順

```bash
heroku login
heroku create onews-sox --buildpack https://github.com/heroku/heroku-buildpack-multi
heroku config:add PATH=/app/.heroku/php/bin:/app/.heroku/php/sbin:/app/.heroku/php/bin:/app/.heroku/php/sbin:/app/.heroku/php/bin:/app/.heroku/php/sbin:/app/.heroku/php/bin:/usr/local/bin:/usr/bin:/bin:/app/vendor/bin:vendor/sox/bin:/app/vendor/sox/bin
git push heroku master
```
