### **Documentación Service User Dashboard**
----------
Instrucciones para instalar, configurar y ejecutar:
-----------
1. **Create envaironment:**
   ```bash
   copy .env.example .env
   ```

2. **Create Key Segurity:**
   ```bash
   php artisan key:generate
   ```

3. **Install dependencies:**
   ```bash
   composer install
   ```

4. **Create Archivo Database (Optional):**
   ```bash
   touch database/database.sqlite
   ```

5. **Create Database (Optional):**
   ```bash
   php artisan migrate --seed
   ```

6. **Tests Service:**
   ```bash
   php artisan test
   ```

7. **Start Service:**
   ```bash
   php artisan serve
   ```

8. **Generate Documentation OPENAPI 3:**
   ```bash
   php artisan openapi:generate
   ```

9. **Start Your Favorite Browser**
    - Documentation OPENAPI 3: http://127.0.0.1:8000/openapi
    - List users: http://127.0.0.1:8000/api/users
    - Stats users for role: http://127.0.0.1:8000/api/users/stats






