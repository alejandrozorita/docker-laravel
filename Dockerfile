FROM debian:stretch

RUN apt-get update \
&& apt-get install -y \
git \
vim

COPY hola.txt /src/abc.txt