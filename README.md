# Assignment Progress

---

|               Nama               |    NRP     |
| :------------------------------: | :--------: |
| Ranto Bastara Hamonangan Sitorus | 5025221228 |

## Tech yang digunakan

-   Laravel 11.x
-   MySQL
-   Tailwind UI

## Progress

### Minggu 2

Pada Minggu ke-2 ini kita belajar mengenai installasi Laravel dan pengenalan Laravel dasar seperti Struktur Folder, Laravel Blade, dan Laravel Blade Component

#### UI Updates

1. **Layout**
   ![layout](resources/assets/markdown/images/Layout.png)
   **Berikut adalah contoh layout yang dipakai oleh semua page dalam web ini, komponen yang menyusun layout ini diantaranya:**

-   **navigation Bar:**Komponen ini berfungsi untuk mempermudah kita untuk berpindah page dan sebagai penanda bahwa kita di page apa, karena ketika kita berada di page Home maka tombol dengan label Home akan menyala.
-   **Title:**Komponen ini sebagai tempat untuk kita memberikan judul pada page yang kita buat, dan judul pada setiap page bisa dibuat berbeda.
-   **Body:**Komponen ini berfungsi sebagai tempat untuk kita memberikan isi dari page yang telah dibuat.

2. **HomePage**
   ![Homepage](resources/assets/markdown/images/Homepage.png)
   Dalam page Home kita memiliki title dengan tulisan "Home Page" dan body dengan isi paragraf "Ini adalaha halaman Homepage"
3. **Blog/Posts Page**
   ![PostsPage](resources/assets/markdown/images/Posts%20Page.png)
   Pada page ini terdapat title dengan tulisan "Blog" dan pada body page terdapat 3 post dengan judul, author, dan content yang berbeda
4. **About Page**
   ![AboutPage](resources/assets/markdown/images/About%20Page.png)
   Pada page ini terdapat title dengan tulisan "About" dan body yang berisi paragraf "Ini adalah Halaman About"
5. **Contact Page**
   ![ContactPage](resources/assets/markdown/images/Contact%20Page.png)
   Pada halaman ini terdapat title dengan tulisan "Contact" dan pada body terdapat paragraf "Ini adalah Halaman Contact"

### Minggu 3

Pada Minggu ke-3 ini kita belajar mengenai View Data dan Model, dimana kita akan membuat model untuk data Post yang akan ditampilkan melalui view posts (multipost), dan post (singlepost)

#### UI Updates

1. **Blog/Posts Page**
   ![PostsPage](resources/assets/markdown/images/Posts%20Page%20v2.png)
   Pada Halaman ini sebenarnya tidak ada perubahan yang signifikan dalam bagian UI namun ketika "Read More" ditekan dia akan menuju page post yang berisi isi post lebih detail
2. **Post Page**
   ![PostPage](resources/assets/markdown/images/Single%20Post%20Page.png)
   Halaman ini merupakan isi dari salah satu post yang berada di halaman posts page, di bagian body artikelnya tidak akan dilimit sehingga teks yang muncul merupakan teks secara keseluruhan.

### Minggu 4

Pada Minggu ke-4 ini kita belajar mengenai Database & migrasinya, dan kita juga belajar mengenai Eloquent ORM yang memudahkan kita untuk melakukan perubahan pada database.

#### UI Updates

**_Minggu ini tidak ada update UI, karena materi termasuk dalam bagian backend_**

### Minggu 5

Pada Minggu ke-5 ini kita belajar mengenai model factories, Eloquent Relationship, dan Database Seeder

kita belajar mengenai bagaimana cara membuat data dummy dengan fitur model factories, membuat relasi antar tabel (dalam kasus ini one to many) dan bagaimana cara membuat dan menggunakan seeder untuk menambahkan data kedalam database kita.

#### UI Updates

1. **Blog/Posts Page**
   ![PostsPage](resources/assets/markdown/images/Posts%20Page%20v3.png)
   Pada Halaman ini sudah mulai berisi post yang dibuat dengan faker sebanyak 100 posts dan ada tambahan juga di bagian author saya buat dengan nama saya sendiri dan sekarang setiap post ada category masing-masing.
2. **Author Posts Page**
   ![AuthorPosts](resources/assets/markdown/images/Authors%20Posts.png)
   Halaman ini baru, jadi ini merupakan halaman yang menampilkan setiap post yang dibuat oleh author tertentu dengan cara mengklik namanya pada page posts.
3. **Posts by Category Page**
   ![CategoryPosts](resources/assets/markdown/images/Categories%20Posts.png)
   Halaman ini baru, jadi ini merupakan halaman yang menampilkan setiap post dengan kategori tertentu contohnya pada gambar itu merupakan post yang memiliki kategori machine learning, page ini dapat diakses dengan cara menekan nama kategori pada salah satu post di page posts.
