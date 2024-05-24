FROM node:16

WORKDIR /app

COPY package.json .
RUN npm install -g @vue/cli
RUN npm install

COPY . .

EXPOSE 8080

CMD ["sh", "entrypoint.sh"]
