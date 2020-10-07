# use node image (latest version)
FROM node:alpine

# make 'app' dir to the cwd
WORKDIR /app

RUN apk update \
	&& npm install -g npm

CMD [ "/bin/sh" ]