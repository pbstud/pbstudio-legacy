pbstudio.mx
===========

## Dependencias

 * [composer][1]
 * [nodejs][2]
 * [yarn][3]

## Instalación

```
$ git clone git@bitbucket.org:jchr86/pbstudio-symfony.git
$ composer install
$ app/console doctrine:migrations:migrate
$ yarn install
$ yarn dev
```
[1]: https://getcomposer.org/
[2]: https://nodejs.org/es/
[3]: https://classic.yarnpkg.com/lang/en/docs/install/#debian-stable

## Cronjobs

### app:session:autoclosing

Cierre automático de las clases que ya pasarón su hora de inicio.

Regla de ejecución: Todos los días cada 30min

```
# */30 * * * *

$ app/console app:session:autoclosing
```

### app:transaction:checkexpiration

Marca como expiradas las transacciones y envia un mail de notificación al usuario.

Regla de ejecución: Todos los días a las 00:00

```
# 0 0 * * *

$ app/console app:transaction:checkexpiration
```
