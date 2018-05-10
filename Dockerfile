FROM trafex/alpine-nginx-php7

RUN apk --update add git
COPY initrepo.sh /initrepo.sh
CMD /initrepo.sh
