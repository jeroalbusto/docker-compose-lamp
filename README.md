# LAMP STACK construido con Docker Compose

![entorno-desarrollo](/contenedores/docker-compose-lamp/www/assets/images/entorno.png)

Un entorno de LAMP stack básico creado con Docker Compose. Consta de lo siguiente:

- PHP
- Apache
- MySQL
- phpMyAdmin
- Redis

A partir de ahora, tenemos varias versiones PHP diferentes. Utilice la versión de PHP adecuada según sea necesario:

- 5.4.x
- 5.6.x
- 7.1.x
- 7.2.x
- 7.3.x
- 7.4.x
- 8.0.x
- 8.1.x
- 8.2.x
- 8.3.x

## Instalacion

- clona este repositorio en tu compu
- configura el  .env
- ejecuta el comando `docker compose up -d`.

```bash
git clone 
cd docker-compose-lamp/
cp .env 
// modifica .env a tu gusto
docker compose up -d
// visita localhost
```
Tu LAMP  ya esta listo!! Puedes acceder por tu `http://localhost`.

