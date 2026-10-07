<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    public function run(): void
    {
        Education::updateOrCreate(
            ['institution' => 'Universitas Surabaya (UBAYA)', 'degree' => 'S1 - Sarjana Komputer (S.Kom)'],
            [
                'field_of_study' => 'Teknik Informatika - Sistem Informasi Bisnis',
                'start_date' => '2021-08-01',
                'end_date' => '2026-02-01',
                'description' => 'IPK: 3.38 / 4.00. Penerima Beasiswa Mahasiswa Berprestasi. Aktif sebagai Trainer UBAYA Choir dan Panitia FESPA UBAYA.',
                'sort_order' => 1,
            ]
        );

        Education::create([
            'institution' => 'SMAN 15 Surabaya',
            'degree' => 'SMA',
            'field_of_study' => 'MIPA (Matematika dan Ilmu Pengetahuan Alam)',
            'start_date' => '2018-07-01',
            'end_date' => '2021-06-01',
            'description' => 'Aktif dalam kegiatan ekstrakurikuler Libels Voice dan Persekutuan Doa Kristen.',
            'sort_order' => 2,
        ]);
    }
}
