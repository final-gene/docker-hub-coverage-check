FROM php:7.2-cli-alpine3.7

LABEL maintainer="frank.giesecke@final-gene.de"

COPY coverage-check /usr/local/bin/
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh

WORKDIR /app

ENTRYPOINT ["/usr/local/bin/docker-entrypoint.sh"]

CMD [""]
