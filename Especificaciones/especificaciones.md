Especificaciones Sistema PB STUDIO

Una Lista de los programas y servicios necesarios para establecer el ambiente de desarrollo, incluyendo la versión utilizada.
Lenguaje(s) base en que se desarrolló el sitio: backend y frontend.: PHP 8.2, MySQL 8.0, node 20
Frameworks utilizados para el backend y frontend: Symfony 6.4, bootstrap 3.4
En el caso de Plugins, indicar la versión requerida:
- symfony/webpack-encore: "^4.0.0"
- gentelella: "^1.4.0",
- parsleyjs: "^2.9.2"
- jQuery-Smart-Wizard: "3.3.1"
- pnotify: "^3.0.0"
- remodal: "^1.1.1"
- select2: "^4.1.0-rc.0"
- summernote": "0.8.18"
Programas utilitarios usados para la compilación, mantenimiento y administración de dependencias, indicando la versión utilizada.
- yarn 1.22
- composer 2.7
Paquete con todos los elementos de desarrollo que componen el proyecto. Adjunto: pbstudio-symfony-b00ae93e058f.zip
Scripts Backend.
Scripts Frontend.
Plugins y librerías.
Incluir archivos de configuración.
Incluir archivos requeridos en el proyecto (dependencias, módulos de node o similares, librerías javascript, etc.).
Paquere "Dist" ó "Build" con los elementos necesarios para su despliegue y ejecución en producción: Adjunto: pb.tar.gz
Archivos HTML
Archivos CSS
Scripts Javascript, Typescript o similares.
Scripts PHP
Fonts
Imágenes, iconos, gráficos vectoriales o de otro tipo.
Videos
Otros recursos necesarios
Configuración de la base de datos.
Engine utilizado indicando versión en que se desplegó la aplicación: mysql Ver 14.14 Distrib 5.7.44
Scripts para creación de todos los elementos de la base de datos: Adjunto pb-studio-ddl.sql
Tablas e Indices
Relaciones entre tablas en caso que estén establecidas.
Restricciones adicionales
Valores por default que debe tener el engine: Collation: utf8mb3_general_ci
Settings que deben ajustarse: mysql> SET GLOBAL sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));
Requisitos para el despliegue y ejecución de la aplicación:
Descripción global de los elementos del proyecto que se van a desplegar.
CRONS que se deben crear.
0 0 * * * php bin/console app:transaction:checkexpiration --no-debug --env=prod 2>&1 >> var/log/transaction.checkexpiration.log
*/15 * * * * php bin/console app:session:autoclosing --no-debug --env=prod 2>&1 >> var/log/session.autoclosing.log
Otros elementos que deben configurarse en el servidor.
Ajuste de Fecha y horario: php.ini date.timezone => America/Mexico_City
... otros
Resumen de las operaciones a seguir para construir el proyecto.
Procedimiento para la creación de la versión de desarrollo y de la versión de producción.
Elementos que deben incluirse en el equipo de desarrollo.
Elementos que deben copiarse al servidor de producción.

1. Clonar el repositorio.
2. Instalar las dependencias con composer: $ composer install
3. Copiar el archivo "deploy.php.dist" -> "deploy.php"
4. Actualizar la configuración en deploy.php: repository -> git repository, host, remote user, deploy_path, branch.
5. Ejecutar el comando: php ./vendor/bin/dep deploy
10. Para ambiente de prod se debe de especificar en la configuración de nginx: fastcgi_param APP_ENV prod;
Requerimientos para el equipo cliente que va a ejecutar la aplicación en modo "Administrador".
- PHP 8.2 y las exensiones PHP: Ctype, iconv, PCRE, Session, SimpleXML, and Tokenizer;
Credenciales que se requieren en modo "Administrador". Ya cuentan con estas credenciales el personal de PB y ellos pueden crear nuevas credenciales con acceso de administrador.