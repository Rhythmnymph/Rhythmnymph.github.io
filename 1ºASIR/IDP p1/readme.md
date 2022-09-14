# PDC Winserver
~~~
Alumno: Aday Lorenzo Martín
~~~
## 1. Instalar el controlador de dominio:
- En primer lugar administramos el servidor para instalar el controlador de dominio

![](img/01.png)
- Configuramos los servicios de Active Directory

![](img/02.png)
- Comprobamos que nuestro equipo se ha añadido correctamente

![](img/03.png)

## 2. Usuarios y equipos del dominio:
- Creamos los grupos y usuarios

![](img/04.png)


- Comprobamos la conexión con el dominio desde cliente 1

![](img/05.png)
- Ahora desde cliente 2

![](img/06.png)
- Unimos al cliente 2 al dominio 

![](img/07.png)
- Unimos al cliente 1 al dominio

![](img/08.png)
- Comprobamos que se han añadido los cliente correctamente

![](img/09.png)
- Comprobamos que entramos como obiwan y que no es un usuario local

![](img/10.png)
- Comprobamos que entramos como maul y que no es un usuario local

![](img/11.png)
## 3. Perfiles móviles
- Creamos un segundo disco de 1GB llamado extra

![](img/12.png)
- Creamos la carpeta para los perfiles y asignamos permisos de control total a los usuarios del dominio

![](img/13.png)
- Asignamos permisos al recurso compartido de red

![](img/14.png)
- Configuramos las rutas de perfil de los usuarios. 

![](img/15.png)
- Como se ve en la captura anterior, intenté usar la variable &#36;username&#36; pero como no se me veían las carpetas correspondientes en la carpeta perfiles, decidí escribir una ruta para cada usuario. El resultado fue el que se ve en la siguiente captura.

![](img/16.png)
- Cuando me dispuse a revisar si el perfil era móvil, me encontré con que estaba configurado como un perfil local pero que además no podía cambiarlo. Es por esto que no pude avanzar de aquí.

![](img/17.png)
