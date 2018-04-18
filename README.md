# SINF
Repositorio Trabajo asignatura SINF

TITULO: 
Información extra para el alquiler de Casa en Valencia


OBJETIVO:
Mejorar el acercamiento de la información al ciudadano a la hora de alquilar un piso

VISION:
Crear una web con mapa interactivo que proporcione información extra sobre datos abiertos de la Ciudad de Valencia y pisos en alquiler de Idelista. 


PROBLEMAS A RESOLVER

 - Recogida de los datos de los pisos.
 - Recogida de los datos de FALLAS.
 - Recogida de los datos de DEMOGRAFIA.
 - Recogida de los datos de ambiente.
 - Buscar una aplicación que me permita reproducir los datos obtenidos y realizar un mapa interactivo. 

METODOLOGIA:

La metodología seguida es la siguiente:
1. DEFINE - definición de las necesidades
2. FIND - Búsqueda de datos necesarios
3. GET - Conseguir esos datos
4. VERIFY - Verificar estructura de los datos
5. CLEAN - Limpiar datos para nuestras necesidades
6. INTEGRACIÓN - Añadirlo a la web


DESCRIPCION DE LA SOLUCIÓN:

1º Fase: RECOGIDA DE DATOS DE LIS PISOS DE IDEALISTA
- Gracias al método de captura de datos WebScrapping de la libreria de BeautifulShoup de python, he creado un script llamado idealista.py que me ha permitido obtener en formato JSON los datos de esta web. 

2º Fase: Montar web en Wordpress
- He montado una web sencillita en wordpress y he editado un template para crear permitir que la página ocupe el 100 del espacio. Además, le he eliminado menus, footers y otros elementos. 

3º Fase: RECOGIDA y LIMPIEZA DE DATOS
- Gracias a la metodología empleada, he obtendio datos del ambiente de valencia, las fallas y demogtafía. 


4º FASE: introducirlo en la web.
- Todo los datos los he añadido mapa. Este mapa, que he integrado en la web, se puede ver directamente desde la web de la aplicación. link: https://goo.gl/eVhybV


RESULTADOS:
Tenemos un mapa interactivo dividido en 4 capas. 

1. Pisos de idealista:
      
      - Psiso: Puntos en el mapa donde se encuentran todos los pisos
      - Mapa Calor Pisos: Un mapa de calor donde podemos ver los puntos donde más se alquila
      - Idealista Agrupació: Un mapa con contador por proximidad de pisos en alquiler
      
2. Fallas
      
      - Fallas:Posición de todas las fallas
      - Calles cortadas: Marca todas las calles que se cortan durante las fallas.
      
3- Ambiente:

      - Árboles especiales: Arboles y palmeras con información
      - Contaminación: Puestos de lectura del aire
      
4. Demografia:

      - Distritos: Marca los distritos de la ciudad
      - Población:
              - Densidad por distrito.
              - Población por distrito.
      - Estudios:
              - Master: Gente que ha realizado un Master por distrito.
              - Bachillerato: Gente que ha realizado Bachillerato por distrito.
              - Doctorado: Gente que ha realizado un Doctorado por distrito.
              - Primaria: Gente que ha realizado Primaria por distrito.
              - FP: Gente que ha realizado FP por distrito.
              - ESO: Gente que ha realizado la ESO por distrito.
              - Universitarios: Gente que ha realizado un estudio universitario por distrito.
              - Analfabetos y sin estudios: Gente sin estudios o analfabetos por distrito.
      - Estado Civil por distritos
              - Casados.
              - Solteros.
              - Viudos.
              - Separados.
              - Divorciados.
      - Actividad Económica:
              - Trabajando.
              - Estudiando.
              - Pensionistas.


TERMINOS DE USO

El contenido de este repositorio está sujeto a la licencia GNU General Public License v3.0.
