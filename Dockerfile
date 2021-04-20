FROM php:7.4-cli-alpine3.13

LABEL maintainer="frank.giesecke@final-gene.de"

ENV COVERAGE_CHECK_VERSION=1.0.0

COPY coverage-check/coverage-check /usr/local/bin/coverage-check
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh

WORKDIR /app

ENTRYPOINT ["/usr/local/bin/docker-entrypoint.sh"]

CMD [""]
