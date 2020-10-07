FROM ruby:2.6

RUN apt-get update -qq && \
  apt-get install -y build-essential \
  libpq-dev \
  nodejs

ENV APP_ROOT /app
WORKDIR ${APP_ROOT}

COPY Gemfile ${APP_ROOT}/Gemfile
COPY Gemfile.lock ${APP_ROOT}/Gemfile.lock

RUN bundle install

# RUN rails new . --database=mysql

COPY ./config $APP_HOME/config

EXPOSE 3000