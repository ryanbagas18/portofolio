<?php

namespace Database\Seeders;

use App\Models\Certification;
use Illuminate\Database\Seeder;

class CertificationSeeder extends Seeder
{
    public function run(): void
    {
        Certification::create([
            'name' => 'Memulai Pemrograman dengan C',
            'issuer' => 'Dicoding Indonesia',
            'issue_date' => '2026-09-01',
            'expiration_date' => '2029-09-01',
            'credential_id' => '81P2K831QXOY',
            'credential_url' => 'https://www.dicoding.com/certificates/81P2K831QXOY',
            'sort_order' => 1,
        ]);

        Certification::create([
            'name' => 'SQL (Intermediate)',
            'issuer' => 'Sololearn',
            'issue_date' => '2026-09-01',
            'expiration_date' => null,
            'credential_id' => 'CC-AMDBE2B5',
            'credential_url' => 'https://www.sololearn.com/certificates/CC-AMDBE2B5',
            'sort_order' => 2,
        ]);

        Certification::create([
            'name' => 'Belajar Dasar Manajemen Proyek',
            'issuer' => 'Dicoding Indonesia',
            'issue_date' => '2026-09-01',
            'expiration_date' => '2029-09-01',
            'credential_id' => '4EXGJ990EXRL',
            'credential_url' => 'https://www.dicoding.com/certificates/4EXGJ990EXRL',
            'sort_order' => 3,
        ]);
    }
}
