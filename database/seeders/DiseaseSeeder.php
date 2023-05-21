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
            'name' => 'Hawar Daun Bakteri (HDB)',
            'description' => 'Hawar Daun Bakteri penyakit ini disebabkan oleh bakteri Xanthomonas campestris pv. Oryzae dan dapat menurunkan hasil sampai 30%. Penyakit ini banyak terjadi pada musim hujan atau kemarau yang basah terutama pada lahan sawah yang selalu tergenang, dan dipupuk N tinggi (≥ 250 kg Urea / ha)',
            'recomendation' => 'Menanam varietas tahan. Untuk daerah endemis varietas Code dan Angke
            Bibit padi yang ditanam tidak dipotong pada bagian ujungnya.
            Jarak tanam jangan terlalu rapat, disarankan dengan cara tanam jejer legowo.
            Pengairan berselang (intermiten), hindari penggenangan yang terus-menerus
            Pemupukan berimbang, jangan terlalu banyak pupuk N
            Jika intensitas penyakit melebihi 20%, semprot dengan bakterisida',
            'sample_img' => 'https://i2.wp.com/gdmorganic.com/wp-content/uploads/2021/05/penyakit-hawar-daun.jpg'
        ]);

        Disease::create([
            'name' => 'Blast',
            'description' => 'Gejala penyakit blast dapat muncul pada daun, batang, malai, bulir padi. Bercak pada daun (leaf blas) berbentuk belah ketupat, awalnya hijau keabu-abuan kemudian putih dan akhirnya abu-abu dengan bagian tepi berwarna coklat atau coklat kemerahan. Bentuk dan warna bercak bervariasi tergantung keadaan lingkungan, umur bercak, ketahanan padi.',
            'recomendation' => 'Gunakan varietas tahan sesuai dengan sebaran ras yang ada di daerah setempat.
            Gunakan benih sehat.
            Dilakukan seed treatment yaitu benih direndam dahulu oleh fungisida sebelum benih disebar
            Hidarkan penggunaan pupuk nitrogen diatas dosis anjuran.
            Hindarkan tanam padi dengan varietas yang sama terus menerus sepanjang tahun.
            Sanitasi lingkungan harus intensif karena inang alternatif patogen dapat berupa rerumputan.
            Hindari tanam padi terlambat dari tanaman petani di sekitarnya.
            Pengendalian secara dini dengan perlakuan benih sangat dianjurkan untuk menyelamatkan persemaian sampai umur 30 hari setelah sebar.
            Penyemprotan fungisida sistemik sebaiknya 2 kali pada saat stadia tanaman anakan maksimum dan awal berbunga untuk mencegah penyakit blas daun dan blas leher terutama di daerah endemik.
            Hindarkan jarak tanam rapat (sebar langsung).
            Tanam dengan system tanam jajar legowo (Jarwo) 2:1
            Pemakaian kompos sebagai sumber bahan organik.',
            'sample_img' => 'https://i2.wp.com/gdmorganic.com/wp-content/uploads/2021/05/penyakit-hawar-daun.jpg'
        ]);
    }
}
