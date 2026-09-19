# PremiumPlas

Sitio web estático de PremiumPlas, empresa ecuatoriana de empaques para alimentos y delivery.

## Ejecutar localmente

```bash
python3 -m http.server 8000
```

Abre `http://localhost:8000`. No requiere instalación ni proceso de compilación.

## Estructura

- `index.html`: inicio
- `catalogo.html`: catálogo de 56 referencias con filtros, búsqueda y fichas de producto
- `nosotros.html`, `clientes.html`, `blog.html`, `contacto.html`: páginas informativas
- `assets/css/styles.css`: sistema visual compartido y responsive
- `assets/js/main.js`: navegación, filtros, animaciones y formulario

## Datos por confirmar antes de publicar

El teléfono, la dirección, los perfiles sociales y el dominio definitivo no estaban confirmados, por lo que el sitio no inventa esos datos. El formulario prepara un correo para `ventas@premiumplas.com`; cambia esa dirección si el buzón oficial es otro. El catálogo usa las 55 imágenes y las especificaciones de las tres fichas disponibles en `assets/images/products/`. La referencia Ecopack 2.20 figura en la ficha, pero no tiene una imagen asociada en la carpeta.
