### **Documentación Backend User Dashboard**
----------

**Proyect Kanban**
[Link to Proyect Kanban](https://github.com/users/carterror/projects/9)

**Proyect Frontend**
[Link to Proyect Frontend](https://github.com/carterror/user-dashboard-client)

Instructions for installation, configuration, and execution:

-----------
1. **Create environment:**
    ```bash
    cp .env.example .env
    ```

2. **Generate Security Key:**
    ```bash
    php artisan key:generate
    ```

3. **Install dependencies:**
    ```bash
    composer install
    ```

4. **Create Database File (Optional):**
    ```bash
    touch database/database.sqlite
    ```

5. **Create Database (Optional):**
    ```bash
    php artisan migrate --seed
    ```

6. **Run Tests:**
    ```bash
    php artisan test
    ```

7. **Start Service:**
    ```bash
    php artisan serve
    ```

8. **Generate OPENAPI 3 Documentation:**
    ```bash
    php artisan openapi:generate
    ```

9. **Open Your Favorite Browser**
     - OPENAPI 3 Documentation: [http://127.0.0.1:8000/openapi](http://127.0.0.1:8000/openapi)
     - List of Users: [http://127.0.0.1:8000/api/users](http://127.0.0.1:8000/api/users)
     - User Statistics by Role: [http://127.0.0.1:8000/api/users/stats](http://127.0.0.1:8000/api/users/stats)

