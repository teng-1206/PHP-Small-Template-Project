# PHP Small Template Project

A lightweight, secure, and modular PHP boilerplate designed for small to medium-sized web applications. 

## 🚀 Key Features

- **Environment Configuration:** Uses a `.env` system to keep sensitive credentials secure.
- **Dynamic Path Resolution:** Automatically calculates `BASE_URL` and `BASE_PATH` for zero-config deployment.
- **Global Constants:** Access configuration values anywhere in your app via standardized constants (e.g., `DB_HOST`, `URL_CSS`).
- **Dual DB Support:** Includes pre-configured **PDO** (recommended) and **MySQLi** connections.
- **Clean Structure:** Logical separation of business logic, UI templates, and public assets.

---

## 📂 Project Structure

- **`assets/`** - Core application logic and resources.
  - **`api/`** - AJAX/API endpoints.
  - **`config/`** - System configuration and DB connection.
  - **`css/`**, **`js/`**, **`img/`** - Static frontend assets.
  - **`modules/`** - PHP classes and business logic.
  - **`templates/`** - Reusable UI components (header, footer, etc.).
- **`public/`** - Web-accessible directory.
  - **`index.php`** - Main entry point.

---

## 🛠️ Setup Instructions

### 1. Configure the Environment
Copy the example environment file and update it with your local settings:
```bash
cp .env.example .env
```
Edit `.env` and fill in your database credentials:
- `DB_HOST`: Your database server (usually `localhost`)
- `DB_NAME`: Your database name
- `DB_USER`: Your database username
- `DB_PASS`: Your database password

### 2. Set Up the Web Server
For optimal security, point your web server's document root to the `public/` directory. This ensures that your configuration and logic files are not directly accessible via the browser.

### 3. Start Coding
- Define your classes in `assets/modules/`.
- Create UI components in `assets/templates/`.
- Access global paths using constants like `URL_CSS` or `URL_IMG`.

---

## 📜 License
This project is open-source and available under the [MIT License](LICENSE).