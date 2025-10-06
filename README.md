# 🧩 CRUD Rápido - Laboratorio 3

Proyecto desarrollado en **Laravel 10** como parte del **Laboratorio 3** de la asignatura *Diseño de Software / Ingeniería de Software*.

Este proyecto implementa un sistema **CRUD (Create, Read, Update, Delete)** simple, que permite gestionar registros en una base de datos MySQL utilizando las herramientas y convenciones del framework Laravel.

---

## 🚀 Características principales

- Creación, edición, actualización y eliminación de registros.
- Migraciones y modelos de base de datos con Eloquent ORM.
- Validación de formularios del lado del servidor.
- Vistas Blade organizadas en carpeta `/resources/views`.
- Interfaz sencilla y responsiva (Bootstrap / Tailwind según la configuración).
- Controladores estructurados bajo la arquitectura MVC.

---

## ⚙️ Requisitos del sistema

- PHP >= 8.1  
- Composer  
- MySQL / MariaDB  
- Laravel 10  
- WampServer, Laragon o XAMPP (opcional para entorno local)

---

## 🛠️ Instalación y configuración

1. Clona el repositorio:
   ```bash
   git clone https://github.com/happyyuumi/crud_rapido-Lab-3.git
   ```

2. Entra al proyecto:
   ```bash
   cd crud_rapido-Lab-3
   ```

3. Instala las dependencias:
   ```bash
   composer install
   ```

4. Copia el archivo de entorno:
   ```bash
   cp .env.example .env
   ```

5. Genera la clave de aplicación:
   ```bash
   php artisan key:generate
   ```

6. Configura tu base de datos en el archivo `.env`.

7. Ejecuta las migraciones:
   ```bash
   php artisan migrate
   ```

8. Inicia el servidor local:
   ```bash
   php artisan serve
   ```

---

## 📁 Estructura de carpetas principal

```
app/
 ├── Http/
 │   ├── Controllers/
 │   └── Models/
resources/
 ├── views/
 │   ├── create.blade.php
 │   ├── edit.blade.php
 │   ├── index.blade.php
 │   └── show.blade.php
database/
 ├── migrations/
 └── seeders/
```

---

## 👨‍💻 Autor

**Nombre:** Wanytchy Joseph  
**Universidad:** Universidad Tecnológica de Panamá (UTP)  
**Curso:** Laboratorio 3 - CRUD con Laravel  
**Profesor:** *(añade el nombre si es necesario)*  

---

## 🧾 Licencia

Este proyecto es de uso académico y está basado en el framework [Laravel](https://laravel.com) bajo licencia [MIT](https://opensource.org/licenses/MIT).
