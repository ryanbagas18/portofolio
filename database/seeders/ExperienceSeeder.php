<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    public function run(): void
    {
        Experience::updateOrCreate(
            ['role' => 'Trainer / Divisi Pelatihan', 'organization' => 'UBAYA Choir'],
            [
                'employment_type' => 'Volunteering',
                'start_date' => '2022-08-01',
                'end_date' => '2024-08-31',
                'is_current' => false,
                'location' => 'Surabaya, Jawa Timur, Indonesia',
                'description' => 'Merancang dan mengeksekusi program pelatihan paduan suara secara menyeluruh, mulai dari pembinaan anggota baru (trainee) hingga persiapan tim untuk kompetisi tingkat nasional dan internasional. Memastikan setiap anggota menguasai pembacaan partitur not balok secara presisi, ketepatan notasi, artikulasi/diksi lirik, serta penjiwaan makna dan dinamika lagu. Berhasil mengantar tim meraih Gold Medal di Pesparawi Mahasiswa Nasional (Semarang 2022 & Kupang 2024), serta Jury Prize, Grand Finalist, dan 2 Gold Medal pada 10th AVOS International Choral Competition 2023 (Bangkok, Thailand).',
                'sort_order' => 1,
            ]
        );

        Experience::updateOrCreate(
            ['role' => 'Steering Committee', 'organization' => '9th FESPA UBAYA'],
            [
                'employment_type' => 'Volunteering',
                'start_date' => '2023-10-01',
                'end_date' => '2024-06-30',
                'is_current' => false,
                'location' => 'Surabaya, Jawa Timur, Indonesia',
                'description' => 'Mengawasi alur kerja antar-divisi dan mengarahkan eksekusi acara kompetisi paduan suara nasional. Bertanggung jawab atas operational troubleshooting dan risk management lintas divisi demi kelancaran keseluruhan kompetisi.',
                'sort_order' => 2,
            ]
        );

        Experience::updateOrCreate(
            ['role' => 'Koordinator Divisi Logistik', 'organization' => '8th FESPA UBAYA'],
            [
                'employment_type' => 'Volunteering',
                'start_date' => '2022-11-01',
                'end_date' => '2023-07-31',
                'is_current' => false,
                'location' => 'Surabaya, Jawa Timur, Indonesia',
                'description' => 'Memimpin operasional logistik kompetisi paduan suara nasional, meliputi manajemen vendor, pengadaan sarana-prasarana, dan mitigasi risiko kendala teknis venue.',
                'sort_order' => 3,
            ]
        );
    }
}
