
FROM --platform=linux/amd64 mysql:5.7

ENV MYSQL_DATABASE=emergency \
    MYSQL_ROOT_PASSWORD=admin123 \
    MYSQL_USER=makara \
    MYSQL_PASSWORD=makara123

COPY ./init.sql /docker-entrypoint-initdb.d/init.sql
    