# Web Programming Course Project

A simple shoe store website

## Usage

### Requirement

- Docker, Docker Compose

### Generate environment file

```
docker compose run --rm gen-env
```

### Build tailwindcss

```
docker compose run --rm build-css
```

### Start the project

```
docker compose up -d
```

## Development

### Environment

- Git
- EditorConfig
- Docker, Docker compose

### Start dev enviroment

```
docker compose up -d
docker compose run --rm build-css npm run dev
```

## Reference

### Docker

- https://hub.docker.com/_/nginx
- https://hub.docker.com/_/php
- https://hub.docker.com/_/mysql
- https://hub.docker.com/_/python
- https://hub.docker.com/_/node
- https://docs.docker.com/compose/compose-file/compose-file-v3/

### Nginx

- https://www.nginx.com/resources/wiki/start/topics/examples/full/
- https://nginx.org/en/docs/

### Tailwindcss

- https://tailwindcss.com/docs/installation

### jQuery

- https://releases.jquery.com/

### Nodejs npm

- https://docs.npmjs.com/cli/v9/commands
