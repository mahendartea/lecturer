<?php

namespace Database\Seeders;

use App\Models\Dataptn;
use Illuminate\Database\Seeder;

class PtSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      Dataptn::create(
         ['nama_universitas' => 'Universitas Syiah Kuala, Banda Aceh', 'statuspt' => 1, 'email' => 'webmail@unsyiah.ac.id',  'weblink' => 'https://unsyiah.ac.id/', 'alamat' => 'Jln. Teuku Nyak Arief Darussalam, Banda Aceh, Aceh, 23111, Indonesia', 'kontak' => '(0651) 755-3205', 'description' => 'Universitas Syiah Kuala (Unsyiah) adalah perguruan tinggi negeri tertua di Aceh. Berdiri pada tanggal 2 September 1961 dengan Surat Keputusan Menteri Pendidikan Tinggi dan Ilmu Pengetahuan Nomor 11 tahun 1961, tanggal 21 Juli 1961. Pendirian Unsyiah dikukuhkan dengan Keputusan Presiden Republik Indonesia, nomor 161 tahun 1962, tanggal 24 April 1962 di Kopelma Darussalam, Banda Aceh. Unsyiah berkedudukan di Ibukota Provinsi Aceh dengan kampus utama terletak di Kota Pelajar Mahasiswa (Kopelma) Darussalam, Banda Aceh. Saat ini, Unsyiah memiliki lebih dari 30.000 orang mahasiswa yang menuntut ilmu di 12 Fakultas dan Program Paska Sarjana.'],
         ['Universitas Malikussaleh, Lhokseumawe', 1, 'humas@unimal.ac.id', 'https://unimal.ac.id/', 'Cot Tengku Nie Reuleut, Muara Batu, Aceh Utara - Aceh', '064541373', 'Universitas Malikussaleh didirikan dengan mengambil nama besar Raja Kerajaan Samudera Pasai pertama, yang dilandasi pada semangat estafet kepemimpinan dan pembangunan yang telah diletakkannya melalui sifat kepeloporan, kedinamisan, serta patriotismenya Sultan Malikussaleh. Kerajaan Islam Samudera Pasai dalam sejarah tercatat sebagai Kerajaan Islam pertama di Nusantara yang menjadi cikal bakal pusat pengembangan dan penyebaran agama Islam di kawasan Nusantara dan Asia Tenggara, merupakan pusat Pendidikan Islam dan Ilmu Pengetahuan ternama yang mewariskan semangat pejuang bagi generasi penerusnya dalam mengembangkan agama Islam, ilmu pengetahuan, teknologi, seni, dan budaya yang telah menghasilkan Syech (Guru Besar) dan ilmuan lainnya. Sehingga kecemerlangan pemikiran mereka pada saat itu telah memberi dampak besar pada Era Kemakmuran dan Kejayaan (Welfare State) “Baldatun Thayyibatun Wa Rabbun Ghafur\" suatu Negeri Indah, Adil, dan Makmur yang Diridhai Allah SWT.', '2021-06-18 08:34:20', '2021-06-18 01:34:20']
      );
   }
}
