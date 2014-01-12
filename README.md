# Documentación Práctica 3: Diseño de máquinas virtuales

## Juan Antonio Pérez Maldonado

## Licencia de la aplicación: GPLv3


### Explicación de la práctica

En la asignatura se ha visto como crear almacenamiento virtual y máquinas virtuales completas. Lo importante en una máquina virtual, desde el punto de vista de un devops, es que esté adaptada a la tarea a la que se dedica. En un entorno de desarrollo de software tendremos una máquina que se encargue de testear la aplicaciones, otra para desarrollo, una última para producción. Todas se pueden virtualizar y cada una tendrá características diferentes. Desde el punto de vista de sistemas, una máquina debe usar los recursos necesarios para su funcionamiento correcto, y ni uno más, por lo que con la flexibilidad que se tiene para el uso de memoria, número de CPUs y almacenamiento se puede diseñar una máquina con los requisitos necesarios.

En esta práctica se hace énfasis en este proceso de diseño; los comandos necesarios para configurar una máquina se conocen, pero el que una configuración u otra sea la más adecuada depende de los conocimientos adquiridos en otras asignaturas: hace falta diseñar la carga de trabajo, probar diferentes configuraciones y justificar, finalmente, que la configuración elegida es la óptima (o al menos suficientemente buena) para una finalidad determinada.

Se pueden usar tanto máquinas virtuales locales como máquinas en la nube como una combinación de ambas si se considera necesario. De la misma forma, se puede usar sólo una, o bien varias máquinas virtuales si se ve que por temas de seguridad o cualquier otro es más conveniente.

### Realización de la práctica

####Introducción

Para esta práctica vamos a utilizar dos máquinas virtuales distintas creadas con VMWare, una con Ubuntu Server y otra con CentOS, y haremos varias pruebas sobre ellas cambiando configuraciones como la RAM asignada a cada máquina virtual o el número de núcleos de CPU que se usan.

El objetivo de estas pruebas es encontrar el punto óptimo en el que la máquina virtual ni se resienta realizando una prueba y que a su vez tampoco la realice con holgura, necesitamos la potencia únicamente necesaria para la prueba que se va a realizar.

La prueba se realizará con la aplicación web en PHP escogida para las dos anteriores prácticas, el Periódico Digital realizado en la asignatura Tecnologías Web, para ello usaremos el conocido Apache Benchmark, el cual hemos aprendido a usar en la asignatura de Ingeniería de Servidores, y haremos una prueba de unas 100 consultas con una concurrencia de 100 usuarios a la vez.

Recordar que para usar Apache Benchmark necesitamos tener instalado previamente apache2 y apache2-utils, si no, usar los siguientes comandos:

sudo apt-get install apache2

sudo apt-get install apache2-utils

El periódico lo copiaremos al directorio /var/www/ y para acceder a él pondremos en la barra de direcciones del navegador:

http://localhost/periodicoII/

Esta será la dirección que usaremos para el Apache Benchmark, si entramos en la dirección podemos visualizar el periódico:

![p3a]()

####Máquinas virtuales a estudiar

Estas son las máquinas virtuales que vamos a usar en el estudio:

- Primer caso:

Ubuntu Server 12.04

512MB RAM

Un núcleo de CPU

- Segundo caso:

Ubuntu Server 12.04

1024MB RAM

Un núcleo de CPU

- Tercer caso:

Ubuntu Server 12.04

1024MB RAM

Dos núcleos de CPU

- Cuarto caso:

CentOS 6.4

512MB RAM

Un núcleo de CPU

- Quinto caso:

CentOS 6.4
1024MB RAM
Un núcleo de CPU

- Sexto caso:

CentOS 6.4

1024MB RAM

Dos núcleos de CPU

####Prueba

Como se ha explicado antes, vamos a usar ab, Apache Benchmark, a la web mencionada en la introducción, con 1000 consultas con 100 usuarios a la vez mandando peticiones, introducimos el siguiente comando:

ab -n1000 -c100 http://localhost/periodicoII/

Nos fijaremos para esta prueba en:

- Time taken for test, que es el tiempo que se ha tardado en realizar el test. (Menor es mejor)
- Request per Second, que son las peticiones realizadas por segundo. (Mayor es mejor)
- Time per request que es el tiempo medio que el servidor ha necesitado para atender las peticiones concurrentes de los usuarios. (Menor es mejor)
- Transfer rate, que es la velocidad de transferencia. (Mayor es mejor)

####Resultados de la prueba

En los gráficos las barras en naranja son las de las máquinas Ubuntu Server y en azul las de las máquinas CentOS

![p3b]()

![p3c]()

![p3d]()

![p3e]()

![p3f]()

### Repositorio

https://github.com/jpm88/Practica3-IV

### Bibliografía


http://jj.github.io/IV/documentos/practicas/3.MV
