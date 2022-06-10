FROM node:alpine as node

WORKDIR /app

COPY package.json package-lock.json ./

RUN npm i

COPY public public

COPY resources resources

COPY webpack.mix.js tailwind.config.js ./

RUN npm run prod

FROM nginx:1.21.6-alpine

COPY .docker/nginx/conf.d/default.conf /etc/nginx/conf.d/default.conf

COPY --from=node /app/public /var/www/html/public
