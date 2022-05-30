# Coverage check

This is a image to check the coverage given by a clover XML file.

This image provides a script based on https://github.com/michaelmoussa/php-coverage-checker.

## How to use this image
For analyzing the coverage you can run the following.

```bash
$ docker run \
    --rm \
    --volume "$(pwd)":/app \
    --workdir /app \
    finalgene/coverage-check clover.xml 100.0
```

## Quick reference
* **Where to get help:**
[the Docker Community Forums](https://forums.docker.com), [the Docker Community Slack](https://blog.docker.com/2016/11/introducing-docker-community-directory-docker-community-slack), or [Stack Overflow](https://stackoverflow.com/search?tab=newest&q=docker)

* **Where to file issues:**
https://github.com/finalgene/docker-hub-coverage-check/issues

* **Maintained by:**
[The final gene Team](https://github.com/finalgene)

* **Source of this description:**
[Repository README.md](https://github.com/finalgene/docker-hub-coverage-check/blob/master/README.md)
