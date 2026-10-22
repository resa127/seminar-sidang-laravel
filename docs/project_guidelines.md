# Project Guidelines

## Project
Sistem Informasi Seminar dan Sidang Berbasis Mobile

## Backend Architecture
Project Laravel menggunakan pola MVC + REST API.

Struktur utama:
- `app/Models`
- `app/Http/Controllers/API`
- `app/Http/Requests`
- `app/Http/Resources`
- `database/migrations`
- `routes/api.php`

## Development Guidelines

1. Semua fitur baru dibuat melalui branch `feature/*`.
2. Branch `main` tidak digunakan untuk development langsung.
3. Gunakan branch `dev` sebagai branch integrasi.
4. Semua perubahan menuju `main` harus melalui Pull Request.
5. Model hanya menangani data dan relasi.
6. Controller menangani alur request.
7. Request digunakan untuk validasi input.
8. Resource digunakan untuk format response JSON.
9. Migration harus konsisten dengan ERD.
10. Route API harus konsisten dengan API Contract.

## REST API Guidelines

Gunakan method RESTful:
- GET untuk membaca data.
- POST untuk membuat data.
- PATCH untuk memperbarui sebagian data.
- DELETE untuk menghapus data.

Gunakan response JSON yang konsisten:
- `status`
- `message`
- `data`
- `errors`

## Git Workflow

Alur branch:

`feature/* → dev → main`

Tahapan perubahan:
1. Buat branch feature.
2. Lakukan perubahan.
3. Commit dengan pesan yang jelas.
4. Push branch.
5. Buat Pull Request.
6. Review oleh anggota lain.
7. Merge setelah disetujui.

## Git Safety

- Jangan gunakan `git push --force` pada shared branch.
- Jangan commit `.env`.
- Jangan commit folder `vendor`.
- Jangan menghapus Git history.
- Gunakan `git revert` untuk rollback perubahan yang sudah di-push.

## Testing

Sebelum Pull Request:
1. Jalankan `php artisan route:list`.
2. Jalankan migration bila diperlukan.
3. Jalankan `php artisan serve`.
4. Pastikan tidak ada error baru.
5. Pastikan API tetap sesuai kontrak.