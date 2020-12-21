API ENDPOINT 

clone -> install laravel 6.* via composser
Migrate Database
jalankan laravel via artisan
cek API via POSTMAN 
1.  http://127.0.0.1:8000/api/register ("POST" untuk registrasi)
2.  http://127.0.0.1:8000/api/login ("POST" untuk login)
3.  http://127.0.0.1:8000/api/me ("GET" melihat detail pengguna login "akses menggunakan bearer 
token dari API login")
4.  http://127.0.0.1:8000/api/session("POST" create session akses menggunakan bearer 
token dari API login")
5.  http://127.0.0.1:8000/api/session("GET" read session dan detailnya tanpa login)
6.  http://127.0.0.1:8000/api/session/2 ("GET" 2 diganti dengan id yang ingin dilihat detailnya)
7.   http://127.0.0.1:8000/api/session("PUT" update session  "akses menggunakan bearer 
token dari API login" user hanya bisa mengupdate datanya sendiri)
8.  http://127.0.0.1:8000/api/session/1("DELETE" 1 diganti dengan id yang ingin dihapus, 
akses menggunakan bearer 
token dari API login" user hanya bisa menghapus datanya sendiri)