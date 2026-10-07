<?php

namespace Database\Seeders;

use App\Models\Achievement;
use Illuminate\Database\Seeder;

class AchievementSeeder extends Seeder
{
    public function run(): void
    {
        Achievement::updateOrCreate(
            ['title' => 'Gold Medal - PESPARAWI Mahasiswa Nasional XVIII 2024', 'date' => '2024-10-01'],
            [
                'issuer' => 'PESPARAWI Mahasiswa Nasional (Kupang, NTT)',
                'description' => 'Berperan sebagai Pelatih (Trainer) UBAYA Choir dan Penyanyi (Bass). Meraih Gold Medal (Top 7) dan penghargaan khusus Best Interpretation for Traditional Gospel.',
                'sort_order' => 1,
            ]
        );

        Achievement::updateOrCreate(
            ['title' => 'Gold Medal - PESPARAWI Mahasiswa Nasional XVII 2022', 'date' => '2022-01-01'],
            [
                'issuer' => 'PESPARAWI Mahasiswa Nasional (Semarang, Jawa Tengah)',
                'description' => 'Berperan sebagai Pelatih (Trainer) UBAYA Choir dan Penyanyi (Bass). Meraih Gold Medal dengan skor 81.50.',
                'sort_order' => 2,
            ]
        );

        Achievement::updateOrCreate(
            ['title' => 'Grand Finalist & 2 Gold Medals - 10th AVOS International Choral Competition', 'date' => '2023-11-01'],
            [
                'issuer' => 'AVOS (Bangkok, Thailand)',
                'description' => 'Berperan sebagai Pelatih (Trainer) vokal sekaligus Penyanyi (Bass) tim UBAYA Choir dalam kompetisi internasional yang diikuti 6 negara. Mengawal persiapan teknis hingga tim meraih Jury Prize pada babak Grand Prix, menjadi Grand Finalist, serta memperoleh 2 Gold Medal (A1 Mixed Choir & Sacred Music).',
                'sort_order' => 3,
            ]
        );

        Achievement::updateOrCreate(
            ['title' => 'Juara 3 Vokal Grup - PEKSIMIDA Jawa Timur 2024', 'date' => '2024-07-01'],
            [
                'issuer' => 'PEKSIMIDA Jawa Timur',
                'description' => 'Berperan sebagai Pelatih (Trainer) yang mengawal persiapan teknis tim vokal grup hingga meraih Juara 3.',
                'sort_order' => 4,
            ]
        );

        Achievement::updateOrCreate(
            ['title' => 'Juara 3 Vokal Grup - PEKSIMIDA Jawa Timur 2022', 'date' => '2022-07-01'],
            [
                'issuer' => 'PEKSIMIDA Jawa Timur',
                'description' => 'Berperan sebagai Pelatih (Trainer) yang mengawal persiapan teknis tim vokal grup hingga meraih Juara 3.',
                'sort_order' => 5,
            ]
        );

        Achievement::updateOrCreate(
            ['title' => 'Delegasi Solo Vokal Seriosa Putra - PEKSIMIDA Jawa Timur 2022', 'date' => '2022-07-01'],
            [
                'issuer' => 'PEKSIMIDA Jawa Timur',
                'description' => 'Terpilih sebagai delegasi resmi Universitas Surabaya untuk tangkai lomba Solo Vokal Seriosa Putra, tampil sebagai solo vokalis.',
                'sort_order' => 6,
            ]
        );
    }
}
