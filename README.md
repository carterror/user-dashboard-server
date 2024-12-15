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

8. **Start Your Favorite Browser**
    - List users: http://127.0.0.1:8000/api/users
    - Stats users for role: http://127.0.0.1:8000/api/users/stats






