FROM node:alpine
WORKDIR /app
RUN apk update && \
  npm install -g @vue/cli
RUN yarn install
EXPOSE 3000