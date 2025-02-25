<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions">
    <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
  </a>
</p>

# FiveM Laravel API with WebSockets

This project is a **Laravel API** that acts as the backend for a **FiveM server**, handling all **database interactions** while enabling real-time **WebSocket communication** between the game server and the API.

## Features
- ✅ **WebSocket Communication** – Real-time updates between Laravel and FiveM
- ✅ **Secure API Endpoints** – Handles player data, inventory, economy, and more
- ✅ **Modular & Scalable** – Decouples game logic from database operations
- ✅ **QBCore-Compatible** – Works seamlessly with QBCore and other FiveM frameworks

## Tech Stack
- **Laravel 10** (PHP)
- **MySQL** (Database)
- **BeyondCode Laravel WebSockets** (Real-time updates)
- **Axios** (Server-side HTTP requests)
- **FiveM JavaScript** (`ws` for WebSocket client)

## Installation

### 1. Clone the Repository
```sh
git clone https://github.com/yourusername/fivem-laravel-api.git
cd fivem-laravel-api
```

### 2. Install Dependencies
```sh
composer install
npm install
```

### 3. Configure Environment Variables
Create a `.env` file and set your database and WebSocket configurations:
```env
DB_CONNECTION=mysql  
DB_HOST=127.0.0.1  
DB_DATABASE=fivem  
DB_USERNAME=root  
DB_PASSWORD=yourpassword  

WEBSOCKETS_PORT=6001  
PUSHER_APP_ID=your-app-id  
PUSHER_APP_KEY=your-app-key  
PUSHER_APP_SECRET=your-app-secret  
```

### 4. Run Migrations & Seed Database
```sh
php artisan migrate --seed
```

### 5. Start WebSocket Server
```sh
php artisan websockets:serve
```

### 6. Start Laravel API
```sh
php artisan serve
```

### 7. Connect FiveM to WebSocket
In your FiveM client script (`client.lua` or `client.js`), use:
```js
const ws = new WebSocket('ws://your-api-ip:6001');
ws.onopen = () => console.log("Connected to WebSocket");
ws.onmessage = (event) => console.log("Message from server:", event.data);
```

## API Usage Example
Send a request to update a player's money:
```sh
curl -X POST http://127.0.0.1:8000/api/update-money \
-H "Content-Type: application/json" \
-d '{"steamid": "steam:110000112345678", "money": 5000}'
```

## License
This project is open-source and licensed under the [MIT license](https://opensource.org/licenses/MIT).

