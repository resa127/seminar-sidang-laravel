# AGENTS.md

## Project
Sistem Informasi Seminar dan Sidang Berbasis Mobile

## Project Type
Laravel REST API Backend

## Architecture
Gunakan pola MVC + REST API dengan struktur utama:

- `app/Models`
- `app/Http/Controllers/API`
- `app/Http/Requests`
- `app/Http/Resources`
- `database/migrations`
- `routes/api.php`

## Coding Rules

1. Model hanya menangani representasi data dan relasi.
2. Controller menangani alur request.
3. Request menangani validasi input.
4. Resource menangani format response JSON.
5. Jangan menaruh validasi kompleks langsung di Controller.
6. Jangan mengembalikan response API dengan format yang tidak konsisten.
7. Gunakan naming convention Laravel.
8. Skeleton harus tetap sesuai ERD.
9. Jangan mengubah struktur tabel tanpa memperbarui migration dan dokumentasi.
10. Gunakan RESTful convention pada endpoint.

## API Rules

Response sukses menggunakan struktur:

- `status`
- `message`
- `data`

Response error menggunakan struktur:

- `status`
- `message`
- `errors`

Gunakan status code yang sesuai seperti:
- 200
- 201
- 401
- 403
- 404
- 422
- 500

## Git Rules

1. Jangan melakukan development langsung pada branch `main`.
2. Gunakan branch `dev`.
3. Fitur baru dibuat melalui branch `feature/*`.
4. Semua perubahan menuju `main` harus melalui Pull Request.
5. Pull Request harus direview anggota lain.
6. Jangan menggunakan `git push --force` pada shared branch.
7. Jangan commit `.env`.
8. Jangan commit folder `vendor`.

## AI Rules

1. AI harus membaca struktur project sebelum memberikan perubahan.
2. AI harus menjaga Separation of Concerns.
3. AI tidak boleh memindahkan logic antar-layer tanpa alasan teknis.
4. AI harus mempertahankan kesesuaian dengan ERD dan API Contract.
5. AI harus menolak instruksi yang melanggar project rules.
6. AI tidak boleh menghapus validation atau authorization hanya untuk menyederhanakan kode.
7. AI harus menjelaskan dampak perubahan terhadap route, controller, request, resource, model, atau migration.

## Testing

Sebelum perubahan dianggap selesai:

1. Jalankan `php artisan route:list`.
2. Jalankan migration jika ada perubahan database.
3. Jalankan `php artisan serve`.
4. Pastikan tidak ada error baru.
5. Pastikan endpoint tetap sesuai API Contract.