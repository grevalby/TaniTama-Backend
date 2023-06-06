<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Disease;

class DiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Disease::create([
            'name' => 'Brown Spot (Bercak Coklat)',
            'description' => 'Penyakit bercak daun coklat disebabkan oleh Drechslera oryzae (B.de Haan) Subram.et jain. Pada masal dulu sering disebut sebagai  jamur Helminthosporium oryzae B.de Haan tersebar di negara-negara penghasil padi di Asia dan di Afrika. Di Indonesia, penyakit ini banyak ditemukan pada pertanaman padi terutama di tanah-tanah marginal yang kurang subur, atau kahat unsur hara tertentu. Beberapa daerah padi gogo rancah di Nusa Tenggara Barat, Bali, Gunung Kidul, Jawa Barat bagian selatan dan Lampung merupakan daerah endemik penyakit ini. Hubungan antara terjadinya penyakit dengan ketersediaan unsur hara tanah sangat erat. Tanaman yang kurang sehat sangat mudah terserang penyakit ini. Pada kondisi tanah yang kahat unsur kalium penyakit bercak coklat dapat menimbulkan kerugian hasil 50 sampai 90 persen. Faktor lain yang berpengaruh adalah sistem drainase yang tidak baik, sehingga mengganggu terserapnya unsur-unsur hara.',
            'recomendation' => 'Mengendalikan penyakit Brown Spot pada padi bisa dilakukan dengan dengan beberapa cara, seperti:\r\n
            -Budidaya tanaman sehat, penggunaan benih bermutu, perbaikan sarana tata air, pemupukan berimbang, tanam serempak, dan pengaturan waktu tanam yang tepat. Penyakit ini tidak menimbulkan kerugian yang berarti pada pertanaman yang diusahakan dengan cara agronomi yang baik.\r\n
            -Sanitasi dan pergiliran tanaman. Sifat pathogen dapat bertahan di dalam jerami dan tanah, maka sebaiknya dilakukan sanitasi (jerami diangkat keluar untuk berbagai keperluan lain). Selanjutnya dilakukan pergiliran tanaman dengan tanaman bukan inang penyakit untuk mematikan pathogen didalam tanah.\r\n
            -Perlakuan biji, dilakukan dengan merendam dalam air panas (hot water treatment) dicampur dengan fungisida. Fungisida yang biasa digunakan adalah tiram, oksiklorida tembaga, atau dapat juga menggunakan formalin.\r\n
            -Menanam varietas yang tahan atau toleran. Cara ini merupakan upaya pengendalian yang efektif dan efisien. Serta mudah dikombinasikan dengan taktik pengendaian yang lain.\r\n
            -Alternatif pengendalian terakhir dengan menggunakan fungisida berbahan aktif antara lain: tebukonazol, heksakonazol, belerang, tebukonazo + triflosistrobin, azoksistrobin + difenokonazol. Propikonazol + prokloraz, difenokonazol + Propikonazol, tembaga, tiodozal, metribuzin, mankozab, fenbukonazol, asam khloro bromo iso sianurit, propineb flupikolid, ziram.',
            'sample_img' => 'https://storage.googleapis.com/tanitama_bucket/diseases/1.%20Brown%20Spot.png'
        ]);

        Disease::create([
            'name' => 'Healthy (Sehat)',
            'description' => 'Ciri daun padi yang sehat: Daun-daun padi berwarna hijau tua, Jika kita mempunyai BWD (alat ukur kehijauan daun padi) maka warna daun padi berada di lever tertinggi atau satu trip dibawahnya.',
            'recomendation' => 'Tips agar daun padi tetap sehat:\r\n
            -Gunakan benih bersertifikat.\r\n
            -Pemupukan dengan dosis tepat.\r\n
            -Rutin membersihkan gulma.',
            'sample_img' => 'https://storage.googleapis.com/tanitama_bucket/diseases/2.DaunPadiSehat.jpg'
        ]);

        Disease::create([
            'name' => 'Leaf Blast',
            'description' => 'Leaf Blast disebabkan oleh cendawan Pyricularia oryzae (fase aseksual) atau Magnaporthe grisea (fase sempurna). Mempunyai konidiofora bersekat-sekat, jarang bercabang, berwarna kelabu, membentuk konidium pada ujungnya. Konidium berbentuk buah alpokat, bersel tiga, hialin, 1 sampai 20 konidia per konidiofora. Terdapat banyak (lebih dari 260) ras fisiologi yang berbeda virulensinya dan mudah bermutasi yang menyebabkan tahan terhadap fungisida. Patogen ini mengeluarkan beberapa jenis toksin (misalnya picolinic acid, pyricularin, pyriculol, tenuazonic acid) yang mematikan sel tanaman sehingga termasuk patogen non abligat.\r\n
            Gejala penyakit blast dapat muncul pada daun, batang, malai, bulir padi. Bercak pada daun (leaf blas) berbentuk belah ketupat, awalnya hijau keabu-abuan kemudian putih dan akhirnya abu-abu dengan bagian tepi berwarna coklat atau coklat kemerahan. Bentuk dan warna bercak bervariasi tergantung keadaan lingkungan, umur bercak, ketahanan padi.',
            'recomendation' => 'Mengendalikan penyakit Leaf Blast pada padi bisa dilakukan dengan dengan beberapa cara, seperti:\r\n
            - Gunakan varietas tahan sesuai dengan sebaran ras yang ada di daerah setempat.\r\n
            - Gunakan benih sehat.\r\n
            - Dilakukan seed treatment yaitu benih direndam dahulu oleh fungisida sebelum benih disebar.\r\n
            - Hindarkan penggunaan pupuk nitrogen diatas dosis anjuran.\r\n
            - Hindarkan tanam padi dengan varietas yang sama terus menerus sepanjang tahun.\r\n
            - Sanitasi lingkungan harus intensif karena inang alternatif patogen dapat berupa rerumputan.\r\n
            - Hindari tanam padi terlambat dari tanaman petani di sekitarnya.\r\n
            - Pengendalian secara dini dengan perlakuan benih sangat dianjurkan untuk menyelamatkan persemaian sampai umur 30 hari setelah sebar.\r\n
            - Penyemprotan fungisida sistemik sebaiknya 2 kali pada saat stadia tanaman anakan maksimum dan awal berbunga untuk mencegah penyakit blas daun dan blas leher terutama di daerah endemik.\r\n            Hindarkan jarak tanam rapat (sebar langsung).\r\n
            - Tanam dengan system tanam jajar legowo (Jarwo) 2:1\r\n
            - Pemakaian kompos sebagai sumber bahan organik.',
            'sample_img' => 'https://storage.googleapis.com/tanitama_bucket/diseases/3.LeafBlast.jpg'
        ]);

        Disease::create([
            'name' => 'Leaf Scald (Lepuh Daun)',
            'description' => 'Penyakit daun terbakar pada tanaman padi disebabkan oleh jamur Rhynchosporium oryzae. Gejala dari penyakit daun terbakar atau leaf scald ini biasanya terjadi pada ujung daun tua, namun dapat pula terjadi pada sepanjang pinggir dan bagian lain dari helaian daun. Bercak berbentuk bulat memanjang seperti berlian kadang seperti bercak-bercak yang basah dengan panjang 1-5 cm, lebar 0,5 cm.',
            'recomendation' => 'Mengendalikan penyakit daun terbakar pada padi bisa dilakukan dengan dengan beberapa cara, seperti:\r\n
            - Kurangi penggunaan urea dan tambahkan unsur K.\r\n
            - Tambah jarak tanamnya dan gunakan sisten tanam jajar legowo.\r\n
            - Bisa menggunakan fungisida kontak sebagai pencegahnya seperti Antracol, Dhitane, Vondozeb, Kocide dll. Namun hal tersebut merupakan alternatif terakhir dari berbagai macam pengendalian penyakit padi. Sebagai catatan, fungisida ini sebagiknya jangan gunakan jika belum ada gejala yang timbul.',
            'sample_img' => 'https://storage.googleapis.com/tanitama_bucket/diseases/4.LeafScald.PNG'
        ]);

        Disease::create([
            'name' => 'Narrow Brown Spot (Bercak coklat sempit)',
            'description' => 'Narrow Brown Spot (disebut juga bercak daun coklat sempit, atau bercak daun Cercospora) disebabkan oleh jamur Sphaerulina oryzina (syn. Cercospora janseana, Cercospora oryzae) dan dapat menginfeksi daun, pelepah, dan malai.\r\n
            Narrow Brown Spot menyebabkan kematian dini daun dan selubung daun, pematangan biji padi sebelum waktunya, dan dalam kasus yang parah, tanaman rebah.',
            'recomendation' => 'Mengendalikan penyakit Narrow Brown Spot pada padi bisa dilakukan dengan dengan beberapa cara, seperti:\r\n
            - Gunakan varietas tahan. Hubungi kantor pertanian setempat untuk mengetahui daftar varietas terbaru yang tersedia.\r\n
            - Jaga kebersihan ladang.\r\n
            - Singkirkan gulma dan beras kurus di ladang dan area terdekat untuk menghilangkan inang pengganti yang memungkinkan jamur bertahan hidup dan menginfeksi tanaman padi baru.\r\n
            - Gunakan nutrisi seimbang; pastikan bahwa potasium yang cukup digunakan.\r\n
            - Jika bercak cokelat sempit menimbulkan risiko pada lahan, semprotkan propikonazol pada tahap booting ke heading.',
            'sample_img' => 'https://storage.googleapis.com/tanitama_bucket/diseases/5.NarrowBrownSpot2.jpg'
        ]);

        Disease::create([
            'name' => 'Bacterial Leaf Blight (Hawar Daun Bakteri)',
            'description' => 'Hawar Daun Bakteri penyakit ini disebabkan oleh bakteri Xanthomonas campestris pv. Oryzae dan dapat menurunkan hasil sampai 30%. Penyakit ini banyak terjadi pada musim hujan atau kemarau yang basah terutama pada lahan sawah yang selalu tergenang, dan dipupuk N tinggi (≥ 250 kg Urea / ha)',
            'recomendation' => 'Mengendalikan penyakit Hawar Daun Bakteri pada padi bisa dilakukan dengan dengan beberapa cara, seperti:\r\n
            - Menanam varietas tahan. Untuk daerah endemis varietas Code dan Angke\r\n
            - Bibit padi yang ditanam tidak dipotong pada bagian ujungnya.\r\n
            - Jarak tanam jangan terlalu rapat, disarankan dengan cara tanam jejer legowo.\r\n
            - Pengairan berselang (intermiten), hindari penggenangan yang terus-menerus.\r\n
            - Pemupukan berimbang, jangan terlalu banyak pupuk N.\r\n
            - Jika intensitas penyakit melebihi 20%, semprot dengan bakterisida',
            'sample_img' => 'https://storage.googleapis.com/tanitama_bucket/diseases/0.bacterial-leaf-blight.jpg'
        ]);
    }
}
