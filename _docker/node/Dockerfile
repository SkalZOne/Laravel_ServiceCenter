FROM node:22

WORKDIR /var/www

CMD \[ -d "node_modules" \] && npm run dev -- --host || npm ci && npm run dev -- --host
