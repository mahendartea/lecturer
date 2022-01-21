<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

---

# Tentang aplikasi

Aplikasi ini merupakan aplikasi yang dibuat untuk kebutuhan kuliah daring. Semenjak adanya pandemi covid-19 beberapa Kampus sangat membutuhkan aplikasi untuk mendukung proses belajar mengajar secara daring. Beberapa dari mereka sudah menggunakan aplikasi serupa, namun masih banyak kampus Negeri dan Swasta yang belum menerarpakan aplikasi Daring atau disebut juga dengan LMS (Learning Management System).

Melalui aplikasi ini diharapkan dapat membantu Dosen dan Mahasiswa dalam mengikuti perkuliahan daring melalui Sistem LMS ini.

# Fitur

## Pengguna :

#### 1. Admin

a. Menu Data Universitas

- CRUD
- View : Semua, Negeri, Swasta
- Search
- Pagination

b. Menu Pengguna (User)

- CRUD
- view : Semua, Dosen, Mahasiswa
- Search
- Pagination

c. Menu Perkuliahan (Learning Manager)

- NEWS
  
  - Kelola Kategori Topik/Jurusan
  - View update terakhir dosen mengajar
  - Detail Perkuliahan
  - View All Perkuliahan

- DOSEN
  
  - View semua pengajar (Dosen)
    - Jumlah Kelas / Tahun
    - Jumlah Bahan / Tahun
    - Jumlah Mahasiswa / Tahun
  - Detail Pengajar
    - Asal perguruan
    - Jurusan
    - Prodi
    - NiDN
    - dll

- Mahasiswa

- Penelitian

- Pengabdian

- Penunjang

- Pengaturan (Setting)
  
  - Belum tau mau buat apa

---

#### 2. Dosen

a. Menu Perkuliahan

1. Riwayat Mengajar
   
   - [ ] Semester / Tahun

2. Matakuliah Diampu
   
   - [ ] Semester / Tahun
   - [ ] Peserta
   - [ ] Absensi
   - [ ] Berita Acara
   - [ ] Nilai

3. Bimbingan
   
   - [ ] Skripsi / Persemester
   - [ ] KP / Tahun
   - [ ] KKN / Tahun

4. Penjadwalan

b. Menu Penelitian

- Data penelitian
  
  - Pertahun / Semester
  - link
  - file Junal

- Sinta

- Google Scholar

- Scopus

c. Menu Pengabdian Masyarakat

- Data Pengabmas
  
  - Pertahun / Semester
  - Link
  - File Laporan

d. Menu Penunjang

- Data Penunjang
  
  - Jabatan
  - Sertifikat
  - dll

---

### 3. Mahasiswa

a. Menu perkuliahan

- Absensi
- nilai

b. Kegiatan mahasiswa

c. Forum

---

### 4. Akademik (Soon...)

---

# Catatan instalasi

1. Database Name = db_lecturer
2. 'php artisan migrate' untuk migrasi database
3. 'php artisan db:seed' untuk insert role user
4. restore data ptns dari backup file dataptns.sql

## Menggunakan sail/docker

1. Terdapat file `docker-compose.yml` yang dapat menjalan docker melalui sail.

2. perintah berikut untuk ngecek `DB:HOST `untuk mariaDB.
- `$ docker inspect -f '{{range.NetworkSettings.Networks}}{{.IPAddress}}{{end}}' <container_name_or_container_ID>`
3. buat alias sail.
- `alias sail='bash vendor/bin/sail'`
4. Instalasi menggunnakan perintah.
- `$sail up`
4. Untuk peritah migrate dan seed dan lainnya memakai perintah berikut
   - `$sail artisan migrate`
   - `$sail artisan db:seed`

## Tables Database

1. Table User (users) - dibuat di migration
   
   1. id  *(primary key - auto increment)*
   
   2. name *(string 255)*
   
   3. email *(string - unique)*
   
   4. email_verified_at *(timestamp - laravel format)*
   
   5. password *(string)*
   
   6. rememberToken *(laravel format)*
   
   7. current_team_id *(foregn id - nullable)*
   
   8. profile_photo_path *(text)*
      ***Tambahan field***
   
   9. role_id *(foregnId - constrained dengan table roles)*
   
   10. student__address *(string - nulable)*
   
   11. institution *(foregnId - constrained dari table dataptns)*
   
   12. student_licence_number *(string - nullable)*
   
   13. teacher_qualifications *(string - nullable)*
   
   14. teacher_nidn *(string - nullable)*

2. Table Roles (roles) - dibuat di migration
   
   1. id  *(primary key - auto increment)*
   
   2. name *(string 255)*

3. Table Course Years (course_years) - dibuat di migration
   
   1. id  *(primary key - auto increment)*
   
   2. user_id *(string - constrained dari table users)*
   
   3. semester *(string)*
   
   4. year *(string)*
   
   5. ket_tahun_ajar *(text - nullable)*

4. Table Data PTN/S (dataptns) - dibuat dari file dataptns.sql
   
   1. id *(primary key - auto increment)* 
   
   2. nama_universitas *(string)*
   
   3. statuspt *(number)*
   
   4. weblink *(string)* 
   
   5. alamat *(text)*
   
   6. kontak *(string)*
   
   7. description *(text)*

5. Table Matakuliah (courses) - dibuat di migration
   
   1. id *(primary key - auto increment)*
   
   2. code_course_ *(string)*
   
   3. name_course *(string)*
   
   4. course_year_id *(string - constrained dengan table course_years)*
   
   5. user_id *(string - relasi dengan users)*
   
   6. prodi_id *(string - constrained dengan table prodi)*
   
   7. class *(string)*

6. Table Program Studi (study_programs) - dibuat dengan migration
   
   1. id *(primary key - auto increment)* 
   
   2. kode_prodi *(string)* 
   
   3. prodi_name *(string)* 
   
   4. fakulty_id *(string - constrained dengan table fakulty)* 

7. Table Fakultas (faculty) - dibuat dengan migration
   
   1. id *(primary key - auto increment)* 
   
   2. faculty_code *(string)* 
   
   3. faculty_name *(string)* 
   
   4. added_by *(string)*
