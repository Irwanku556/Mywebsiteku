<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return view('Home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function(){
    return view('about',[
        "title" => "About",
        "Name" => "Irwan Pradana",
        "Jurusan" => "Teknik Informatika",
        "NIM" => "20181",
        "image" => "okelah.jpeg",

        "Name1" => "Iqbal Gusti Firjatullah",
        "Jurusan1" => "Teknik Elektro",
        "NIM1" => "20191",
        "image1" => "iqbal.jpg",

        "Name2" => "Indra Yuanto",
        "Jurusan2" => "Tekni Industri",
        "NIM2" => "20201",
        "image2" => "indra.jpg",

        "Name3" => "Zydhan Usmar",
        "Jurusan3" => "Teknik Mesin",
        "NIM3" => "20211",
        "image3" => "zydhan.jpg",

        "Name4" => "Hanif Adhi Respati",
        "Jurusan4" => "Teknik Sipil",
        "NIM4" => "20221",
        "image4" => "hanif.jpg"
    ]);
});



Route::get('/blog', function(){
    $blog_posts = [
        [
            "title" => "Fakultas Teknik",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos iste animi ipsum distinctio fugiat, ab dignissimos nemo
            debitis dolores natus quaerat veniam corporis est sit quis a ducimus, quas voluptatum mollitia cum. Necessitatibus
            nisi a quo voluptas iste tempore accusantium animi. Quod maiores, veritatis repudiandae temporibus commodi officiis
            consequuntur suscipit."
        ],
        [
            "title" => "Fakultas Ekonomi dan Bisnis",
            "slug" => "judul-post-kedua",
            "body" => "   Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolorum aperiam exercitationem sunt rem error, fugiat
            optio ex. Pariatur officiis minus ea voluptates, qui eaque ducimus sed distinctio adipisci molestias?"
        ],
        [
            "title" => "Fakultas Ilmu Sosial dan Ilmu Politik",
            "slug" => "judul-post-ketiga",
            "body" =>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolorum aperiam exercitationem sunt rem error, fugiat
            optio ex. Pariatur officiis minus ea voluptates, qui eaque ducimus sed distinctio adipisci molestias?"
        ],
        [
            "title" => "Fakultas Keguruan dan Ilmu Pendidikan",
            "slug" => "judul-post-keempat",
            "body" =>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolorum aperiam exercitationem sunt rem error, fugiat
            optio ex. Pariatur officiis minus ea voluptates, qui eaque ducimus sed distinctio adipisci molestias?"
        ],
        [
            "title" => "Fakultas Psikologi",
            "slug" => "judul-post-kelima",
            "body" =>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolorum aperiam exercitationem sunt rem error, fugiat
            optio ex. Pariatur officiis minus ea voluptates, qui eaque ducimus sed distinctio adipisci molestias?"
        ],
        [
            "title" => "Fakultas Hukum",
            "slug" => "judul-post-keenam",
            "body" =>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolorum aperiam exercitationem sunt rem error, fugiat
            optio ex. Pariatur officiis minus ea voluptates, qui eaque ducimus sed distinctio adipisci molestias?"
        ],

        [
            "title" => "Fakultas Pertanian - Peternakan",
            "slug" => "judul-post-ketujuh",
            "body" =>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolorum aperiam exercitationem sunt rem error, fugiat
            optio ex. Pariatur officiis minus ea voluptates, qui eaque ducimus sed distinctio adipisci molestias?"
        ],

        [
            "title" => "Fakultas Agama Islam",
            "slug" => "judul-post-kedelapan",
            "body" =>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolorum aperiam exercitationem sunt rem error, fugiat
            optio ex. Pariatur officiis minus ea voluptates, qui eaque ducimus sed distinctio adipisci molestias?"
        ],

        [
            "title" => "Fakultas Kesehatan",
            "slug" => "judul-post-kesembilan",
            "body" =>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolorum aperiam exercitationem sunt rem error, fugiat
            optio ex. Pariatur officiis minus ea voluptates, qui eaque ducimus sed distinctio adipisci molestias?"
        ],

        [
            "title" => "Fakultas Kedokteran",
            "slug" => "judul-post-kesepuluh",
            "body" =>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolorum aperiam exercitationem sunt rem error, fugiat
            optio ex. Pariatur officiis minus ea voluptates, qui eaque ducimus sed distinctio adipisci molestias?"
        ],

        ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman singel post
Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "Fakultas Teknik",
            "slug" => "judul-post-pertama",
            "body" => " 1. Teknik Mesin(Unggul), 2. Teknik Sipil(Baik Sekali), 3. Tekni Industri(Unggul), 4. Informatika(A), 5. Teknik Elektro(B)"
        ],
        [
            "title" => "Fakultas Ekonomi dan Bisnis",
            "slug" => "judul-post-kedua",
            "body" => "1. Manajemen(A), 2. Akutansi(Unggul), 3. Ekonomi Pembangunan(A)"
        ],
        [
            "title" => "Fakultas Ilmu Sosial dan Ilmu Politik",
            "slug" => "judul-post-ketiga",
            "body" => "1. Ilmu Komunikasi(A), 2. Ilmu Pemerintahan(Unggul), 3. Hubungan Internasional(Unggul), 4. Kesejahteraan Sosial(Unggul), 5. Sosiologi(Unggul)"
        ],
        [
            "title" => "Fakultas Keguruan dan Ilmu Pendidikan",
            "slug" => "judul-post-keempat",
            "body" => "1. Pendidikan Matematika(unggul), 2. Pendidikan Biologi, 3. Pendidikan Bahasa Indonesia(Unggul), 4. Pendidikan Pancasila dan Kewarganegaraan(Unggul), 5. Pendidikan Bahasa Inggris(Unggul), 6. Pendidikan Guru Sekolah Dasar(Unggul)"
        ],
        [
            "title" => "Fakultas Psikologi",
            "slug" => "judul-post-kelima",
            "body" => "1. Psikologi"
        ],
        [
            "title" => "Fakultas Hukum",
            "slug" => "judul-post-keenam",
            "body" => "1. Hukum(A)"
        ],
        [
            "title" => "Fakultas Pertanian - Peternakan",
            "slug" => "judul-post-ketujuh",
            "body" => "1. Agroteknologi(Unggul), 2. Agribisnis(Unggul), 3. Teknologi Pangan(Unggul), 4. Kehutanan(Baik Sekali), 5. Peternakan(Unggul), 6 Akuakultur(Unggul)"
        ],
        [
            "title" => "Fakultas Agama Islam",
            "slug" => "judul-post-kedelapan",
            "body" => "1. Pendidikan Agama Islam(Unggul), 2. Syakhshiyyah-Syari'ah(A), 3. Hukum Keluarga Islam(Unggul), 4. Ekonomi Syariah(B), 5. Pendidikan Bahasa Arab(B)"
        ],
        [
            "title" => "Fakultas Kesehatan",
            "slug" => "judul-post-kesembilan",
            "body" => "1. Ilmu Keperawatan(A), 2. Farmasi(B), Fisioterapi(B)"
        ],
        [
            "title" => "Fakultas Kedokteran",
            "slug" => "judul-post-kesepuluh",
            "body" => "1. Pendidikan Dokter(B)"
        ],

        ];

        $new_post = [];
        foreach ($blog_posts as $post){
            if($post['slug'] === $slug){
                $new_post = $post;
            }
        }
    return view('post',[
        "title" => "Single Post",
        "post" => $new_post
    ]);
});


