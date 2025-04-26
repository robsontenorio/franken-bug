## Franken Bug

This is a reproduction repository for https://github.com/dunglas/frankenphp/issues/1530

- This is a fresh new Laravel project without any customization.
- It uses SQLITE by default.
- The route `http://localhost:8717/test` creates a random user on database.


## How to


Build the image.
```bash
cd .docker/
docker compose up --build
```

In **another** terminal, enter into the container.
```bash
cd .docker/
docker compose exec franken-bug zsh
```

**Inside the running container** build the PHP/JS dependencies.

```
composer build
```

Check the browser.
```bash
http://localhost:8717/test
```

Make a stress test from your host (not docker container).

```bash
# You could use other tool.
# This will quickly expose the issue.
# But, the issue also happens randomly on a low traffic website.

ab -c 50 -n 10000 http://localhost:8717/test/
```



