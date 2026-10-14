# Architecture - Seminar Sidang API

## 1. Overview

Backend menggunakan Laravel dengan pola MVC dan REST API. Struktur project dipisahkan berdasarkan tanggung jawab agar mudah dikembangkan dan dipelihara.

## 2. Struktur Utama

```text
app/
├── Models/
├── Http/
│   ├── Controllers/
│   │   └── API/
│   ├── Requests/
│   └── Resources/

database/
└── migrations/

routes/
└── api.php

docs/
└── architecture.md