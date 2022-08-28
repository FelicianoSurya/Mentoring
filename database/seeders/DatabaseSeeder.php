<?php

namespace Database\Seeders;

use App\Models\Announcement;
use App\Models\Kelompok;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Announcement::create([
            'date' => 'Friday, 2 May 2022',
            'title' => 'Lorem Ipsum',
            'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]);
        Announcement::create([
            'date' => 'Friday, 2 May 2022',
            'title' => 'Lorem Ipsum',
            'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]);

        Announcement::create([
            'date' => 'Monday, 2 April 2022',
            'title' => 'Lorem Ipsum',
            'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]);
        Announcement::create([
            'date' => 'Monday, 2 April 2022',
            'title' => 'Lorem Ipsum',
            'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]);
        Announcement::create([
            'date' => 'Monday, 2 April 2022',
            'title' => 'Lorem Ipsum',
            'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]);
        Kelompok::create([
            'NomorKelompok' => '1',
            'Nama' => 'Teresa Tesalonika (ID LINE: teresadoringin)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);


Kelompok::create([
            'NomorKelompok' => '1',
            'Nama' => 'SEPTIANA DEWI',
            'NIM' => '00000079882',
            'Prodi' => 'Teknik Fisika',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '1',
            'Nama' => 'RICAN ABDURRACHMAN SIREGAR',
            'NIM' => '00000078547',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '1',
            'Nama' => 'JECCZEN VERNANDEZ',
            'NIM' => '00000071959',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '1',
            'Nama' => 'YUMNA TAQIYYAH',
            'NIM' => '00000068162',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '1',
            'Nama' => 'JASON KIRANA',
            'NIM' => '00000069395',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '1',
            'Nama' => 'ANGELIKA LOVETA NATASHA BERLIANTI',
            'NIM' => '00000067846',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '1',
            'Nama' => 'NICHOLAS RAIHAN WINATA',
            'NIM' => '00000075055',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '1',
            'Nama' => 'MUHAMMAD MELVIN SAPUTRA',
            'NIM' => '00000069426',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '1',
            'Nama' => 'DARRYL KURNIAWAN',
            'NIM' => '00000078767',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '1',
            'Nama' => 'FATURACHMAN ALKAHFI',
            'NIM' => '00000075344',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '1',
            'Nama' => 'CATHERINE RAMLIAN',
            'NIM' => '00000065907',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '1',
            'Nama' => 'HAPPY MUTIARA RAMADHAN',
            'NIM' => '00000070124',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '1',
            'Nama' => 'CHRISTY ANGELA LIMARDI',
            'NIM' => '00000067719',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '1',
            'Nama' => 'SCHOLASTIKA SANTA ADITYA HAPSARI',
            'NIM' => '00000068312',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '1',
            'Nama' => 'OWEN MONTANA',
            'NIM' => '00000068012',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '1',
            'Nama' => 'ANGELICA MICHELLE SUNARNO',
            'NIM' => '00000068631',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '1',
            'Nama' => 'FRANSISKA ARIANI',
            'NIM' => '00000066694',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '1',
            'Nama' => 'IVAN SATRIA SADIDA',
            'NIM' => '00000069645',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);


Kelompok::create([
            'NomorKelompok' => '2',
            'Nama' => 'Brilliana Thalia Wijaya (ID LINE: bcuzilove)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);

Kelompok::create([
            'NomorKelompok' => '2',
            'Nama' => 'WINSON CHRISTOPHER',
            'NIM' => '00000070336',
            'Prodi' => 'Teknik Fisika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '2',
            'Nama' => 'MARIA INDRI SUNARSIH',
            'NIM' => '00000067103',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '2',
            'Nama' => 'RACHEL DAYANA TELAUMBANUA',
            'NIM' => '00000068132',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '2',
            'Nama' => 'STEVEN SUTAN MELYANSEN',
            'NIM' => '00000075276',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '2',
            'Nama' => 'MARIA CAHAYA AMORNANTA WIRASTU',
            'NIM' => '00000069169',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '2',
            'Nama' => 'CHRISTIAN CALVIN ANDREW',
            'NIM' => '00000067114',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '2',
            'Nama' => 'ARIFANDI WIRAWAN',
            'NIM' => '00000068700',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '2',
            'Nama' => 'ERZA DEVARINDRA SETIAWAN',
            'NIM' => '00000077838',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '2',
            'Nama' => 'SHELLA NOVITASARI RAMLI',
            'NIM' => '00000067445',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '2',
            'Nama' => 'EFRI RAMADHAN',
            'NIM' => '00000078662',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '2',
            'Nama' => 'CHRISTOPHER ANDREW RAHARDJO',
            'NIM' => '00000066460',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '2',
            'Nama' => 'ALBYON AULIANO',
            'NIM' => '00000073800',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '2',
            'Nama' => 'KEWILL CANG',
            'NIM' => '00000068886',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '2',
            'Nama' => 'CORNELIUS MARTINO ALEXANDRO',
            'NIM' => '00000068401',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '2',
            'Nama' => 'YULIE .',
            'NIM' => '00000078101',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '2',
            'Nama' => 'RACHEL PATRICIA ANTHONY',
            'NIM' => '00000067623',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '2',
            'Nama' => 'R. GEMILANG MULJADI',
            'NIM' => '00000072691',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '2',
            'Nama' => 'ALDEN EGAN MULIA',
            'NIM' => '00000065645',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '2',
            'Nama' => 'MUDITA HARSONO',
            'NIM' => '00000066791',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '3',
            'Nama' => 'Elisia Widya Sandra (ID LINE: elisia_ws26)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);

Kelompok::create([
            'NomorKelompok' => '3',
            'Nama' => 'MARK ADRIAN RUSLI',
            'NIM' => '00000068604',
            'Prodi' => 'Teknik Elektro',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '3',
            'Nama' => 'VINCENTIUS RAFAEL ISKANDAR',
            'NIM' => '00000071271',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '3',
            'Nama' => 'NATASYA DWI MULYADI',
            'NIM' => '00000079185',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '3',
            'Nama' => 'JENNIFER AVERINA HARJONO',
            'NIM' => '00000075649',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '3',
            'Nama' => 'JASPER VANNEDICK LIE',
            'NIM' => '00000073440',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '3',
            'Nama' => 'KIRGI HILBANI SATRIO',
            'NIM' => '00000069715',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '3',
            'Nama' => 'AURA HAPSARI',
            'NIM' => '00000074974',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '3',
            'Nama' => 'EUDEREN FREYDERIK KOK',
            'NIM' => '00000070708',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '3',
            'Nama' => 'SILVY LAURENSIA',
            'NIM' => '00000075615',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '3',
            'Nama' => 'JOSHUA JONATHAN',
            'NIM' => '00000074760',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '3',
            'Nama' => 'CHRISTOPHER MESAYA',
            'NIM' => '00000070524',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '3',
            'Nama' => 'ADRIAN IBNU HAJAR AL HAETAMY',
            'NIM' => '00000075271',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '3',
            'Nama' => 'VICO FERNANDO',
            'NIM' => '00000071219',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '3',
            'Nama' => 'ERICA NATALIE',
            'NIM' => '00000068042',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '3',
            'Nama' => 'HAKAM NATALEGAWA',
            'NIM' => '00000074994',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '3',
            'Nama' => 'LAURA AMELIA',
            'NIM' => '00000073575',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '3',
            'Nama' => 'FELICIA ATHALIA CHANDRA',
            'NIM' => '00000067700',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '3',
            'Nama' => 'ANINDYA ADARA NAMITHA',
            'NIM' => '00000067316',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '3',
            'Nama' => 'LAURA ANJANI',
            'NIM' => '00000080956',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '4',
            'Nama' => 'Samiya Humaira Azighah Sabiya (ID LINE: samiyahumaira2)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);

Kelompok::create([
            'NomorKelompok' => '4',
            'Nama' => 'CECILIA MARGARETHA CHRISTIE',
            'NIM' => '00000071675',
            'Prodi' => 'Teknik Elektro',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '4',
            'Nama' => 'IGNAS CHRISTIANTO GALIH PRASETYO',
            'NIM' => '00000068604',
            'Prodi' => 'Teknik Elektro',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '4',
            'Nama' => 'AFFAN AHSAN',
            'NIM' => '00000082503',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '4',
            'Nama' => 'JONATHAN CHRISTOPHER MULIADI',
            'NIM' => '00000068529',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '4',
            'Nama' => 'BILLSEN OCTAVIAN',
            'NIM' => '00000069826',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '4',
            'Nama' => 'FERRIS JANITRA GUNAWAN',
            'NIM' => '00000078137',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '4',
            'Nama' => 'MARIA JOVINDA LISTIANTO',
            'NIM' => '00000074756',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '4',
            'Nama' => 'ADELIA PUTRI EVELYNA ROCHMADIAN',
            'NIM' => '00000073517',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '4',
            'Nama' => 'FEBBRY FERNANDO',
            'NIM' => '00000067434',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '4',
            'Nama' => 'SONIU KUMM',
            'NIM' => '00000075571',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '4',
            'Nama' => 'AZALEA KEISHA PUTRI',
            'NIM' => '00000076267',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '4',
            'Nama' => 'RIONALDY DERMAWAN',
            'NIM' => '00000068154',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '4',
            'Nama' => 'AMANDA JOSEPHINE WIJAYA',
            'NIM' => '00000075096',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '4',
            'Nama' => 'YOHANES CARLO DA COSTA',
            'NIM' => '00000075939',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '4',
            'Nama' => 'KEYSHA DWI HANDAYANI PUTRI',
            'NIM' => '00000075648',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '4',
            'Nama' => 'MUHAMMAD FARHAN ARYAPUTRA',
            'NIM' => '00000079454',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '4',
            'Nama' => 'ARSYAHNTO CAHYA UTOMO',
            'NIM' => '00000074939',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '4',
            'Nama' => 'ANTONIUS VINSON',
            'NIM' => '00000070249',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '4',
            'Nama' => 'MUHAMMAD JIDDAN HADZIQ',
            'NIM' => '00000076004',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '5',
            'Nama' => 'Rilla Kaneishya (ID LINE: laeshyaa)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);

Kelompok::create([
            'NomorKelompok' => '5',
            'Nama' => 'MUHAMMAD DHIA RAMY',
            'NIM' => '00000078603',
            'Prodi' => 'Teknik Elektro',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '5',
            'Nama' => 'IGNATIA SARASVATI WAHYUPUTRO',
            'NIM' => '00000074891',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '5',
            'Nama' => 'SERLY NORMA YANTI',
            'NIM' => '00000070715',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '5',
            'Nama' => 'FARRAS ADITYO',
            'NIM' => '00000071595',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '5',
            'Nama' => 'GABRIELLA ALEXIS LEARSI LUMOINDONG',
            'NIM' => '00000069081',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '5',
            'Nama' => 'ZETA MILANO',
            'NIM' => '00000065500',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '5',
            'Nama' => 'MATTHEW SIRENA UTOMO',
            'NIM' => '00000077120',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '5',
            'Nama' => 'CINDY AVANDEL',
            'NIM' => '00000074834',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '5',
            'Nama' => 'MONICA JESSELYN GUNAWAN',
            'NIM' => '00000069310',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '5',
            'Nama' => 'VIC ADRIAN TERRANCE',
            'NIM' => '00000069517',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '5',
            'Nama' => 'MALVIN PASKALIS',
            'NIM' => '00000070394',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '5',
            'Nama' => 'ATHAR RIZKY KURNIAWAN',
            'NIM' => '00000073331',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '5',
            'Nama' => 'BEATRIZ AURELIA SAREAL',
            'NIM' => '00000068434',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '5',
            'Nama' => 'ALWI AULIA AKBAR TANJUNG',
            'NIM' => '00000072245',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '5',
            'Nama' => 'KOMANG SERUNI KARTIKA PUTRI',
            'NIM' => '00000072700',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '5',
            'Nama' => 'PAUNDRA RIZKY KRESNO ANANDA',
            'NIM' => '00000073914',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '5',
            'Nama' => 'RAPHAEL MARIO WIHARTANA',
            'NIM' => '00000069299',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '5',
            'Nama' => 'FARREL YONATHAN CHRISTIAN',
            'NIM' => '00000071429',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '5',
            'Nama' => 'ANGELICA KARLA SEPTIANA SETIAWAN',
            'NIM' => '00000071492',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '6',
            'Nama' => 'Nathania Felicia Gunadi (ID LINE: nathaniafg)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);

Kelompok::create([
            'NomorKelompok' => '6',
            'Nama' => 'FREDERICO WIDJAJA',
            'NIM' => '00000067121',
            'Prodi' => 'Teknik Elektro',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '6',
            'Nama' => 'JEFFERSON SUHENDRY',
            'NIM' => '00000077351',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '6',
            'Nama' => 'CHALLISTA THEODOSEE',
            'NIM' => '00000076829',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '6',
            'Nama' => 'DWI YULIANTO',
            'NIM' => '00000074859',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '6',
            'Nama' => 'STANLEY ADE PUTRA',
            'NIM' => '00000067324',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '6',
            'Nama' => 'RADEN ARKANANTA PADMANEGARA',
            'NIM' => '00000074928',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '6',
            'Nama' => 'DAVID WALADA AL FATH',
            'NIM' => '00000075379',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '6',
            'Nama' => 'AURELLIA SHABRINA NURFITRIANI',
            'NIM' => '00000071156',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '6',
            'Nama' => 'LILIANA .',
            'NIM' => '00000071926',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '6',
            'Nama' => 'NASYA KARINA WAHYUDIN',
            'NIM' => '00000068163',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '6',
            'Nama' => 'RIO JOAN RINALDO',
            'NIM' => '00000078315',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '6',
            'Nama' => 'RIZKY ALI ZAMZAMI',
            'NIM' => '00000079009',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '6',
            'Nama' => 'BENNEDICT TAY',
            'NIM' => '00000070568',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '6',
            'Nama' => 'AUREL ANANTA CRISTIANI',
            'NIM' => '00000070903',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '6',
            'Nama' => 'EUNIKE SEFIANI IRAWAN',
            'NIM' => '00000071652',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '6',
            'Nama' => 'MAGDALENA YETA PUTRI',
            'NIM' => '00000075447',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '6',
            'Nama' => 'PRISCILLA AMANDA LISWANTO',
            'NIM' => '00000068750',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '6',
            'Nama' => 'AURELLIA ISABELLA TABITHA THEJA',
            'NIM' => '00000068114',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '6',
            'Nama' => 'AUREL ADELINE ANASTASIA',
            'NIM' => '00000070109',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '6',
            'Nama' => 'FAUZIYAH ILLAHI',
            'NIM' => '00000080908',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '7',
            'Nama' => 'Shabelita Luisa (ID LINE: shabelmax)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);

Kelompok::create([
            'NomorKelompok' => '7',
            'Nama' => 'MOCHAMMAD ALFATIH PUTRADIARY',
            'NIM' => '00000080999',
            'Prodi' => 'Teknik Elektro',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '7',
            'Nama' => 'RAFAEL ZECONIAH KUSUMA',
            'NIM' => '00000068731',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '7',
            'Nama' => 'SAMUEL CHRISANDY',
            'NIM' => '00000070913',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '7',
            'Nama' => 'MICHAEL LEMAN',
            'NIM' => '00000072806',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '7',
            'Nama' => 'ZIA AMIRA',
            'NIM' => '00000071526',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '7',
            'Nama' => 'MOCHAMMAD FARRASZAKY WISHNUPUTRA',
            'NIM' => '00000069890',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '7',
            'Nama' => 'THABINA RAFA HUWAIDA',
            'NIM' => '00000073264',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '7',
            'Nama' => 'LOVINA CHARLENE',
            'NIM' => '00000079176',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '7',
            'Nama' => 'MUHAMMAD ALIF RIZKY',
            'NIM' => '00000075745',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '7',
            'Nama' => 'RICKY SANTOSO',
            'NIM' => '00000079039',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '7',
            'Nama' => 'STEVANUS FIRMAN WIDYATMOKO',
            'NIM' => '00000069971',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '6',
            'Nama' => 'NAUFAL MARRA ARRAFI',
            'NIM' => '00000074899',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '7',
            'Nama' => 'ALVINA WIJAYANTI',
            'NIM' => '00000068171',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '7',
            'Nama' => 'BRIGITA MARGARETA LUMBANTORUAN',
            'NIM' => '00000078410',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '7',
            'Nama' => 'MARSYA ANANDA RAHMAT',
            'NIM' => '00000078281',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '7',
            'Nama' => 'OCTARIA RIZKI CAMILA',
            'NIM' => '00000079905',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '7',
            'Nama' => 'JONATHAN .',
            'NIM' => '00000075909',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '7',
            'Nama' => 'AMELIA CALISTA',
            'NIM' => '00000069620',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '7',
            'Nama' => 'BENEDETTO KENNARD WIJAYA',
            'NIM' => '00000069792',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '7',
            'Nama' => 'DEEVAN LUDVIG MARVIN',
            'NIM' => '00000075257',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '8',
            'Nama' => 'Matius Damier Ruben (WA: 085946796967)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);

Kelompok::create([
            'NomorKelompok' => '8',
            'Nama' => 'EVAN JALUANDRY',
            'NIM' => '00000082448',
            'Prodi' => 'Teknik Elektro',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '8',
            'Nama' => 'SERVINA VIVIENE TJINDANA',
            'NIM' => '00000067603',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '8',
            'Nama' => 'ENZO MAISIO MANURUNG',
            'NIM' => '00000080782',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '8',
            'Nama' => 'IZZATI NABILAH',
            'NIM' => '00000070718',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '8',
            'Nama' => 'ANDREW CHAHYA PUTRA',
            'NIM' => '00000069043',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '8',
            'Nama' => 'KYOKO NOVRIYANTI PANGLEWAI LO',
            'NIM' => '00000077933',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '8',
            'Nama' => 'HUBERTUS HUGO PRATAMA',
            'NIM' => '00000069627',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '8',
            'Nama' => 'AXEL DARRENT BENEDICK',
            'NIM' => '00000076879',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '8',
            'Nama' => 'RITRA ARDHA SATYANUARTI',
            'NIM' => '00000082888',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '8',
            'Nama' => 'KEVIN BUDI SANTOSO',
            'NIM' => '00000078452',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '8',
            'Nama' => 'STEVEN LIE',
            'NIM' => '00000069236',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '8',
            'Nama' => 'DAFFA ALTHAF MAULANA',
            'NIM' => '00000076981',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '8',
            'Nama' => 'AMADEUS DYLAN TJAHJADI PRAJUGI',
            'NIM' => '00000075391',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '8',
            'Nama' => 'LAURA .',
            'NIM' => '00000077728',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '8',
            'Nama' => 'ALEXANDRA MARIA KRISTINA WIJAYA',
            'NIM' => '00000077352',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '8',
            'Nama' => 'JESSICA FERNANDA TIN',
            'NIM' => '00000078985',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '8',
            'Nama' => 'QANIA KANSHA SYAAKIRA',
            'NIM' => '00000070508',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '8',
            'Nama' => 'MICHELLA TIFANY SOSRORAHARDJO',
            'NIM' => '00000077049',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '8',
            'Nama' => 'JACQUELINE AERYS KAWIDJAJA',
            'NIM' => '00000069331',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '8',
            'Nama' => 'MUHAMMAD SHADAM PRASTIYA',
            'NIM' => '00000070204',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '9',
            'Nama' => 'Jessie Elisa Iana (ID LINE: jessielisa6723)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);

Kelompok::create([
            'NomorKelompok' => '9',
            'Nama' => 'JOSEPH FILIUS HERMAWAN',
            'NIM' => '00000067693',
            'Prodi' => 'Teknik Elektro',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '9',
            'Nama' => 'MUHAMMAD MERALEN SARBELPAN',
            'NIM' => '00000072220',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '9',
            'Nama' => 'GALUH DWI OKTARI',
            'NIM' => '00000072704',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '9',
            'Nama' => 'MAUREEN AUDILIA',
            'NIM' => '00000073951',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '9',
            'Nama' => 'RAKA RAFLI RAIHAN PANGESTU',
            'NIM' => '00000071779',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '9',
            'Nama' => 'REIKI RABBANI',
            'NIM' => '00000074925',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '9',
            'Nama' => 'FADHILAH LILY IFANKA',
            'NIM' => '00000081856',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '9',
            'Nama' => 'REGINA LIVIA CHRISTY',
            'NIM' => '00000076450',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '9',
            'Nama' => 'MICHELLE ANGELICA SALIM',
            'NIM' => '00000072810',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '9',
            'Nama' => 'LINDA SUNDOKO',
            'NIM' => '00000068320',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '9',
            'Nama' => 'DAFFA MUFLIH PURNAMA',
            'NIM' => '00000067437',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '9',
            'Nama' => 'CHYNTIA ANGELINA',
            'NIM' => '00000070095',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '9',
            'Nama' => 'MUHAMMAD RAFIAN BIMANTARA',
            'NIM' => '00000081183',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '9',
            'Nama' => 'MUHAMMAD RAFI KALUKU',
            'NIM' => '00000077152',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '9',
            'Nama' => 'ASNAYA AZRA',
            'NIM' => '00000075971',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '9',
            'Nama' => 'CARISSA ALVINA',
            'NIM' => '00000075313',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '9',
            'Nama' => 'TRISTAN OWEN TJANDERA',
            'NIM' => '00000067376',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '9',
            'Nama' => 'EUNIKE ARDAYA PRADIPTA RUKMA',
            'NIM' => '00000068094',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '9',
            'Nama' => 'JACQUELINE CHANG',
            'NIM' => '00000069490',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '9',
            'Nama' => 'SHARLEEN CARISSA',
            'NIM' => '00000067812',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '10',
            'Nama' => 'Salwa Anindiza Rabbani (ID LINE: saleuwa)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);

Kelompok::create([
            'NomorKelompok' => '10',
            'Nama' => 'FERDY MARLIAN',
            'NIM' => '00000068244',
            'Prodi' => 'Teknik Elektro',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '10',
            'Nama' => 'PRINCESS JESSICA MANUELA',
            'NIM' => '00000073209',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '10',
            'Nama' => 'VICTOR LIU',
            'NIM' => '00000068031',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '10',
            'Nama' => 'MUHAMMAD ALRAZI HASAN',
            'NIM' => '00000070929',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '10',
            'Nama' => 'FIDELIS EVANGELLO PRAMUDHA WUTUN',
            'NIM' => '00000081979',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '10',
            'Nama' => 'REINALDO DHARMAPUTRA TANAYLA',
            'NIM' => '00000081150',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '10',
            'Nama' => 'MICHAEL ADITYA',
            'NIM' => '0000068806',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '10',
            'Nama' => 'EVAN YO',
            'NIM' => '00000068870',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '10',
            'Nama' => 'ANGELICA CHRISTY FAYOLA',
            'NIM' => '00000068041',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '10',
            'Nama' => 'TIMOTHY ANDERSON HOTLAN TAMPUBOLON',
            'NIM' => '00000065365',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '10',
            'Nama' => 'ANANDA NEVA AZALIA',
            'NIM' => '00000071772',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '10',
            'Nama' => 'MARIA RUMBHANEY TARIGAN',
            'NIM' => '00000081832',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '10',
            'Nama' => 'CHRISTOPHER VALERIE MENAK',
            'NIM' => '00000082827',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '10',
            'Nama' => 'AURELIA DEVIANI JAYADI',
            'NIM' => '00000071739',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '10',
            'Nama' => 'FRICKSON SUFIAN',
            'NIM' => '00000078649',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '10',
            'Nama' => 'JADE CHARLOTTE',
            'NIM' => '00000068361',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '10',
            'Nama' => 'KEIZA JOSEPHINE LEE',
            'NIM' => '00000067774',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '10',
            'Nama' => 'FERDY MARLIAN',
            'NIM' => '00000068244',
            'Prodi' => 'Teknik Elektro',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '11',
            'Nama' => 'Prisilla Natalia (ID LINE: cilla.talia)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);

Kelompok::create([
            'NomorKelompok' => '11',
            'Nama' => 'LISTIA ANNISA',
            'NIM' => '00000078441',
            'Prodi' => 'Teknik Elektro',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '11',
            'Nama' => 'AGNES CHRISTIA DWINANDA',
            'NIM' => '00000071894',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '11',
            'Nama' => 'DRIAN JAYASIDDHI',
            'NIM' => '00000082802',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '11',
            'Nama' => 'ONGKO FILLBERTO',
            'NIM' => '00000070324',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '11',
            'Nama' => 'LATICIA TERRENE GUNAWAN',
            'NIM' => '00000068953',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '11',
            'Nama' => 'MARITZA ZAHRA LEVINA',
            'NIM' => '00000077932',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '11',
            'Nama' => 'PATRICK JEHEZKIEL HANDOKO',
            'NIM' => '00000078577',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '11',
            'Nama' => 'ALLIYAH ATHIRAH',
            'NIM' => '00000082489',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '11',
            'Nama' => 'MUHAMMAD ZIDANE BINTANG RAMADHAN',
            'NIM' => '00000075605',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '11',
            'Nama' => 'RIO FERDINAN',
            'NIM' => '00000070666',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '11',
            'Nama' => 'ARFITO SAPUTRA',
            'NIM' => '00000082190',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '11',
            'Nama' => 'CATHERINE SHEVANSIA CELLEN FEY',
            'NIM' => '00000069064',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '11',
            'Nama' => 'YOSUA MARTIN SEBASTIAN',
            'NIM' => '00000075409',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '11',
            'Nama' => 'AMANDA CANDRASAPUTRA',
            'NIM' => '00000067825',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '11',
            'Nama' => 'IMELDA SILVIANA GUNARTO',
            'NIM' => '00000070128',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '11',
            'Nama' => 'I MADE DIVA ADHI WIGUNA',
            'NIM' => '00000069916',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '11',
            'Nama' => 'MECA FIDELMA',
            'NIM' => '00000077114',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '11',
            'Nama' => 'VIOLA ANANTA',
            'NIM' => '00000068318',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '11',
            'Nama' => 'MARCO ANTOLYN',
            'NIM' => '00000068335',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '11',
            'Nama' => 'ALFONSUS GIVEN',
            'NIM' => '00000071140',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '12',
            'Nama' => 'Areta Escalonica Candra (ID LINE: areta32)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);

Kelompok::create([
            'NomorKelompok' => '12',
            'Nama' => 'RICHARD SUJONO',
            'NIM' => '00000071197',
            'Prodi' => 'Teknik Elektro',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '12',
            'Nama' => 'YOVIE GIVEN NATA WIDJAJA',
            'NIM' => '00000070541',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '12',
            'Nama' => 'LIAN WIRA MANUEL MAHARAJA',
            'NIM' => '00000075938',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '12',
            'Nama' => 'JAMES ANDERSEN',
            'NIM' => '00000069612',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '12',
            'Nama' => 'MUHAMAD SULTAN SAKTI NUZULUDDIN PUTRA',
            'NIM' => '00000075069',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '12',
            'Nama' => 'RAFIDA IZZAH SETIAJI',
            'NIM' => '00000070848',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '12',
            'Nama' => 'CARLOS DENIEL WINATA',
            'NIM' => '00000067804',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '12',
            'Nama' => 'ALLIYYA DAMAYANTI',
            'NIM' => '00000078967',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '12',
            'Nama' => 'RAFAEL RIDWAN KUSTEDI',
            'NIM' => '00000073285',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '12',
            'Nama' => 'MICHAEL TIO',
            'NIM' => '00000070515',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '12',
            'Nama' => 'LEONARDUS DWIKY DIMAS ARYA ADILLA',
            'NIM' => '00000075794',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '12',
            'Nama' => 'YVEST TANNO',
            'NIM' => '00000070634',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '12',
            'Nama' => 'YURISSA AZALIA KONITA',
            'NIM' => '00000070155',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '12',
            'Nama' => 'ELYSHA AURIEL DINITA',
            'NIM' => '00000068152',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '12',
            'Nama' => 'EMMANUEL ELANG BANGUN WIBOWO',
            'NIM' => '00000082002',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '12',
            'Nama' => 'STEPHANIE CHEN',
            'NIM' => '00000071702',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '12',
            'Nama' => 'LUZMI MUHAMMAD RAMADHAN',
            'NIM' => '00000076415',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '12',
            'Nama' => 'CAROLINE INDIRA SETIAWAN',
            'NIM' => '00000070497',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '12',
            'Nama' => 'CAROLINE DELFIN GOZALI',
            'NIM' => '00000069984',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '12',
            'Nama' => 'HENDRI NURSALIM',
            'NIM' => '00000073496',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '13',
            'Nama' => 'Audy Devanty (ID LINE: dyyvnty)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);

Kelompok::create([
            'NomorKelompok' => '13',
            'Nama' => 'MARIO TANGI AIRAZ SITORUS',
            'NIM' => '00000067801',
            'Prodi' => 'Teknik Elektro',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '13',
            'Nama' => 'MUHAMMAD AGUS SUYITNO',
            'NIM' => '00000072792',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '13',
            'Nama' => 'DIRA NATASYA MAYANG PUTRI',
            'NIM' => '00000071946',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '13',
            'Nama' => 'RR MARIA GISELLA PCP',
            'NIM' => '00000066990',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '13',
            'Nama' => 'SULTAN RAFA IBRAHIM',
            'NIM' => '00000071837',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '13',
            'Nama' => 'ROGER NOEL AUSTIN LEE',
            'NIM' => '00000067328',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '13',
            'Nama' => 'IBRAHIM ZAIDAN',
            'NIM' => '00000073277',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '13',
            'Nama' => 'GANI OBRIENT',
            'NIM' => '00000078391',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '13',
            'Nama' => 'MUHAMMAD REYNALDO ABIYOSO',
            'NIM' => '00000081046',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '13',
            'Nama' => 'YASMIN TIARA PUTRI',
            'NIM' => '00000071477',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '13',
            'Nama' => 'CALISTA BELVA',
            'NIM' => '00000067339',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '13',
            'Nama' => 'TIARA NAOMI ABIGAIL',
            'NIM' => '00000068068',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '13',
            'Nama' => 'ALYSSA AZZAHRA ARIFIN',
            'NIM' => '00000070933',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '13',
            'Nama' => 'SITI FALINA JUMADILA',
            'NIM' => '00000075049',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '13',
            'Nama' => 'CASEY ZENIA',
            'NIM' => '00000078976',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '13',
            'Nama' => 'ARUNG BAZLAA BAZILAH WIDO',
            'NIM' => '00000081679',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '13',
            'Nama' => 'CHRISTINA RANIA SURYAWIJAYA',
            'NIM' => '00000066784',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '13',
            'Nama' => 'CAROLUS CAHYO PAKSI KENCONO',
            'NIM' => '00000070041',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '13',
            'Nama' => 'MUHAMMAD UBAIDILLAH',
            'NIM' => '00000075599',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '13',
            'Nama' => 'FELICIA LEONORA',
            'NIM' => '00000070610',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '14',
            'Nama' => 'Karmelia Equeena (ID LINE: queena38)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);

Kelompok::create([
            'NomorKelompok' => '14',
            'Nama' => 'VINCENT .',
            'NIM' => '00000074744',
            'Prodi' => 'Teknik Elektro',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '14',
            'Nama' => 'EKA SATRIA STEVEN VERDIANSA',
            'NIM' => '00000075200',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '14',
            'Nama' => 'PRIHANTOKO PRIYO GUMELAR',
            'NIM' => '00000075057',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '14',
            'Nama' => 'EVAN HENDRALOKA',
            'NIM' => '00000067469',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '14',
            'Nama' => 'NAUFAL AUBIN TOMBAK ERDIAN PUTRA',
            'NIM' => '00000067493',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '14',
            'Nama' => 'ROYSTON CHIANDRA',
            'NIM' => '00000066463',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '14',
            'Nama' => 'GRACELLA CAROLINE',
            'NIM' => '00000068188',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '14',
            'Nama' => 'VIKA SALSABILA ONO ALAWE HALAWA',
            'NIM' => '00000072705',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '14',
            'Nama' => 'CATARINA NAOMIY TINAMBUNAN',
            'NIM' => '00000081839',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '14',
            'Nama' => 'WILBERT BERNARDI',
            'NIM' => '00000069185',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '14',
            'Nama' => 'JHENO SYECHLO',
            'NIM' => '00000067872',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '14',
            'Nama' => 'KEIRA NORELIA CHANDRA',
            'NIM' => '00000068020',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '14',
            'Nama' => 'YENNY SETIAWAN',
            'NIM' => '00000071577',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '14',
            'Nama' => 'ANGELIN PRECILLIA',
            'NIM' => '00000070891',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '14',
            'Nama' => 'IMAM ARKAAN PUTRA ANDRETA',
            'NIM' => '00000070325',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '14',
            'Nama' => 'CITRA PUSPA NIRMALA',
            'NIM' => '00000068149',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '14',
            'Nama' => 'JENNYFER HUANG',
            'NIM' => '00000066844',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '14',
            'Nama' => 'CECILIA NATHANIA CHRISTANTO',
            'NIM' => '00000069518',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '14',
            'Nama' => 'ANDRIANA CIPTA WIJAYA',
            'NIM' => '00000068916',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '14',
            'Nama' => 'FELICIA GLORIA SUWITO',
            'NIM' => '00000067400',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '15',
            'Nama' => 'Jesslyn Angelina (ID LINE: jesslyn.a02)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);

Kelompok::create([
            'NomorKelompok' => '15',
            'Nama' => 'JETHRO JOTHAM ROA TJIPTAMUSTIKA',
            'NIM' => '00000069178',
            'Prodi' => 'Teknik Elektro',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '15',
            'Nama' => 'ATHAYA HANA MUMTAZA',
            'NIM' => '00000071797',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '15',
            'Nama' => 'EVAN LOANO',
            'NIM' => '00000068315',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '15',
            'Nama' => 'SALSABILLAH ISNAIN ZAHIRAH',
            'NIM' => '00000071543',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '15',
            'Nama' => 'BIANCA ANNABELLE SURJADI',
            'NIM' => '00000068158',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '15',
            'Nama' => 'RUSYDA INAYATI ARHAM',
            'NIM' => '00000070422',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '15',
            'Nama' => 'JASON MILANO CHANDRA',
            'NIM' => '00000069162',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '15',
            'Nama' => 'MANNUEL REINHART POTANOBU',
            'NIM' => '00000071069',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '15',
            'Nama' => 'NAUFAL ASHIDDIQI',
            'NIM' => '00000082879',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '15',
            'Nama' => 'HANS PHILEMON LIMANZA',
            'NIM' => '00000070710',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '15',
            'Nama' => 'LOUIS GABRIEL HERNANDES',
            'NIM' => '00000070250',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '15',
            'Nama' => 'AURELL VIENCA YUDHISTI',
            'NIM' => '00000068026',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '15',
            'Nama' => 'ADAM GREGORIUS PASKAH LAYANAN',
            'NIM' => '00000073931',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '15',
            'Nama' => 'FERINA ATHALIA WIBOWO',
            'NIM' => '00000072062',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '15',
            'Nama' => 'NAISYA DA MATTA ARALLE',
            'NIM' => '00000083318',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '15',
            'Nama' => 'CATHRINE NATASYA',
            'NIM' => '00000087992',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '15',
            'Nama' => 'ABRAM BENEDICT MAMAHIT',
            'NIM' => '00000077192',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '15',
            'Nama' => 'ATALIA LAMBOK HASIAN SIRAIT',
            'NIM' => '00000073476',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '15',
            'Nama' => 'TYASWENING TRIHATMA KURNIANI',
            'NIM' => '00000087678',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '15',
            'Nama' => 'FELICIA MAUREEN',
            'NIM' => '00000071585',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '16',
            'Nama' => 'Angelica Koeswanto (ID LINE: jesslyn.a02)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);

Kelompok::create([
            'NomorKelompok' => '16',
            'Nama' => 'DYLAN ERVIAN',
            'NIM' => '00000075730',
            'Prodi' => 'Teknik Elektro',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '16',
            'Nama' => 'EUGENIA STEFANI ELETA',
            'NIM' => '00000070120',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '16',
            'Nama' => 'JONATHAN DEFFAN SONDAKH',
            'NIM' => '00000068928',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '16',
            'Nama' => 'NAUFAL RIZQIANSYAH',
            'NIM' => '00000072264',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '16',
            'Nama' => 'WIEWYN .',
            'NIM' => '00000066428',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '16',
            'Nama' => 'RYAN MAULANA',
            'NIM' => '00000068867',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '16',
            'Nama' => 'KADISHA MAHARAJ SUHAIMI',
            'NIM' => '00000082441',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '16',
            'Nama' => 'NATALIA JOANNA HALIM',
            'NIM' => '00000070932',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '16',
            'Nama' => 'JANE FEDORA JANUAR',
            'NIM' => '00000066841',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '16',
            'Nama' => 'ADRIANUS EZEEKIEL DYARSA AMARTA',
            'NIM' => '00000071229',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '16',
            'Nama' => 'HIZKIA OBERTA PRATAMA GUNAWAN',
            'NIM' => '00000074912',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '16',
            'Nama' => 'CALVIN ALVIAN KALIM',
            'NIM' => '00000073173',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '16',
            'Nama' => 'NADHIRA KEISYA CALLISTA',
            'NIM' => '00000075913',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '16',
            'Nama' => 'VANESSA .',
            'NIM' => '00000065115',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '16',
            'Nama' => 'GABRIELLA SALLY LIMARAN',
            'NIM' => '00000066497',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '16',
            'Nama' => 'KAYLA ZAHRA PUTRI HARJANTO',
            'NIM' => '00000088970',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '16',
            'Nama' => 'ALBERTUS GADING PRADIPTO',
            'NIM' => '00000074761',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '16',
            'Nama' => 'MARIA GRACIELLA ABET',
            'NIM' => '00000069327',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '16',
            'Nama' => 'HARIYANTO SURYAPATI',
            'NIM' => '00000071811',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '16',
            'Nama' => 'FELICIA VIANA LIM',
            'NIM' => '00000077873',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '17',
            'Nama' => 'Rindu Amalia (ID LINE: rinduamalia23)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);

Kelompok::create([
            'NomorKelompok' => '17',
            'Nama' => 'VALENTINO FERNANDO',
            'NIM' => '00000069503',
            'Prodi' => 'Teknik Elektro',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '17',
            'Nama' => 'AURESIA YUNITA',
            'NIM' => '00000068381',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '17',
            'Nama' => 'VINCENT FERDINAND',
            'NIM' => '00000070215',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '17',
            'Nama' => 'ANDICO AJI SYAHPUTRA',
            'NIM' => '00000071590',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '17',
            'Nama' => 'RAYHANS TANU WIJAYA',
            'NIM' => '00000076819',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '17',
            'Nama' => 'MUHAMMAD ELMO HARTAWAN',
            'NIM' => '00000073152',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '17',
            'Nama' => 'RYAN FERNANDO',
            'NIM' => '00000073294',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '17',
            'Nama' => 'PASHA RIZKY RAMADHAN',
            'NIM' => '00000073963',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '17',
            'Nama' => 'HERI SUGIANTO',
            'NIM' => '00000073259',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '17',
            'Nama' => 'INOSENSIUS DWI ATMOKO',
            'NIM' => '00000067501',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '17',
            'Nama' => 'DWIKY ANDIKA PANDAYU PUTRA',
            'NIM' => '00000072690',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '17',
            'Nama' => 'RIZKY OKTA DERMAWAN',
            'NIM' => '00000075201',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '17',
            'Nama' => 'MERY AVIFAH',
            'NIM' => '00000084276',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '17',
            'Nama' => 'OLLIE KAMAL MARTANTO',
            'NIM' => '00000070047',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '17',
            'Nama' => 'GABRIELLA JOSELLYN GOESWADARUS',
            'NIM' => '00000067371',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '17',
            'Nama' => 'ELOK PUJAAN HANAN',
            'NIM' => '00000072793',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '17',
            'Nama' => 'ALYSSA SUNNY THE',
            'NIM' => '00000066471',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '17',
            'Nama' => 'MICHELLE AUDREY WIJAYA',
            'NIM' => '00000067864',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '17',
            'Nama' => 'JOSELINE ANABELA HAMSYAH',
            'NIM' => '00000069689',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '17',
            'Nama' => 'FAYYAZ RAMADHIAN RAMARGA',
            'NIM' => '00000070866',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '18',
            'Nama' => 'Joshua Hasbi (ID LINE: joshuahs88)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);

Kelompok::create([
            'NomorKelompok' => '18',
            'Nama' => 'FRIDOLIN OKTAFANDY RAHARDJO',
            'NIM' => '00000071183',
            'Prodi' => 'Teknik Elektro',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '18',
            'Nama' => 'ANGINETTE YONI',
            'NIM' => '00000068287',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '18',
            'Nama' => 'VINCENT JIU SETIAWAN',
            'NIM' => '00000066977',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '18',
            'Nama' => 'ANGELIN .',
            'NIM' => '00000067862',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '18',
            'Nama' => 'VERNANDO KHAN S',
            'NIM' => '00000075466',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '18',
            'Nama' => 'SALSABILA DARIYA SALMA',
            'NIM' => '00000077950',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '18',
            'Nama' => 'AGNES MARSHA SUSANTI',
            'NIM' => '00000075119',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '18',
            'Nama' => 'ANGELICA FELENCIA ALEXANDRA',
            'NIM' => '00000072790',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '18',
            'Nama' => 'HELENA FLORENCIA',
            'NIM' => '00000066360',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '18',
            'Nama' => 'ALBERT SUNUR',
            'NIM' => '00000073635',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '18',
            'Nama' => 'ANDI KESYA SYLVIA ZEFANYA MANGGABARANI CL',
            'NIM' => '00000072374',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '18',
            'Nama' => 'RAFIE DZAKY PUTRA FEREZKA',
            'NIM' => '00000074998',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '18',
            'Nama' => 'CATHERINE FLORENSIA IRENA',
            'NIM' => '00000068869',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '18',
            'Nama' => 'FIVY KANIAH TARALIN',
            'NIM' => '00000077811',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '18',
            'Nama' => 'HANIF FAJAR RAMADHAN',
            'NIM' => '00000073187',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '18',
            'Nama' => 'SABINA AURELIA PINKAN ISKANDAR',
            'NIM' => '00000069008',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '18',
            'Nama' => 'JENINA AZMAURA DERMAWAN',
            'NIM' => '00000069323',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '18',
            'Nama' => 'MUHAMMAD RIDHO ATHAYA ZULHAM',
            'NIM' => '00000073797',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '18',
            'Nama' => 'HANSEN DHARMA TANGTOBING TJO',
            'NIM' => '00000066360',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '18',
            'Nama' => 'HANSEN DHARMA TANGTOBING TJO',
            'NIM' => '00000043299',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '19',
            'Nama' => 'Joanne Aster Black (ID LINE: aster.ixs)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);

Kelompok::create([
            'NomorKelompok' => '19',
            'Nama' => 'FIRA SEFIRNA ANANDA',
            'NIM' => '00000077869',
            'Prodi' => 'Perhotelan',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '19',
            'Nama' => 'SAVIRA ANGEL FAKHLEVI',
            'NIM' => '00000071949',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '19',
            'Nama' => 'VINCENT JULICIO CHRISTIAN',
            'NIM' => '00000075655',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '19',
            'Nama' => 'NICHOLAS SOESILO',
            'NIM' => '00000066490',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '19',
            'Nama' => 'AILEE VICH HOUWARD',
            'NIM' => '00000069108',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '19',
            'Nama' => 'NELLZENT OUW YANG',
            'NIM' => '00000071214',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '19',
            'Nama' => 'EFFRATA FAITH RACHMAN',
            'NIM' => '00000067776',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '19',
            'Nama' => 'WINNA JANESIA',
            'NIM' => '00000071558',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '19',
            'Nama' => 'DEVEN KLEIN CHRISTIAN',
            'NIM' => '00000078983',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '19',
            'Nama' => 'ALICE MARYBETH',
            'NIM' => '00000077329',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '19',
            'Nama' => 'DYLAN WILLIAM',
            'NIM' => '00000067644',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '19',
            'Nama' => 'MUSTOFA SALIF TASYIFIN',
            'NIM' => '00000078298',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '19',
            'Nama' => 'ANA MARLINA',
            'NIM' => '00000077124',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '19',
            'Nama' => 'FRANCISCA ROMANA ADRILIA PUTRI',
            'NIM' => '00000074865',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '19',
            'Nama' => 'HAILSA ARINTA IRENKYA MANOPPO',
            'NIM' => '00000068595',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '19',
            'Nama' => 'ANAND ELWIN HO',
            'NIM' => '00000067631',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '19',
            'Nama' => 'JENNA SJAKLIF',
            'NIM' => '00000067708',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '19',
            'Nama' => 'CELICA .',
            'NIM' => '00000068076',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '19',
            'Nama' => 'KEYZA GEIYA SABIZANA',
            'NIM' => '00000079263',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '19',
            'Nama' => 'DAVE WILLIAM',
            'NIM' => '00000057160',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '20',
            'Nama' => 'Felisia Agata (ID LINE: Felisiagata)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);

Kelompok::create([
            'NomorKelompok' => '20',
            'Nama' => 'TIMOTIUS ANERLIE',
            'NIM' => '00000079942',
            'Prodi' => 'Perhotelan',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '20',
            'Nama' => 'NUKE ARYANDHITA OCTAVIARINI',
            'NIM' => '00000080873',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '20',
            'Nama' => 'VICTOR GEORGIUS WIDIYANTO',
            'NIM' => '00000073402',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '20',
            'Nama' => 'NICHOLAS SEAN SIDHARTA',
            'NIM' => '00000070245',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '20',
            'Nama' => 'KEZIA DOREA SYALOMITA KATIHOKANG',
            'NIM' => '00000069867',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '20',
            'Nama' => 'PUTRA DIMAS RAKAZAHID',
            'NIM' => '00000071919',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '20',
            'Nama' => 'ADRIEL RADITYA',
            'NIM' => '00000069086',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '20',
            'Nama' => 'MUHAMMAD FARID NABIL',
            'NIM' => '00000076818',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '20',
            'Nama' => 'JOANNE GRACIA GUNAWAN',
            'NIM' => '00000071547',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '20',
            'Nama' => 'MUHAMMAD AMAR FADILLAH',
            'NIM' => '00000087694',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '20',
            'Nama' => 'EDWIN FEDORA LOLO',
            'NIM' => '00000069568',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '20',
            'Nama' => 'TROY WILLIAM RAHMAD',
            'NIM' => '00000071345',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '20',
            'Nama' => 'ADINDA TRIMADYA PUTRI',
            'NIM' => '00000074747',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '20',
            'Nama' => 'MAGHFIRA MUTIARA PERMANA',
            'NIM' => '00000067959',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '20',
            'Nama' => 'BAGAS PRIYA  ATHALLAH',
            'NIM' => '00000069174',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '20',
            'Nama' => 'TIARA KARTIKA FEBRIANTI',
            'NIM' => '00000073293',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '20',
            'Nama' => 'CALISTA ABIGAIL WAIRATA',
            'NIM' => '00000068283',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '20',
            'Nama' => 'RAHADIANA SEKAR CANDRAKANTI',
            'NIM' => '00000077568',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '20',
            'Nama' => 'ALFANIA GLORY CALISTA',
            'NIM' => '00000057165',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '21',
            'Nama' => 'Joan Noverlianto Tanawi (ID LINE: joan1811)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);

Kelompok::create([
            'NomorKelompok' => '21',
            'Nama' => 'KEYZIA LAURENSIA',
            'NIM' => '00000068425',
            'Prodi' => 'Perhotelan',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '21',
            'Nama' => 'WARDAH APRILIA',
            'NIM' => '00000076441',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '21',
            'Nama' => 'JOSUA RIVO MUIN',
            'NIM' => '00000072776',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '21',
            'Nama' => 'NOVA INDAH LUMBANTORUAN',
            'NIM' => '00000081152',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '21',
            'Nama' => 'CLARISSA BEATRICE METTADIA',
            'NIM' => '00000067628',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '21',
            'Nama' => 'FULGENTIUS FILBERT SURYAWAN',
            'NIM' => '00000066672',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '21',
            'Nama' => 'KEVIN ERNANDO',
            'NIM' => '00000067593',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '21',
            'Nama' => 'ANINDYA AULIA RAHMI',
            'NIM' => '00000077634',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '21',
            'Nama' => 'SHERLY FEBRIANTI NENOMETA',
            'NIM' => '00000077959',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '21',
            'Nama' => 'SEPTYO ADI DWI PUTRA',
            'NIM' => '00000080738',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '21',
            'Nama' => 'TAMARA ZUMAIDAH MUHAMAD THAMRIN',
            'NIM' => '00000076956',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '21',
            'Nama' => 'RICHIE ARDIANTO',
            'NIM' => '00000068959',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '21',
            'Nama' => 'SONYA LOUISE TASYA',
            'NIM' => '00000083178',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '21',
            'Nama' => 'FREDELLA GANESHA',
            'NIM' => '00000068226',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '21',
            'Nama' => 'NATASHA CHRISTABEL ANGIE',
            'NIM' => '00000068397',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '21',
            'Nama' => 'YAZZID FADHILLAH MILAN WENNAS',
            'NIM' => '00000073828',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '21',
            'Nama' => 'DEBORAH KUSENDARWATI SULISTIO',
            'NIM' => '00000068807',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '21',
            'Nama' => 'DARELL JOSHUA EUDIA HARIMAN',
            'NIM' => '00000070420',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '21',
            'Nama' => 'JACQUELINE KELLY SETIAWAN',
            'NIM' => '00000055066',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '22',
            'Nama' => 'Gabriella Christina Lianto (ID LINE: gabriellachrstn)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);

Kelompok::create([
            'NomorKelompok' => '22',
            'Nama' => 'SAMUEL WIJAYA',
            'NIM' => '00000075646',
            'Prodi' => 'Perhotelan',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '22',
            'Nama' => 'STEVEN AK',
            'NIM' => '00000070431',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '22',
            'Nama' => 'JOVITA TANDIANA',
            'NIM' => '00000068053',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '22',
            'Nama' => 'DARREN SEBASTIAN',
            'NIM' => '00000070853',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '22',
            'Nama' => 'DENNIS MARCELLO',
            'NIM' => '00000075159',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '22',
            'Nama' => 'GABRIEL AMELIA SUNJOTO',
            'NIM' => '00000065098',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '22',
            'Nama' => 'VINDY HERMANTO DUANTARA',
            'NIM' => '00000069544',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '22',
            'Nama' => 'MUCHACA DE SARTIKA',
            'NIM' => '00000069572',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '22',
            'Nama' => 'VERONICA VALENCIA',
            'NIM' => '00000067640',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '22',
            'Nama' => 'RIFFA PUTRA',
            'NIM' => '00000082581',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '22',
            'Nama' => 'THOMAS ELVANLI',
            'NIM' => '00000067064',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '22',
            'Nama' => 'NABILAH HARSIKA',
            'NIM' => '00000070329',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '22',
            'Nama' => 'TRI ARTHA GRACIA TAEKZ',
            'NIM' => '00000076237',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '22',
            'Nama' => 'FREDERICK RADITYA PRIYA ANANTA',
            'NIM' => '00000069158',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '22',
            'Nama' => 'ZERELDA RATU TAGA',
            'NIM' => '00000070268',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '22',
            'Nama' => 'ANANDIVI SABELLA ANJANI',
            'NIM' => '00000088009',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '22',
            'Nama' => 'ANGELLY STEFFYNA LAURENZA',
            'NIM' => '00000070115',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '22',
            'Nama' => 'NAUVAL ZAKI FIRMANSYAH',
            'NIM' => '00000075050',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '22',
            'Nama' => 'CHRISTOPHER DAVIN YONATA',
            'NIM' => '00000035108',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '23',
            'Nama' => 'Christine Angela Chandra (ID LINE: christineangela03)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);

Kelompok::create([
            'NomorKelompok' => '23',
            'Nama' => 'AZMIY RAMADHAN',
            'NIM' => '00000071523',
            'Prodi' => 'Perhotelan',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '23',
            'Nama' => 'GIOFANNY SASMITA',
            'NIM' => '00000076114',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '23',
            'Nama' => 'JULIUS CALVIN SAPUTRA',
            'NIM' => '00000068626',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '23',
            'Nama' => 'MUHAMAD BAEHAKY',
            'NIM' => '00000070071',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '23',
            'Nama' => 'BIMO BAYU PAMUNGKAS',
            'NIM' => '00000068086',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '23',
            'Nama' => 'ELISABETH JESSICA WIBOWO',
            'NIM' => '00000071235',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '23',
            'Nama' => 'WILLIAM KURNIAWAN',
            'NIM' => '00000067731',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '23',
            'Nama' => 'GRESCIA KUSUMA',
            'NIM' => '00000081815',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '23',
            'Nama' => 'YONATHAN YABES CHRISTIAN',
            'NIM' => '00000078951',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '23',
            'Nama' => 'CALVIN RUSTIANO',
            'NIM' => '00000070872',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '23',
            'Nama' => 'VICTORICH ALBERT',
            'NIM' => '00000077525',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '23',
            'Nama' => 'CINDY THERESA',
            'NIM' => '00000068570',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '23',
            'Nama' => 'MARIO CLAVENT MARTUA BENEDIKTUS',
            'NIM' => '00000068390',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '23',
            'Nama' => 'ANDIAZ RAMADHAN DJOHANSYAH',
            'NIM' => '00000073279',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '23',
            'Nama' => 'JENNIA NABILA PUTRI',
            'NIM' => '00000076007',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '23',
            'Nama' => 'RADITYA AKHSAN',
            'NIM' => '00000071993',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '23',
            'Nama' => 'ADELYNE RISYANTHI GANDA',
            'NIM' => '00000067634',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '23',
            'Nama' => 'PUTU CLAUDIA MICHELLE.GGC',
            'NIM' => '00000076420',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '23',
            'Nama' => 'TAUFIK HAZEL ABDILLAH',
            'NIM' => '00000044234',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '24',
            'Nama' => 'Whitney Kamisa (ID LINE: whitney_karnisa)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);

Kelompok::create([
            'NomorKelompok' => '24',
            'Nama' => 'BILLY .',
            'NIM' => '00000071962',
            'Prodi' => 'Perhotelan',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '24',
            'Nama' => 'FASHLI JANNATIN AULIA',
            'NIM' => '00000070251',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '24',
            'Nama' => 'KENNY ADAM',
            'NIM' => '00000072683',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '24',
            'Nama' => 'ANTONI LIM',
            'NIM' => '00000075243',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '24',
            'Nama' => 'DEFIANA NEZA ALMIRA',
            'NIM' => '00000074869',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '24',
            'Nama' => 'NUR ILMI BENTANG KWRUH',
            'NIM' => '00000075121',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '24',
            'Nama' => 'RONI MULYAWAN',
            'NIM' => '00000071231',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '24',
            'Nama' => 'SHELLY ANGELINA',
            'NIM' => '00000069889',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '24',
            'Nama' => 'YOVITA SARI SIMANGUNSONG',
            'NIM' => '00000072480',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '24',
            'Nama' => 'FAIZUL ANWAR',
            'NIM' => '00000078570',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '24',
            'Nama' => 'CAROLINE SUSANTO',
            'NIM' => '00000071280',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '24',
            'Nama' => 'RIO LEONARDI',
            'NIM' => '00000077702',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '24',
            'Nama' => 'ACHMAD EZRA VALENTINO',
            'NIM' => '00000073808',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '24',
            'Nama' => 'ANGELINE ELIZABETH PUTRI KAMAGI',
            'NIM' => '00000072432',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '24',
            'Nama' => 'OCTAVIANUS IVANDER KRESNAWAN',
            'NIM' => '00000068372',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '24',
            'Nama' => 'AUDREY LUCREY STEVIANUS',
            'NIM' => '00000065888',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '24',
            'Nama' => 'JOCELYN IONA PUTRI ARIBAWANA',
            'NIM' => '00000066750',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '24',
            'Nama' => 'CHRISTINA LIANDI PUTRI',
            'NIM' => '00000067150',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '24',
            'Nama' => 'MONICA SILVIA',
            'NIM' => '00000052848',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);

Kelompok::create([
            'NomorKelompok' => '25',
            'Nama' => 'Nathania Angelica (ID LINE: nthnangelica)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);

Kelompok::create([
            'NomorKelompok' => '25',
            'Nama' => 'NADYA ELENA WIJAYA',
            'NIM' => '00000079480',
            'Prodi' => 'Perhotelan',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '25',
            'Nama' => 'RYAN PURWAKAPUTRA ATTHAILLAH',
            'NIM' => '00000075943',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '25',
            'Nama' => 'KEVIN ADITYA HARTONO',
            'NIM' => '00000069875',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '25',
            'Nama' => 'MARCELLINO DEVINDWIANDRA INDARTO',
            'NIM' => '00000067699',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '25',
            'Nama' => 'CLARISSA ELVIRA DARMAWAN',
            'NIM' => '00000069259',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '25',
            'Nama' => 'ANGIE MELODY MONARCHI',
            'NIM' => '00000070483',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '25',
            'Nama' => 'MAX WILLIAM OEISTAN',
            'NIM' => '00000071907',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '25',
            'Nama' => 'LEONARDO JAKA PRAMUDITA',
            'NIM' => '00000071505',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '25',
            'Nama' => 'DIMAS ARYO WIBOWO AULIA',
            'NIM' => '00000081628',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '25',
            'Nama' => 'ANNISA NURAHMAH',
            'NIM' => '00000087578',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '25',
            'Nama' => 'AUGIE RAHADIAN NUGROHO',
            'NIM' => '00000079475',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '25',
            'Nama' => 'VERIN MARIA',
            'NIM' => '00000068365',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '25',
            'Nama' => 'AURA NAZMI PUTERI SUARTO',
            'NIM' => '00000072580',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '25',
            'Nama' => 'MUHAMAD URIP SWASTIKA',
            'NIM' => '00000070326',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '25',
            'Nama' => 'KEIANDRA SHARIKHA FAJRIAN',
            'NIM' => '00000068445',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '25',
            'Nama' => 'DINDANIZ SABRINA FARAHARTYA',
            'NIM' => '00000069582',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '25',
            'Nama' => 'ADRIEL NEYVA PRASETYA',
            'NIM' => '00000076352',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '25',
            'Nama' => 'IVANA TRIXIE SENDUK',
            'NIM' => '00000075066',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
Kelompok::create([
            'NomorKelompok' => '25',
            'Nama' => 'FADHIL SHAWAAL HAKIM',
            'NIM' => '00000042048',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '26',
            'Nama' => 'STEFANIE LUNARDY (ID LINE: stefanieelunardyy)',
            'NIM' => 0,
            'Prodi' => '',
            'status' => 'mentor'
        ]);

        Kelompok::create([
            'NomorKelompok' => '26',
            'Nama' => 'IGNATIUS LAI',
            'NIM' => '00000070048',	
            'Prodi' => 'Perhotelan',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '26',
            'Nama' => 'CHRISTOFORUS RIVAN PRAMUDYO',
            'NIM' => '00000067529',	
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '26',
            'Nama' => 'NAFEESHA AUDREY',
            'NIM' => '00000069226',	
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '26',
            'Nama' => 'MARCELLINUS GILLBERT SUNIOTO',
            'NIM' => '00000068802',	
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '26',
            'Nama' => 'EUNIKE DIVA YUSUF',
            'NIM' => '00000068037',	
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '26',
            'Nama' => 'ANINANDANA ABHINAYA APRIASNOTO',
            'NIM' => '00000069459',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '26',
            'Nama' => 'GUIDO ANDERLECHT AURELIUS MAXIMUS',	
            'NIM' => '00000075807',	
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '26',
            'Nama' => 'TANZILLA RAHMAWATI',
            'NIM' => '00000079053',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '26',
            'Nama' => 'GILBERT STEFANUS CANDRA',
            'NIM' => '00000068269',	
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '26',
            'Nama' => 'WILLY SAPUTRA',	
            'NIM' => '00000075203',	
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '26',
            'Nama' => 'JONATHAN FARREL MARCIO SANTOSO',
            'NIM' => '00000069283',	
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '26',
            'Nama' => 'ROMMY RIVALDY WIJAYA',
            'NIM' => '00000069830',	
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '26',
            'Nama' => 'CALLISTA KURNIADI',	
            'NIM' => '00000071237',	
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '26',
            'Nama' => 'NATHANIA DOMINICA SALIM',
            'NIM' => '00000071788',	
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '26',
            'Nama' => 'SHABIRA REGITA PRIMASWARI DIAS',	
            'NIM' => '00000082545',	
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '26',
            'Nama' => 'DEVINA ANGELIA',
            'NIM' => '00000068578',	
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '26',
            'Nama' => 'JENNIFER ALDYTHIO',
            'NIM' => '00000068809',	
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '26',
            'Nama' => 'RESWARA ANANGGADIPA GANENDRA',
            'NIM' => '00000072263',	
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '26',
            'Nama' => 'ERNESTO GUEVARA CACERES',
            'NIM' => '00000067726',	
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '27',
            'Nama' => 'Alysa Angel Widjanarko (ID LINE: Alysa.angel)',
            'NIM' => 0,
            'Prodi' => '',
            'status' => 'mentor'
        ]);

        Kelompok::create([
            'NomorKelompok' => '27',
            'Nama' => 'MILANDA ALQISTINA',
            'NIM' => '00000070936',
            'Prodi' => 'Perhotelan',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '27',
            'Nama' => 'NICHOLAS PUTRA PRATAMA',	
            'NIM' => '00000070547',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '27',
            'Nama' => 'SAMUEL KURNIAWAN CHANDRA',
            'NIM' => '00000068672',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '27',
            'Nama' => 'EVANGELINE SUCIADI',	
            'NIM' => '00000068887',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '27',
            'Nama' => 'ELVARETTA LEVINA ZHAFIRA',
            'NIM' => '00000070140',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '27',
            'Nama' => 'ANDREW SU',
            'NIM' => '00000066301',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '27',
            'Nama' => 'TARA PUNDARIKA',	
            'NIM' => '00000066774',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '27',
            'Nama' => 'EVELYN HILARY SUGIHMULYO',
            'NIM' => '00000081753',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '27',
            'Nama' => 'JONATHAN CHRISTIAN MANDIANGAN',	
            'NIM' => '00000066839',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '27',
            'Nama' => 'FAREL ARDEN JANI',
            'NIM' => '00000075163',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '27',
            'Nama' => 'MARIO RICHIE LIM',
            'NIM' => '00000067355',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '27',
            'Nama' => 'BERLIANA RAMADHAN',	
            'NIM' => '00000074913',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '27',
            'Nama' => 'CHARLIE',
            'NIM' => '00000070053',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '27',
            'Nama' => 'NATHANIA YUNIOR SAN',
            'NIM' => '00000071252',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '27',
            'Nama' => 'ARETHA THALIA PUTRI',	
            'NIM' => '00000077648',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '27',
            'Nama' => 'EUGENE NATALLIE PRISCILLA DARISA',
            'NIM' => '00000069871',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '27',
            'Nama' => 'JENNIFER DOMINICA',	
            'NIM' => '00000068856',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '27',
            'Nama' => 'NEVSKAYA GRACENTY LIANDI',
            'NIM' => '00000071107',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);

        Kelompok::create([
            'NomorKelompok' => '27',
            'Nama' => 'ALBERTO JONATHAN',
            'NIM' => '00000055181',
            'Prodi' => 'DK',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '28',
            'Nama' => 'WYNNIE SAPUTRI JANSEN (ID LINE: wynniesaputri',
            'NIM' => '000000',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '28',
            'Nama' => 'VIOLA MARSHELLA',
            'NIM' => '00000069097',
            'Prodi' => 'Perhotelan',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '28',
            'Nama' => 'ANGELIA AUSTINA',
            'NIM' => '00000070924',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '28',
            'Nama' => 'NURFAJRIAH OKTAVIANI',
            'NIM' => '00000068637',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '28',
            'Nama' => 'JANTZEN FERNANDES',
            'NIM' => '00000074907',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '28',
            'Nama' => 'ABANG LEONARD',
            'NIM' => '00000069487',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '28',
            'Nama' => 'DHARMA RATANO',
            'NIM' => '00000070273',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '28',
            'Nama' => 'GINA ROHMATIKA',
            'NIM' => '00000082243',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '28',
            'Nama' => 'CINDY GHOVANNY',
            'NIM' => '00000068875',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '28',
            'Nama' => 'APRILIYAN HARISMAN',
            'NIM' => '00000082753',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '28',
            'Nama' => 'DAMAR NUR RAFLY',
            'NIM' => '00000074723',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '28',
            'Nama' => 'RYVI NENDER',
            'NIM' => '00000073625',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '28',
            'Nama' => 'JEHEZKIEL IMMANUEL',
            'NIM' => '00000067395',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '28',
            'Nama' => 'CHELSEA MARIANA',
            'NIM' => '00000065354',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '28',
            'Nama' => 'GABRIEL FELICIA',
            'NIM' => '00000065062',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '28',
            'Nama' => 'BRIGITA JOCELIN ELEORA',
            'NIM' => '00000068169',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '28',
            'Nama' => 'EMILIA WIRYAWAN',
            'NIM' => '00000066814',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '28',
            'Nama' => 'ALECIA CINDY',
            'NIM' => '00000069228',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '28',
            'Nama' => 'QOUDRY ABHIZAR SIDHARTA',
            'NIM' => '00000069228',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '28',
            'Nama' => 'JAYSEN NIXON SUTANTO ',
            'NIM' => '00000053441',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '29',
            'Nama' => 'Alessandra Calista (ID LINE: alessandracz) ',
            'NIM' => 0,
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '29',
            'Nama' => 'SYACHRA SOKA MARISA RUBIN',
            'NIM' => '00000079230',
            'Prodi' => 'Perhotelan',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '29',
            'Nama' => 'SYERA MELVA MISKEY SIMATUPANG',
            'NIM' => '00000073793',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '29',
            'Nama' => 'VINCENT ELIANDY KURNIAWAN',
            'NIM' => '00000066775',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '29',
            'Nama' => 'FELIX ANGDINATA',
            'NIM' => '00000068247',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '29',
            'Nama' => 'AISHA CHAIRUNNISA',
            'NIM' => '00000072658',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '29',
            'Nama' => 'ARIFAH SALMA SHABIRA',
            'NIM' => '00000075020',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '29',
            'Nama' => 'FERNANDA COA NATA',
            'NIM' => '00000087909',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '29',
            'Nama' => 'WENDELIN REGINA CHANDRA',
            'NIM' => '00000070716',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '29',
            'Nama' => 'KELLYSIA MONA ANDIKA',
            'NIM' => '00000066415',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '29',
            'Nama' => 'VINCENTIUS DEVON TANUARDI',
            'NIM' => '00000068985',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '29',
            'Nama' => 'MUHAMMAD AZIZ BAIHAQI',
            'NIM' => '00000075248',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '29',
            'Nama' => 'ANDI BINTANG RIHADATUL AISY',
            'NIM' => '00000087548',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '29',
            'Nama' => 'MARIZKA RENITA JASMINE',
            'NIM' => '00000069474',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '29',
            'Nama' => 'APRILIA AZZAHRA PUTRI',
            'NIM' => '00000070914',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '29',
            'Nama' => 'MARCHANDA GURITNA HALIM',
            'NIM' => '00000073235',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '29',
            'Nama' => 'ELVIA PHEDHA VIRAJAYO',
            'NIM' => '00000070093',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '29',
            'Nama' => 'MARGARETHA .',
            'NIM' => '00000067524',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '29',
            'Nama' => 'JESSICA .',
            'NIM' => '00000071217',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '29',
            'Nama' => 'BHAGAS ANURAGA PUTRA BUDIJOYO',
            'NIM' => '00000088120',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '29',
            'Nama' => 'RAY INDRAJAYA',
            'NIM' => '00000045698',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '30',
            'Nama' => 'Zefanya Febrina Valentine Mehe (ID LINE: Zefanya_pixi)',
            'NIM' => 0,
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '30',
            'Nama' => 'NOEL PUTRA PRAMONO',
            'NIM' => '00000071510',
            'Prodi' => 'Perhotelan',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '30',
            'Nama' => 'WINNY THERANATA',
            'NIM' => '00000067123',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '30',
            'Nama' => 'MUHAMMAD ILHAM KURNIAWAN',
            'NIM' => '00000066417',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '30',
            'Nama' => 'JESSE LAURENCIA',
            'NIM' => '00000072698',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '30',
            'Nama' => 'ACHMAD DAFFA PUTRA HIDAYAT',
            'NIM' => '00000069022',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '30',
            'Nama' => 'AZLIA ZERLINDA',
            'NIM' => '00000069729',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '30',
            'Nama' => 'HENGKY WIJAYA',
            'NIM' => '00000067985',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '30',
            'Nama' => 'WILLIAM WIBISONO',
            'NIM' => '00000077960',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '30',
            'Nama' => 'RALPH THEODORIC ADAM ZAGOTO',
            'NIM' => '00000078593',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '30',
            'Nama' => 'AUZAN FATHI HAWARI',
            'NIM' => '00000073425',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '30',
            'Nama' => 'MUHAMMAD LUTFI SALINGGIH',
            'NIM' => '00000073400',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '30',
            'Nama' => 'STEFANNY CHANDRA',
            'NIM' => '00000070434',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '30',
            'Nama' => 'NICOLE CLEMENT',
            'NIM' => '00000067870',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '30',
            'Nama' => 'NAUFAL ALTHOF YULIANTO',
            'NIM' => '00000073889',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '30',
            'Nama' => 'ANGELA GABRIELE SANTOSA',
            'NIM' => '00000070906',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '30',
            'Nama' => 'FATHAN ADLI PRATAMA',
            'NIM' => '00000072583',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '30',
            'Nama' => 'MARIA SESILIA',
            'NIM' => '00000072570',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '30',
            'Nama' => 'ATHIYAH NADIRA',
            'NIM' => '00000069076',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '30',
            'Nama' => 'RICARDO LINELSON',
            'NIM' => '00000056089',
            'Prodi' => 'Teknik Fisika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '31',
            'Nama' => 'Rachel Cristabel (ID LINE: rachelcristabell)',
            'NIM' => 0,
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '31',
            'Nama' => 'LUKE DUNCAN MATTHEW PATTIKAWA',
            'NIM' => '00000069007',
            'Prodi' => 'Perhotelan',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '31',
            'Nama' => 'AGUSTINUS BARU',
            'NIM' => '00000079855',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '31',
            'Nama' => 'JOELLIUS NATANAEL WOROTITJAN',
            'NIM' => '00000071158',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '31',
            'Nama' => 'JOVANKA SURYAJAYA SETIAWAN',
            'NIM' => '00000069834',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '31',
            'Nama' => 'FAUZAN ABDULLAH IMADULHAQ',
            'NIM' => '00000075440',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '31',
            'Nama' => 'JACQLIEN CELLIA SURYANTO',
            'NIM' => '00000069832',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '31',
            'Nama' => 'RENALDA ARIAWATI',
            'NIM' => '00000068723',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '31',
            'Nama' => 'REFO KHELSEN MAIYOLA',
            'NIM' => '00000078546',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '31',
            'Nama' => 'FELICIA JENNIFER',
            'NIM' => '00000069537',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '31',
            'Nama' => 'RADITYA ATHAR ILAZUARD',
            'NIM' => '00000082732',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '31',
            'Nama' => 'MUHAMAD THAARIQ',
            'NIM' => '00000070514',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '31',
            'Nama' => 'SHAREN ANGELINE WUNARTO',
            'NIM' => '00000067844',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '31',
            'Nama' => 'TIARAMITTA SWASTIKHA WIJAYA',
            'NIM' => '00000065505',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '31',
            'Nama' => 'MARGARETTA .',
            'NIM' => '00000065473',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '31',
            'Nama' => 'YOHANES FAJAR PARLINGGOMAN MANULLANG',
            'NIM' => '00000075385',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '31',
            'Nama' => 'ALENA PANNA SOEGIANTO',
            'NIM' => '00000068418',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '31',
            'Nama' => 'CHATARINA FREYA EDITHIRA',
            'NIM' => '00000068172',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '31',
            'Nama' => 'ATILLA VALERIAN VERON',
            'NIM' => '00000071246',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '31',
            'Nama' => 'YESSA ANUGRAH HARMONO ',
            'NIM' => '00000057151',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '32',
            'Nama' => 'Sakha Yenov Tavania Purwatikta (ID LINE: syenov)',
            'NIM' => 0,
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '32',
            'Nama' => 'RATULIM .',
            'NIM' => '00000077008',
            'Prodi' => 'Perhotelan',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '32',
            'Nama' => 'RAFA NATHA AWLIYA',
            'NIM' => '00000077008',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '32',
            'Nama' => 'KEZIA APRILA LAURENZIA',
            'NIM' => '00000075228',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '32',
            'Nama' => 'JUANITO ARVIN WILLIAM',
            'NIM' => '00000069483',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '32',
            'Nama' => 'AMELIA CRISTINE',
            'NIM' => '00000069489',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '32',
            'Nama' => 'JANNESSA MARVELLA',
            'NIM' => '00000066369',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '32',
            'Nama' => 'AURELIA NATHASYA',
            'NIM' => '00000066859',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '32',
            'Nama' => 'NABILA RAMADHAN',
            'NIM' => '00000075846',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '32',
            'Nama' => 'FRELIE SUBIYANTO',
            'NIM' => '00000069020',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '32',
            'Nama' => 'FRILIYANDRE .',
            'NIM' => '00000068633',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '32',
            'Nama' => 'NASYWA NAURA AULIA',
            'NIM' => '00000071873',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '32',
            'Nama' => 'MUHAMMAD NAUFAL RATANDIO',
            'NIM' => '00000087158',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '32',
            'Nama' => 'INDIRA SUKMA DEWI',
            'NIM' => '00000069325',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '32',
            'Nama' => 'JASON CALVIN ALEXIUS',
            'NIM' => '00000071898',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '32',
            'Nama' => 'FAISA SHAFIYYAH FIKRI',
            'NIM' => '00000069462',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '32',
            'Nama' => 'BIRGITA HELENA PUTRI MARIA',
            'NIM' => '00000075525',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '32',
            'Nama' => 'DAVID MICHAEL PUTRA RANCE',
            'NIM' => '00000068291',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '32',
            'Nama' => 'PATRICIA ISKANDAR',
            'NIM' => '00000066794',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '32',
            'Nama' => 'BELLA SAHARANI SOPYAN',
            'NIM' => '00000064581',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '33',
            'Nama' => 'Bernadette Christie Godiva (ID LINE: bernadettegdv)',
            'NIM' => 0,
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '33',
            'Nama' => 'GLENN MATTHEW HERMAWAN',
            'NIM' => '00000080882',
            'Prodi' => 'Perhotelan',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '33',
            'Nama' => 'CARLA KADITHA SAPUTRA',
            'NIM' => '00000066724',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '33',
            'Nama' => 'NICHOLAS ALVEN GANDRA',
            'NIM' => '00000066511',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '33',
            'Nama' => 'DARREN DONOVAN',
            'NIM' => '00000068144',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '33',
            'Nama' => 'AURELLIA RAMLI',
            'NIM' => '00000068864',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '33',
            'Nama' => 'FAJAR FATURAHMAN',
            'NIM' => '00000071596',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '33',
            'Nama' => 'RAYNIER LIM',
            'NIM' => '00000071645',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '33',
            'Nama' => 'NAJUA PUTRI VAHIRA',
            'NIM' => '00000074754',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '33',
            'Nama' => 'FEMIA SALSABILLA',
            'NIM' => '00000069260',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '33',
            'Nama' => 'NICOLAS TEMAWAN',
            'NIM' => '00000073411',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '33',
            'Nama' => 'MICHAEL VALLENT',
            'NIM' => '00000071631',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '33',
            'Nama' => 'JIHAN ANANTA',
            'NIM' => '00000082614',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '33',
            'Nama' => 'CHELSEA DIANDRA',
            'NIM' => '00000068720',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '33',
            'Nama' => 'MARVENA ANWAR',
            'NIM' => '00000068533',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '33',
            'Nama' => 'MARK AIDAN BRAHMANTYO',
            'NIM' => '00000082602',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '33',
            'Nama' => 'KEVINA AGNES SANTOSA',
            'NIM' => '00000069227',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '33',
            'Nama' => 'MAUREEN ANGELINE',
            'NIM' => '00000070574',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '33',
            'Nama' => 'CLARESTA CHRISTANTI',
            'NIM' => '00000067474',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '33',
            'Nama' => 'CHRISTOPHER GERALD',
            'NIM' => '00000048270',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '34',
            'Nama' => 'Tricia (ID LINE: cia.eri)',
            'NIM' => 0,
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '34',
            'Nama' => 'HELENA ALICIA SUGONDO',
            'NIM' => '00000068842',
            'Prodi' => 'Perhotelan',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '34',
            'Nama' => 'NAURA SAFINATUNNAJA MAHSUN',
            'NIM' => '00000080837',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '34',
            'Nama' => 'MELISSA TRIANA',
            'NIM' => '00000077664',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '34',
            'Nama' => 'NICHOLAS PRAWIRA',
            'NIM' => '00000068231',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '34',
            'Nama' => 'DAVE JONATHAN SURYA',
            'NIM' => '00000068177',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '34',
            'Nama' => 'FELICYA CHRISTY',
            'NIM' => '00000067873',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '34',
            'Nama' => 'LUTHFI FALDAN RIVANTA',
            'NIM' => '00000082491',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '34',
            'Nama' => 'CLAUDIO KHAFYLINO',
            'NIM' => '00000072394',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '34',
            'Nama' => 'FILBERT ONG',
            'NIM' => '00000071766',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '34',
            'Nama' => 'IMANUELL GILLAND',
            'NIM' => '00000066420',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '34',
            'Nama' => 'NADHILA CITRA NUR RAHMALINA',
            'NIM' => '00000072495',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '34',
            'Nama' => 'AGNES JULIANI',
            'NIM' => '00000070669',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '34',
            'Nama' => 'SALMA CELIA DAVINKA',
            'NIM' => '00000072789',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '34',
            'Nama' => 'FELICIA LESMANA',
            'NIM' => '00000071615',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '34',
            'Nama' => 'JOSHUA CARRY CARLOS MARCELLINO HUTASO',
            'NIM' => '00000075226',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '34',
            'Nama' => 'DARREN JOVIAN WIJAYA',
            'NIM' => '00000073893',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '34',
            'Nama' => 'HANDRIYA ILHAM SETIADI',
            'NIM' => '00000075663',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '34',
            'Nama' => 'FAREL REXY TANGGUH',
            'NIM' => '00000069295',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '34',
            'Nama' => 'MOHAMAD AZKA FARABI ROSADY',
            'NIM' => '00000044163',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '35',
            'Nama' => 'Arnetha Alicya Hidayat (ID LINE: arnthalcya)',
            'NIM' => 0,
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '35',
            'Nama' => 'JESSICA FERNANDA',
            'NIM' => '00000067039',
            'Prodi' => 'Perhotelan',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '35',
            'Nama' => 'MUHAMMAD ZAKI',
            'NIM' => '00000072187',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '35',
            'Nama' => 'BINTANG MUHAMMAD RAMDHAN',
            'NIM' => '00000082200',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '35',
            'Nama' => 'RIVALDO YOSIA HIMAWAN',
            'NIM' => '00000071997',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '35',
            'Nama' => 'GIHON MELKISEDEK MARTUA TAMBUNAN',
            'NIM' => '00000069915',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '35',
            'Nama' => 'JESSE SANDY PUTRA',
            'NIM' => '00000069031',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '35',
            'Nama' => 'FERNANDIO AKBAR LUBIS',
            'NIM' => '00000079844',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '35',
            'Nama' => 'WONG JHONSON WIJAYA',
            'NIM' => '00000077958',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '35',
            'Nama' => 'KRISTOFFEN .',
            'NIM' => '00000069360',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '35',
            'Nama' => 'REYNARD .',
            'NIM' => '00000067065',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '35',
            'Nama' => 'AUDRA MUHAMMAD',
            'NIM' => '00000075739',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '35',
            'Nama' => 'MARCELINO ELBEN',
            'NIM' => '00000068009',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '35',
            'Nama' => 'SHENA .',
            'NIM' => '00000070693',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '35',
            'Nama' => 'FELICIA MEIVA PUSPITA SARI',
            'NIM' => '00000068035',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '35',
            'Nama' => 'RADEN MUHAMAD ALIF RIHARTONO',
            'NIM' => '00000074873',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '35',
            'Nama' => 'DARREN JUANDA',
            'NIM' => '00000075380',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '35',
            'Nama' => 'MICHELLE WIJAYA',
            'NIM' => '00000071282',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '35',
            'Nama' => 'FELICIA OENDY',
            'NIM' => '00000067459',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '35',
            'Nama' => 'KIMMY RAYFONZO LUMINTANG',
            'NIM' => '00000046150',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '36',
                'Nama' => 'Maura Nadinea Prasetyana (ID LINE: maurandn)',
                'NIM' => '0',
                'Prodi' => '',
                'status' => 'mentor'
        ]);
        Kelompok::create([
                'NomorKelompok' => '36',
                'Nama' => 'JONATHAN VERDIAN DARMAWAN',
                'NIM' => '00000077160',
                'Prodi' => 'Perhotelan',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '36',
                'Nama' => 'NATHANIA .',
                'NIM' => '00000070620',
                'Prodi' => 'Jurnalistik',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '36',
                'Nama' => 'AGRA CIPTA KUSUMA',
                'NIM' => '00000071933',
                'Prodi' => 'Sistem Informasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '36',
                'Nama' => 'REYNALD MANUEL',
                'NIM' => '00000071243',
                'Prodi' => 'Sistem Informasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '36',
                'Nama' => 'EUNIKE FELLICIA CIPTA',
                'NIM' => '00000067032',
                'Prodi' => 'Film & Animasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '36',
                'Nama' => 'MERRY ANGELICA MARSAULINA SITOMPUL',
                'NIM' => '00000069621',
                'Prodi' => 'Film & Animasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '36',
                'Nama' => 'VAIYEEN KUSNADI',
                'NIM' => '00000071094',
                'Prodi' => 'Manajemen',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '36',
                'Nama' => 'GUNAWAN LARDO',
                'NIM' => '00000073466',
                'Prodi' => 'Manajemen',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '36',
                'Nama' => 'PRISCILLIA DESYA',
                'NIM' => '00000075267',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '36',
                'Nama' => 'RAINHARD JANUARDO SIMAMORA',
                'NIM' => '00000080970',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '36',
                'Nama' => 'RIFQI ARIEF WICAKSANA',
                'NIM' => '00000073943',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '36',
                'Nama' => 'TESALONIKA GABRIELA LOVE SLAMET',
                'NIM' => '00000068136',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '36',
                'Nama' => 'SHIRA JESSELIN ANDRIANA',
                'NIM' => '00000077237',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '36',
                'Nama' => 'JAFFAN FAWWAZ SIREGAR',
                'NIM' => '00000071937',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '36',
                'Nama' => 'RIZA MUHAMMAD',
                'NIM' => '00000080949',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '36',
                'Nama' => 'DEANDRE FELO ANGGARA',
                'NIM' => '00000069835',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '36',
                'Nama' => 'BENAYA SIMON PETRUS SIHOMBING',
                'NIM' => '00000069844',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '36',
                'Nama' => 'FELICIA SAIMIN',
                'NIM' => '00000070256',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '36',
                'Nama' => 'PRISCILLA KARIMANG',
                'NIM' => '00000060975',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '37',
                'Nama' => 'Vanessa Chu (ID LINE: vanessachuline)',
                'NIM' => '0',
                'Prodi' => '',
                'status' => 'mentor'
        ]);
        Kelompok::create([
                'NomorKelompok' => '37',
                'Nama' => 'ABIGAIL CALISTA',
                'NIM' => '00000081683',
                'Prodi' => 'Perhotelan',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '37',
                'Nama' => 'PUTU GAYATRIDEVI GANTI KARUNI NATIH',
                'NIM' => '00000076382',
                'Prodi' => 'Jurnalistik',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '37',
                'Nama' => 'NELSON FREDRICK MULIA',
                'NIM' => '00000069896',
                'Prodi' => 'Sistem Informasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '37',
                'Nama' => 'CLARISSA AURELIA DJONIWAN',
                'NIM' => '00000072751',
                'Prodi' => 'Sistem Informasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '37',
                'Nama' => 'CHADRICK RAYMOND',
                'NIM' => '00000069529',
                'Prodi' => 'Film & Animasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '37',
                'Nama' => 'NATHANAEL WILLIAM NAPITUPULU',
                'NIM' => '00000070061',
                'Prodi' => 'Film & Animasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '37',
                'Nama' => 'VALENCIA AURELLIA',
                'NIM' => '00000069133',
                'Prodi' => 'Manajemen',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '37',
                'Nama' => 'JACHSON .',
                'NIM' => '00000070279',
                'Prodi' => 'Manajemen',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '37',
                'Nama' => 'MARCELLINO MELKIANUS REDA',
                'NIM' => '00000082284',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '37',
                'Nama' => 'RAPHAEL DIKSTRA SATYA PRAMESWARA',
                'NIM' => '00000078564',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '37',
                'Nama' => 'SAINT CHRISTOPHER SHYANDON',
                'NIM' => '00000075026',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '37',
                'Nama' => 'GABRIELLA STEVIE EUODIA PRIYONO',
                'NIM' => '00000065961',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '37',
                'Nama' => 'SHEREN OLIVIA',
                'NIM' => '00000070346',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '37',
                'Nama' => 'CAROLINE .',
                'NIM' => '00000068194',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '37',
                'Nama' => 'ALFIN .',
                'NIM' => '00000069952',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '37',
                'Nama' => 'DITA HYORY THENAKA',
                'NIM' => '00000071416',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '37',
                'Nama' => 'KERIN LIMITANDY',
                'NIM' => '00000068191',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '37',
                'Nama' => 'FELISA SANDRA',
                'NIM' => '00000068304',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '37',
                'Nama' => 'MAURA RADITYA PUTRI',
                'NIM' => '00000056816',
                'Prodi' => 'Film & Animasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '38',
                'Nama' => 'Pricillia Rusli (ID LINE: priscillia.rusli)',
                'NIM' => '0',
                'Prodi' => '',
                'status' => 'mentor'
        ]);
        Kelompok::create([
                'NomorKelompok' => '38',
                'Nama' => 'BRYAN EKARAHARJA LIONG',
                'NIM' => '00000071374',
                'Prodi' => 'Perhotelan',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '38',
                'Nama' => 'ABDUL FATCHURROHMAN',
                'NIM' => '00000076088',
                'Prodi' => 'Jurnalistik',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '38',
                'Nama' => 'ANGELICA YOSHE',
                'NIM' => '00000071060',
                'Prodi' => 'Sistem Informasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '38',
                'Nama' => 'ALFAIZ EGI PRAMANA',
                'NIM' => '00000079233',
                'Prodi' => 'Sistem Informasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '38',
                'Nama' => 'RAYA FAHREZA',
                'NIM' => '00000081016',
                'Prodi' => 'Film & Animasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '38',
                'Nama' => 'RIFQI SYAFI NAUFAL ZHARFAN PUTRA MOH',
                'NIM' => '00000075499',
                'Prodi' => 'Film & Animasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '38',
                'Nama' => 'MEMEY TRAVESIA SERAFIKA MARJEN',
                'NIM' => '00000078613',
                'Prodi' => 'Manajemen',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '38',
                'Nama' => 'JESLYN GRACIA',
                'NIM' => '00000073844',
                'Prodi' => 'Manajemen',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '38',
                'Nama' => 'VINCENT KURNIAWAN',
                'NIM' => '00000068404',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '38',
                'Nama' => 'SAMMUEL TEDJOSURYA',
                'NIM' => '00000081039',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '38',
                'Nama' => 'SAMUEL MAXIMUS LAMERE',
                'NIM' => '00000068572',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '38',
                'Nama' => 'ARSYA ARIFIANDI',
                'NIM' => '00000075614',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '38',
                'Nama' => 'JESSICA ALICIA',
                'NIM' => '00000075545',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '38',
                'Nama' => 'JOVANKA SAFIRA TAMIN',
                'NIM' => '00000068340',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '38',
                'Nama' => 'NUANSA ALTHAF TAQI',
                'NIM' => '00000078646',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '38',
                'Nama' => 'CHARA SEVINA SIHARJO',
                'NIM' => '00000068986',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '38',
                'Nama' => 'CHARLIZE PHAN',
                'NIM' => '00000066504',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '38',
                'Nama' => 'FELISHA NATALIE PUALANI',
                'NIM' => '00000065180',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '38',
                'Nama' => 'SYAWALLUDIN OESMAN',
                'NIM' => '00000051206',
                'Prodi' => 'Manajemen',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '39',
                'Nama' => 'Bianca Nicolette (ID Line Phone Number: 081908332629 )',
                'NIM' => '0',
                'Prodi' => '',
                'status' => 'mentor'
        ]);
        Kelompok::create([
                'NomorKelompok' => '39',
                'Nama' => 'ANASTASIA VERONICA',
                'NIM' => '00000069087',
                'Prodi' => 'Perhotelan',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '39',
                'Nama' => 'MIANDA FLORENTINA',
                'NIM' => '00000071051',
                'Prodi' => 'Jurnalistik',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '39',
                'Nama' => 'CATHERINE OLIVIA',
                'NIM' => '00000076229',
                'Prodi' => 'Sistem Informasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '39',
                'Nama' => 'IVAN BAGUS PURNOMO',
                'NIM' => '00000069565',
                'Prodi' => 'Sistem Informasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '39',
                'Nama' => 'ROY MARCHEEL',
                'NIM' => '00000069639',
                'Prodi' => 'Film & Animasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '39',
                'Nama' => 'DARREL WITA DHARMA',
                'NIM' => '00000075225',
                'Prodi' => 'Film & Animasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '39',
                'Nama' => 'OLIVIA WIJAYA',
                'NIM' => '00000068972',
                'Prodi' => 'Manajemen',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '39',
                'Nama' => 'OLIVIA RENICHA',
                'NIM' => '00000072803',
                'Prodi' => 'Manajemen',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '39',
                'Nama' => 'VINCENT MARLINO',
                'NIM' => '00000072738',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '39',
                'Nama' => 'RYU IVAN WIJAYA',
                'NIM' => '00000065448',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '39',
                'Nama' => 'SEAN MARCELLO TALAAR',
                'NIM' => '00000069991',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '39',
                'Nama' => 'MUHAMAD ZUHRON NAFFANI',
                'NIM' => '00000087881',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '39',
                'Nama' => 'IMELANDYA SALIM',
                'NIM' => '00000075541',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '39',
                'Nama' => 'NATASYA RAHMANIA PUTRI ZEBUA',
                'NIM' => '00000067073',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '39',
                'Nama' => 'RASYA GUSTI HANIFAH',
                'NIM' => '00000072703',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '39',
                'Nama' => 'FLORENCIA ELIANA IMANSJAH',
                'NIM' => '00000068204',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '39',
                'Nama' => 'AMMARA GHANIYA',
                'NIM' => '00000075199',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '39',
                'Nama' => 'AMANDA CLAUDIA TULAK',
                'NIM' => '00000079460',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '39',
                'Nama' => 'TIARA FEBRIANI',
                'NIM' => '00000054243',
                'Prodi' => 'Jurnalistik',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '40',
                'Nama' => 'Angel Marchella (ID LINE: angelmarchellaa)',
                'NIM' => '0',
                'Prodi' => '',
                'status' => 'mentor'
        ]);
        Kelompok::create([
                'NomorKelompok' => '40',
                'Nama' => 'NINO PRAMUDYA RYANTARA',
                'NIM' => '00000069606',
                'Prodi' => 'Perhotelan',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '40',
                'Nama' => 'NATA DHEA TANIA JAYA',
                'NIM' => '00000065373',
                'Prodi' => 'Jurnalistik',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '40',
                'Nama' => 'ALBIE FAHKRY SALMAN',
                'NIM' => '00000072707',
                'Prodi' => 'Sistem Informasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '40',
                'Nama' => 'JONATHAN WIDARTA',
                'NIM' => '00000070494',
                'Prodi' => 'Sistem Informasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '40',
                'Nama' => 'KEZIA DANIELLA',
                'NIM' => '00000068173',
                'Prodi' => 'Film & Animasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '40',
                'Nama' => 'NIKOLAI FAJAR PASKAH SOEMANTORO',
                'NIM' => '00000069282',
                'Prodi' => 'Film & Animasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '40',
                'Nama' => 'RIVALDO PRAYOGA LUNADI',
                'NIM' => '00000082823',
                'Prodi' => 'Manajemen',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '40',
                'Nama' => 'VALENTINA WIDJAJA',
                'NIM' => '00000071035',
                'Prodi' => 'Manajemen',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '40',
                'Nama' => 'JAVIER RAELL RIMBA',
                'NIM' => '00000067721',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '40',
                'Nama' => 'DENNIS KUMARA',
                'NIM' => '00000074796',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '40',
                'Nama' => 'YOU YA LIM',
                'NIM' => '00000070306',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '40',
                'Nama' => 'RAFAEL PUTRA HULU',
                'NIM' => '00000077979',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '40',
                'Nama' => 'GRACIELLA RUTH WIRANTO',
                'NIM' => '00000075864',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '40',
                'Nama' => 'MICHELLE WILLIAMS',
                'NIM' => '00000068956',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '40',
                'Nama' => 'JEA GHANIMA PETRIVIENA',
                'NIM' => '00000087670',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '40',
                'Nama' => 'JASON MULYADI',
                'NIM' => '00000069229',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '40',
                'Nama' => 'NADYA HENDRIAWAN',
                'NIM' => '00000067543',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '40',
                'Nama' => 'LETICIA JENNEDY',
                'NIM' => '00000069343',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '40',
                'Nama' => 'YOSKA OTNIEL SIMBOLON',
                'NIM' => '00000042113',
                'Prodi' => 'Sistem Informasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '41',
                'Nama' => 'Rafael Putra Hulu (ID LINE: rafaelph21)',
                'NIM' => '0',
                'Prodi' => '',
                'status' => 'mentor'
        ]);
        Kelompok::create([
                'NomorKelompok' => '41',
                'Nama' => 'VELLIX TARTANTO',
                'NIM' => '00000068601',
                'Prodi' => 'Perhotelan',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '41',
                'Nama' => 'YAHAZIEL YEHUDA PRASETYOADI',
                'NIM' => '00000072484',
                'Prodi' => 'Jurnalistik',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '41',
                'Nama' => 'EMMANUEL ALEXANDER HERNADI BLOEM',
                'NIM' => '00000079491',
                'Prodi' => 'Sistem Informasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '41',
                'Nama' => 'EDMUND DANIEL VALENTINO',
                'NIM' => '00000068115',
                'Prodi' => 'Sistem Informasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '41',
                'Nama' => 'JESSICA GOSAL',
                'NIM' => '00000071203',
                'Prodi' => 'Film & Animasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '41',
                'Nama' => 'RAPHAEL LOAREN',
                'NIM' => '00000075127',
                'Prodi' => 'Film & Animasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '41',
                'Nama' => 'OCTAVIANNY NOVENA RICY',
                'NIM' => '00000075522',
                'Prodi' => 'Manajemen',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '41',
                'Nama' => 'AIMAN .',
                'NIM' => '00000079487',
                'Prodi' => 'Manajemen',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '41',
                'Nama' => 'JOTYS RAFLY SAPUTRO POERWOTO',
                'NIM' => '00000073397',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '41',
                'Nama' => 'ZABRINA FEVTA FISABILILLAH',
                'NIM' => '00000072715',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '41',
                'Nama' => 'SALMA MANDA PUTRI NABILAH',
                'NIM' => '00000077712',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '41',
                'Nama' => 'MAITRIANA .',
                'NIM' => '00000069324',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '41',
                'Nama' => 'SERVIANA DJIE PUTRI',
                'NIM' => '00000068689',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '41',
                'Nama' => 'NATHAN IMANUEL DJARI',
                'NIM' => '00000075204',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '41',
                'Nama' => 'FABELINE NONNE PUTRANTO',
                'NIM' => '00000071171',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '41',
                'Nama' => 'JEANNE ANNABELLE BENZ PAMUNGKAS',
                'NIM' => '00000069417',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '41',
                'Nama' => 'NATHANIA PUTRI QHEN',
                'NIM' => '00000068110',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '41',
                'Nama' => 'ARIEL JESKA SURJANA',
                'NIM' => '00000068634',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '41',
                'Nama' => 'ADHELIO REYHANDRO',
                'NIM' => '00000059870',
                'Prodi' => 'Sistem Informasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '42',
                'Nama' => 'Ruth Marcellia Sitohang (ID LINE: ruth_marcel24)',
                'NIM' => '0',
                'Prodi' => '',
                'status' => 'mentor'
        ]);
        Kelompok::create([
                'NomorKelompok' => '42',
                'Nama' => 'FINNILISYA OKTAVIANY',
                'NIM' => '00000088818',
                'Prodi' => 'Perhotelan',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '42',
                'Nama' => 'FAJAR RIFAI MULIA SIAGIAN',
                'NIM' => '00000073958',
                'Prodi' => 'Jurnalistik',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '42',
                'Nama' => 'TIFFANY VALENCIA SUYANTO',
                'NIM' => '00000069484',
                'Prodi' => 'Sistem Informasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '42',
                'Nama' => 'JUVINCEN INDRAJAYA LIGA',
                'NIM' => '00000068866',
                'Prodi' => 'Sistem Informasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '42',
                'Nama' => 'KENNETH WILBERT SOENARTO',
                'NIM' => '00000065188',
                'Prodi' => 'Film & Animasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '42',
                'Nama' => 'CHRISTOPHER ERICK',
                'NIM' => '00000068166',
                'Prodi' => 'Film & Animasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '42',
                'Nama' => 'OLIVIER RAKHA',
                'NIM' => '00000069523',
                'Prodi' => 'Manajemen',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '42',
                'Nama' => 'CHRISTOPHER WILLIAM JONATAN',
                'NIM' => '00000073344',
                'Prodi' => 'Manajemen',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '42',
                'Nama' => 'JULIUS EVAN SIDARTO',
                'NIM' => '00000070624',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '42',
                'Nama' => 'ZORDHY GIBRAN FADHLURRAHMAN',
                'NIM' => '00000077259',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '42',
                'Nama' => 'KHANZA AZZAHRA PUTRIDA S',
                'NIM' => '00000073309',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '42',
                'Nama' => 'MAYANG CERANA NABABAN',
                'NIM' => '00000073324',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '42',
                'Nama' => 'JOEY MANUEL HEMELSON',
                'NIM' => '00000073594',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '42',
                'Nama' => 'DAVINA LYSANDER',
                'NIM' => '00000069071',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '42',
                'Nama' => 'FARREL ABIMANYU KALAIY',
                'NIM' => '00000069168',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '42',
                'Nama' => 'JOSE ARMANDO CHRISTIAN',
                'NIM' => '00000069731',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '42',
                'Nama' => 'MUHAMMAD BINTANG BASYRAH',
                'NIM' => '00000066030',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '42',
                'Nama' => 'DEBIAN VINCA MAWANGI',
                'NIM' => '00000075008',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '42',
                'Nama' => 'THEODORE TANUJAYA',
                'NIM' => '00000081673',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '42',
                'Nama' => 'MARCELYN VIANDY HUANG',
                'NIM' => '00000055976',
                'Prodi' => 'Film & Animasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '43',
                'Nama' => 'Devani Hizkia (ID LINE: devanihizkia)',
                'NIM' => '0',
                'Prodi' => '',
                'status' => 'mentor'
        ]);
        Kelompok::create([
                'NomorKelompok' => '43',
                'Nama' => 'THAYA MAGENTA',
                'NIM' => '00000068242',
                'Prodi' => 'Perhotelan',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '43',
                'Nama' => 'HASHEMY RIZKY ADITYA',
                'NIM' => '00000075332',
                'Prodi' => 'Jurnalistik',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '43',
                'Nama' => 'JAMES JONATHAN TEDDY',
                'NIM' => '00000064885',
                'Prodi' => 'Sistem Informasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '43',
                'Nama' => 'KEVIN HERMAWAN',
                'NIM' => '00000070062',
                'Prodi' => 'Sistem Informasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '43',
                'Nama' => 'MIYE MAEKO',
                'NIM' => '00000077643',
                'Prodi' => 'Film & Animasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '43',
                'Nama' => 'RUBEN PIETER HALOMOAN SITANGGANG',
                'NIM' => '00000070372',
                'Prodi' => 'Film & Animasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '43',
                'Nama' => 'RACHEL JULIETTA GUNAWAN',
                'NIM' => '00000076073',
                'Prodi' => 'Manajemen',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '43',
                'Nama' => 'ELGA ALRIFKY FANEZAN',
                'NIM' => '00000082015',
                'Prodi' => 'Manajemen',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '43',
                'Nama' => 'CHAREL ROSABEL',
                'NIM' => '00000072046',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '43',
                'Nama' => 'REYNALDO .',
                'NIM' => '00000068706',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '43',
                'Nama' => 'ABI ANDREA NURPASHA',
                'NIM' => '00000079207',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '43',
                'Nama' => 'VIONA TANZIL',
                'NIM' => '00000067649',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '43',
                'Nama' => 'ANDREAS DAVIN YUDHA KRISTANTO',
                'NIM' => '00000070240',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '43',
                'Nama' => 'NEILSON .',
                'NIM' => '00000067639',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '43',
                'Nama' => 'FENNY .',
                'NIM' => '00000073317',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '43',
                'Nama' => 'JASON LATREUO CHRISTOPHER',
                'NIM' => '00000075202',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '43',
                'Nama' => 'NICHOLAS KURNIAWAN',
                'NIM' => '00000076351',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '43',
                'Nama' => 'JESSICA EUNICE SIHASALE',
                'NIM' => '00000066818',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '43',
                'Nama' => 'LIMA EKA SAMUEL PURNOMO',
                'NIM' => '00000054414',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '44',
                'Nama' => 'Cristin Natalia Karaeng (ID LINE: xrtnee)',
                'NIM' => '0',
                'Prodi' => '',
                'status' => 'mentor'
        ]);
        Kelompok::create([
                'NomorKelompok' => '44',
                'Nama' => 'KEVRAYN DAVID SUSANTO',
                'NIM' => '00000071132',
                'Prodi' => 'Perhotelan',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '44',
                'Nama' => 'ACHMAD SYECHAN RAMADHAN SIREGAR',
                'NIM' => '00000072100',
                'Prodi' => 'Jurnalistik',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '44',
                'Nama' => 'RADJA FATHIAR FARHAN',
                'NIM' => '00000083198',
                'Prodi' => 'Sistem Informasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '44',
                'Nama' => 'FRANCESCO TONY',
                'NIM' => '00000065250',
                'Prodi' => 'Sistem Informasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '44',
                'Nama' => 'MUMTAZ ALKHWARIZMI SABRI',
                'NIM' => '00000068443',
                'Prodi' => 'Film & Animasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '44',
                'Nama' => 'ALLEGRA TORINO',
                'NIM' => '00000068782',
                'Prodi' => 'Film & Animasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '44',
                'Nama' => 'CAROLUS MAXELL TOSHIRO',
                'NIM' => '00000069581',
                'Prodi' => 'Manajemen',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '44',
                'Nama' => 'RATU ALIYA KHAIRUNNISA',
                'NIM' => '00000077243',
                'Prodi' => 'Manajemen',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '44',
                'Nama' => 'ANTONIUS SIMON PEHAN HADJON',
                'NIM' => '00000079800',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '44',
                'Nama' => 'JESSEN VALLENSIO',
                'NIM' => '00000076210',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '44',
                'Nama' => 'DAVID IMMANUEL RESNER',
                'NIM' => '00000068568',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '44',
                'Nama' => 'NICHOLAS HADI SURYANA',
                'NIM' => '00000067113',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '44',
                'Nama' => 'SERENDRI OEI',
                'NIM' => '00000079329',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '44',
                'Nama' => 'NIXON OSEL LINUEL',
                'NIM' => '00000069221',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '44',
                'Nama' => 'FELLYCIA .',
                'NIM' => '00000069791',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '44',
                'Nama' => 'KEISHA NATHANIE',
                'NIM' => '00000067481',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '44',
                'Nama' => 'CLARA THERESA SVENTHA CHANDRA',
                'NIM' => '00000070411',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '44',
                'Nama' => 'DITA AVILLA THIRZA',
                'NIM' => '00000073228',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '44',
                'Nama' => 'CASEY ALVINA MARVA',
                'NIM' => '00000063484',
                'Prodi' => 'Akuntansi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '45',
                'Nama' => 'Felicia Agustine Halim (ID LINE: feliciagstnn)',
                'NIM' => '0',
                'Prodi' => '',
                'status' => 'mentor'
        ]);
        Kelompok::create([
                'NomorKelompok' => '45',
                'Nama' => 'PATRICK EDWARD SURYAJAYA',
                'NIM' => '00000067655',
                'Prodi' => 'Perhotelan',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '45',
                'Nama' => 'EVELYN ANDREAWATY',
                'NIM' => '00000066709',
                'Prodi' => 'Jurnalistik',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '45',
                'Nama' => 'RAFI AULIA RAHMAN',
                'NIM' => '00000071086',
                'Prodi' => 'Sistem Informasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '45',
                'Nama' => 'CALVIN JHON',
                'NIM' => '00000070300',
                'Prodi' => 'Sistem Informasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '45',
                'Nama' => 'LEO MARVIN DIAZ',
                'NIM' => '00000081220',
                'Prodi' => 'Film & Animasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '45',
                'Nama' => 'CARISSA FIORY ARDIANI',
                'NIM' => '00000077878',
                'Prodi' => 'Film & Animasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '45',
                'Nama' => 'MUHAMMAD MUSYAFFA FAQIH',
                'NIM' => '00000073632',
                'Prodi' => 'Manajemen',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '45',
                'Nama' => 'FATHIA RAISA KAMILA',
                'NIM' => '00000081842',
                'Prodi' => 'Manajemen',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '45',
                'Nama' => 'FELIX IVANDER',
                'NIM' => '00000070040',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '45',
                'Nama' => 'GILBERT GABRIEL',
                'NIM' => '00000077561',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '45',
                'Nama' => 'DAVID MOSES MANTIRI KALESARAN',
                'NIM' => '00000067468',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '45',
                'Nama' => 'MUHAMMAD THORIQ WAFA ABDILAH',
                'NIM' => '00000075979',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '45',
                'Nama' => 'ARLETTA HALIM',
                'NIM' => '00000067832',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '45',
                'Nama' => 'DEAN YULISTA',
                'NIM' => '00000073208',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '45',
                'Nama' => 'FELIX THONG',
                'NIM' => '00000075587',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '45',
                'Nama' => 'LAURYN VICTORANG',
                'NIM' => '00000075855',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '45',
                'Nama' => 'RAFY RAYYAN BAGASKARA',
                'NIM' => '00000071322',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '45',
                'Nama' => 'JEVON TJUANG',
                'NIM' => '00000070703',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '45',
                'Nama' => 'MARIA AMELIA PUTRI',
                'NIM' => '00000067903',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '45',
                'Nama' => 'DEVIA DWI KANIA',
                'NIM' => '00000063918',
                'Prodi' => 'Akuntansi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '46',
                'Nama' => 'Nadya Elsyafira (ID LINE: nadyaelsyfr)',
                'NIM' => '0',
                'Prodi' => '',
                'status' => 'mentor'
        ]);
        Kelompok::create([
                'NomorKelompok' => '46',
                'Nama' => 'EDWARD SURYADHARMA FERNANDO',
                'NIM' => '00000078663',
                'Prodi' => 'Perhotelan',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '46',
                'Nama' => 'ANGGA BASSONI AL BARKAH',
                'NIM' => '00000072781',
                'Prodi' => 'Jurnalistik',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '46',
                'Nama' => 'RONNY KURNIA PUTRA',
                'NIM' => '00000075851',
                'Prodi' => 'Sistem Informasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '46',
                'Nama' => 'ZEVANAYA BEVERLY DREW',
                'NIM' => '00000077121',
                'Prodi' => '#Sistem Informasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '46',
                'Nama' => 'GILBERT CHRISTIANTO HUTAGALUNG',
                'NIM' => '00000076108',
                'Prodi' => 'Film & Animasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '46',
                'Nama' => 'CHANDRA WIJAYA FATAH',
                'NIM' => '00000071233',
                'Prodi' => 'Film & Animasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '46',
                'Nama' => 'RADITYA NARENDRA PUTRA',
                'NIM' => '00000069453',
                'Prodi' => 'Manajemen',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '46',
                'Nama' => 'VISIANTO THEO ABDISA',
                'NIM' => '00000069526',
                'Prodi' => 'Manajemen',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '46',
                'Nama' => 'NURUL AZIZAH',
                'NIM' => '00000076022',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '46',
                'Nama' => 'GILBERT TIOVAN',
                'NIM' => '00000066811',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '46',
                'Nama' => 'NAVY GIBRAN ATALLAH TUPAN',
                'NIM' => '00000087546',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '46',
                'Nama' => 'NATHANIA AURELIA',
                'NIM' => '00000067851',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '46',
                'Nama' => 'FELICIA ARIFIN',
                'NIM' => '00000065178',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '46',
                'Nama' => 'CHRISTOPER JEREMY WIDJAJA',
                'NIM' => '00000069066',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '46',
                'Nama' => 'FILBERT FAUSTO',
                'NIM' => '00000068593',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '46',
                'Nama' => 'JESSELYN NATANIA',
                'NIM' => '00000068630',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '46',
                'Nama' => 'GABRIELLA LUCITA SUJANTO',
                'NIM' => '00000067869',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '46',
                'Nama' => 'LIVIA VALENCIA',
                'NIM' => '00000070719',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '46',
                'Nama' => 'RANI JUNARTI',
                'NIM' => '00000058597',
                'Prodi' => 'Sistem Informasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '47',
                'Nama' => 'Vina Aulia Wiguna (ID LINE: vina.auliawiguna)',
                'NIM' => '0',
                'Prodi' => '',
                'status' => 'mentor'
        ]);
        Kelompok::create([
                'NomorKelompok' => '47',
                'Nama' => 'SHAHNAZ HALIZA YUHARDHI',
                'NIM' => '00000075124',
                'Prodi' => 'Perhotelan',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '47',
                'Nama' => 'ANDREAS HANDI PRANAWA',
                'NIM' => '00000069876',
                'Prodi' => 'Jurnalistik',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '47',
                'Nama' => 'ROSA AULIA WANGI',
                'NIM' => '00000069798',
                'Prodi' => 'Sistem Informasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '47',
                'Nama' => 'ALBERT JONATHAN',
                'NIM' => '00000068981',
                'Prodi' => 'Sistem Informasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '47',
                'Nama' => 'DARRELL AYDIN BAHY',
                'NIM' => '00000068161',
                'Prodi' => 'Film & Animasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '47',
                'Nama' => 'CHERYL JEMIMA NATAYA',
                'NIM' => '00000066378',
                'Prodi' => 'Film & Animasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '47',
                'Nama' => 'ALFIE FERTIYANTI',
                'NIM' => '00000069851',
                'Prodi' => 'Manajemen',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '47',
                'Nama' => 'DWI PUTRI CAHYANI',
                'NIM' => '00000070847',
                'Prodi' => 'Manajemen',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '47',
                'Nama' => 'AXEL BRYAN BOLANG',
                'NIM' => '00000072124',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '47',
                'Nama' => 'GLEN OWEN',
                'NIM' => '00000070244',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '47',
                'Nama' => 'RIFKAH SYAM SAIBAH',
                'NIM' => '00000069604',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '47',
                'Nama' => 'ZEPHANIA PUTRI SIMANJUNTAK',
                'NIM' => '00000077805',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '47',
                'Nama' => 'KENNIE BENJAMIN',
                'NIM' => '00000069083',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '47',
                'Nama' => 'REGITA ZULFA KUSUMA WARDANI',
                'NIM' => '00000077539',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '47',
                'Nama' => 'FIDELLIA GEISCA MENAYANG',
                'NIM' => '00000066745',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '47',
                'Nama' => 'JESSICA MARELLA',
                'NIM' => '00000067878',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '47',
                'Nama' => 'NANCY SERAFINA NUGROHO',
                'NIM' => '00000066506',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '47',
                'Nama' => 'CELIE KARITRA HARIYANTO',
                'NIM' => '00000067078',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '47',
                'Nama' => 'GRACE AURELIA',
                'NIM' => '00000058386',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '48',
                'Nama' => 'Steven Natanael (ID LINE: stevennh)',
                'NIM' => '0',
                'Prodi' => '',
                'status' => 'mentor'
        ]);
        Kelompok::create([
                'NomorKelompok' => '48',
                'Nama' => 'CONNIE BRAHMANA',
                'NIM' => '00000080787',
                'Prodi' => 'Perhotelan',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '48',
                'Nama' => 'CLARA JULIATRY CORNELIANI MBULU',
                'NIM' => '00000077085',
                'Prodi' => 'Jurnalistik',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '48',
                'Nama' => 'BRYANT LIE TJANDRA',
                'NIM' => '00000067969',
                'Prodi' => 'Sistem Informasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '48',
                'Nama' => 'NOVANDO YACOB',
                'NIM' => '00000074999',
                'Prodi' => 'Sistem Informasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '48',
                'Nama' => 'CELVIN CRISTYANTO',
                'NIM' => '00000069280',
                'Prodi' => 'Film & Animasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '48',
                'Nama' => 'KEVIN SUTANTO',
                'NIM' => '00000069530',
                'Prodi' => 'Film & Animasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '48',
                'Nama' => 'ARYA REVANANDA',
                'NIM' => '00000081130',
                'Prodi' => 'Manajemen',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '48',
                'Nama' => 'FABIAN BENEDICT',
                'NIM' => '00000071961',
                'Prodi' => 'Manajemen',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '48',
                'Nama' => 'VIANCA VANESIA BARHAN',
                'NIM' => '00000065031',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '48',
                'Nama' => 'HIZKIA HARDYANTO',
                'NIM' => '00000075196',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '48',
                'Nama' => 'BAYU AJI WIBISONO',
                'NIM' => '00000075816',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '48',
                'Nama' => 'PATRICIA CUACA',
                'NIM' => '00000065889',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '48',
                'Nama' => 'BENEDICTA FORTUNATA',
                'NIM' => '00000068557',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '48',
                'Nama' => 'RIO FERDINAND HANDOKO',
                'NIM' => '00000068718',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '48',
                'Nama' => 'FERNANDO SANTOS',
                'NIM' => '00000071701',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '48',
                'Nama' => 'STEVANUS YULIEUS KURNIAWAN',
                'NIM' => '00000071528',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '48',
                'Nama' => 'FERREN ASHLEY SILVANUS',
                'NIM' => '00000078583',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '48',
                'Nama' => 'CHERRY WIJAYA',
                'NIM' => '00000070234',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '48',
                'Nama' => 'DERRENANDERSAN KWO',
                'NIM' => '00000042166',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '49',
                'Nama' => 'Muhammad Kalevi (ID LINE: kalevii)',
                'NIM' => '0',
                'Prodi' => '',
                'status' => 'mentor'
        ]);

        Kelompok::create([
                'NomorKelompok' => '49',
                'Nama' => 'YOSHELLA YULIANA',
                'NIM' => '00000075485',
                'Prodi' => 'Perhotelan',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '49',
                'Nama' => 'NANIA SATRIANI',
                'NIM' => '00000068438',
                'Prodi' => 'Jurnalistik',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '49',
                'Nama' => 'ANDREW JAYA SUSILO',
                'NIM' => '00000066358',
                'Prodi' => 'Sistem Informasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '49',
                'Nama' => 'DIMAS AJI HARITSON',
                'NIM' => '00000076403',
                'Prodi' => 'Sistem Informasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '49',
                'Nama' => 'FELICIA ALEXANDRA',
                'NIM' => '00000076038',
                'Prodi' => 'Film & Animasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '49',
                'Nama' => 'JONATHAN JOSE SUSANTO',
                'NIM' => '00000067990',
                'Prodi' => 'Film & Animasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '49',
                'Nama' => 'MILANDY RAMADHAN',
                'NIM' => '00000083210',
                'Prodi' => 'Manajemen',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '49',
                'Nama' => 'ALVYANSYAH RAIKHAN MAHENDRA PUTRA D',
                'NIM' => '00000072267',
                'Prodi' => 'Manajemen',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '49',
                'Nama' => 'KARIM HARTONO',
                'NIM' => '00000077671',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '49',
                'Nama' => 'ANDREO FRIENDLY TIMORENCE MANUKOA',
                'NIM' => '00000070253',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '49',
                'Nama' => 'FARHAN AMMAR HAKIM',
                'NIM' => '00000074745',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '49',
                'Nama' => 'FREDDY PRATAMA HARTONO',
                'NIM' => '00000075901',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '49',
                'Nama' => 'BERNARDINE KEZIA AMANDA PUTRI KUNDHIARTO',
                'NIM' => '00000071556',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '49',
                'Nama' => 'PATRICIA GEOVANY',
                'NIM' => '00000067989',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '49',
                'Nama' => 'KEOLA FLODINA JEMIMA SITUMORANG',
                'NIM' => '00000069540',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '49',
                'Nama' => 'KEISHA PUTRI HERAWAN',
                'NIM' => '00000070496',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '49',
                'Nama' => 'MUHAMMAD FACHRI YAZID ALEA',
                'NIM' => '00000082741',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '49',
                'Nama' => 'GISELLA PRISCILLA NATASYA',
                'NIM' => '00000069693',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '49',
                'Nama' => 'MUHAMMAD GHUFRANSYAH',
                'NIM' => '00000060111',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '50',
                'Nama' => 'Adeline Regina Winata (ID LINE: adelinewinataa)',
                'NIM' => '0',
                'Prodi' => '',
                'status' => 'mentor'
        ]);
        Kelompok::create([
                'NomorKelompok' => '50',
                'Nama' => 'VINCENT SUTIONO',
                'NIM' => '00000070476',
                'Prodi' => 'Sistem Komputer',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '50',
                'Nama' => 'RYAN CHEN',
                'NIM' => '00000068138',
                'Prodi' => 'Jurnalistik',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '50',
                'Nama' => 'HASSEL MUHAMAD ZAYDAN',
                'NIM' => '00000084286',
                'Prodi' => 'Sistem Informasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '50',
                'Nama' => 'KARIN ELDORA',
                'NIM' => '00000068097',
                'Prodi' => 'Sistem Informasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '50',
                'Nama' => 'VICTOR JASON SOLA RUMAPEA',
                'NIM' => '00000071296',
                'Prodi' => 'Film & Animasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '50',
                'Nama' => 'JUSTIN JEFFERSON BORHAN',
                'NIM' => '00000071752',
                'Prodi' => 'Film & Animasi',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '50',
                'Nama' => 'NABIILA RIZKY KURNIAWAN',
                'NIM' => '00000073385',
                'Prodi' => 'Manajemen',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '50',
                'Nama' => 'YOHANES GOVINDA AGAROTA',
                'NIM' => '00000070005',
                'Prodi' => 'Manajemen',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '50',
                'Nama' => 'NATASHA RAHIMA',
                'NIM' => '00000071319',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '50',
                'Nama' => 'KRISTOFORUS KHARIS PUTRA SADSUITUBUN',
                'NIM' => '00000067127',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '50',
                'Nama' => 'SHARONE ANGELICA JOVANS',
                'NIM' => '00000069637',
                'Prodi' => 'Informatika',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '50',
                'Nama' => 'LAVIA JOVELIN',
                'NIM' => '00000073318',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '50',
                'Nama' => 'BERNARDUS DHANA GALIH RESWARA',
                'NIM' => '00000071283',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '50',
                'Nama' => 'RACHEL MANURUNG',
                'NIM' => '00000070580',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '50',
                'Nama' => 'TAMARA FRISCHYLLA',
                'NIM' => '00000071637',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '50',
                'Nama' => 'KEISYA ARDHYAGITA RANJANI',
                'NIM' => '00000066771',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '50',
                'Nama' => 'NARITA CHANGI',
                'NIM' => '00000069479',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '50',
                'Nama' => 'AILEEN KIRANA PANGKEREGO',
                'NIM' => '00000068994',
                'Prodi' => 'DKV',
                'status' => 'mentee'
        ]);
        Kelompok::create([
                'NomorKelompok' => '50',
                'Nama' => 'STEPHANI RUCITA SUTRISNO',
                'NIM' => '00000059733',
                'Prodi' => 'Ilkom',
                'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '51',
            'Nama' => 'Su Ping (ID LINE: supingssrm)',
            'NIM' => 0,
            'Prodi' => '',
            'status' => 'mentor'
            ]);
            Kelompok::create([
            'NomorKelompok' => '51',
            'Nama' => 'BAMBANG AJI WICAKSONO',
            'NIM' => '00000073783',
            'Prodi' => 'Sistem Komputer',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '51',
            'Nama' => 'TIARA DARA CLARISA',
            'NIM' => '00000072102',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '51',
            'Nama' => 'TRESYA MEISEL ADIEPUTRI',
            'NIM' => '00000073937',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '51',
            'Nama' => 'MICHAEL VICTORIANO',
            'NIM' => '00000068872',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '51',
            'Nama' => 'VILDAN PRABASWARA ANANDANTO',
            'NIM' => '00000075221',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '51',
            'Nama' => 'VERONIKA SUCI EKARIESTI',
            'NIM' => '00000069933',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '51',
            'Nama' => 'MUHAMMAD AMMAR HAFIZH FADHILAH',
            'NIM' => '00000068608',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '51',
            'Nama' => 'KENNYTA AULIA ZAHRA',
            'NIM' => '00000071783',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '51',
            'Nama' => 'OKTAVIAN VITO WIDIYANTA',
            'NIM' => '00000074775',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '51',
            'Nama' => 'BENEDICK CHRISTOPHER BAMBA',
            'NIM' => '00000071174',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '51',
            'Nama' => 'KATHARINA AILYN WARDOJO',
            'NIM' => '00000068063',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '51',
            'Nama' => 'RACHEL SETYADI',
            'NIM' => '00000071765',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '51',
            'Nama' => 'FLORENCE AGATHA',
            'NIM' => '00000072449',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '51',
            'Nama' => 'CINDY AURELLIA LIWANG',
            'NIM' => '00000069005',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '51',
            'Nama' => 'F ECHA ENDRI FEBRIAN',
            'NIM' => '00000071284',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '51',
            'Nama' => 'SHEERLYN ANGELICE SALIM',
            'NIM' => '00000067956',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '51',
            'Nama' => 'FADLIEN CLEARESTA SWARNA GALIH',
            'NIM' => '00000076392',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '51',
            'Nama' => 'GRACE ANGELIE',
            'NIM' => '00000067421',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '51',
            'Nama' => 'ADYA DIPTA IBRAHIM SIMANJUNTAK',
            'NIM' => '00000042164',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '52',
            'Nama' => 'Pricilla Angel Wijaya (ID LINE: pricilla.angel)',
            'NIM' => 0,
            'Prodi' => '',
            'status' => 'mentor'
            ]);
            Kelompok::create([
            'NomorKelompok' => '52',
            'Nama' => 'ARYA PUTRA LILY PRADANA',
            'NIM' => '00000079960',
            'Prodi' => 'Sistem Komputer',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '52',
            'Nama' => 'CHRISTOPHER NATHANAEL',
            'NIM' => '00000077247',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '52',
            'Nama' => 'IVAN NAYOTTAMA ERWANA',
            'NIM' => '00000066882',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '52',
            'Nama' => 'ANGELO SEBASTIAN',
            'NIM' => '00000065076',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '52',
            'Nama' => 'AIMAN RADITHYA PUTRA AGUNG',
            'NIM' => '00000069532',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '52',
            'Nama' => 'JASON CHRISTIAN HAROLD',
            'NIM' => '00000084294',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '52',
            'Nama' => 'NATHASYA MARCELLINA PUTRI',
            'NIM' => '00000067771',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '52',
            'Nama' => 'ALEXANDER DANIEL CAHYADI MOGO',
            'NIM' => '00000075244',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '52',
            'Nama' => 'MATTHEW NIKOLAUS',
            'NIM' => '00000067098',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '52',
            'Nama' => 'KEVIN KEN',
            'NIM' => '00000067060',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '52',
            'Nama' => 'DEVON AURELIUS',
            'NIM' => '00000068889',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '52',
            'Nama' => 'JANICE TANU KUSUMA',
            'NIM' => '00000066765',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '52',
            'Nama' => 'CATTIE MEILISA ADESTIA',
            'NIM' => '00000074808',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '52',
            'Nama' => 'RAFIDA AULIA RAMADHANY',
            'NIM' => '00000069562',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '52',
            'Nama' => 'BELLA FELISHA',
            'NIM' => '00000068632',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '52',
            'Nama' => 'TEDDY KURNIAWAN',
            'NIM' => '00000067920',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '52',
            'Nama' => 'NAZWADHIRA PUTRI AZAHRAH',
            'NIM' => '00000069264',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '52',
            'Nama' => 'JOANNA LIONO',
            'NIM' => '00000068259',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '52',
            'Nama' => 'DYLAN',
            'NIM' => '00000055508',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '53',
            'Nama' => 'Rioji Michael Saputra (ID LINE: riojimichael)',
            'NIM' => 0,
            'Prodi' => '',
            'status' => 'mentor'
            ]);
            Kelompok::create([
            'NomorKelompok' => '53',
            'Nama' => 'PASKASIUS GIAN AVILA PUTRA',
            'NIM' => '00000070288',
            'Prodi' => 'Sistem Komputer',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '53',
            'Nama' => 'LINTANG PRAMATYANTI',
            'NIM' => '00000069741',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '53',
            'Nama' => 'DEBY FITRIA',
            'NIM' => '00000081068',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '53',
            'Nama' => 'OCTA LIAM ANDERSON',
            'NIM' => '00000075651',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '53',
            'Nama' => 'NAKEISHA BUNGA NAGARA',
            'NIM' => '00000081136',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '53',
            'Nama' => 'ARI FADHLULLAH',
            'NIM' => '00000075568',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '53',
            'Nama' => 'SALWA AQILAH NOVIANTI',
            'NIM' => '00000081841',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '53',
            'Nama' => 'ALVIN YUAN KURNIAWAN',
            'NIM' => '00000068525',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '53',
            'Nama' => 'LEONARDO TYOES HUIBU',
            'NIM' => '00000065503',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '53',
            'Nama' => 'CUAN ZEFANYA',
            'NIM' => '00000073860',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '53',
            'Nama' => 'TIMOTHY CLIFF PERMADI',
            'NIM' => '00000069749',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '53',
            'Nama' => 'STEPHANIE ANGELIAN',
            'NIM' => '00000081176',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '53',
            'Nama' => 'AKANTA AVWA GUNASTI',
            'NIM' => '00000071058',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '53',
            'Nama' => 'DARREN SEBASTIAN WINARTO',
            'NIM' => '00000071732',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '53',
            'Nama' => 'CARREN PRISCELLA',
            'NIM' => '00000077849',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '53',
            'Nama' => 'THEA AVERINA NATACHA',
            'NIM' => '00000071348',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '53',
            'Nama' => 'FAYOLA GUNAWAN SANTOSO',
            'NIM' => '00000075326',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '53',
            'Nama' => 'ALVIN MATTHEW HANDREAN',
            'NIM' => '00000071446',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '53',
            'Nama' => 'FRANKLIN WIRAWAN',
            'NIM' => '00000054121',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '54',
            'Nama' => 'Fredericko Zein Kurniawan (ID LINE: ffredrck)',
            'NIM' => 0,
            'Prodi' => '',
            'status' => 'mentor'
            ]);
            Kelompok::create([
            'NomorKelompok' => '54',
            'Nama' => 'ALVIN YOHANES KRISTIANTO',
            'NIM' => '00000069115',
            'Prodi' => 'Sistem Komputer',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '54',
            'Nama' => 'KATHLEEN ALICIA BONG',
            'NIM' => '00000066664',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '54',
            'Nama' => 'REZITA AZRIEL DELISIA',
            'NIM' => '00000075828',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '54',
            'Nama' => 'MIKHAIL LIM MATTAGATI',
            'NIM' => '00000068602',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '54',
            'Nama' => 'KORNELIS ANDREW WIBOWO PANG',
            'NIM' => '00000068190',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '54',
            'Nama' => 'BRIANTINO FERDIAN HIDAYAT',
            'NIM' => '00000072382',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '54',
            'Nama' => 'SHABRINA RAHMA AULIA',
            'NIM' => '00000083434',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '54',
            'Nama' => 'AMRI KHAIRUDIN',
            'NIM' => '00000071153',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '54',
            'Nama' => 'GISSELLE ANGELINA TANUWIDJAJA',
            'NIM' => '00000075514',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '54',
            'Nama' => 'CHRISTOPHER ALVARO MARIA SAMOLA',
            'NIM' => '00000073214',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '54',
            'Nama' => 'YOHANES RIANGTO',
            'NIM' => '00000065501',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '54',
            'Nama' => 'MUHAMMAD RIDHO AL FAUZAN',
            'NIM' => '00000077540',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '54',
            'Nama' => 'ABRAHAM SEAN ABHINAYA',
            'NIM' => '00000076355',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '54',
            'Nama' => 'CLARISSA .',
            'NIM' => '00000068349',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '54',
            'Nama' => 'VALLENCIA VALLERIE',
            'NIM' => '00000070880',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '54',
            'Nama' => 'PATRICIA MILLIANTY LOUWBRY',
            'NIM' => '00000081728',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '54',
            'Nama' => 'NATASHA DEVI',
            'NIM' => '00000070046',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '54',
            'Nama' => 'CHIARA ANDINI SALSABILA',
            'NIM' => '00000069039',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '54',
            'Nama' => 'HENDRYQAFFYAMANI',
            'NIM' => '00000039882',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '55',
            'Nama' => 'Vienda Magdalena Siahaan (ID LINE: viendasiahaan)',
            'NIM' => 0,
            'Prodi' => '',
            'status' => 'mentor'
            ]);
            Kelompok::create([
            'NomorKelompok' => '55',
            'Nama' => 'MUHAMMAD MARSHAL OMAR FARRAS',
            'NIM' => '00000068058',
            'Prodi' => 'Sistem Komputer',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '55',
            'Nama' => 'KEIRA PUTRI MINERVA',
            'NIM' => '00000067854',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '55',
            'Nama' => 'MICHAEL JOVANDO',
            'NIM' => '00000068313',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '55',
            'Nama' => 'ELIEZER MARCELINO YONATHAN',
            'NIM' => '00000071042',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '55',
            'Nama' => 'SYAHLARICHANDA SALSABILA',
            'NIM' => '00000067420',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '55',
            'Nama' => 'KELVIN BOCHARI M',
            'NIM' => '00000074781',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '55',
            'Nama' => 'ALDA FATWA RAIDAH',
            'NIM' => '00000083380',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '55',
            'Nama' => 'MICHAEL WIDJAJA',
            'NIM' => '00000075473',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '55',
            'Nama' => 'KENNDY SUSIO',
            'NIM' => '00000075031',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '55',
            'Nama' => 'BONIFASIUS MARTIN WIBAWA',
            'NIM' => '00000068324',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '55',
            'Nama' => 'RICH MARVIN LIM',
            'NIM' => '00000079061',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '55',
            'Nama' => 'MUHAMMAD AKBAR',
            'NIM' => '00000075859',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '55',
            'Nama' => 'LAURA DERITA CECILIA',
            'NIM' => '00000071037',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '55',
            'Nama' => 'KEYCIA AMANDA HUTOMO',
            'NIM' => '00000065171',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '55',
            'Nama' => 'VALEZSKA AMABELPUTRI THEOPHILUS',
            'NIM' => '00000070918',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '55',
            'Nama' => 'REVANA NANIEL BARAKATI',
            'NIM' => '00000066878',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '55',
            'Nama' => 'KEVIN GUNAWAN',
            'NIM' => '00000067879',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '55',
            'Nama' => 'KARUNDENG, GISELLA GRACE JOSEPHINE',
            'NIM' => '00000069822',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '55',
            'Nama' => 'VELLANDA',
            'NIM' => '00000044504',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '56',
            'Nama' => 'Rachma Azahra Ramadhani (ID LINE: reryazahrar)',
            'NIM' => 0,
            'Prodi' => '',
            'status' => 'mentor'
            ]);
            Kelompok::create([
            'NomorKelompok' => '56',
            'Nama' => 'ADITYA NUGRAHA',
            'NIM' => '00000080926',
            'Prodi' => 'Sistem Komputer',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '56',
            'Nama' => 'AUREEN TREVISIA SUTARNA',
            'NIM' => '00000068323',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '56',
            'Nama' => 'PUTRI MARCELLINA',
            'NIM' => '00000070505',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '56',
            'Nama' => 'ELLENA RUTH GUNAWAN',
            'NIM' => '00000076384',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '56',
            'Nama' => 'YUDITH KURNIAWAN NIRWANTO',
            'NIM' => '00000067548',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '56',
            'Nama' => 'KHALILA ELYSIA CAHYARANI',
            'NIM' => '00000068688',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '56',
            'Nama' => 'RICHARD CHOONELIUS',
            'NIM' => '00000071062',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '56',
            'Nama' => 'MICHELLE LEE',
            'NIM' => '00000070032',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '56',
            'Nama' => 'CLIFF REYNARD',
            'NIM' => '00000075936',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '56',
            'Nama' => 'WENCY YVONNEY WIJAYA',
            'NIM' => '00000071833',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '56',
            'Nama' => 'ANTHONIO RAPHAEL PORTEURO BULO',
            'NIM' => '00000079343',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '56',
            'Nama' => 'MUHAMMAD AKMAL RAMADHAN',
            'NIM' => '00000075080',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '56',
            'Nama' => 'LULU ZAHIRA',
            'NIM' => '00000077652',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '56',
            'Nama' => 'ALYA RAHMAH',
            'NIM' => '00000073311',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '56',
            'Nama' => 'VANIA .',
            'NIM' => '00000070724',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '56',
            'Nama' => 'LIVINIA CATHLEEN GUNAWAN',
            'NIM' => '00000068922',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '56',
            'Nama' => 'CHRISTOPHER JOSSE',
            'NIM' => '00000068948',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '56',
            'Nama' => 'DYLAN LIONG KUSNOWO',
            'NIM' => '00000071769',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '56',
            'Nama' => 'CINDY NASTASHA',
            'NIM' => '00000059240',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '57',
            'Nama' => 'Fernando Devano (ID LINE: fernando_ngu)',
            'NIM' => 0,
            'Prodi' => '',
            'status' => 'mentor'
            ]);
            Kelompok::create([
            'NomorKelompok' => '57',
            'Nama' => 'DIMAS BAGUS NANDITO',
            'NIM' => '00000073396',
            'Prodi' => 'Sistem Komputer',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '57',
            'Nama' => 'MICHELLE AURELIA SOEKIANTO',
            'NIM' => '00000069191',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '57',
            'Nama' => 'MARCO NAFTALI STEVENSON',
            'NIM' => '00000075274',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '57',
            'Nama' => 'EMILIO YANVRENT',
            'NIM' => '00000069993',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '57',
            'Nama' => 'MARCO SAPUTRA TEDY',
            'NIM' => '00000067413',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '57',
            'Nama' => 'LOUISE CLIFFERD',
            'NIM' => '00000075822',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '57',
            'Nama' => 'AUDREY LAVINA',
            'NIM' => '00000071312',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '57',
            'Nama' => 'ERLANGGA PUTRA TAUFAN',
            'NIM' => '00000068265',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '57',
            'Nama' => 'OSCAR JIRO HARLISON',
            'NIM' => '00000072786',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '57',
            'Nama' => 'KENTA PUTRA ROBERTO',
            'NIM' => '00000067710',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '57',
            'Nama' => 'FREDERICO SARREN',
            'NIM' => '00000068357',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '57',
            'Nama' => 'LUTFIANA ZARIFA',
            'NIM' => '00000083659',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '57',
            'Nama' => 'BERNADETTE BERTA CHENHAYANI',
            'NIM' => '00000071729',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '57',
            'Nama' => 'LIDWINA GHEA ARTHA PARANDITA',
            'NIM' => '00000067948',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '57',
            'Nama' => 'JEREVA GOLDEN SOPHIE RAYANTI SIMANJUNTAK',
            'NIM' => '00000070323',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '57',
            'Nama' => 'JIHAD HAFIDZULHAQ FISABILILLAH',
            'NIM' => '00000072518',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '57',
            'Nama' => 'ANGELRIA OCTAMEGA',
            'NIM' => '00000076199',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '57',
            'Nama' => 'EDBERT AMADEO SELOATMODJO',
            'NIM' => '00000067003',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '57',
            'Nama' => 'MUHAMMAD DIO RAFI',
            'NIM' => '00000065990',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '58',
            'Nama' => 'Riyan Chintama (ID LINE: riyan270303)',
            'NIM' => 0,
            'Prodi' => '',
            'status' => 'mentor'
            ]);
            Kelompok::create([
            'NomorKelompok' => '58',
            'Nama' => 'JONATHAN RYAN RIZKIANTO',
            'NIM' => '00000070522',
            'Prodi' => 'Sistem Komputer',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '58',
            'Nama' => 'RADEN MAS MARIO WISNU ADITYO SASRANINGRA',
            'NIM' => '00000071335',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '58',
            'Nama' => 'ZINEDINE ZETHRO',
            'NIM' => '00000067586',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '58',
            'Nama' => 'JESSICA SUNGERIWAN',
            'NIM' => '00000078573',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '58',
            'Nama' => 'ANDHIKA DEWA',
            'NIM' => '00000079282',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '58',
            'Nama' => 'MARSHANDA ALIFIA',
            'NIM' => '00000071270',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '58',
            'Nama' => 'ALEA CAROLINA SCIENCE GAYO',
            'NIM' => '00000075012',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '58',
            'Nama' => 'HANI MUTIA AZKA',
            'NIM' => '00000077249',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '58',
            'Nama' => 'MUHAMMAD DAFFA RAYYANDA',
            'NIM' => '00000082247',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '58',
            'Nama' => 'VINSENSIUS PAULO RYANANDA VIRGIAWAN',
            'NIM' => '00000073384',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '58',
            'Nama' => 'HOTASI ROGATE MANURUNG',
            'NIM' => '00000077278',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '58',
            'Nama' => 'REGINE GERALDINE TASLIM',
            'NIM' => '00000068273',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '58',
            'Nama' => 'MICHELE LIM',
            'NIM' => '00000075832',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '58',
            'Nama' => 'CALLYSTA DAGNA ALICIA DJAJADI',
            'NIM' => '00000074981',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '58',
            'Nama' => 'RAYA ANDHIKA RAFASUNI',
            'NIM' => '00000073600',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '58',
            'Nama' => 'MUHAMMAD RIZKY ARDANA',
            'NIM' => '00000073204',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '58',
            'Nama' => 'MICHAEL DESTINO ARSALAPUTRA',
            'NIM' => '00000066834',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '58',
            'Nama' => 'KEISHA FIDELIA WILLIE',
            'NIM' => '00000072552',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '58',
            'Nama' => 'FABIOLA VANESSA ROHO',
            'NIM' => '00000059667',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '59',
            'Nama' => 'Lie Sui Ket (ID LINE: mamatsyahputra0210)',
            'NIM' => 0,
            'Prodi' => '',
            'status' => 'mentor'
            ]);
            Kelompok::create([
            'NomorKelompok' => '59',
            'Nama' => 'YOGHA PRATAMA ERIYA WIJAYANTO',
            'NIM' => '00000079973',
            'Prodi' => 'Sistem Komputer',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '59',
            'Nama' => 'MARVIN HAZAEL PANJAITAN',
            'NIM' => '00000069156',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '59',
            'Nama' => 'JOE MARCELLO',
            'NIM' => '00000073881',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '59',
            'Nama' => 'FELIX SAMUEL LEO',
            'NIM' => '00000070094',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '59',
            'Nama' => 'VALENTHINO DARMA SAPUTRA',
            'NIM' => '00000075262',
            'Prodi' => 'film & Animasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '59',
            'Nama' => 'PARWIN DER JEET SINGH',
            'NIM' => '00000066408',
            'Prodi' => 'film & Animasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '59',
            'Nama' => 'JESSLYN NATHANIA GOSAL',
            'NIM' => '00000082790',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '59',
            'Nama' => 'REINHARD TIMOTHY PANDEAN',
            'NIM' => '00000069874',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '59',
            'Nama' => 'SITI MARYAMA RAMADHINI AFIFAH',
            'NIM' => '00000089085',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '59',
            'Nama' => 'EVAN VALENTINO',
            'NIM' => '00000075820',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '59',
            'Nama' => 'SHERALDO HALIM',
            'NIM' => '00000071899',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '59',
            'Nama' => 'OLIVIA PUTRI',
            'NIM' => '00000077670',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '59',
            'Nama' => 'MAWIDAH MUTHIA FITRIANI',
            'NIM' => '00000076230',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '59',
            'Nama' => 'JESSICA MARTHA',
            'NIM' => '00000069197',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '59',
            'Nama' => 'REBECCA TJIUNG SENDJAJA',
            'NIM' => '00000068183',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '59',
            'Nama' => 'STEVEN NATHANAEL LIMANJAYA',
            'NIM' => '00000071063',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '59',
            'Nama' => 'NABILAH SYAFIRA RAMADHANI',
            'NIM' => '00000079258',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '59',
            'Nama' => 'KEVIN VALIANTO',
            'NIM' => '00000067449',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '59',
            'Nama' => 'RIVAN RADITYA RIDWAN',
            'NIM' => '00000059561',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '60',
            'Nama' => 'Stephanie Christy (ID LINE: stefich03)',
            'NIM' => 0,
            'Prodi' => '',
            'status' => 'mentor'
            ]);
            Kelompok::create([
            'NomorKelompok' => '60',
            'Nama' => 'THELISSA LEVANA ZHENG',
            'NIM' => '00000075569',
            'Prodi' => 'Sistem Komputer',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '60',
            'Nama' => 'RYAN DESNANDA SYAHPUTRA',
            'NIM' => '00000076339',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '60',
            'Nama' => 'RADINALD MIRZA MUHAMMAD',
            'NIM' => '00000072087',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '60',
            'Nama' => 'IWAYAN ANDRES GAHENDRA',
            'NIM' => '00000072586',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '60',
            'Nama' => 'YAFET NATANAEL',
            'NIM' => '00000071097',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '60',
            'Nama' => 'WILSEN KIE',
            'NIM' => '00000067143',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '60',
            'Nama' => 'MUHAMMAD RAYHAN ABDILLAH',
            'NIM' => '00000088158',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '60',
            'Nama' => 'DEA NATALI MANURUNG',
            'NIM' => '00000075014',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '60',
            'Nama' => 'OWEN CHRISTIAN CAHYADI',
            'NIM' => '00000067055',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '60',
            'Nama' => 'DEVIN KURNIA',
            'NIM' => '00000070649',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '60',
            'Nama' => 'THEON ANABEL DEADORA',
            'NIM' => '00000076775',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '60',
            'Nama' => 'VIONA ALIA PUSPITA',
            'NIM' => '00000069569',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '60',
            'Nama' => 'VRISNEY TANUEVE',
            'NIM' => '00000067660',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '60',
            'Nama' => 'LINDSEY ROCHILI SANTOSO',
            'NIM' => '00000070595',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '60',
            'Nama' => 'CHANELLE GIOVANNI',
            'NIM' => '00000068961',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '60',
            'Nama' => 'MUHAMMAD REDHO ADASTRA',
            'NIM' => '00000067091',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '60',
            'Nama' => 'MARTHA ELYSA ZOLA',
            'NIM' => '00000068996',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '60',
            'Nama' => 'KEVIN WIJAYA',
            'NIM' => '00000069056',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '60',
            'Nama' => 'MUHAMMAD VARREL RAHADIYAN',
            'NIM' => '00000063776',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '61',
            'Nama' => 'Rasya Salsabila Hafah (ID LINE: rasyasals)',
            'NIM' => 0,
            'Prodi' => '',
            'status' => 'mentor'
            ]);
            Kelompok::create([
            'NomorKelompok' => '61',
            'Nama' => 'STEVEN LAURENT',
            'NIM' => '00000068384',
            'Prodi' => 'Sistem Komputer',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '61',
            'Nama' => 'VITO DIMAS SURYANTO',
            'NIM' => '00000079210',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '61',
            'Nama' => 'OKTAFIANO JANSEN',
            'NIM' => '00000074743',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '61',
            'Nama' => 'TIMOTHY LIONG JONATHAN',
            'NIM' => '00000068616',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '61',
            'Nama' => 'NAOMI KWAN',
            'NIM' => '00000075058',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '61',
            'Nama' => 'GISELA CINTA MILETA',
            'NIM' => '00000069936',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '61',
            'Nama' => 'AKHMAD ANDRIAN',
            'NIM' => '00000090119',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '61',
            'Nama' => 'AMELIA EVELYN KUMALASARI',
            'NIM' => '00000069384',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '61',
            'Nama' => 'JACQUES FARRELL DHARMA',
            'NIM' => '00000069027',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '61',
            'Nama' => 'ADHIKA RIZKI PUTRA',
            'NIM' => '00000073941',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '61',
            'Nama' => 'VINCENT CHRISTIAN HALIM',
            'NIM' => '00000070521',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '61',
            'Nama' => 'NICHOLAS ANDREW TJANDRA',
            'NIM' => '00000067128',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '61',
            'Nama' => 'JENEVA CALISTA',
            'NIM' => '00000069089',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '61',
            'Nama' => 'LIVIA AMELIA',
            'NIM' => '00000070609',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '61',
            'Nama' => 'JULIUS .',
            'NIM' => '00000069997',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '61',
            'Nama' => 'STELLA CHAN',
            'NIM' => '00000066734',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '61',
            'Nama' => 'ANGELIA SEAN',
            'NIM' => '00000066833',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '61',
            'Nama' => 'EDLYN LOUISA WIJAYA',
            'NIM' => '00000066465',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '61',
            'Nama' => 'MAURA RADITYA PUTRI',
            'NIM' => '00000056816',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '62',
            'Nama' => 'Zahra Mutiara Adysti (ID LINE: Adystizahra)',
            'NIM' => 0,
            'Prodi' => '',
            'status' => 'mentor'
            ]);
            Kelompok::create([
            'NomorKelompok' => '62',
            'Nama' => 'MUHAMMAD ATHILLA RASHYA',
            'NIM' => '00000073852',
            'Prodi' => 'Sistem Komputer',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '62',
            'Nama' => 'JUDITH LEBRINA HETARIE',
            'NIM' => '00000082167',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '62',
            'Nama' => 'RHAUMA SYIRA ANGGINA',
            'NIM' => '00000079236',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '62',
            'Nama' => 'NATHANAEL LYSUS',
            'NIM' => '00000078416',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '62',
            'Nama' => 'CALLISTA ARIELLA GINATA',
            'NIM' => '00000068974',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '62',
            'Nama' => 'YOSEPHINE THEODORA BAGAGNESIA MANIK',
            'NIM' => '00000075823',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '62',
            'Nama' => 'LICELLA GRACE HALIM',
            'NIM' => '00000072215',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '62',
            'Nama' => 'MUHAMMAD RIZQI ALPASHA',
            'NIM' => '00000076255',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '62',
            'Nama' => 'NATHAN ANGELO STENLIE',
            'NIM' => '00000066793',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '62',
            'Nama' => 'ERVA YANTI DANEUIS',
            'NIM' => '00000077318',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '62',
            'Nama' => 'GILBERT EVAN TILUNG',
            'NIM' => '00000069610',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '62',
            'Nama' => 'EUNIKE PATRICIA NAOMI',
            'NIM' => '00000067815',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '62',
            'Nama' => 'JENNEFER CHANDRA',
            'NIM' => '00000069840',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '62',
            'Nama' => 'DIVA KHALISHA FITRANTI',
            'NIM' => '00000071667',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '62',
            'Nama' => 'KRISTIAN ALIWARGA',
            'NIM' => '00000065463',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '62',
            'Nama' => 'LEONARDUS ERNESTO BUDISETIAWAN',
            'NIM' => '00000069146',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '62',
            'Nama' => 'ABELARDINE SASHIKIRANA',
            'NIM' => '00000069290',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '62',
            'Nama' => 'DENNIS RENALDI. K',
            'NIM' => '00000068715',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '62',
            'Nama' => 'GABRIEL KNB',
            'NIM' => '00000037278',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '63',
            'Nama' => 'Beatrice Angellie (ID LINE: beatriceangellie__)',
            'NIM' => 0,
            'Prodi' => '',
            'status' => 'mentor'
            ]);
            Kelompok::create([
            'NomorKelompok' => '63',
            'Nama' => 'WILLIAM SEBASTIAN',
            'NIM' => '00000065096',
            'Prodi' => 'Sistem Komputer',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '63',
            'Nama' => 'RENIATI NOOR QOMARIANY',
            'NIM' => '00000071609',
            'Prodi' => 'Jurnalistik',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '63',
            'Nama' => 'SURYA PRAMU DUTA',
            'NIM' => '00000077527',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '63',
            'Nama' => 'REVA FAKHRANA ATHIRA',
            'NIM' => '00000068621',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '63',
            'Nama' => 'MIRACLE MARKUS AMID',
            'NIM' => '00000074990',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '63',
            'Nama' => 'ABDURRAHMAN HARITS WAHYUDI',
            'NIM' => '00000077894',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '63',
            'Nama' => 'FATHIR ZAIDAN BIBRA',
            'NIM' => '00000071579',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '63',
            'Nama' => 'NELSEN .',
            'NIM' => '00000069601',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '63',
            'Nama' => 'NEISYA ARSY ARGYA',
            'NIM' => '00000071288',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '63',
            'Nama' => 'MITAWATI .',
            'NIM' => '00000070345',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '63',
            'Nama' => 'MARK VINCENT EMMANUEL BY',
            'NIM' => '00000065468',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '63',
            'Nama' => 'YASSA KHEMAPUSPITA HERMAWAN',
            'NIM' => '00000077001',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '63',
            'Nama' => 'DEDE KRISTIAN SEBAYANG',
            'NIM' => '00000068364',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '63',
            'Nama' => 'JESSICA PERMATASARI',
            'NIM' => '00000065459',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '63',
            'Nama' => 'LEISSA LEONARDO',
            'NIM' => '00000067560',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '63',
            'Nama' => 'MOHAMMAD SYAHJEHAN SETIAWAN',
            'NIM' => '00000072605',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '63',
            'Nama' => 'SHARREN JEVONI LAU',
            'NIM' => '00000082586',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '63',
            'Nama' => 'VANIA AMANDA CHRISTINA ABRAM',
            'NIM' => '00000070126',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '63',
            'Nama' => 'NURJIHAAN SURYA A',
            'NIM' => '00000063026',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '64',
            'Nama' => 'January Reza Jagger (ID LINE: reza.jagger)',
            'NIM' => 0,
            'Prodi' => '',
            'status' => 'mentor'
            ]);
            Kelompok::create([
            'NomorKelompok' => '64',
            'Nama' => 'JESAYA CHRISTOPHER JASON',
            'NIM' => '00000075392',
            'Prodi' => 'Sistem Komputer',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '64',
            'Nama' => 'IVONNE SEKAR HANNA',
            'NIM' => '00000065976',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '64',
            'Nama' => 'KING MAHAPUTRA BATARA',
            'NIM' => '00000083179',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '64',
            'Nama' => 'THOMAS JYMBOI HONE',
            'NIM' => '00000073572',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '64',
            'Nama' => 'DEANDRA NADIA',
            'NIM' => '00000076928',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '64',
            'Nama' => 'ADRIEL ELVIENO TIRTO',
            'NIM' => '00000076203',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '64',
            'Nama' => 'ADI WINATA SOLEMAN',
            'NIM' => '00000068903',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '64',
            'Nama' => 'SHANIKA SACHI EMELIN',
            'NIM' => '00000074748',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '64',
            'Nama' => 'ANGELICA VITRIANY KUSUMA',
            'NIM' => '00000070320',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '64',
            'Nama' => 'NAYLA MUTIARA SALSABILA BASTARI',
            'NIM' => '00000075205',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '64',
            'Nama' => 'MITCHEL IVANO SYAHPUTRA',
            'NIM' => '00000073296',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '64',
            'Nama' => 'PRAJNA ANANDA CITRA',
            'NIM' => '00000070651',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '64',
            'Nama' => 'ANITA FRISCILIA',
            'NIM' => '00000069538',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '64',
            'Nama' => 'DIANRA EKA NOVELINA SIREGAR',
            'NIM' => '00000070596',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '64',
            'Nama' => 'JESSIE VALENCIA TANNUWIJAYA',
            'NIM' => '00000065432',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '64',
            'Nama' => 'ZACKY HUDAYA PUTRAMA',
            'NIM' => '00000069017',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '64',
            'Nama' => 'NI MADE MAHARANI KUSUMA DEWI',
            'NIM' => '00000069263',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '64',
            'Nama' => 'FELICIA GAVRILA DARWIN',
            'NIM' => '00000070044',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
            Kelompok::create([
            'NomorKelompok' => '64',
            'Nama' => 'AURA BELITA MANIK',
            'NIM' => '00000075905',
            'Prodi' => 'DKV',
            'status' => 'mentee'
            ]);
    
            Kelompok::create([
                'NomorKelompok' => '65',
                'Nama' => 'Naila Zaneta Ristyova (ID LINE: nathaniel_03)',
                'NIM' => '0',
                'Prodi' => '',
                'status' => 'mentor'
            ]);
            Kelompok::create([
                'NomorKelompok' => '65',
                'Nama' => 'FEIVEL QUTBY',
                'NIM' => '00000073819',
                'Prodi' => 'Sistem Komputer',
                'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '65',
                    'Nama' => 'VENNY WIJAYA',
                    'NIM' => '00000070579',
                    'Prodi' => 'Akuntansi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '65',
                    'Nama' => 'DAULAT PARTOGI HAMONANGAN PAKPAHAN',
                    'NIM' => '00000071115',
                    'Prodi' => 'Sistem Informasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '65',
                    'Nama' => 'TSABITAH RAMADHANI MASHUR',
                    'NIM' => '00000078331',
                    'Prodi' => 'Sistem Informasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '65',
                    'Nama' => 'ALLANDRA CHRISTABELLE ALETHA LEKENILA',
                    'NIM' => '00000075004',
                    'Prodi' => 'Film & Animasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '65',
                    'Nama' => 'AMADEA REGINA RUMENSER',
                    'NIM' => '00000075539',
                    'Prodi' => 'Film & Animasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '65',
                    'Nama' => 'ADINDA RATU ZAHRA',
                    'NIM' => '00000075059',
                    'Prodi' => 'Manajemen',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '65',
                    'Nama' => 'SELVIA PUTRI BURNAMA',
                    'NIM' => '00000082267',
                    'Prodi' => 'Manajemen',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '65',
                    'Nama' => 'MUHAMMAD FARHAN JIDDAN',
                    'NIM' => '00000078695',
                    'Prodi' => 'Manajemen',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '65',
                    'Nama' => 'ARI MAULANA HADIJAYA',
                    'NIM' => '00000068145',
                    'Prodi' => 'Informatika',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '65',
                    'Nama' => 'REINALDY THENDEAN',
                    'NIM' => '00000077022',
                    'Prodi' => 'Informatika',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '65',
                    'Nama' => 'NICHOLAS TERENCE SIAHAAN',
                    'NIM' => '00000075128',
                    'Prodi' => 'Informatika',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '65',
                    'Nama' => "FEBY AMELIA A'LA TAHTA ABADA",
                    'NIM' => '00000077866',
                    'Prodi' => 'Ilkom',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '65',
                    'Nama' => 'KENZIE AMAYA VONDRA',
                    'NIM' => '00000068124',
                    'Prodi' => 'Ilkom',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '65',
                    'Nama' => 'CELINE MARVELLA',
                    'NIM' => '00000075115',
                    'Prodi' => 'Ilkom',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '65',
                    'Nama' => 'NATHANAEL PIETER AUDRICO',
                    'NIM' => '00000067015',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '65',
                    'Nama' => 'NAVA LISSE PUTRI',
                    'NIM' => '00000069161',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '65',
                    'Nama' => 'NATHASYA .',
                    'NIM' => '00000070439',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '65',
                    'Nama' => 'KEREN JOANITA TJANDRA',
                    'NIM' => '00000070271',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '65',
                    'Nama' => 'AKELA NAJILA',
                    'NIM' => '00000061727',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '66',
                    'Nama' => 'Cristophorus Tritama Budi Santoso (ID LINE: cristophorus_99)',
                    'NIM' => '0',
                    'Prodi' => '',
                    'status' => 'mentor'
            ]);
    
            Kelompok::create([
                    'NomorKelompok' => '66',
                    'Nama' => 'MUHAMMAD PRASETYO',
                    'NIM' => '00000081668',
                    'Prodi' => 'Sistem Komputer',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '66',
                    'Nama' => 'MARIA KENCANA HALIM',
                    'NIM' => '00000071127',
                    'Prodi' => 'Akuntansi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '66',
                    'Nama' => 'ALESSANDRA VALENTINA',
                    'NIM' => '00000075386',
                    'Prodi' => 'Sistem Informasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '66',
                    'Nama' => 'ZACHARIAH ELDY',
                    'NIM' => '00000068627',
                    'Prodi' => 'Sistem Informasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '66',
                    'Nama' => 'ZOEFREDRICK JACOB',
                    'NIM' => '00000070358',
                    'Prodi' => 'Film & Animasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '66',
                    'Nama' => 'TIMOTHY ADITYA L',
                    'NIM' => '00000069450',
                    'Prodi' => 'Film & Animasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '66',
                    'Nama' => 'ARVIN SAHADI',
                    'NIM' => '00000070246',
                    'Prodi' => 'Manajemen',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '66',
                    'Nama' => 'JESSICA MAXWELL MILJANTO',
                    'NIM' => '00000067589',
                    'Prodi' => 'Manajemen',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '66',
                    'Nama' => 'KORNELIUS WILLIAM KALLAY',
                    'NIM' => '00000067448',
                    'Prodi' => 'Manajemen',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '66',
                    'Nama' => 'ANGELIMA KHOSINA',
                    'NIM' => '00000067456',
                    'Prodi' => 'Informatika',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '66',
                    'Nama' => 'MOHAMAD RASYEDO MONOARFA',
                    'NIM' => '00000071358',
                    'Prodi' => 'Informatika',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '66',
                    'Nama' => 'RACHEL VELYSHA',
                    'NIM' => '00000068713',
                    'Prodi' => 'Informatika',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '66',
                    'Nama' => 'DANIEL .',
                    'NIM' => '00000065917',
                    'Prodi' => 'Ilkom',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '66',
                    'Nama' => 'VIVIAN CHI',
                    'NIM' => '00000077926',
                    'Prodi' => 'Ilkom',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '66',
                    'Nama' => 'EILEEN DENISHA LESTARI',
                    'NIM' => '00000067861',
                    'Prodi' => 'Ilkom',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '66',
                    'Nama' => 'LAUREL TAGARA HARTONO',
                    'NIM' => '00000068753',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '66',
                    'Nama' => 'GORDY LEMUEL GINTING',
                    'NIM' => '00000077003',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '66',
                    'Nama' => 'LUCRETIA AURELIA MAKMURIA',
                    'NIM' => '00000070725',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '66',
                    'Nama' => 'KHANSA NAMIRA KHAIRUNNISA',
                    'NIM' => '0000007273',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '66',
                    'Nama' => 'HASTYA PRAMUDITA HADIWIJAYA',
                    'NIM' => '00000057226',
                    'Prodi' => 'Film & Animasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '67',
                    'Nama' => 'Dani Muhammad Lutfi (ID LINE: idlineguadani)',
                    'NIM' => '0',
                    'Prodi' => '',
                    'status' => 'mentor'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '67',
                    'Nama' => 'MUHAMMAD FATHAN RIDHWAN',
                    'NIM' => '00000069524',
                    'Prodi' => 'Sistem Komputer',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '67',
                    'Nama' => 'FELITA AILEEN PRILLIA',
                    'NIM' => '00000070576',
                    'Prodi' => 'Akuntansi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '67',
                    'Nama' => 'DENDY YUSUF NOFTHAMSYA',
                    'NIM' => '00000070925',
                    'Prodi' => 'Sistem Informasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '67',
                    'Nama' => 'ADRYEL ETHANTYO SUGITO',
                    'NIM' => '00000068165',
                    'Prodi' => 'Sistem Informasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '67',
                    'Nama' => 'RAKA FADHLI REVANSA',
                    'NIM' => '00000076994',
                    'Prodi' => 'Film & Animasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '67',
                    'Nama' => 'JONATHAN AURELIO HARIYANTO',
                    'NIM' => '00000068238',
                    'Prodi' => 'Film & Animasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '67',
                    'Nama' => 'FLORENTINUS KRISNA TRIANDIKA PUTRA',
                    'NIM' => '00000070401',
                    'Prodi' => 'Manajemen',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '67',
                    'Nama' => 'PHILLIPE EDWARDO FANS',
                    'NIM' => '00000069884',
                    'Prodi' => 'Manajemen',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '67',
                    'Nama' => 'ADITHAMA MULIA',
                    'NIM' => '00000067958',
                    'Prodi' => 'Informatika',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '67',
                    'Nama' => 'MOSES ALEXANDER',
                    'NIM' => '00000069818',
                    'Prodi' => 'Informatika',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '67',
                    'Nama' => 'RICHIE CHRISTIAN TUNGADI',
                    'NIM' => '00000074763',
                    'Prodi' => 'Informatika',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '67',
                    'Nama' => 'DAVIN FADHLI RAHMAN',
                    'NIM' => '00000078758',
                    'Prodi' => 'Ilkom',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '67',
                    'Nama' => 'CAHYO ARYOBIMO RAHADIANPUTRO',
                    'NIM' => '00000072680',
                    'Prodi' => 'Ilkom',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '67',
                    'Nama' => 'GRISELLA VEVILIA LAUREN',
                    'NIM' => '00000067986',
                    'Prodi' => 'Ilkom',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '67',
                    'Nama' => 'CHARIST MARVELL GERALDO',
                    'NIM' => '00000068772',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '67',
                    'Nama' => 'PHILBERT LOUISE',
                    'NIM' => '00000073816',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '67',
                    'Nama' => 'FATHI KILA MARITZA RIZKI',
                    'NIM' => '00000079875',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '67',
                    'Nama' => 'LIVIA NADIA SALSABILA',
                    'NIM' => '00000071820',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '67',
                    'Nama' => 'MICHELLE G WAROUW',
                    'NIM' => '00000037548',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '68',
                    'Nama' => 'Gabriella Tanzil (ID LINE: gaby_t_)',
                    'NIM' => '0',
                    'Prodi' => '',
                    'status' => 'mentor'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '68',
                    'Nama' => 'ELISA PUTRA SITOMPUL',
                    'NIM' => '00000077185',
                    'Prodi' => 'Sistem Komputer',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '68',
                    'Nama' => 'MELINDA ARIYANA DHARMANTO',
                    'NIM' => '00000068370',
                    'Prodi' => 'Akuntansi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '68',
                    'Nama' => 'AMELIA RAMA SETIAWAN',
                    'NIM' => '00000066450',
                    'Prodi' => 'Sistem Informasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '68',
                    'Nama' => 'SAMUEL THEODORE CHANDRA',
                    'NIM' => '00000069418',
                    'Prodi' => 'Sistem Informasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '68',
                    'Nama' => 'DARREN CHOPIN SANTOSO',
                    'NIM' => '00000068164',
                    'Prodi' => 'Film & Animasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '68',
                    'Nama' => 'KATHRYN CAHYADI',
                    'NIM' => '00000067124',
                    'Prodi' => 'Film & Animasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '68',
                    'Nama' => 'DEMAS ANDHIKA SETIYAWAN',
                    'NIM' => '00000071299',
                    'Prodi' => 'Manajemen',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '68',
                    'Nama' => 'RAFFAEL DHAMMA HERMANSYAH',
                    'NIM' => '00000068089',
                    'Prodi' => 'Manajemen',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '68',
                    'Nama' => 'AMANDA CITRA DEWANTI',
                    'NIM' => '00000066344',
                    'Prodi' => 'Informatika',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '68',
                    'Nama' => 'SHELLA FAULINA',
                    'NIM' => '00000079493',
                    'Prodi' => 'Informatika',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '68',
                    'Nama' => 'RIO CHRISTIAN HENLIN',
                    'NIM' => '00000068574',
                    'Prodi' => 'Informatika',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '68',
                    'Nama' => 'FIGO CARLOS',
                    'NIM' => '00000069411',
                    'Prodi' => 'Ilkom',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '68',
                    'Nama' => 'FREDERICO ELVIN',
                    'NIM' => '00000067350',
                    'Prodi' => 'Ilkom',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '68',
                    'Nama' => 'JOCELYN CHRISTANTIA',
                    'NIM' => '00000067799',
                    'Prodi' => 'Ilkom',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '68',
                    'Nama' => 'ANTONIO HOSEA CANDRA',
                    'NIM' => '00000068274',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '68',
                    'Nama' => 'IGNATIUS SADDHU KINALI PIKATAN',
                    'NIM' => '00000069094',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '68',
                    'Nama' => 'IVY FLORENTIA WIJAYA',
                    'NIM' => '00000074822',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '68',
                    'Nama' => 'MARCELLA OCTAVIANY',
                    'NIM' => '00000070283',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '68',
                    'Nama' => 'HENRICH JONATHAN',
                    'NIM' => '00000053780',
                    'Prodi' => 'Film & Animasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '69',
                    'Nama' => 'Jessyta Kandowangko (ID LINE: jessyta21)',
                    'NIM' => '0',
                    'Prodi' => '',
                    'status' => 'mentor'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '69',
                    'Nama' => 'LUTHFANSYA HAIKAL ISMULIA',
                    'NIM' => '00000073505',
                    'Prodi' => 'Sistem Komputer',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '69',
                    'Nama' => 'USNUL HOTIMAH',
                    'NIM' => '00000080952',
                    'Prodi' => 'Akuntansi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '69',
                    'Nama' => 'DASMOND TAN',
                    'NIM' => '00000070110',
                    'Prodi' => 'Sistem Informasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '69',
                    'Nama' => 'MARIA REZANA PUTRI',
                    'NIM' => '00000068804',
                    'Prodi' => 'Sistem Informasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '69',
                    'Nama' => 'HAGAI IMMANUEL SAGALA',
                    'NIM' => '00000081226',
                    'Prodi' => 'Film & Animasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '69',
                    'Nama' => 'KIDUNG KIRANA ARDYANTO',
                    'NIM' => '00000069447',
                    'Prodi' => 'Film & Animasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '69',
                    'Nama' => 'LINA .',
                    'NIM' => '00000071971',
                    'Prodi' => 'Manajemen',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '69',
                    'Nama' => 'RAFIE ARIFIANDI',
                    'NIM' => '00000075612',
                    'Prodi' => 'Manajemen',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '69',
                    'Nama' => 'AARON KHO',
                    'NIM' => '00000073906',
                    'Prodi' => 'Informatika',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '69',
                    'Nama' => 'CITRA NANDARIANI INTANPUTRI',
                    'NIM' => '00000076059',
                    'Prodi' => 'Informatika',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '69',
                    'Nama' => 'SAMUEL KIMIN',
                    'NIM' => '00000068078',
                    'Prodi' => 'Informatika',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '69',
                    'Nama' => 'NAIL GIBRAN',
                    'NIM' => '00000079292',
                    'Prodi' => 'Ilkom',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '69',
                    'Nama' => 'CALISTA NATHALIA',
                    'NIM' => '00000069629',
                    'Prodi' => 'Ilkom',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '69',
                    'Nama' => 'CHERYL REINA FILIANSIE',
                    'NIM' => '00000072779',
                    'Prodi' => 'Ilkom',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '69',
                    'Nama' => 'CARLVIN TANOTO',
                    'NIM' => '00000073799',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '69',
                    'Nama' => 'NICO OKTAVIANUS SABATINO',
                    'NIM' => '00000076435',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '69',
                    'Nama' => 'DIANDRA KANARA PUTRI SINAGA',
                    'NIM' => '00000078318',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '69',
                    'Nama' => 'ANNABELLE HUANG',
                    'NIM' => '00000070611',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '69',
                    'Nama' => 'MICHELLE G WAROUW',
                    'NIM' => '00000037548',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
                    Kelompok::create([
                    'NomorKelompok' => '70',
                    'Nama' => 'Viorentina (ID LINE: tina171103)',
                    'NIM' => '0',
                    'Prodi' => '',
                    'status' => 'mentor'
            ]);
                    Kelompok::create([
                    'NomorKelompok' => '70',
                    'Nama' => 'MUHAMMAD FABIANSYAH ABUBAKAR',
                    'NIM' => '00000068933',
                    'Prodi' => 'Sistem Komputer',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '70',
                    'Nama' => 'ABDULLAH ASEP FAQIHHUDIN',
                    'NIM' => '00000072514',
                    'Prodi' => 'Akuntansi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '70',
                    'Nama' => 'EUNIKE SINURAT',
                    'NIM' => '00000073952',
                    'Prodi' => 'Sistem Informasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '70',
                    'Nama' => 'RONAN LIE',
                    'NIM' => '00000077737',
                    'Prodi' => 'Sistem Informasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '70',
                    'Nama' => 'YOU MEI LIM',
                    'NIM' => '00000069651',
                    'Prodi' => 'Film & Animasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '70',
                    'Nama' => 'MICHEL SAMUELLA SENTOSA',
                    'NIM' => '00000066298',
                    'Prodi' => 'Film & Animasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '70',
                    'Nama' => 'EKA NURLAILASARI',
                    'NIM' => '00000075182',
                    'Prodi' => 'Manajemen',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '70',
                    'Nama' => 'MUHAMAD DZAKI RIDWANSYAH',
                    'NIM' => '00000075413',
                    'Prodi' => 'Manajemen',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '70',
                    'Nama' => 'AERO JACQUES TIMORENCE MANUKOA',
                    'NIM' => '00000067630',
                    'Prodi' => 'Informatika',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '70',
                    'Nama' => 'RAYMOND .',
                    'NIM' => '00000083649',
                    'Prodi' => 'Informatika',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '70',
                    'Nama' => 'SION ALEXANDER HARTONO',
                    'NIM' => '00000069908',
                    'Prodi' => 'Informatika',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '70',
                    'Nama' => 'FELIX NICHOLAS HALIM',
                    'NIM' => '00000075790',
                    'Prodi' => 'Ilkom',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '70',
                    'Nama' => 'ADESTIA FEBRIANTI',
                    'NIM' => '00000070318',
                    'Prodi' => 'Ilkom',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '70',
                    'Nama' => 'CHRISTABEL STELLA SUGIARTO',
                    'NIM' => '00000067856',
                    'Prodi' => 'Ilkom',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '70',
                    'Nama' => 'AMANDA PUTRI ASTUTININGTYAS',
                    'NIM' => '00000072808',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '70',
                    'Nama' => 'PRINCESSA EUTENIA ASHLEE',
                    'NIM' => '00000070662',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '70',
                    'Nama' => 'ALICIA JURISTIA CHELSEA MAHARE',
                    'NIM' => '00000082350',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '70',
                    'Nama' => 'ARYO HANUNG PRASETYANTO',
                    'NIM' => '00000071304',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '70',
                    'Nama' => 'RULYANDA MELSYA',
                    'NIM' => '00000045685',
                    'Prodi' => 'Informatika',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '71',
                    'Nama' => 'Jovelin (ID LINE: jovelin_28 )',
                    'NIM' => '0',
                    'Prodi' => '',
                    'status' => 'mentor'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '71',
                    'Nama' => 'MUHAMMAD SHADIQ ALDO SYARAFI',
                    'NIM' => '00000068833',
                    'Prodi' => 'Sistem Komputer',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '71',
                    'Nama' => 'ANGRIANY LUTFIYAH DARMAWAN',
                    'NIM' => '00000067319',
                    'Prodi' => 'Akuntansi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '71',
                    'Nama' => 'BRYAN CLEEVEN LEE',
                    'NIM' => '00000073445',
                    'Prodi' => 'Sistem Informasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '71',
                    'Nama' => 'SAMUEL BETRAND KUSMANTO',
                    'NIM' => '00000077464',
                    'Prodi' => 'Sistem Informasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '71',
                    'Nama' => 'ZIDAN MAULANA SYAWAL',
                    'NIM' => '00000078277',
                    'Prodi' => 'Film & Animasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '71',
                    'Nama' => 'MUHAMMAD RAHMAN FATIHA',
                    'NIM' => '00000075515',
                    'Prodi' => 'Film & Animasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '71',
                    'Nama' => 'DHIYA PUTRI PERMATASANI',
                    'NIM' => '00000072034',
                    'Prodi' => 'Manajemen',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '71',
                    'Nama' => 'NADA NUR HAFIZHAH',
                    'NIM' => '00000077668',
                    'Prodi' => 'Manajemen',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '71',
                    'Nama' => 'AGUNG BUDI SATRIA',
                    'NIM' => '00000072564',
                    'Prodi' => 'Informatika',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '71',
                    'Nama' => 'I KADEK SURYA SANJAYA',
                    'NIM' => '00000076112',
                    'Prodi' => 'Informatika',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '71',
                    'Nama' => 'SHABRINA FIRMANSYAH',
                    'NIM' => '00000076396',
                    'Prodi' => 'Informatika',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '71',
                    'Nama' => 'MARCIANO BATARA CAKRA BUANA',
                    'NIM' => '00000083141',
                    'Prodi' => 'Ilkom',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '71',
                    'Nama' => 'JOCELYN JANICE',
                    'NIM' => '00000069318',
                    'Prodi' => 'Ilkom',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '71',
                    'Nama' => 'KAYLA AUDREY WIDJAYA',
                    'NIM' => '00000070534',
                    'Prodi' => 'Ilkom',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '71',
                    'Nama' => 'ARAREL KEIKO SUTOYO',
                    'NIM' => '00000072815',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '71',
                    'Nama' => 'SHAVINA RAHMALIA',
                    'NIM' => '00000070418',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '71',
                    'Nama' => 'JACELYN CALISTA',
                    'NIM' => '00000070004',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '71',
                    'Nama' => 'CLARISSA SAVIRA LEONHARD',
                    'NIM' => '00000075830',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '71',
                    'Nama' => 'SAMSARA BELA KIRANA',
                    'NIM' => '00000057333',
                    'Prodi' => 'Manajemen',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '72',
                    'Nama' => 'Kesya Febriana Manampiring (ID LINE: kesya0227)',
                    'NIM' => '0',
                    'Prodi' => '',
                    'status' => 'mentor'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '72',
                    'Nama' => 'M. GYBRAN ADRIAN HIDAYAT PUTRA',
                    'NIM' => '00000074897',
                    'Prodi' => 'Sistem Komputer',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '72',
                    'Nama' => 'MICHAEL MOSSES HUTABARAT',
                    'NIM' => '00000070280',
                    'Prodi' => 'Akuntansi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '72',
                    'Nama' => 'JUSTIN STEPHEN',
                    'NIM' => '00000072126',
                    'Prodi' => 'Sistem Informasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '72',
                    'Nama' => 'SAMUEL RAI INDRAWAN',
                    'NIM' => '00000066852',
                    'Prodi' => 'Sistem Informasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '72',
                    'Nama' => 'RIVALDO TOBIAS SURYA',
                    'NIM' => '00000078657',
                    'Prodi' => 'Film & Animasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '72',
                    'Nama' => 'MOSES BRYAN GUNAWAN',
                    'NIM' => '00000078968',
                    'Prodi' => 'Film & Animasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '72',
                    'Nama' => 'SITI ALFAH',
                    'NIM' => '00000071821',
                    'Prodi' => 'Manajemen',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '72',
                    'Nama' => 'BERNARDUS BOERHAN',
                    'NIM' => '00000071332',
                    'Prodi' => 'Manajemen',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '72',
                    'Nama' => 'ALENZO LEKSANA',
                    'NIM' => '00000072421',
                    'Prodi' => 'Informatika',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '72',
                    'Nama' => 'ARKING LUIZ DAVIDSON',
                    'NIM' => '00000082483',
                    'Prodi' => 'Informatika',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '72',
                    'Nama' => 'VALENTINO MAHARDHIKA PUTRA',
                    'NIM' => '00000074857',
                    'Prodi' => 'Informatika',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '72',
                    'Nama' => 'DINDA AZIZAH MUTHMAINAH',
                    'NIM' => '00000088101',
                    'Prodi' => 'Ilkom',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '72',
                    'Nama' => 'RASYA KAYLA AZZAHRA',
                    'NIM' => '00000069302',
                    'Prodi' => 'Ilkom',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '72',
                    'Nama' => 'STEFANIE .',
                    'NIM' => '00000076810',
                    'Prodi' => 'Ilkom',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '72',
                    'Nama' => 'JOEHANNES ARIANTO',
                    'NIM' => '00000075977',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '72',
                    'Nama' => 'DEBORAH RACHELLE LIM',
                    'NIM' => '00000067104',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '72',
                    'Nama' => 'PUAN HAURA KHAALISH',
                    'NIM' => '00000075742',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '72',
                    'Nama' => 'DARRELL HADIWANA',
                    'NIM' => '00000068095',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '72',
                    'Nama' => 'CELINE ARDELA',
                    'NIM' => '00000060971',
                    'Prodi' => 'Ilkom',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '73',
                    'Nama' => 'Lucrecia Lucas Wijaya (ID LINE: midorimacchii )',
                    'NIM' => '0',
                    'Prodi' => '',
                    'status' => 'mentor'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '73',
                    'Nama' => 'RAVYANDA FARRAS IBRAHIM',
                    'NIM' => '00000080775',
                    'Prodi' => 'Sistem Komputer',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '73',
                    'Nama' => 'VANESSA .',
                    'NIM' => '00000067088',
                    'Prodi' => 'Akuntansi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '73',
                    'Nama' => 'NOVERIA CLARA LIUFINA',
                    'NIM' => '00000069266',
                    'Prodi' => 'Sistem Informasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '73',
                    'Nama' => 'NATHAN VILBERT KOSASIH',
                    'NIM' => '00000069903',
                    'Prodi' => 'Sistem Informasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '73',
                    'Nama' => 'HAMIM BINTANG RAFLY',
                    'NIM' => '00000075814',
                    'Prodi' => 'Film & Animasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '73',
                    'Nama' => 'SAMUEL ETHAN',
                    'NIM' => '00000070031',
                    'Prodi' => 'Film & Animasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '73',
                    'Nama' => 'MUTIA AZZAHRA',
                    'NIM' => '00000081042',
                    'Prodi' => 'Manajemen',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '73',
                    'Nama' => 'BENAYA RAJA PUTERA UTOMO',
                    'NIM' => '00000070451',
                    'Prodi' => 'Manajemen',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '73',
                    'Nama' => 'CHYNTIA IRAWAN',
                    'NIM' => '00000067992',
                    'Prodi' => 'Informatika',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '73',
                    'Nama' => 'FARRELIUS KEVIN',
                    'NIM' => '00000081783',
                    'Prodi' => 'Informatika',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '73',
                    'Nama' => 'NADYA SAVA MARITZA',
                    'NIM' => '00000082273',
                    'Prodi' => 'Informatika',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '73',
                    'Nama' => 'SHARON AURELLIA WIDJAYA',
                    'NIM' => '00000067408',
                    'Prodi' => 'Ilkom',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '73',
                    'Nama' => 'APNES INDAH CAHYA',
                    'NIM' => '00000071509',
                    'Prodi' => 'Ilkom',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '73',
                    'Nama' => 'THALYA TESSYA',
                    'NIM' => '00000070090',
                    'Prodi' => 'Ilkom',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '73',
                    'Nama' => 'KEVIN PRATAMA',
                    'NIM' => '00000067146',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '73',
                    'Nama' => 'MICHAEL BARNEY AFFANDI',
                    'NIM' => '00000067863',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '73',
                    'Nama' => 'VALERIE HERMIONE HARTANTO KURNIAWAN S',
                    'NIM' => '00000069687',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '73',
                    'Nama' => 'JUNARDY WIRA WIBAWA',
                    'NIM' => '00000068006',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '73',
                    'Nama' => 'RIFQI DIMAS PRABOWO',
                    'NIM' => '00000065442',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '74',
                    'Nama' => 'Jonathan Samuel (ID LINE: jojoreo)',
                    'NIM' => '0',
                    'Prodi' => '',
                    'status' => 'mentor'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '74',
                    'Nama' => 'DYLAN HEBOTH RAJAGUKGUK',
                    'NIM' => '00000082599',
                    'Prodi' => 'Sistem Komputer',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '74',
                    'Nama' => 'VALERIE GWYNETH MONTORORING',
                    'NIM' => '00000069333',
                    'Prodi' => 'Akuntansi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '74',
                    'Nama' => 'LEVIN .',
                    'NIM' => '00000072128',
                    'Prodi' => 'Sistem Informasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '74',
                    'Nama' => 'SAFIRES ATALLA ZARASKI',
                    'NIM' => '00000073610',
                    'Prodi' => 'Sistem Informasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '74',
                    'Nama' => 'HANIF IRVANDRI RAMADHAN',
                    'NIM' => '00000079110',
                    'Prodi' => 'Film & Animasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '74',
                    'Nama' => 'ALISHA INTAN RAHMANIA',
                    'NIM' => '00000068016',
                    'Prodi' => 'Film & Animasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '74',
                    'Nama' => 'KEISHA PRINCESS ANGELICA',
                    'NIM' => '00000075007',
                    'Prodi' => 'Manajemen',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '74',
                    'Nama' => 'MARCO .',
                    'NIM' => '00000069218',
                    'Prodi' => 'Manajemen',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '74',
                    'Nama' => 'MOCH KEVIN JONATHAN DS',
                    'NIM' => '00000071844',
                    'Prodi' => 'Informatika',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '74',
                    'Nama' => 'TIMOTHY AUGUSTA CHRISTOPHER',
                    'NIM' => '00000079287',
                    'Prodi' => 'Informatika',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '74',
                    'Nama' => 'WILLY .',
                    'NIM' => '00000079845',
                    'Prodi' => 'Informatika',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '74',
                    'Nama' => 'MUHAMMAD HIBRIZQI PUTRA SYAHDRA',
                    'NIM' => '00000068712',
                    'Prodi' => 'Ilkom',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '74',
                    'Nama' => 'ARENJIA BINTANG KHALUDI',
                    'NIM' => '00000069919',
                    'Prodi' => 'Ilkom',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '74',
                    'Nama' => 'VALENCIA ELEANOR CHANDRA',
                    'NIM' => '00000067876',
                    'Prodi' => 'Ilkom',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '74',
                    'Nama' => 'MUHAMMAD NATHAN IBNU SHAFA',
                    'NIM' => '00000075633',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '74',
                    'Nama' => 'VARDA AURELIA SURYA',
                    'NIM' => '00000073474',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '74',
                    'Nama' => 'VINCENT ALEXANDER BAGASKARA',
                    'NIM' => '00000068777',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '74',
                    'Nama' => 'KEZIA AURELIA SULISTYO PUTRI',
                    'NIM' => '00000069431',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '74',
                    'Nama' => 'RICARDO LINELSON',
                    'NIM' => '00000056089',
                    'Prodi' => 'Teknik Fisika',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '75',
                    'Nama' => 'Clara Ajeng Pungus (ID LINE: aprilia2143)',
                    'NIM' => '0',
                    'Prodi' => '',
                    'status' => 'mentor'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '75',
                    'Nama' => 'MUHAMMAD DANISH ZIDANE',
                    'NIM' => '00000067541',
                    'Prodi' => 'Sistem Komputer',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '75',
                    'Nama' => 'FRISCILIA ORLANDO',
                    'NIM' => '00000065190',
                    'Prodi' => 'Akuntansi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '75',
                    'Nama' => 'SHEERA ANELA',
                    'NIM' => '00000075618',
                    'Prodi' => 'Sistem Informasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '75',
                    'Nama' => 'REYHAN RESHA SASMITA',
                    'NIM' => '00000081166',
                    'Prodi' => 'Sistem Informasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '75',
                    'Nama' => 'NABIEL AHMAD PASHA',
                    'NIM' => '00000073961',
                    'Prodi' => 'Film & Animasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '75',
                    'Nama' => 'ANDREA SHAURA MARYAM',
                    'NIM' => '00000073483',
                    'Prodi' => 'Film & Animasi',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '75',
                    'Nama' => 'IRHAN ARIZKI',
                    'NIM' => '00000075926',
                    'Prodi' => 'Manajemen',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '75',
                    'Nama' => 'NANDA OKVITASARI',
                    'NIM' => '00000077876',
                    'Prodi' => 'Manajemen',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '75',
                    'Nama' => 'MUHAMMAD FIKRI ROUZAN ASH SHIDIK',
                    'NIM' => '00000081083',
                    'Prodi' => 'Informatika',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '75',
                    'Nama' => 'GHINA SYARIFA DESWITA',
                    'NIM' => '00000072103',
                    'Prodi' => 'Informatika',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '75',
                    'Nama' => 'MESHACH CHRISTIAN',
                    'NIM' => '00000068876',
                    'Prodi' => 'Informatika',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '75',
                    'Nama' => 'AUDREY NABILA WULAN BUDIMAN',
                    'NIM' => '00000067407',
                    'Prodi' => 'Ilkom',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '75',
                    'Nama' => 'ANDRE KUSUMA',
                    'NIM' => '00000068131',
                    'Prodi' => 'Ilkom',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '75',
                    'Nama' => 'AUDREY JOVANNY PASHA',
                    'NIM' => '00000078648',
                    'Prodi' => 'Ilkom',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '75',
                    'Nama' => 'NATASYA WIGUNA',
                    'NIM' => '00000067955',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '75',
                    'Nama' => 'KALILA NADYA PRAMUDITHA',
                    'NIM' => '00000071465',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '75',
                    'Nama' => 'DENZEL JORDAN',
                    'NIM' => '00000070852',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '75',
                    'Nama' => 'MADE SATTWIKA KARNA',
                    'NIM' => '00000067423',
                    'Prodi' => 'DKV',
                    'status' => 'mentee'
            ]);
            Kelompok::create([
                    'NomorKelompok' => '75',
                    'Nama' => 'EVANE HO',
                    'NIM' => '00000057596',
                    'Prodi' => 'Arsitektur',
                    'status' => 'mentee'
            ]);
        Kelompok::create([
            'NomorKelompok' => '76',
            'Nama' => 'NADZWA ALIFIYA FAUZA(ID LINE: nadzwaaf)',
            'NIM' => '0000000000',
            'Prodi' => ' ',
            'status' => 'mentor'
        ]);    
        Kelompok::create([
        'NomorKelompok' => '76',
            'Nama' => 'DUNCAN CARELLIUS',
            'NIM' => '00000075260',
            'Prodi' => 'Sistem Komputer',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '76',
            'Nama' => 'SHEILA PUTRI WIJAYA',
            'NIM' => '00000068309',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '76',
            'Nama' => 'YOGA SAPUTRA',
            'NIM' => '00000065491',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '76',
            'Nama' => 'LOLA NAOMI ENZELIN MANGUNSONG',
            'NIM' => '00000081913',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '76',
            'Nama' => 'KEZIA INDIRA YOSIAS FRANS',
            'NIM' => '00000073232',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '76',
            'Nama' => 'ARACELLY VERREN ELECTRA',
            'NIM' => '00000069527',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
      'NomorKelompok' => '76',
            'Nama' => 'MICHAEL HENDERSON DALIMA',
            'NIM' => '00000071301',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
         'NomorKelompok' => '76',
            'Nama' => 'CARISSA ALEXANDRA GERALDI',
            'NIM' => '00000065161',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '76',
            'Nama' => 'MUHAMMAD ARYLZAN ASTARA MADINI PRAMONO',
            'NIM' => '00000069451',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '76',
            'Nama' => 'BEVERLY VLADISLAV TAN',
            'NIM' => '00000074964',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '76',
            'Nama' => 'GALIH ARYA SAPUTRA',
            'NIM' => '00000074964',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
         'NomorKelompok' => '76',
            'Nama' => 'DHIYA AURA SALSABILLA',
            'NIM' => '00000080722',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '76',
            'Nama' => 'NATHANAEL MALVIN GUNAWAN',
            'NIM' => '00000067562',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
      'NomorKelompok' => '76',
            'Nama' => 'AURELIA MELVIN SUTEJA',
            'NIM' => '00000067537',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '76',
            'Nama' => 'MELINDA FANDRAYANI',
            'NIM' => '00000073605',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '76',
            'Nama' => 'ATHALLAH AQIL MUHAMMAD',
            'NIM' => '00000073847',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '76',
            'Nama' => 'NATASYA AURELIA INDAYANG',
            'NIM' => '00000071557',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '76',
            'Nama' => 'MADELINE VANIA',
            'NIM' => '00000065149',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
           'NomorKelompok' => '76',
            'Nama' => 'CELINE ARDELA',
            'NIM' => '00000060971',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
         'NomorKelompok' => '77',
            'Nama' => 'Ellegia Delaga Lazuardi (ID LINE: eggilazuardi2)',
            'NIM' => '0000000000',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
         'NomorKelompok' => '77',
            'Nama' => 'MUHAMAD RIZAL SAPUTRA',
            'NIM' => '00000073464',
            'Prodi' => 'Sistem Komputer',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '77',
            'Nama' => 'GABY FECYLIA',
            'NIM' => '00000065025',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '77',
            'Nama' => 'THE NEO SUFISM',
            'NIM' => '00000075544',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '77',
            'Nama' => 'MUHAMMAD FARHAN ZAKY',
            'NIM' => '00000083525',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '77',
            'Nama' => 'ARRIEL HARLEY HALIM',
            'NIM' => '00000070374',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '77',
            'Nama' => 'KENNETH DOMENICO SUMARDI',
            'NIM' => '00000068911',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '77',
            'Nama' => 'THOMAS DAVINIEL PURBA',
            'NIM' => '00000069939',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '77',
            'Nama' => 'FITHO YUSHAR YAHYA',
            'NIM' => '00000075713',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '77',
            'Nama' => 'MOHAMMAD WIRA DARMA',
            'NIM' => '00000082390',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '77',
            'Nama' => 'GHAZY ATHAQI SUPRIADI',
            'NIM' => '00000082331',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '77',
            'Nama' => 'GERARD STEFAN GANI',
            'NIM' => '00000068198',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '77',
            'Nama' => 'CINDY FLORENCIA',
            'NIM' => '00000068415',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '77',
            'Nama' => 'MICHELLE PATRICIA',
            'NIM' => '00000069404',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
         'NomorKelompok' => '77',
            'Nama' => 'JOCELINE STEPHANI',
            'NIM' => '00000071032',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '77',
            'Nama' => 'MELISSA YULIUS',
            'NIM' => '00000069816',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '77',
            'Nama' => 'TANTRIYANA VIOLA',
            'NIM' => '00000068745',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '77',
            'Nama' => 'JEANNE D`ARC NUNGKIE PUSPITADEWI SYAMHUDI',
            'NIM' => '00000070869',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '77',
            'Nama' => 'PHOEBE CLEARESTA',
            'NIM' => '00000070152',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '77',
            'Nama' => 'MARIA ELIZABETH NADI',
            'NIM' => '00000042674',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '78',
            'Nama' => 'Chelsy Sutanto (ID Line Phone Number: 081281304447)',
            'NIM' => '00000000000',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
       'NomorKelompok' => '78',
            'Nama' => 'DIMAS TAKEDA WUKIR TIRTOWIDJOJO',
            'NIM' => '00000068930',
            'Prodi' => 'Sistem Komputer',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '78',
            'Nama' => 'ANI .',
            'NIM' => '00000075068',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '78',
            'Nama' => 'KAYLA ABIGAIL GUNAWAN',
            'NIM' => '00000081824',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '78',
            'Nama' => 'KENNY BUDIARSO LAWSON',
            'NIM' => '00000081065',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '78',
            'Nama' => 'AQLA RIZQULLAH MUHAMMAD YUHENDRI',
            'NIM' => '00000078944',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '78',
            'Nama' => 'SAKTI YUDHA PRATAMA',
            'NIM' => '00000078622',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '78',
            'Nama' => 'STEVE GAVIERL LIE',
            'NIM' => '00000076949',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '78',
            'Nama' => 'FIVO YULIANTO',
            'NIM' => '00000068139',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '78',
            'Nama' => 'FRIEDRICH LITANI SANTOSO',
            'NIM' => '00000068855',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '78',
            'Nama' => 'MICHAEL .',
            'NIM' => '00000075848',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '78',
            'Nama' => 'GEOFFTA HANDIYAN AKWILA',
            'NIM' => '00000071204',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '78',
            'Nama' => 'DEBORA PRISCILLA NATALIA',
            'NIM' => '00000068241',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '78',
            'Nama' => 'MUHAMMAD ARYA HIKMAT PUTRA',
            'NIM' => '00000073352',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '78',
            'Nama' => 'MUHAMMAD SYAH RAYHAN NASUTION',
            'NIM' => '00000088707',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '78',
            'Nama' => 'MARCIA SEPTIANI',
            'NIM' => '00000071956',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '78',
            'Nama' => 'TRISYA ULIMA LAVTESHA',
            'NIM' => '00000066812',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '78',
            'Nama' => 'YONATHAN KARUNA YODIE',
            'NIM' => '00000071224',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '78',
            'Nama' => 'RARA ANGGRENI',
            'NIM' => '00000068958',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '78',
            'Nama' => 'RARA ANGGRENI',
            'NIM' => '00000048270',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);

        Kelompok::create([
        'NomorKelompok' => '79',
            'Nama' => 'Kelvin Triantovel (ID LINE: triantovel_)',
            'NIM' => '00000000000',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
       'NomorKelompok' => '79',
            'Nama' => 'ALBERT TIRTO KUSUMO',
            'NIM' => '00000068083',
            'Prodi' => 'Sistem Komputer',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '79',
            'Nama' => 'ISHAK ASMURUF',
            'NIM' => '00000077435',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '79',
            'Nama' => 'RACHEL KURNIAWAN',
            'NIM' => '00000068783',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '79',
            'Nama' => 'NAILA ASYLAH RIVITRI LUBIS',
            'NIM' => '00000082479',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '79',
            'Nama' => 'ALEXANDER PONCO NAILULU',
            'NIM' => '00000065175',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '79',
            'Nama' => 'SOPHIA SYAZWANI NUURUNNAJMI',
            'NIM' => '00000072595',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '79',
            'Nama' => 'STEVEN CHEN',
            'NIM' => '00000072446',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '79',
            'Nama' => 'JULIES SUSANTI SALEH',
            'NIM' => '00000077260',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '79',
            'Nama' => 'HITO KAWISWARA',
            'NIM' => '00000068541',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '79',
            'Nama' => 'KHAERUL ABDUH RAFI',
            'NIM' => '00000078745',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '79',
            'Nama' => 'GALIHANDRE AGHNIYASA',
            'NIM' => '00000073638',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '79',
            'Nama' => 'CYNTHIA CLARA SANTY',
            'NIM' => '00000068414',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '79',
            'Nama' => 'MURNI EUNIKE HUTAPEA',
            'NIM' => '00000071817',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '79',
            'Nama' => 'LAURA APRILIA',
            'NIM' => '00000069990',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '79',
            'Nama' => 'CORNELIA ALYSSA CANDRA',
            'NIM' => '00000068160',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '79',
            'Nama' => 'VANESSA MAYLINDA',
            'NIM' => '00000065466',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '79',
            'Nama' => 'JESHUA NICHOLAS ALEXY',
            'NIM' => '00000070862',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '79',
            'Nama' => 'SALVATORE CHRISSA PANGARIBUAN',
            'NIM' => '00000068973',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '79',
            'Nama' => 'GABRIELLA ANGELIA S',
            'NIM' => '00000055123',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
        'NomorKelompok' => '80',
            'Nama' => 'Cafrizky Rizaldy (ID LINE: cafrizky27)',
            'NIM' => '00000000000',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
       'NomorKelompok' => '80',
            'Nama' => 'DARRYL PRATAMA ISWAHYUDHI',
            'NIM' => '00000078651',
            'Prodi' => 'Sistem Komputer',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '80',
            'Nama' => 'PATRICIA TANJUNG SJAH',
            'NIM' => '00000067937',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '80',
            'Nama' => 'KHALISHA KIARA SANDHI',
            'NIM' => '00000075384',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '80',
            'Nama' => 'ALMIRA ZAHRA AURELIA',
            'NIM' => '00000080298',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '80',
            'Nama' => 'CALLISTA ANGELA TREVINA',
            'NIM' => '00000068264',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '80',
            'Nama' => 'LAURYN LIUZ',
            'NIM' => '00000068826',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '80',
            'Nama' => 'MELVIN TRISTAN',
            'NIM' => '00000074735',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '80',
            'Nama' => 'MARGARETA AVERINA LIANTI',
            'NIM' => '00000070532',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '80',
            'Nama' => 'I KADEK RIO ARTA PUTRA',
            'NIM' => '00000072147',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '80',
            'Nama' => 'MARTINUS CALVIN',
            'NIM' => '00000076367',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '80',
            'Nama' => 'HABIL PUTRA WARDANA',
            'NIM' => '00000073909',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '80',
            'Nama' => 'ENZO SANTINO HARTONO',
            'NIM' => '00000077704',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '80',
            'Nama' => 'RENADA APPONAOPU ANDI TENRI',
            'NIM' => '00000079841',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '80',
            'Nama' => 'SYAJILLA NAJWA PUTRIANDA',
            'NIM' => '00000075843',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '80',
            'Nama' => 'FELICIA SANTONI',
            'NIM' => '00000066430',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '80',
            'Nama' => 'STEVANS DILON',
            'NIM' => '00000075554',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '80',
            'Nama' => 'SHAFIYA NOOR HAFIZHA',
            'NIM' => '00000079234',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '80',
            'Nama' => 'SAMUDERA PUTRA KURNIADI',
            'NIM' => '00000071041',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '80',
            'Nama' => 'DARREL GABE YOSBEKAZHA',
            'NIM' => '00000060519',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '81',
            'Nama' => 'Juli Yanti (ID LINE: jul1127)',
            'NIM' => '0000000000',
            'Prodi' =>'',
            'status' => 'mentor'
        ]);
        Kelompok::create([
       'NomorKelompok' => '81',
            'Nama' => 'DAVID BUNYAMIN',
            'NIM' => '00000070650',
            'Prodi' =>'Sistem Komputer',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '81',
            'Nama' => 'PUTRI ASNI DARLYNG ZEGA',
            'NIM' => '00000069501',
            'Prodi' =>'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '81',
            'Nama' => 'VALEN CLAUDIA CHUARDI',
            'NIM' => '00000071430',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '81',
            'Nama' => 'MUHAMMAD FIRMAN NAFIS AUFA SUYANTO',
            'NIM' => '00000079456',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '81',
            'Nama' => 'YOBEL GIBRAN',
            'NIM' => '00000082692',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '81',
            'Nama' => 'DEAN GREYSON YAU',
            'NIM' => '00000071917',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '81',
            'Nama' => 'ALVIN ALEXANDRO SIANIPAR',
            'NIM' => '00000078961',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '81',
            'Nama' => 'ALVIN ALEXANDRO SIANIPAR',
            'NIM' => '00000078961',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '81',
            'Nama' => 'MATTHEW SETIAWAN',
            'NIM' => '00000069617',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '81',
            'Nama' => 'GENADI IKHSAN JAYA',
            'NIM' => '00000080773',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '81',
            'Nama' => 'MUHAMMAD SIDQI GUFRON',
            'NIM' => '00000083435',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '81',
            'Nama' => 'EDWARD FERDINAND',
            'NIM' => '00000066779',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '81',
            'Nama' => 'FEBRINA STANLEY',
            'NIM' => '00000067050',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '81',
            'Nama' => 'SHANGRILA SURYA PUTRI',
            'NIM' => '00000073267',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '81',
            'Nama' => 'VIVIAN CHOU',
            'NIM' => '00000069220',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '81',
            'Nama' => 'NERISA AGENG PUSPA CENDANI',
            'NIM' => '00000073647',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '81',
            'Nama' => 'MUHAMMAD EMYR TYVENELY DANTJIE',
            'NIM' => '00000082737',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '81',
            'Nama' => 'MUHAMMAD EMYR TYVENELY DANTJIE',
            'NIM' => '00000068892',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '81',
            'Nama' => 'VANESSA WIJAYA',
            'NIM' => '00000067419',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);

        Kelompok::create([
       'NomorKelompok' => '81',
            'Nama' => 'MUHAMMAD FATAHILLAH NUR ICHSAN',
            'NIM' => '00000055753',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '82',
            'Nama' => 'Koong Pok (ID LINE: newtzero)',
            'NIM' => '00000000000',
            'Prodi' =>'',
            'status' => 'mentor'
        ]);
        Kelompok::create([
       'NomorKelompok' => '82',
            'Nama' => 'RADEN MUHAMMAD RAFAEL HERDANI',
            'NIM' => '00000076381',
            'Prodi' =>'Sistem Komputer',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '82',
            'Nama' => 'DESTIN ARTHA GRACIA',
            'NIM' => '00000087661',
            'Prodi' =>'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '82',
            'Nama' => 'STEVEN HARTANTO SUNARYA',
            'NIM' => '00000075052',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '82',
            'Nama' => 'GERALD MATTHEW HANDOKO',
            'NIM' => '00000069833',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '82',
            'Nama' => 'PAUL FEBRIAN TURANGAN',
            'NIM' => '00000078946',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '82',
            'Nama' => 'ELDEO GUARDIAN ASANDI',
            'NIM' => '00000069329',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '82',
            'Nama' => 'KILYON CHRISTOPER JOSIAN NIRAHUWA',
            'NIM' => '00000076997',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '82',
            'Nama' => 'IKA WAHYU AGUSTINA',
            'NIM' => '00000088527',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '82',
            'Nama' => 'CAESAR EKA NATHANAEL',
            'NIM' => '00000067638',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '82',
            'Nama' => 'AINISYA BEBY FIRSTANYA',
            'NIM' => '00000082271',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '82',
            'Nama' => 'MUHAMMAD RAEHAN PUTRA HENDARSYAH',
            'NIM' => '00000078572',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '82',
            'Nama' => 'AILEEN FRANSISCA',
            'NIM' => '00000073888',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '82',
            'Nama' => 'HOPE THEOPHILUS SOELAIMAN',
            'NIM' => '00000071173',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '82',
            'Nama' => 'VRISKA MARSELINA BUDIANTO',
            'NIM' => '00000066880',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '82',
            'Nama' => 'VALLENZIA CAROLINE',
            'NIM' => '00000068180',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '82',
            'Nama' => 'EDWARD KENCANA',
            'NIM' => '00000069646',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '82',
            'Nama' => 'GABRIELLA MARICEL SWASTI SARAGIH',
            'NIM' => '00000073339',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '82',
            'Nama' => 'EDGAR DIMAZ NOVYANTO',
            'NIM' => '00000067359',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '82',
            'Nama' => 'YURCELL YOUNG',
            'NIM' => '00000054092',
            'Prodi' =>'Teknik Komputer',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '83',
            'Nama' => 'Theresia Susanto (ID LINE: theresiaasusanto)',
            'NIM' => '00000000000',
            'Prodi' =>'',
            'status' => 'mentor'
        ]);
        Kelompok::create([
       'NomorKelompok' => '83',
            'Nama' => 'I GUSTI NGURAH RAFAELL ELLEAZAR',
            'NIM' => '00000072582',
            'Prodi' =>'Sistem Komputer',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '83',
            'Nama' => 'ELBERT TANDHIKA',
            'NIM' => '00000075350',
            'Prodi' =>'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '83',
            'Nama' => 'NATHANAEL SILABAN',
            'NIM' => '00000078430',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '83',
            'Nama' => 'HANS SAMUEL GUNAWAN',
            'NIM' => '00000069882',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '83',
            'Nama' => 'NOVRYAN SUSANTO',
            'NIM' => '00000074894',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '83',
            'Nama' => 'CHRISTOFORUS ARKANA PUTRA',
            'NIM' => '00000072457',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '83',
            'Nama' => 'KENZIE RAFIF RAMADHANI',
            'NIM' => '00000076090',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '83',
            'Nama' => 'AUDREY JANICE MANOPPO',
            'NIM' => '00000066810',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '83',
            'Nama' => 'WILLIAM LO CHANNIKO',
            'NIM' => '00000068779',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '83',
            'Nama' => 'EMANUEL BERNANDHIKA DWI FRISKOLA',
            'NIM' => '00000077703',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '83',
            'Nama' => 'RAKA SATYA WURYA ANDHIKA',
            'NIM' => '00000070105',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '83',
            'Nama' => 'AMELIA FATHJRIA ANUGRAH AKBAR',
            'NIM' => '00000077213',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '83',
            'Nama' => 'AQIL RAYKA ATHALLA KUSUMA',
            'NIM' => '00000070712',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '83',
            'Nama' => 'ALYA ZAHRA MARITZA',
            'NIM' => '00000078392',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '83',
            'Nama' => 'ELICIA .',
            'NIM' => '00000070516',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '83',
            'Nama' => 'ELICIA .',
            'NIM' => '00000070516',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '83',
            'Nama' => 'SESILIA BRENDA',
            'NIM' => '00000068105',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '83',
            'Nama' => 'DHEANEZ YASHILA',
            'NIM' => '00000073393',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '83',
            'Nama' => 'EDWARD FERNANDO',
            'NIM' => '00000068968',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '83',
            'Nama' => 'NI KOMANG RATIH SETYAWATI',
            'NIM' => '00000064935',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '84',
            'Nama' => 'Lois Maria (ID LINE: loismaria)',
            'NIM' => '0000000000',
            'Prodi' =>'',
            'status' => 'mentor'
        ]);
        Kelompok::create([
       'NomorKelompok' => '84',
            'Nama' => 'KANZA AMANDA',
            'NIM' => '00000068900',
            'Prodi' =>'Sistem Komputer',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '84',
            'Nama' => 'ASSYIFA SALSABILA HASIBUAN',
            'NIM' => '00000076076',
            'Prodi' =>'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '84',
            'Nama' => 'CAROLINE ALEXANDRA SANTOSO',
            'NIM' => '00000066467',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '84',
            'Nama' => 'HERI FRANDANA SAPUTRA',
            'NIM' => '00000068684',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '84',
            'Nama' => 'HIZKIA NATHANAEL',
            'NIM' => '00000070349',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '84',
            'Nama' => 'RIZKY RAMADHAN SABDA PAMUDJI',
            'NIM' => '00000075126',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '84',
            'Nama' => 'SAMMUEL LIMPAT PRASTYA',
            'NIM' => '00000082154',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '84',
            'Nama' => 'NAUFAL QINTHARA',
            'NIM' => '00000075051',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '84',
            'Nama' => 'ELIEZER RAPHAEL WILLIE MAHARDIKA',
            'NIM' => '00000073155',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '84',
            'Nama' => 'ARYA SETIAWAN',
            'NIM' => '00000083123',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '84',
            'Nama' => 'BRIGHTLY VIRYA',
            'NIM' => '00000068227',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '84',
            'Nama' => 'CINDY CELIA JENNIFER',
            'NIM' => '00000069040',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '84',
            'Nama' => 'NEVILLE TANDI',
            'NIM' => '00000068200',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '84',
            'Nama' => 'ANASTASHA ANGELINE WINATA',
            'NIM' => '00000067368',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '84',
            'Nama' => 'PINKAN MARHAENI PANAUHE',
            'NIM' => '00000071703',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '84',
            'Nama' => 'ANASTASYA AUDREY TENGKO',
            'NIM' => '00000068220',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '84',
            'Nama' => 'ELENA PUTRI AMALIA',
            'NIM' => '00000069330',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '84',
            'Nama' => 'ENOS YUDHA PRASETYA PANGARIBOWO',
            'NIM' => '00000075487',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '84',
            'Nama' => 'KEVIN TANDI',
            'NIM' => '00000053629',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '85',
            'Nama' => 'Rio Nathanael (ID LINE: riostxwn)',
            'NIM' => '00000000000',
            'Prodi' =>'',
            'status' => 'mentor'
        ]);
        Kelompok::create([
       'NomorKelompok' => '85',
            'Nama' => 'ADITYA PUTRA SABRINA',
            'NIM' => '00000073584',
            'Prodi' =>'Sistem Komputer',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '85',
            'Nama' => 'AURALIA DWI PUTRI OKTAVIANI',
            'NIM' => '00000075726',
            'Prodi' =>'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '85',
            'Nama' => 'AYODHYA RIFELINO RIFAN RANGKUTI',
            'NIM' => '00000078555',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '85',
            'Nama' => 'NATHAN TRIWIRA CHANDRA',
            'NIM' => '00000071184',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '85',
            'Nama' => 'GREGORIUS DIAZ KAWULUSAN',
            'NIM' => '00000080979',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '85',
            'Nama' => 'FATHAN ARGYA MAULANA',
            'NIM' => '00000076075',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '85',
            'Nama' => 'STEVEN FERNANDO PHANGJAYA',
            'NIM' => '00000071879',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '85',
            'Nama' => 'PATRICK JASON HARDJANTO',
            'NIM' => '00000068624',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '85',
            'Nama' => 'ROBERTUS RAVIN WOENARSO',
            'NIM' => '00000066411',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '85',
            'Nama' => 'MARCELLUS EUGENE KAPARANG',
            'NIM' => '00000082420',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '85',
            'Nama' => 'SYAHRI YUSNI NURHIDAYAT NASUTION',
            'NIM' => '00000082375',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '85',
            'Nama' => 'BRENDA .',
            'NIM' => '00000065456',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '85',
            'Nama' => 'QINSHASYA .',
            'NIM' => '00000071475',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '85',
            'Nama' => 'SYAFIQ AQIL ARIF PUTRA',
            'NIM' => '00000076979',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '85',
            'Nama' => 'ANGELINA ARTHA CYNTHIA',
            'NIM' => '00000066355',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '85',
            'Nama' => 'KHEN ING HERTASA',
            'NIM' => '00000070722',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '85',
            'Nama' => 'JANICE AURYNA',
            'NIM' => '00000068426',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '85',
            'Nama' => 'RYAN FELICIANO',
            'NIM' => '00000073408',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '85',
            'Nama' => 'REBECA AMANDA',
            'NIM' => '00000044191',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '86',
            'Nama' => 'Malika Putri Aeranty (ID LINE: zebramuntah)',
            'NIM' => '00000000000',
            'Prodi' =>'',
            'status' => 'mentor'
        ]);
        Kelompok::create([
       'NomorKelompok' => '86',
            'Nama' => 'ALFONSIUS SIGIRO',
            'NIM' => '00000077631',
            'Prodi' =>'Sistem Komputer',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '86',
            'Nama' => 'JESSLYN .',
            'NIM' => '00000065182',
            'Prodi' =>'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '86',
            'Nama' => 'GREGORIUS DANIEL DWITAMA',
            'NIM' => '00000075740',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '86',
            'Nama' => 'NELSON SAPUTRA',
            'NIM' => '00000069095',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '86',
            'Nama' => 'JOHANNES MARCO KAMALUDIN',
            'NIM' => '00000067570',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '86',
            'Nama' => 'AXEL CHRISTIAN PUTRA WATULINGAS',
            'NIM' => '00000082461',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '86',
            'Nama' => 'PADRE PIO MAGALLANES RUCI PASANTIAGO',
            'NIM' => '00000077675',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '86',
            'Nama' => 'RENDI KURNIAWAN JAYA RADJA LUDJI',
            'NIM' => '00000076436',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '86',
            'Nama' => 'SANDYA PRADAYAN HARIJANTO',
            'NIM' => '00000082436',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '86',
            'Nama' => 'SINATRIYA ARIA PUTRA',
            'NIM' => '00000070427',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '86',
            'Nama' => 'IZDIHAR DHAWY TASDID',
            'NIM' => '00000083436',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '86',
            'Nama' => 'BRIANT BINTANG RADHETIA',
            'NIM' => '00000071607',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '86',
            'Nama' => 'SHAREEFA AISYAH ANDJANI',
            'NIM' => '00000070084',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '86',
            'Nama' => 'ANGEL TAMBARNA TERESA',
            'NIM' => '00000078637',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '86',
            'Nama' => 'KARIN ANNABELLA MIRA PUTRI',
            'NIM' => '00000067431',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '86',
            'Nama' => 'ADINDA SHAFA CHAIRUNNISA',
            'NIM' => '00000074819',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '86',
            'Nama' => 'SHANNON ELKE LAVINIA',
            'NIM' => '00000067550',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '86',
            'Nama' => 'CASSANDRA FANIA MAHARANI',
            'NIM' => '00000055139',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '87',
            'Nama' => 'Nicholas Carlos (ID LINE: 08112396339)',
            'NIM' => '00000000000',
            'Prodi' =>'D',
            'status' => 'mentor'
        ]);
        Kelompok::create([
       'NomorKelompok' => '87',
            'Nama' => 'RIFQI HABIB UR RAHMAN',
            'NIM' => '00000073280',
            'Prodi' =>'Sistem Komputer',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '87',
            'Nama' => 'INTAN MEYSIANI',
            'NIM' => '00000067530',
            'Prodi' =>'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '87',
            'Nama' => 'HENRY PRAJNA SUSANTO',
            'NIM' => '00000066805',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '87',
            'Nama' => 'MUHAMMAD ARASY SYAHREZA',
            'NIM' => '00000071806',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '87',
            'Nama' => 'RIZQI BAGAS WASISNINDITO MERTOHADIKU',
            'NIM' => '00000079444',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '87',
            'Nama' => 'DIONISIUS GUNAWAN KOSWARA',
            'NIM' => '00000071366',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '87',
            'Nama' => 'SYAFFA SALSABILA RAMANDHA',
            'NIM' => '00000076386',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '87',
            'Nama' => 'RIVANDY GUNAWAN',
            'NIM' => '00000067709',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '87',
            'Nama' => 'MUHAMMAD ILHAM SABILLAH',
            'NIM' => '00000079200',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '87',
            'Nama' => 'GAVIN PRASETYA',
            'NIM' => '00000068873',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '87',
            'Nama' => 'DONIKA VONI FIOLETA MERES',
            'NIM' => '00000080815',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '87',
            'Nama' => 'BRYAN FERNANDO KORISANO',
            'NIM' => '00000085493',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '87',
            'Nama' => 'AGUS ADITYA SAPUTRA',
            'NIM' => '00000070108',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '87',
            'Nama' => 'ATHARAFIF APTAWASIS HADYANCAHYA',
            'NIM' => '00000069692',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '87',
            'Nama' => 'ELMO CHANG YOU SHEN',
            'NIM' => '00000068084',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '87',
            'Nama' => 'MICHELLE LAURENSIA',
            'NIM' => '00000066375',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '87',
            'Nama' => 'JESSLYN LUANGGA',
            'NIM' => '00000081206',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '87',
            'Nama' => 'SHARON PANGESTU',
            'NIM' => '00000068067',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '87',
            'Nama' => 'GODFREY BENEDICTUS IPSAN',
            'NIM' => '00000063095',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '88',
            'Nama' => 'Jessica Angelin (ID LINE: jessica_angelin27)',
            'NIM' => '00000000000',
            'Prodi' =>'',
            'status' => 'mentor'
        ]);
        Kelompok::create([
       'NomorKelompok' => '88',
            'Nama' => 'RAMDANA RIZKI MUDIANTO',
            'NIM' => '00000076830',
            'Prodi' =>'Sistem Komputer',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '88',
            'Nama' => 'REVA DWI HAPSARI',
            'NIM' => '00000067473',
            'Prodi' =>'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '88',
            'Nama' => 'FAYED ABDUL HAKIM',
            'NIM' => '00000068732',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '88',
            'Nama' => 'WIDIQ WASKITO ADIMUKTI',
            'NIM' => '00000079033',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '88',
            'Nama' => 'JASON MELVINE',
            'NIM' => '00000069932',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '88',
            'Nama' => 'ULUNG RADJA RAMADHAN',
            'NIM' => '00000079226',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '88',
            'Nama' => 'NELSON EFRATA ALIWARGA',
            'NIM' => '00000066879',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '88',
            'Nama' => 'ROMI ANDREAS',
            'NIM' => '00000074880',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '88',
            'Nama' => 'RICHARD PASKAH',
            'NIM' => '00000070286',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '88',
            'Nama' => 'REYNATA PRAJNADI TANGJAYA',
            'NIM' => '00000070461',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '88',
            'Nama' => 'KARSTEEN PAMBUDI WICAKSONO',
            'NIM' => '00000083253',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '88',
            'Nama' => 'EDWARDUS ADHITYA SETYONUGROHO',
            'NIM' => '00000068914',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '88',
            'Nama' => 'FRANSISKO KRISDIAN TARA',
            'NIM' => '00000068728',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '88',
            'Nama' => 'JESSICA RACHEL HASIBUAN',
            'NIM' => '00000071493',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '88',
            'Nama' => 'AIKA STEVANIA',
            'NIM' => '00000075407',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '88',
            'Nama' => 'M.FATIH IZZUL AKBAR',
            'NIM' => '00000075345',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '88',
            'Nama' => 'M.FATIH IZZUL AKBAR',
            'NIM' => '00000075345',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '88',
            'Nama' => 'OXANA MATUS',
            'NIM' => '00000066473',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '88',
            'Nama' => 'ANTHONY KINGSTON BERT',
            'NIM' => '00000067393',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '88',
            'Nama' => 'ADRIWAN WIDJAJA',
            'NIM' => '00000055511',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '89',
            'Nama' => 'Kathleen Ruth Wijaya (ID LINE: kathruth)',
            'NIM' => '00000000000',
            'Prodi' =>'',
            'status' => 'mentor'
        ]);
        Kelompok::create([
       'NomorKelompok' => '89',
            'Nama' => 'MATTHEW SEBASTIAN KUSNANDAR',
            'NIM' => '00000068148',
            'Prodi' =>'Sistem Komputer',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '89',
            'Nama' => 'KEZIA MARCELLA JOVANKA',
            'NIM' => '00000068308',
            'Prodi' =>'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '89',
            'Nama' => 'CHYNTIA PRISEILLIA',
            'NIM' => '00000070303',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '89',
            'Nama' => 'DARREN IRAWAN DJONG',
            'NIM' => '00000081041',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '89',
            'Nama' => 'RAFAEL CHRISTOPHER HAUW',
            'NIM' => '00000067027',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '89',
            'Nama' => 'VINCENT LIE',
            'NIM' => '00000066422',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '89',
            'Nama' => 'KENLY MARVIN CHANG',
            'NIM' => '00000077303',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '89',
            'Nama' => 'RADIAN PUTRA ARBIANSYAH',
            'NIM' => '00000077191',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '89',
            'Nama' => 'RIDHO MALIK IBRAHIM',
            'NIM' => '00000075028',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '89',
            'Nama' => 'ANDRE GAMALION LINGGA TAPANI',
            'NIM' => '00000076974',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '89',
            'Nama' => 'MUHAMMAD FAUZAN ALBARI',
            'NIM' => '00000081605',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '89',
            'Nama' => 'ELENA MARLENE',
            'NIM' => '00000070655',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '89',
            'Nama' => 'JONATHAN ORRIN',
            'NIM' => '00000067534',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '89',
            'Nama' => 'JESSICA YEOKO',
            'NIM' => '00000072666',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '89',
            'Nama' => 'AIKO NATHANIA SOERATMAN',
            'NIM' => '00000071592',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '89',
            'Nama' => 'ANASTASYA LYRA ROSSA',
            'NIM' => '00000068338',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '89',
            'Nama' => 'REBECCA EMELY SANTOSO',
            'NIM' => '00000069497',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '89',
            'Nama' => 'REBECCA EMELY SANTOSO',
            'NIM' => '00000069497',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '89',
            'Nama' => 'SHELLA ANGELA',
            'NIM' => '00000071480',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '89',
            'Nama' => 'AUDREY ANABELLE SETIJADI',
            'NIM' => '00000055707',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '90',
            'Nama' => 'Felicia Elsa Daniswara (ID LINE: rrfed30)',
            'NIM' => '00000000000',
            'Prodi' =>'',
            'status' => 'mentor'
        ]);
        Kelompok::create([
       'NomorKelompok' => '90',
            'Nama' => 'SIFA NUR FAIZAH',
            'NIM' => '00000082044',
            'Prodi' =>'Sistem Komputer',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '90',
            'Nama' => 'MUHAMMAD CHAERUDIN',
            'NIM' => '00000080814',
            'Prodi' =>'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '90',
            'Nama' => 'ELISABET LUMBAN TOBING',
            'NIM' => '00000072804',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '90',
            'Nama' => 'HANIVA YUNIAR PRAJA PUTRI',
            'NIM' => '00000082522',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '90',
            'Nama' => 'DESSALVA FITZGERALD PUTRA PASARIBU',
            'NIM' => '00000069057',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '90',
            'Nama' => 'ETHAN FRANCIS REINA',
            'NIM' => '00000079442',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '90',
            'Nama' => 'JOICE GEBRILLA',
            'NIM' => '00000069712',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '90',
            'Nama' => 'CLASSICO JOYDIE SUMENDAP',
            'NIM' => '00000074826',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '90',
            'Nama' => 'VANESA DWI LESTARI',
            'NIM' => '00000071818',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '90',
            'Nama' => 'FAREL TAREK TIRMIDZI',
            'NIM' => '00000070042',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '90',
            'Nama' => 'JONATHAN ADI PURWOKO',
            'NIM' => '00000071230',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '90',
            'Nama' => 'FATHAN ZAKIYAN',
            'NIM' => '00000069747',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '90',
            'Nama' => 'IMEL SAUSAN MARYAM',
            'NIM' => '00000079347',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '90',
            'Nama' => 'ALYSSA ARFAN LIE',
            'NIM' => '00000071199',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '90',
            'Nama' => 'AILSA ANGGARI NATHANIA',
            'NIM' => '00000071663',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '90',
            'Nama' => 'VISAKHA MICHIKO YO',
            'NIM' => '00000068334',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '90',
            'Nama' => 'VISAKHA MICHIKO YO',
            'NIM' => '00000068334',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '90',
            'Nama' => 'ANGELO DONOVAN LUMBAN TOBING',
            'NIM' => '00000077875',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '90',
            'Nama' => 'SATYA YERIEL SUPRIJADI',
            'NIM' => '00000069907',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '90',
            'Nama' => 'FEMMY ELINDA RACHMANETY',
            'NIM' => '00000057052',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '91',
            'Nama' => 'Felicea Lie (ID LINE: felicea1212)',
            'NIM' => '00000000000',
            'Prodi' =>'',
            'status' => 'mentor'
        ]);
        Kelompok::create([
       'NomorKelompok' => '91',
            'Nama' => 'DIMAS NURZAKIA',
            'NIM' => '00000071955',
            'Prodi' =>'Sistem Komputer',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '91',
            'Nama' => 'RAYFAN PRIO ADHI NUGROHO',
            'NIM' => '00000071328',
            'Prodi' =>'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '91',
            'Nama' => 'MELANI REVA MARISKA',
            'NIM' => '00000075071',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '91',
            'Nama' => 'FARREL ABRAR SUBAKAH',
            'NIM' => '00000071221',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '91',
            'Nama' => 'AHIMSA TAKBIR YAMA',
            'NIM' => '00000081232',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '91',
            'Nama' => 'IMANUEL PRATHAMA AGUNG BOLAMAN',
            'NIM' => '00000073603',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '91',
            'Nama' => 'SHARONE ANASTASIA',
            'NIM' => '00000069286',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '91',
            'Nama' => 'DANIEL APOSPOLOUS NGADI',
            'NIM' => '00000076795',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '91',
            'Nama' => 'ALEXANDER BRYAN TRIHARJA',
            'NIM' => '00000065475',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '91',
            'Nama' => 'RAISYA PUTRI VIRNANDA',
            'NIM' => '00000081024',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '91',
            'Nama' => 'MUHAMMAD RAVINDRA MAHESANDRA',
            'NIM' => '00000072501',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '91',
            'Nama' => 'CLARENCE SABRINA CHANTAL HIDAYAT',
            'NIM' => '00000065077',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '91',
            'Nama' => 'MUHAMMAD FALIH MUKHSALAMMINA',
            'NIM' => '00000082476',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '91',
            'Nama' => 'ALDANO BRUSALI ZAHRANT',
            'NIM' => '00000075891',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '91',
            'Nama' => 'BENNETH EMMANUEL ANROCA',
            'NIM' => '00000068373',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '91',
            'Nama' => 'ADINDA RANA ZHAFIRA',
            'NIM' => '00000068721',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '91',
            'Nama' => 'SVETLANA ABIGAIL VALERIA TAMBUWUN',
            'NIM' => '00000080235',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '91',
            'Nama' => 'SHERLYN TANIA',
            'NIM' => '00000069167',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '91',
            'Nama' => 'KEZIA EUGENIA RENATA IZAAK',
            'NIM' => '00000063150',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '92',
            'Nama' => 'Selma Sekar Seto (ID LINE: selmasekarseto)',
            'NIM' => '00000000000',
            'Prodi' =>'',
            'status' => 'mentor'
        ]);
        Kelompok::create([
       'NomorKelompok' => '92',
            'Nama' => 'INDAH MARSHANDA SAMBUAGA',
            'NIM' => '00000076078',
            'Prodi' =>'Sistem Komputer',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '92',
            'Nama' => 'ALROY REYNARDO WARUWU',
            'NIM' => '00000072105',
            'Prodi' =>'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '92',
            'Nama' => 'NABILA AZ ZAHRA PARAMITA',
            'NIM' => '00000083199',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '92',
            'Nama' => 'FEBIANUS FELIX WIDISULISTYO',
            'NIM' => '00000072737',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '92',
            'Nama' => 'REGINA CLAIRINE DEVIANI WIJAYA',
            'NIM' => '00000070378',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '92',
            'Nama' => 'MARIO RIVALDO',
            'NIM' => '00000069511',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '92',
            'Nama' => 'YOSAN MULYA DARMAWAN',
            'NIM' => '00000081701',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '92',
            'Nama' => 'AHMAD RHAFA HAIKAL ALKANZ',
            'NIM' => '00000076127',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '92',
            'Nama' => 'RUSSEL SHIVAH BUDIARTO',
            'NIM' => '00000070376',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '92',
            'Nama' => 'ALVIANDA CHAIROFTA',
            'NIM' => '00000082435',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '92',
            'Nama' => 'AXEL REGINALD WIRANTO',
            'NIM' => '00000078456',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '92',
            'Nama' => 'EUVENIQUE RAE DATULONG',
            'NIM' => '00000068316',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '92',
            'Nama' => 'SABRINA JAHRA BUDI AULIA',
            'NIM' => '00000082543',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '92',
            'Nama' => 'NICKHELSEN THOMAS HANGGALA',
            'NIM' => '00000071714',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '92',
            'Nama' => 'CALLISTA HANDJAJA',
            'NIM' => '00000076402',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '92',
            'Nama' => 'REVO ALEXANDRE BUDHIEMAN',
            'NIM' => '00000079025',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '92',
            'Nama' => 'SUNG TIMOTHIE NUSANTARA',
            'NIM' => '00000066701',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '92',
            'Nama' => 'OLIVIA TSANIA PUTRI LINTANG',
            'NIM' => '00000078690',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '92',
            'Nama' => 'GABRIEL KNB',
            'NIM' => '00000037278',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '93',
            'Nama' => 'Shenon Fitriana (ID LINE: shenon92)',
            'NIM' => '00000000000',
            'Prodi' =>'',
            'status' => 'mentor'
        ]);
        Kelompok::create([
       'NomorKelompok' => '93',
            'Nama' => 'FELIX ALEXIS',
            'NIM' => '00000068910',
            'Prodi' =>'Sistem Komputer',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '93',
            'Nama' => 'YESA KETRINA KALAMAT',
            'NIM' => '00000069452',
            'Prodi' =>'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '93',
            'Nama' => 'YOHANES AGUSTINUS LADJA',
            'NIM' => '00000075311',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '93',
            'Nama' => 'FEODORA AUDREY CLEMENTINE',
            'NIM' => '00000067701',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '93',
            'Nama' => 'GLORIA VIONICA YANMARSIA',
            'NIM' => '00000073185',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '93',
            'Nama' => 'CHRISTIAS AARON DANIEL',
            'NIM' => '00000070400',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '93',
            'Nama' => 'FAKHRI ANGGARA PUTRA',
            'NIM' => '00000075563',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '93',
            'Nama' => 'ARLY FASYA HERMAWAN',
            'NIM' => '00000081202',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '93',
            'Nama' => 'SAMMY GHOUTAN SITOMPUL',
            'NIM' => '00000076823',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '93',
            'Nama' => 'CHRISTIAN TANTHEO',
            'NIM' => '00000069288',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '93',
            'Nama' => 'ELISABETH LAUREN',
            'NIM' => '00000072541',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '93',
            'Nama' => 'GABRIELA YONIKE',
            'NIM' => '00000081981',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '93',
            'Nama' => 'FARREL JAZZIAH THEODORE',
            'NIM' => '00000069209',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '93',
            'Nama' => 'INSAN NYUTON SIAHAAN',
            'NIM' => '00000071441',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '93',
            'Nama' => 'CECILIA MULIAWAN',
            'NIM' => '00000065157',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '93',
            'Nama' => 'KENZO CHANDRA',
            'NIM' => '00000068814',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '93',
            'Nama' => 'THESSALONICA AULIA PURNOMO',
            'NIM' => '00000068954',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '93',
            'Nama' => 'SHABRINA KHANZA HANIFAH',
            'NIM' => '00000071572',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '93',
            'Nama' => 'KEVIN MAHENDRA',
            'NIM' => '00000067622',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '94',
            'Nama' => 'Ni Kadek Laura Mayrayswartati (ID LINE: lauraswrt)',
            'NIM' => '00000000000',
            'Prodi' =>'',
            'status' => 'mentor'
        ]);
        Kelompok::create([
       'NomorKelompok' => '94',
            'Nama' => 'VINSCENT COLLIN CHANDRA',
            'NIM' => '00000066482',
            'Prodi' =>'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '94',
            'Nama' => 'AZZAHRA ZUNATUN NADIFA',
            'NIM' => '00000079022',
            'Prodi' =>'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '94',
            'Nama' => 'STEVANI ALEXANDRA HARMARETA',
            'NIM' => '00000069321',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '94',
            'Nama' => 'STEVANI ALEXANDRA HARMARETA',
            'NIM' => '00000069321',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '94',
            'Nama' => 'FIENA GUNAWAN',
            'NIM' => '00000069579',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '94',
            'Nama' => 'JASON LOUIS ANTHONY',
            'NIM' => '00000064882',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '94',
            'Nama' => 'BRIAN THEODORE',
            'NIM' => '00000069972',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '94',
            'Nama' => 'IVANDER KRISTIAN SATYAPUTRA',
            'NIM' => '00000069576',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '94',
            'Nama' => 'DECMARCO TRI SURYA',
            'NIM' => '00000066823',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '94',
            'Nama' => 'STEFANIE VERONICA WIJAYA',
            'NIM' => '00000068054',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '94',
            'Nama' => 'CHRISTIAN YOGA SHANDY KURNIADI',
            'NIM' => '00000067471',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '94',
            'Nama' => 'HOSEA .',
            'NIM' => '00000070462',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '94',
            'Nama' => 'IMMANUEL SAPUTRA TJANDRA',
            'NIM' => '00000072597',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '94',
            'Nama' => 'CALVIN ANG',
            'NIM' => '00000065910',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '94',
            'Nama' => 'JONATHAN BRYAN CHRISTIAN',
            'NIM' => '00000067738',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '94',
            'Nama' => 'AGATHA SHARON TOSCANI',
            'NIM' => '00000068898',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '94',
            'Nama' => 'JEFFERSON MARVEL TJHIN',
            'NIM' => '00000068849',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '94',
            'Nama' => 'NADYA CHAIRUNNISA PUTERI NASUTION',
            'NIM' => '00000070509',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '94',
            'Nama' => 'ERICA DORTUA OLIVIA PASARIBU',
            'NIM' => '00000072560',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '94',
            'Nama' => 'VINCENTIUS KRISNA BAGUS NUSANTARA',
            'NIM' => '00000062053',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '95',
            'Nama' => 'Lanang Bahy Ramadhan (ID LINE: Lbramadan)',
            'NIM' => '00000000000',
            'Prodi' =>'',
            'status' => 'mentor'
        ]);
        Kelompok::create([
       'NomorKelompok' => '95',
            'Nama' => 'PRAMUDYA ABIMANYU',
            'NIM' => '00000081648',
            'Prodi' =>'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '95',
            'Nama' => 'JENNIFER KRISTA CHANDRA',
            'NIM' => '00000078285',
            'Prodi' =>'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '95',
            'Nama' => 'MUHAMMAD DJOMY DWI PUTRO',
            'NIM' => '00000081907',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '95',
            'Nama' => 'FERNANDO YULIUS HADIARTO',
            'NIM' => '00000070570',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '95',
            'Nama' => 'THOMAS INDRIYA KAUTAMAN',
            'NIM' => '00000069550',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '95',
            'Nama' => 'FELIX LEONARDY',
            'NIM' => '00000068018',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '95',
            'Nama' => 'THARADIVA .',
            'NIM' => '00000072251',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '95',
            'Nama' => 'JESSICA NORA',
            'NIM' => '00000066819',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '95',
            'Nama' => 'WIBISONO AJI PRASETYO',
            'NIM' => '00000073195',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '95',
            'Nama' => 'GILBERT PARLUHUTAN PAKPAHAN',
            'NIM' => '00000079904',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '95',
            'Nama' => 'FADHILAH AWAL RIZQIANSYAH',
            'NIM' => '00000077739',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '95',
            'Nama' => 'JEANNIE RUKMANA',
            'NIM' => '00000068931',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '95',
            'Nama' => 'NARARYA ARUNDAYA RAHIM',
            'NIM' => '00000071440',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '95',
            'Nama' => 'KAREN ANGELICA TUNGAWAN',
            'NIM' => '00000067704',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '95',
            'Nama' => 'EVELYN FRASER',
            'NIM' => '00000070695',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '95',
            'Nama' => 'FELICIA WIJAYA',
            'NIM' => '00000072047',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '95',
            'Nama' => 'VALENTINO FEBRYO EVAN DANISWORO',
            'NIM' => '00000068934',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '95',
            'Nama' => 'STEVEN STEVANUS TAN',
            'NIM' => '00000065117',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '95',
            'Nama' => 'FADHIL SHAWAAL HAKIM',
            'NIM' => '00000042048',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '96',
            'Nama' => 'Alifiah Azzahra (ID LINE: fiazzhr22)',
            'NIM' => '00000000000',
            'Prodi' =>'',
            'status' => 'mentor'
        ]);
        Kelompok::create([
       'NomorKelompok' => '96',
            'Nama' => 'MUHAMMAD IMAN MUTTAQIEN',
            'NIM' => '00000069006',
            'Prodi' =>'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '96',
            'Nama' => 'JUSTINE DAVE MARTAMBUN',
            'NIM' => '00000070213',
            'Prodi' =>'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '96',
            'Nama' => 'WILLSEN WIJAYA',
            'NIM' => '00000070011',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '96',
            'Nama' => 'HAEZER LIMANJAYA',
            'NIM' => '00000067452',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '96',
            'Nama' => 'GUSTI THIFAL NUR SYAHLA',
            'NIM' => '00000070356',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '96',
            'Nama' => 'GABRIELLE GISELYN VALENTINO SUSANTO',
            'NIM' => '00000069311',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '96',
            'Nama' => 'JANU SOLAGRATIA BARUS',
            'NIM' => '00000078741',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '96',
            'Nama' => 'JIMMY WARDHANA',
            'NIM' => '00000066008',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '96',
            'Nama' => 'ARYASENNA GARNADI',
            'NIM' => '00000072229',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '96',
            'Nama' => 'JASON JONATHAN',
            'NIM' => '00000071890',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '96',
            'Nama' => 'JASON JONATHAN',
            'NIM' => '00000071890',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '96',
            'Nama' => 'FIDEL BRIAN DAVA',
            'NIM' => '00000073866',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '96',
            'Nama' => 'JIHAN FADILLAH DWIHAPSARI RAMADHANTI',
            'NIM' => '00000066373',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '96',
            'Nama' => 'FELICIA ELIZABETH',
            'NIM' => '00000073341',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '96',
            'Nama' => 'MUHAMMAD ARIE FAHREZA',
            'NIM' => '00000077623',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '96',
            'Nama' => 'MICHAEL THEODORE JAPUTRA',
            'NIM' => '00000069442',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '96',
            'Nama' => 'SADIRA ANINDITA',
            'NIM' => '00000079172',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '96',
            'Nama' => 'MARTIN DUTA LUKITO',
            'NIM' => '00000070470',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '96',
            'Nama' => 'MAXEN DARIAN TSUI',
            'NIM' => '00000071536',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '96',
            'Nama' => 'MICHAEL JULIO BAYU RUMEKSO',
            'NIM' => '00000043351',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '97',
            'Nama' => 'Jovianie Daniella Sumartono (ID LINE: jovianie20)',
            'NIM' => '00000000000',
            'Prodi' =>'',
            'status' => 'mentor'
        ]);
        Kelompok::create([
       'NomorKelompok' => '97',
            'Nama' => 'AYU NABIILAH',
            'NIM' => '00000076271',
            'Prodi' =>'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '97',
            'Nama' => 'DJORDI HARTAWAN WIJAYA LIM',
            'NIM' => '00000062582',
            'Prodi' =>'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '97',
            'Nama' => 'ALVIN AGUSTIO HANS',
            'NIM' => '00000069467',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '97',
            'Nama' => 'ALVIN AGUSTIO HANS',
            'NIM' => '00000069467',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '97',
            'Nama' => 'IVANA NOVELIA RONTINI',
            'NIM' => '00000069842',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '97',
            'Nama' => 'TIARA RUTH CAHYANINGSIH',
            'NIM' => '00000068121',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '97',
            'Nama' => 'A ADRIEL ADYWINATA',
            'NIM' => '00000069869',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '97',
            'Nama' => 'DIVA IMTIYAAZ',
            'NIM' => '00000081776',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '97',
            'Nama' => 'JOAN ANABELLE MURTI',
            'NIM' => '00000072797',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '97',
            'Nama' => 'BRYAN JONATHAN',
            'NIM' => '00000067594',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '97',
            'Nama' => 'JOVAN FIDELLO',
            'NIM' => '00000067827',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '97',
            'Nama' => 'KARINA LUKMAN',
            'NIM' => '00000077679',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '97',
            'Nama' => 'SYAIMA NAJLA AZIZAH',
            'NIM' => '00000072584',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '97',
            'Nama' => 'GLORIA WIJAYA',
            'NIM' => '00000065419',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '97',
            'Nama' => 'MUHAMMAD FATHAN FARIS KASYFILLAH AMNA',
            'NIM' => '00000069602',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '97',
            'Nama' => 'BELTSAZAR AURIEL WIJAYA',
            'NIM' => '00000072562',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '97',
            'Nama' => 'FAHRENO NAUFAL WANPRADANA PIRNGADIE',
            'NIM' => '00000069038',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '97',
            'Nama' => 'ANDREW MUDITA TAN',
            'NIM' => '00000081802',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '97',
            'Nama' => 'MICHELLE ANGELIQUE WIJAYA',
            'NIM' => '00000071761',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '97',
            'Nama' => 'MUHAMMAD GHUFRANSYAH',
            'NIM' => '00000060111',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '98',
            'Nama' => 'Kesya Sunjoyo (ID LINE: kesyasunjoyo)',
            'NIM' => '00000000000',
            'Prodi' =>'',
            'status' => 'mentor'
        ]);
        Kelompok::create([
       'NomorKelompok' => '98',
            'Nama' => 'ALEXA GABRIELLE HARYANTO',
            'NIM' => '00000068195',
            'Prodi' =>'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '98',
            'Nama' => 'ANASTASIA ANGELA',
            'NIM' => '00000076314',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '98',
            'Nama' => 'STEVEN RYAN',
            'NIM' => '00000075511',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '98',
            'Nama' => 'KAYLA SYAFIRA ARIANA',
            'NIM' => '00000071629',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '98',
            'Nama' => 'JEREMY SEBASTIAN SURJANTO',
            'NIM' => '00000068920',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '98',
            'Nama' => 'LAURENSIA CINDY PATRICIA PUTRI',
            'NIM' => '00000076072',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '98',
            'Nama' => 'LIVIA ANMESTASYA NASYWAA',
            'NIM' => '00000076815',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '98',
            'Nama' => 'WALTER ADRIAN SAMUEL',
            'NIM' => '00000067030',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '98',
            'Nama' => 'VALENT JOSEPH SETIAWAN',
            'NIM' => '00000075506',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '98',
            'Nama' => 'CATHERINE MARGARETA',
            'NIM' => '00000071892',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '98',
            'Nama' => 'GIFFA SATRIA PUTRA',
            'NIM' => '00000079945',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '98',
            'Nama' => 'NATASHA KESYA TOMIRA',
            'NIM' => '00000065070',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '98',
            'Nama' => 'LYDIA VANIA',
            'NIM' => '00000065447',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '98',
            'Nama' => 'CALVIN SEBASTIAN JANUARDHO',
            'NIM' => '00000070705',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '98',
            'Nama' => 'FENELLA AUSTIN SISWANTO, LIEM',
            'NIM' => '00000067036',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '98',
            'Nama' => 'CHRISTIAN BIMA PRASETYA',
            'NIM' => '00000071263',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '98',
            'Nama' => 'MUHAMAD RIZKI PUTRA AMALAN',
            'NIM' => '00000070686',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '98',
            'Nama' => 'ALVIERI GAMALIEL CMW',
            'NIM' => '00000067730',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '99',
            'Nama' => 'Aurelius Ivan (ID LINE: aurelivan)',
            'NIM' => '00000000000',
            'Prodi' =>'',
            'status' => 'mentor'
        ]);
        Kelompok::create([
       'NomorKelompok' => '99',
            'Nama' => 'CATHERINE YUWANSA',
            'NIM' => '00000067149',
            'Prodi' =>'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '99',
            'Nama' => 'IRVAN DANI ISKANDAR',
            'NIM' => '00000075457',
            'Prodi' =>'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '99',
            'Nama' => 'BENEDICTUS ARYA PRADIPTA',
            'NIM' => '00000079179',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '99',
            'Nama' => 'BENEDICTUS ARYA PRADIPTA',
            'NIM' => '00000079179',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '99',
            'Nama' => 'FELICE LIANNA',
            'NIM' => '00000075427',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '99',
            'Nama' => 'THALIA AUDREY',
            'NIM' => '00000079213',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '99',
            'Nama' => 'JUSTIN XAVIER KUSNADI',
            'NIM' => '00000067952',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '99',
            'Nama' => 'SALMA ALIKA ZHAFIRAH',
            'NIM' => '00000072401',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '99',
            'Nama' => 'ANANDA GUNAWAN SENTOSA',
            'NIM' => '00000071498',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '99',
            'Nama' => 'NICHOLAS APRILEUS SUKHADDA',
            'NIM' => '00000070067',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '99',
            'Nama' => 'ALDHO LEGA DHARMAWAN',
            'NIM' => '00000081011',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '99',
            'Nama' => 'SYIFA ANJANI DEWY',
            'NIM' => '00000069888',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '99',
            'Nama' => 'KARANIYA METTA DJASAWIBAWA',
            'NIM' => '00000069291',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '99',
            'Nama' => 'MICHAEL JULIAN KRISTANTO',
            'NIM' => '00000067635',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '99',
            'Nama' => 'NAGISA SHIMIZU HARTAWAN',
            'NIM' => '00000069287',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '99',
            'Nama' => 'ANEZKA ANJANET SILALAHI',
            'NIM' => '00000069464',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '99',
            'Nama' => 'RHEZNANDYA REYHAN ABTIANSYAH',
            'NIM' => '00000087590',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '99',
            'Nama' => 'RHEZNANDYA REYHAN ABTIANSYAH',
            'NIM' => '00000070392',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '99',
            'Nama' => 'CINDI NATALIE',
            'NIM' => '00000065072',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '99',
            'Nama' => 'MUHAMMAD HAFIZH ARRAUF NURDIN',
            'NIM' => '00000060521',
            'Prodi' =>'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '100',
            'Nama' => 'Belby Agatha (ID LINE: fakeanime)',
            'NIM' => '00000000000',
            'Prodi' =>'',
            'status' => 'mentor'
        ]);
        Kelompok::create([
       'NomorKelompok' => '100',
            'Nama' => 'SANDRA SENINA ASYARIE',
            'NIM' => '00000078543',
            'Prodi' =>'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '100',
            'Nama' => 'CHERIE VIAN CHANG',
            'NIM' => '00000073398',
            'Prodi' =>'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '100',
            'Nama' => 'MAURA DAVITA ERZANDA',
            'NIM' => '00000088620',
            'Prodi' =>'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '100',
            'Nama' => 'VANESHA QUENTIN SOEBROTO',
            'NIM' => '00000069728',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '100',
            'Nama' => 'ADINATA SUTEJA HALIM',
            'NIM' => '00000069054',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '100',
            'Nama' => "MUHAMMAD RIF'AT DARWISYAH",
            'NIM' => '00000073899',
            'Prodi' =>'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '100',
            'Nama' => 'ADRIANO WIJAYA',
            'NIM' => '00000073601',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '100',
            'Nama' => 'KARTONO PUTRA EFENDI',
            'NIM' => '00000069551',
            'Prodi' =>'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '100',
            'Nama' => 'RAIHAN HAMMAM SALSABIL',
            'NIM' => '00000069813',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '100',
            'Nama' => 'OKI RAHMAT RAMADHAN',
            'NIM' => '00000075792',
            'Prodi' =>'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '100',
            'Nama' => 'PATRICIA FEBRINA MAHARANI',
            'NIM' => '00000070305',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '100',
            'Nama' => 'NIESTEL ZHAGGY LAIMEHERIWA',
            'NIM' => '00000073533',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '100',
            'Nama' => 'MUHAMAD ZIDANE FAHREZI',
            'NIM' => '00000079965',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '100',
            'Nama' => 'MATHIAS RAYHAN',
            'NIM' => '00000075443',
            'Prodi' =>'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '100',
            'Nama' => 'CINDY .',
            'NIM' => '00000068733',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '100',
            'Nama' => 'AMBIA TALLENTA PANINGKU',
            'NIM' => '00000080791',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '100',
            'Nama' => 'SAYYID AQIL RIZQI',
            'NIM' => '00000075472',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '100',
            'Nama' => 'DARELL SAPUTRA',
            'NIM' => '00000073484',
            'Prodi' =>'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
       'NomorKelompok' => '100',
            'Nama' => 'NISRINA ALIFAH KHAIRANI',
            'NIM' => '00000063673',
            'Prodi' =>'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '101',
            'Nama' => 'PIO SURIANANTA NALAPRANA (ID LINE: pio_nalaprana)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '101',
            'Nama' => 'VIRGI NANCA LORIZKIAN',
            'NIM' => '00000079479',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '101',
            'Nama' => 'DELVINO ADRIAN',
            'NIM' => '00000068187',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '101',
            'Nama' => 'FIORENZA IRENE CHRISTABELLE SURYANTO',
            'NIM' => '00000067450',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);            
        Kelompok::create([
            'NomorKelompok' => '101',
            'Nama' => 'REZKY MEINAKY',
            'NIM' => '00000067853',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '101',
            'Nama' => 'FELICIA CHAI',
            'NIM' => '00000068022',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '101',
            'Nama' => 'MUSYAFA ALHAMDI HAIKAL',
            'NIM' => '00000071340',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '101',
            'Nama' => 'JIHAN NABILLA',
            'NIM' => '00000079220',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '101',
            'Nama' => 'KEANE VINCENT',
            'NIM' => '00000072668',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '101',
            'Nama' => 'MUHAMAD DAFA',
            'NIM' => '00000077651',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '101',
            'Nama' => 'JHONNES FERNANDO',
            'NIM' => '00000068142',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '101',
            'Nama' => 'NATALIA CHRISTY',
            'NIM' => '00000068820',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '101',
            'Nama' => 'SAVANA DEWI AYU ILALANG',
            'NIM' => '00000074940',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '101',
            'Nama' => 'NAFISAH NAJLA NISRINA',
            'NIM' => '00000087654',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '101',
            'Nama' => 'NATALY STEVANIA',
            'NIM' => '00000069508',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '101',
            'Nama' => 'ALICIA CHARMANITA WAYL',
            'NIM' => '00000067624',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '101',
            'Nama' => 'PUTRI AZ ZAHRA',
            'NIM' => '00000075148',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '101',
            'Nama' => 'CHELSIA OLIVIA',
            'NIM' => '00000065426',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '101',
            'Nama' => 'INTAN KARTIKA DANTI PUSPITA',
            'NIM' => '00000082460',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '101',
            'Nama' => 'ADINDA NASUWAH PUTRI FATAHYASIIN',
            'NIM' => '00000038008',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '102',
            'Nama' => 'DENISON TANDANU (ID LINE: susuibu888)',
            'NIM' => '0',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '102',
            'Nama' => 'SHAKILA NASHA ARDINE HERDADI',
            'NIM' => '00000069739',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '102',
            'Nama' => 'FELICIA AURELL THIOPILLIA',
            'NIM' => '00000067049',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '102',
            'Nama' => 'ERSAN IVANDA PUTRA',
            'NIM' => '00000073319',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '102',
            'Nama' => 'ANDIKA PUTRA HIRMAWAN',
            'NIM' => '00000089093',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '102',
            'Nama' => 'BILLY IMMANUEL',
            'NIM' => '00000068882',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '102',
            'Nama' => 'NYOMAN WISMA WIJANARADYOTA',
            'NIM' => '00000071161',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '102',
            'Nama' => 'WILLY WIGUNA TANSIL',
            'NIM' => '00000067983',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '102',
            'Nama' => 'DEVIN TARANGGA',
            'NIM' => '00000072515',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '102',
            'Nama' => 'PRADIPTA DWI ARYMURTI',
            'NIM' => '00000075956',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '102',
            'Nama' => 'AURELIUS BRANDON ALEXANDER ABUTHAN',
            'NIM' => '00000075101',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '102',
            'Nama' => 'ELVARETTA FELIXIA',
            'NIM' => '00000081069',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '102',
            'Nama' => 'KENIZYANADI VIEDE PUTRI HANANDA',
            'NIM' => '00000067658',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '102',
            'Nama' => 'MUHAMMAD ARVADIKA SETYAWAN',
            'NIM' => '00000077622',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '102',
            'Nama' => 'NAUFAL RADHITYA DANISWARA',
            'NIM' => '00000067829',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '102',
            'Nama' => 'ANANDA NATHYA SYIFANI',
            'NIM' => '00000072687',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '102',
            'Nama' => 'CASSEY SEBASTIAN GOETAMA',
            'NIM' => '00000068386',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '102',
            'Nama' => 'ELEN REDITA',
            'NIM' => '00000078333',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '102',
            'Nama' => 'DANISHA NURUL HUSNA',
            'NIM' => '00000072050',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '102',
            'Nama' => 'MUHAMMAD CAESHAR TRINUGRAHA',
            'NIM' => '00000038119',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '103',
            'Nama' => 'AUSTIN ANGELO (ID LINE: officialaustin)',
            'NIM' => '0',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '103',
            'Nama' => 'AKWILLA IMMANUEL MAHAVIRA',
            'NIM' => '00000075630',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '103',
            'Nama' => 'KEN ALDEN PUTRA LEAN',
            'NIM' => '00000073521',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '103',
            'Nama' => 'ALFREANDO MOZA SIAGIAN',
            'NIM' => '00000081172',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '103',
            'Nama' => 'STEVEN THEODORE',
            'NIM' => '00000069928',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '103',
            'Nama' => 'CHRISTOPHER JEREMY JANSEN',
            'NIM' => '00000067538',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '103',
            'Nama' => 'SEBASTIAN ARIZONA DIMAS PRAYITNO',
            'NIM' => '00000075366',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '103',
            'Nama' => 'MARIA CICILIA DEVA AUTHARY DEI',
            'NIM' => '00000072073',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '103',
            'Nama' => 'DEVLIN WELSON LEE',
            'NIM' => '00000071162',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '103',
            'Nama' => 'NICHOLAS PUTRA PRATAMA',
            'NIM' => '00000067320',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '103',
            'Nama' => 'DOMINIQUE GABRIELLA DA SILVA',
            'NIM' => '00000068298',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '103',
            'Nama' => 'RADEN MUHAMMAD FAUZAN HABRARI',
            'NIM' => '00000082838',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '103',
            'Nama' => 'MUHAMMAD FADHIL',
            'NIM' => '00000079004',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '103',
            'Nama' => 'PRITY SENA',
            'NIM' => '00000083533',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '103',
            'Nama' => 'RAFAELA JANICE PINGKAN ASSA',
            'NIM' => '00000070898',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '103',
            'Nama' => 'ARLICIA AGATHA VAN TOMMEO',
            'NIM' => '00000077189',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '103',
            'Nama' => 'JESSLYN YUCANNAKA',
            'NIM' => '00000067808',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '103',
            'Nama' => 'INDA SALSABILA SAUSAN',
            'NIM' => '00000077222',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '103',
            'Nama' => 'MATTHEW PHILLIPE WIDJAJA',
            'NIM' => '00000067482',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '103',
            'Nama' => 'BAYU BASKORO ADJIE',
            'NIM' => '00000061617',
            'Prodi' => 'Teknik Komputer',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '104',
            'Nama' => 'STEVIANA HERMANTO (ID LINE: stevianah)',
            'NIM' => '0',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '104',
            'Nama' => 'TIMOTIUS HARRY MERCUBUWONO',
            'NIM' => '00000069026',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '104',
            'Nama' => 'JERICO HUTAMA',
            'NIM' => '00000068991',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '104',
            'Nama' => 'REYNARD ADVANCE PUTRA HULU',
            'NIM' => '00000073820',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '104',
            'Nama' => 'RACHEL NIFAERI PUTRI WARUWU',
            'NIM' => '00000069337',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '104',
            'Nama' => 'AUDY STEFFANIE LAURENSIA CHRISTANTO',
            'NIM' => '00000069067',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '104',
            'Nama' => 'VALERIE MIRACLE ZOE RASIDI',
            'NIM' => '00000069883',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '104',
            'Nama' => 'MUHAMMAD IBNU SAHDAM',
            'NIM' => '00000074827',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '104',
            'Nama' => 'DEWI OPSA LINGGA NINGSIH DARGIYO',
            'NIM' => '00000067366',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '104',
            'Nama' => 'KYLA ARYNDA SALSABILA',
            'NIM' => '00000087561',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '104',
            'Nama' => 'RACHELLE STEPHANIE RIANTO',
            'NIM' => '00000082784',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '104',
            'Nama' => 'MARITZA SALSABILA FATHONI',
            'NIM' => '00000076405',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '104',
            'Nama' => 'JESSIE YENCA VEGUSTIN',
            'NIM' => '00000065172',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '104',
            'Nama' => 'SHERLIE .',
            'NIM' => '00000073813',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '104',
            'Nama' => 'SHEREN OKTIVA ADAM',
            'NIM' => '00000069109',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '104',
            'Nama' => 'JONATHAN RICHARDHO EDUARTANTO',
            'NIM' => '00000070846',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '104',
            'Nama' => 'SULTHAN HASSAN KAMIL',
            'NIM' => '00000075136',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '104',
            'Nama' => 'VIVIANTI .',
            'NIM' => '00000076008',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '104',
            'Nama' => 'YOHANES ANGEL PURNAMA',
            'NIM' => '00000075725',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '104',
            'Nama' => 'CELINE ARDELA',
            'NIM' => '00000060971',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '105',
            'Nama' => 'NATASZA RAMADHANI (ID LINE: nataszaramadhani)',
            'NIM' => '0',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '105',
            'Nama' => 'THERESIA WINNA LARASATI',
            'NIM' => '00000071325',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '105',
            'Nama' => 'FENNY DWI ADIWENA',
            'NIM' => '00000067483',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '105',
            'Nama' => 'BRYAN WILOGO',
            'NIM' => '00000085445',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '105',
            'Nama' => 'ADRIANA HAPSARI SETIOBUDI',
            'NIM' => '00000070298',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '105',
            'Nama' => 'LA VONNE TIMOTHEE',
            'NIM' => '00000071722',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '105',
            'Nama' => 'JOAQUIN CHURCH EFAN',
            'NIM' => '00000070704',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '105',
            'Nama' => 'MUHAMMAD SYAHRILLO ALFIAN',
            'NIM' => '00000069920',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '105',
            'Nama' => 'DHARMA GARAVO CANCERIO',
            'NIM' => '00000068330',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '105',
            'Nama' => 'RAQUEL JUNIA HERMAWAN',
            'NIM' => '00000079018',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '105',
            'Nama' => 'WILLIAM PURBA',
            'NIM' => '00000066368',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '105',
            'Nama' => 'FELICIA .',
            'NIM' => '00000073148',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '105',
            'Nama' => 'KELLY NAFTALI',
            'NIM' => '00000072667',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '105',
            'Nama' => 'REEVA AUDRA PUTRI DAYWIN',
            'NIM' => '00000067576',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '105',
            'Nama' => 'STEVINCENT .',
            'NIM' => '00000077127',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '105',
            'Nama' => 'JOANNA YOUNG',
            'NIM' => '00000075670',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '105',
            'Nama' => 'ANDIKO WIRO SEMITO',
            'NIM' => '00000078319',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '105',
            'Nama' => 'WEIRA ELISA',
            'NIM' => '00000067688',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '105',
            'Nama' => 'NABIHA AZMI DHARMAWAN',
            'NIM' => '00000073268',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '105',
            'Nama' => 'BRYAN WONG',
            'NIM' => '00000065882',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '106',
            'Nama' => 'FRANSISKA SZELICA (ID LINE: fransiska2112)',
            'NIM' => '0',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '106',
            'Nama' => 'VIRGIAN JONATHAN SOGE',
            'NIM' => '00000069279',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '106',
            'Nama' => 'FELLICIA VIRGINIA',
            'NIM' => '00000071265',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '106',
            'Nama' => 'SHYFA ARIESTA RUSTIAN',
            'NIM' => '00000071428',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '106',
            'Nama' => 'VINCENT ALEXANDER',
            'NIM' => '00000066770',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '106',
            'Nama' => 'MARGARETH JASMINE HARBONO',
            'NIM' => '00000071606',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '106',
            'Nama' => 'HENDY JONATHAN',
            'NIM' => '00000067741',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '106',
            'Nama' => 'MUHAMMAD ZIDANE RAMADHAN',
            'NIM' => '00000074750',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '106',
            'Nama' => 'VANESSA RIYADI',
            'NIM' => '00000077831',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '106',
            'Nama' => 'JOSE ANDREAS LIE',
            'NIM' => '00000067097',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '106',
            'Nama' => 'TEUKU FAZARIZ BASYA',
            'NIM' => '00000076122',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '106',
            'Nama' => 'VALLENCIA NATALIE',
            'NIM' => '00000069660',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '106',
            'Nama' => 'TARA PUSPITA',
            'NIM' => '00000065113',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '106',
            'Nama' => 'IQLIMA FITRIYANI',
            'NIM' => '00000082700',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '106',
            'Nama' => 'AURELDA HARRY PRAMESELFIN',
            'NIM' => '00000075836',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '106',
            'Nama' => 'MAIASYA CHARMELITA DWINAYA',
            'NIM' => '00000070119',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '106',
            'Nama' => 'ANGELLICA KRISTIE LIN',
            'NIM' => '00000068270',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '106',
            'Nama' => 'YOVELA NAVATHANIA LEE',
            'NIM' => '00000069722',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '106',
            'Nama' => 'ERINNA RUTH SYAKURA PANJAITAN',
            'NIM' => '00000072677',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '106',
            'Nama' => 'MUHAMMAD HAFIZH',
            'NIM' => '00000055338',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '107',
            'Nama' => 'JOCELYNE (ID LINE: jocelynejoy)',
            'NIM' => '000000',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '107',
            'Nama' => 'NOVA STELLA',
            'NIM' => '00000068133',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '107',
            'Nama' => 'ILYASA HANIF FAIZ',
            'NIM' => '00000077724',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '107',
            'Nama' => 'JONATHAN AXL WIBOWO',
            'NIM' => '00000077053',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '107',
            'Nama' => 'MUHAMMAD FARREL CESARIO',
            'NIM' => '00000075222',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '107',
            'Nama' => 'IRENE CAROLINE LORENSIA',
            'NIM' => '00000077892',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '107',
            'Nama' => 'CALVARY IMMANUEL LIEMANGRACIA',
            'NIM' => '00000067457',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '107',
            'Nama' => 'JASON TIMOTHY SIHITE',
            'NIM' => '00000081103',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '107',
            'Nama' => 'VITO PRATAMA WIJAYA',
            'NIM' => '00000067461',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '107',
            'Nama' => 'RAHMAT KURNIAWAN',
            'NIM' => '00000069647',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '107',
            'Nama' => 'ANASTASIA BR SIDEBANG',
            'NIM' => '00000083222',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '107',
            'Nama' => 'VANESSA VERNADETH',
            'NIM' => '00000068955',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '107',
            'Nama' => 'SHAFIRAGIOVANI MARVELLA DEVIERADUTALIFA',
            'NIM' => '00000079441',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '107',
            'Nama' => 'NAUFAL HANIF',
            'NIM' => '00000084253',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '107',
            'Nama' => 'MICHELLE ORIOLA LIMITA',
            'NIM' => '00000065179',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '107',
            'Nama' => 'MUHAMMAD JORDAN ABROR',
            'NIM' => '00000077706',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '107',
            'Nama' => 'SHIFA RAJWA SEKAR NATASA',
            'NIM' => '00000079178',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '107',
            'Nama' => 'WISELY TANADY',
            'NIM' => '00000073353',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '107',
            'Nama' => 'GEORGINA LETIZIA',
            'NIM' => '00000076796',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '107',
            'Nama' => 'PRISCILIA ADINE ASPRIANTIKA',
            'NIM' => '00000058368',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '108',
            'Nama' => 'RUTH YUSIANA (ID LINE: ruthyushi)',
            'NIM' => '000000',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '108',
            'Nama' => 'FARAH ARTANTI',
            'NIM' => '00000077874',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '108',
            'Nama' => 'CHINTIA LIBBY',
            'NIM' => '00000068387',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '108',
            'Nama' => 'ANDREW HANDALI',
            'NIM' => '00000075659',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '108',
            'Nama' => 'MUHAMMAD PRAGITYA VAZZA',
            'NIM' => '00000075813',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '108',
            'Nama' => 'CHARLOTTE YEUNG',
            'NIM' => '00000066808',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '108',
            'Nama' => 'ATIRA GIZELLE TRINITY IMON',
            'NIM' => '00000071414',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '108',
            'Nama' => 'RIDWANDO SATRIO TSOE',
            'NIM' => '00000080743',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '108',
            'Nama' => 'JASON ALEXANDER TJAHJADI',
            'NIM' => '00000070333',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '108',
            'Nama' => 'RAPHAEL NATHAN NUGROHO',
            'NIM' => '00000068112',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '108',
            'Nama' => 'RADITYA SETADEWA BASTIAN',
            'NIM' => '00000082181',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '108',
            'Nama' => 'VANIA ANGELICA',
            'NIM' => '00000072814',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '108',
            'Nama' => 'MARIA JESSICA EUNIKE DAHAYU',
            'NIM' => '00000069968',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '108',
            'Nama' => 'FRANCISCO ANDERSON GULTOM',
            'NIM' => '00000080911',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '108',
            'Nama' => 'NOVI NATANIYA HUTAGALUNG',
            'NIM' => '00000077432',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '108',
            'Nama' => 'LIVINA .',
            'NIM' => '00000069975',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '108',
            'Nama' => 'SHARLYNN SOENARJO',
            'NIM' => '00000065151',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '108',
            'Nama' => 'BILLY LEONARDO',
            'NIM' => '00000069029',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '108',
            'Nama' => 'NELSEN PRATAMA WIJAYA',
            'NIM' => '00000067641',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '108',
            'Nama' => 'EDWARD LEONARDO KOSASIH',
            'NIM' => '00000055915',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '109',
            'Nama' => 'WITA MERLY ADRIANI (ID LINE: witamerlyadriani_15)',
            'NIM' => '000000',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '109',
            'Nama' => 'JUSTIN CHRISTIAN HAMZAH',
            'NIM' => '00000075559',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '109',
            'Nama' => 'MUHAMMAD RIFONE AFRIZAL SOLIKIN',
            'NIM' => '00000073196',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '109',
            'Nama' => 'ANGELICA SEPTINE LIJADI',
            'NIM' => '00000069520',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '109',
            'Nama' => 'NADZLA REFA MEIGUNA',
            'NIM' => '00000065009',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '109',
            'Nama' => 'BRYANT MATTHEW BENEDICT BUNNARDI',
            'NIM' => '00000076801',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '109',
            'Nama' => 'NATHANIA NAULI',
            'NIM' => '00000068389',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '109',
            'Nama' => 'DEA CAROLINA',
            'NIM' => '00000076048',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '109',
            'Nama' => 'MUHAMMAD ALIFIO CHANDRA',
            'NIM' => '00000073865',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '109',
            'Nama' => 'REINHARD JAVERA MAHESWARA',
            'NIM' => '00000077732',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '109',
            'Nama' => 'VINSON .',
            'NIM' => '00000070870',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '109',
            'Nama' => 'JORDAN NABIL SALAFI',
            'NIM' => '00000076806',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '109',
            'Nama' => 'KEZIA MARGARETHA CHANDRA',
            'NIM' => '00000069141',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '109',
            'Nama' => 'SYDNEE ABEL SURYAATMADJA',
            'NIM' => '00000082215',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '109',
            'Nama' => 'PRISCILLIA LINDSEY SETIADIE',
            'NIM' => '00000070070',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '109',
            'Nama' => 'MIGUEL SALOMO LIUSRI',
            'NIM' => '00000068359',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '109',
            'Nama' => 'ANDI ATHALLAH DZULQARNAIN',
            'NIM' => '00000076824',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '109',
            'Nama' => 'MARIA JESSLYN',
            'NIM' => '00000069580',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '109',
            'Nama' => 'NICHOLAS EDEL TJITRAWAN',
            'NIM' => '00000067573',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '109',
            'Nama' => 'DAVA VIRGIO KERTAWIJAYA',
            'NIM' => '00000056848',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '110',
            'Nama' => 'FELICIA FELITA RATUTANSA (ID LINE: feliciafellita)',
            'NIM' => '000000',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '110',
            'Nama' => 'HINO .',
            'NIM' => '00000082387',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '110',
            'Nama' => 'VANISA CENDANA PUTRI',
            'NIM' => '00000075728',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '110',
            'Nama' => 'FERDYAN HIDAYAT',
            'NIM' => '00000072575',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '110',
            'Nama' => 'KAYLA DEWI',
            'NIM' => '00000073932',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '110',
            'Nama' => 'WHITNEY SERENA',
            'NIM' => '00000068100',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '110',
            'Nama' => 'SAMUEL FERNANDTIO',
            'NIM' => '00000068117',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '110',
            'Nama' => 'LOVENIA KIRANA',
            'NIM' => '00000069643',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '110',
            'Nama' => 'STEVANY ANGGELIA',
            'NIM' => '00000071210',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '110',
            'Nama' => 'REVAN REVIAN',
            'NIM' => '00000067662',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '110',
            'Nama' => 'MUHAMMAD TRISTAN AJIBRILYAN NANDIPINTO',
            'NIM' => '00000078653',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '110',
            'Nama' => 'VINCENTIA STELLA CLARRISYA',
            'NIM' => '00000073206',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '110',
            'Nama' => 'THERESA ANGELICA DJONI',
            'NIM' => '00000067912',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '110',
            'Nama' => 'JENNIFER JANE MULYO',
            'NIM' => '00000069947',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '110',
            'Nama' => 'REGINA AGUSTINE WIJAYA',
            'NIM' => '00000076773',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '110',
            'Nama' => 'GRACIELL SYALLOM ZEFANYA TJANDRA',
            'NIM' => '00000068407',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '110',
            'Nama' => 'RAINA ARETA ANANDA',
            'NIM' => '00000067590',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '110',
            'Nama' => 'KEISHA BELVA MIRANDA',
            'NIM' => '00000068917',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '110',
            'Nama' => 'NICHOLAS EGAS WIDI BASKARA',
            'NIM' => '00000069918',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '110',
            'Nama' => 'ALEXANDRA AZELIA NUR',
            'NIM' => '00000038706',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '111',
            'Nama' => 'REGINALD ULYSSES LORENZO (ID LINE: regi121203)',
            'NIM' => '000000',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '111',
            'Nama' => 'RICHIE JULYSON FU',
            'NIM' => '00000069964',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '111',
            'Nama' => 'ALVIN JO WIJAYA',
            'NIM' => '00000071723',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '111',
            'Nama' => 'ARNELA SETIANEGARA',
            'NIM' => '00000066509',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '111',
            'Nama' => 'JUAN DIMAS GERARDO',
            'NIM' => '00000069815',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '111',
            'Nama' => 'ADINDA SHAFA SALSABILA',
            'NIM' => '00000070549',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '111',
            'Nama' => 'JASSELYNA LISANJAYA',
            'NIM' => '00000074738',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '111',
            'Nama' => 'BIMO PAMUNGKAS PUTRO',
            'NIM' => '00000073535',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '111',
            'Nama' => 'BILLY CHARWINLIE',
            'NIM' => '00000071330',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '111',
            'Nama' => 'NAUFAL FAWWAZ',
            'NIM' => '00000075866',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '111',
            'Nama' => 'IGNATIUS STEVEN',
            'NIM' => '00000070642',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '111',
            'Nama' => 'RAYMOND KHOI GUNAWAN',
            'NIM' => '00000075801',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '111',
            'Nama' => 'AIRYARA DORTHEA WARELLA',
            'NIM' => '00000068436',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '111',
            'Nama' => 'VANESA RAFAEL RAHMADANI',
            'NIM' => '00000079140',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '111',
            'Nama' => 'FAREL ATHARSYAH KRISMANTO',
            'NIM' => '00000079316',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '111',
            'Nama' => 'KIARA TRIFENA KURNIAWAN',
            'NIM' => '00000067058',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '111',
            'Nama' => 'FELICE FIORENZA YAU',
            'NIM' => '00000070026',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '111',
            'Nama' => 'JOSEVINE VERNANDA SUSILOWATI',
            'NIM' => '00000069548',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '111',
            'Nama' => 'SALMA NIDA FIRLINA',
            'NIM' => '00000071142',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '111',
            'Nama' => 'RIKA OKTAVIA',
            'NIM' => '00000060978',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '112',
            'Nama' => 'FELICIA MARGARETHA (ID LINE: felicia123123)',
            'NIM' => '000000',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '112',
            'Nama' => 'MUHAMMAD ATHUR ATH THAARIQ',
            'NIM' => '00000072479',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '112',
            'Nama' => 'RYAN .',
            'NIM' => '00000081840',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '112',
            'Nama' => 'KELVIN HARIANTO',
            'NIM' => '00000072811',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '112',
            'Nama' => 'JESSICA MARIA P. WAWORUNTU',
            'NIM' => '00000073162',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '112',
            'Nama' => 'GABRIEL GIOVANNI L.P MUNTHE',
            'NIM' => '00000068015',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '112',
            'Nama' => 'GAYUS GABRIEL HENDRAWAN',
            'NIM' => '00000073304',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '112',
            'Nama' => 'MUHAMMAD ARLY AZHARI',
            'NIM' => '00000079846',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '112',
            'Nama' => 'WINNIE DANIELYN',
            'NIM' => '00000065063',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '112',
            'Nama' => 'CREDO AKWILA MAPPADANG',
            'NIM' => '00000074942',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '112',
            'Nama' => 'WILLSEN FIDERICK',
            'NIM' => '00000070412',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '112',
            'Nama' => 'JOSEPHEN JONATHAN',
            'NIM' => '00000069626',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '112',
            'Nama' => 'NURKHALIZAH ZULFIKAR',
            'NIM' => '00000081657',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '112',
            'Nama' => 'MARCELL DANIEL TANG PONTOH',
            'NIM' => '00000069473',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '112',
            'Nama' => 'CHRISTOPHER SAMUEL L',
            'NIM' => '00000069469',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '112',
            'Nama' => 'MAHESA PUTRA SOEMARTONO SOEMARNO',
            'NIM' => '00000073806',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '112',
            'Nama' => 'PETRA GAVRIEL DEMA',
            'NIM' => '00000068926',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '112',
            'Nama' => 'HAYA ADINDA ARIFIANI',
            'NIM' => '00000079066',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '112',
            'Nama' => 'STEVANI .',
            'NIM' => '00000071721',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '112',
            'Nama' => 'SAMSARA BELA KIRANA',
            'NIM' => '00000057333',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '113',
            'Nama' => 'RACHEL LETISYA (ID LINE: rachelletisya)',
            'NIM' => '000000',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '113',
            'Nama' => 'PRISANTOSA .',
            'NIM' => '00000068545',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '113',
            'Nama' => 'MUDITA PEBRIANI',
            'NIM' => '00000067951',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '113',
            'Nama' => 'ALFIN NAUVALY AFTA',
            'NIM' => '00000070679',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '113',
            'Nama' => 'JOURDAN NICKOLAS SCHMELTER',
            'NIM' => '00000073920',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '113',
            'Nama' => 'NABIL HAYKAL',
            'NIM' => '00000077877',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '113',
            'Nama' => 'IQBAL BADRUZ',
            'NIM' => '00000076426',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '113',
            'Nama' => 'ZIPORA ARIELLE SHASHI',
            'NIM' => '00000072141',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '113',
            'Nama' => 'DANIA OEY',
            'NIM' => '00000070012',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '113',
            'Nama' => 'DAFFI BINTANG FIRDAUS',
            'NIM' => '00000073602',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '113',
            'Nama' => 'YOKA KRISTIANDI JAYA',
            'NIM' => '00000073877',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '113',
            'Nama' => 'JOVITA ANGELINA METTASARI',
            'NIM' => '00000067131',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '113',
            'Nama' => 'KIEV IMMANUEL REVORADO',
            'NIM' => '00000072670',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '113',
            'Nama' => 'JOLIN DELICIA',
            'NIM' => '00000070865',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '113',
            'Nama' => 'RYO ANTHONIO WIJAYA',
            'NIM' => '00000077748',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '113',
            'Nama' => 'SEKAR MILYARTI NABILA',
            'NIM' => '00000068184',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '113',
            'Nama' => 'HANA SANYA SABIYA',
            'NIM' => '00000073805',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '113',
            'Nama' => 'ANGELINE CHARVIA VIRGINITA',
            'NIM' => '00000071259',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '113',
            'Nama' => 'KEIKO ROSARIO CHRISABEL',
            'NIM' => '00000068104',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '113',
            'Nama' => 'GABRIELLE RAHUT ELSHEVA SIAGIAN',
            'NIM' => '00000040191',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '114',
            'Nama' => 'ABELIA VIDYA (ID LINE: xaveliaa.)',
            'NIM' => '000000',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '114',
            'Nama' => 'RAPHA ZAKHARIA',
            'NIM' => '00000070667',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '114',
            'Nama' => 'HAFIZAH BALQIS',
            'NIM' => '00000078739',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '114',
            'Nama' => 'CHRISTOPHER ABIE DIAZ DOVIANO',
            'NIM' => '00000067692',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '114',
            'Nama' => 'CLARA XAVERIUS RICHIE',
            'NIM' => '00000065959',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '114',
            'Nama' => 'OSKAR FILIPUS',
            'NIM' => '00000078742',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '114',
            'Nama' => 'FERNANDO COLUNGA WIJAYA',
            'NIM' => '00000067803',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '114',
            'Nama' => 'ADITYA RIZKY JULIANTAMA',
            'NIM' => '00000081626',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '114',
            'Nama' => 'ANDREW NICHOLAS TENG',
            'NIM' => '00000077711',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '114',
            'Nama' => 'DANIEL HIMAWAN',
            'NIM' => '00000073548',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '114',
            'Nama' => 'AUDREY GRACIA CHANDRA',
            'NIM' => '00000069296',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '114',
            'Nama' => 'JUSTIN AARONNOV LESMANA',
            'NIM' => '00000071234',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '114',
            'Nama' => 'VANESSA OLIVIA',
            'NIM' => '00000069655',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '114',
            'Nama' => 'NIKI TANOTO',
            'NIM' => '00000077261',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '114',
            'Nama' => 'SAMARA ASHLEY TIMOTHEA JOESOP',
            'NIM' => '00000068305',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '114',
            'Nama' => 'MUHAMMAD FARREL COKRO',
            'NIM' => '00000075521',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '114',
            'Nama' => 'MENDY LEUNG',
            'NIM' => '00000067642',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '114',
            'Nama' => 'KESHIA ELLEORA',
            'NIM' => '00000066453',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '114',
            'Nama' => 'ALFREDO CHRISTIAN LIMINDRA',
            'NIM' => '00000076044',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '114',
            'Nama' => 'DHIAZ SYAFAATUL UZMA',
            'NIM' => '00000061452',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '115',
            'Nama' => 'STEPHANY ESTERND LEE (ID LINE: teplee.)',
            'NIM' => '000000',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '115',
            'Nama' => 'TRISTAN ARIEL SATYAYOGA',
            'NIM' => '00000077665',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '115',
            'Nama' => 'NAILA ARSHIYA HENDRIANA',
            'NIM' => '00000073247',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '115',
            'Nama' => 'CHRISTIAN KEN STEFANUS SUHENDRA',
            'NIM' => '00000067414',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '115',
            'Nama' => 'CRISPUS ADLAI ANTHONY',
            'NIM' => '00000070714',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '115',
            'Nama' => 'MARCELLINO .',
            'NIM' => '00000068119',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '115',
            'Nama' => 'GERRY FERTIAN',
            'NIM' => '00000074985',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '115',
            'Nama' => 'TIARA RESKYANA PUTRI',
            'NIM' => '00000088104',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '115',
            'Nama' => 'ARYO HAPSORO SANTOSO',
            'NIM' => '00000075078',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '115',
            'Nama' => 'DARRELL SAMUEL SUNDY',
            'NIM' => '00000069648',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '115',
            'Nama' => 'JOSHUA LESLIE ARIHADI',
            'NIM' => '00000075451',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '115',
            'Nama' => 'JOY JOHAR HAMRI',
            'NIM' => '00000066725',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '115',
            'Nama' => 'MUHAMMAD HAYKAL SYHRI',
            'NIM' => '00000080802',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '115',
            'Nama' => 'WINSTEN .',
            'NIM' => '00000079048',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '115',
            'Nama' => 'SHEREN CARISSA',
            'NIM' => '00000071310',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '115',
            'Nama' => 'MICHELLE AUDREY',
            'NIM' => '00000066705',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '115',
            'Nama' => 'RAFIF RIZQULLAH ALFIAH',
            'NIM' => '00000075592',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '115',
            'Nama' => 'KERRIN WINONA TANTINOS',
            'NIM' => '00000069028',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '115',
            'Nama' => 'ANDREA NAYYARA SARIFUDIN',
            'NIM' => '00000069454',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '115',
            'Nama' => 'REGITA PUTRI FEBRINA',
            'NIM' => '00000061517',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '116',
            'Nama' => 'GIOVANN BYANCA (ID LINE: giovannbyanca)',
            'NIM' => '000000',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '116',
            'Nama' => 'NIXIA STEPHANIE',
            'NIM' => '00000069586',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '116',
            'Nama' => 'GILBERT ROY PINTOR',
            'NIM' => '00000081040',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '116',
            'Nama' => 'ANGELINA YANG',
            'NIM' => '00000079486',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '116',
            'Nama' => 'JONATHAN SAPUTRA',
            'NIM' => '00000074740',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '116',
            'Nama' => 'MUHAMMAD SEBASTIAN NUR RAHMAN PUTRA ARI',
            'NIM' => '00000067881',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '116',
            'Nama' => 'MAXIMUS AURELIUS ARBAZENA',
            'NIM' => '00000068069',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '116',
            'Nama' => 'DENNY ARYAN SETYAWAN',
            'NIM' => '00000073630',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '116',
            'Nama' => 'CHELSYA CLAUDIA UMAMI',
            'NIM' => '00000068435',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '116',
            'Nama' => 'FIKRI NAUFAL ANDRASITO',
            'NIM' => '00000079229',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '116',
            'Nama' => 'JOY ROCKNIEL ABADI',
            'NIM' => '00000069233',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '116',
            'Nama' => 'JOY REUBEN CHRISTIAN',
            'NIM' => '00000068034',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '116',
            'Nama' => 'LICO FEBRIO',
            'NIM' => '00000069011',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '116',
            'Nama' => 'MEDINA ISNI WARDHANI',
            'NIM' => '00000081988',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '116',
            'Nama' => 'SATRIA RAFI SETYOJATI',
            'NIM' => '00000071775',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '116',
            'Nama' => 'KEVIN LAUDA JANWAR',
            'NIM' => '00000082020',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '116',
            'Nama' => 'ANISA SALSABILA LATIFA',
            'NIM' => '00000087625',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '116',
            'Nama' => 'I PUTU ARI SASTRA',
            'NIM' => '00000068368',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '116',
            'Nama' => 'CARISSA AULIA TABINA',
            'NIM' => '00000075253',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '116',
            'Nama' => 'VANNESSA FIORENT',
            'NIM' => '00000055739',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '117',
            'Nama' => 'YOKO CHONDRO (ID LINE: yokschondrz)',
            'NIM' => '000000',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '117',
            'Nama' => 'FLORENSIA MAHDALENA',
            'NIM' => '00000069797',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '117',
            'Nama' => 'LIVIA VIOLETTA KRISTIAWAN',
            'NIM' => '00000067687',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '117',
            'Nama' => 'ADELIO NOHAN ABBRARSYAH',
            'NIM' => '00000073372',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '117',
            'Nama' => 'IRA SAFINATUN NAJAH HASYIM',
            'NIM' => '00000077649',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '117',
            'Nama' => 'ARIEL SYAH ISLAMI',
            'NIM' => '00000075018',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '117',
            'Nama' => 'IGNASIUS HUGO JAPRIANTA',
            'NIM' => '00000072565',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '117',
            'Nama' => 'RETRI AISYAH TANJUNG',
            'NIM' => '00000081792',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '117',
            'Nama' => 'LOUIS RIO CHRISTIANO',
            'NIM' => '00000066687',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '117',
            'Nama' => 'DAFA TAUFIK AL LATIEF',
            'NIM' => '00000067476',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '117',
            'Nama' => 'KEVIN HADINATA',
            'NIM' => '00000068544',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '117',
            'Nama' => 'MAXCEL PUTRA SALIM',
            'NIM' => '00000074923',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '117',
            'Nama' => 'MUHAMMAD ZAKI',
            'NIM' => '00000079310',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '117',
            'Nama' => 'ALEXANDER PITTAULI MANURUNG',
            'NIM' => '00000081680',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '117',
            'Nama' => 'CHANG SINTHAURA LUDEN',
            'NIM' => '00000068347',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '117',
            'Nama' => 'CARLIN NATASYA',
            'NIM' => '00000072125',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '117',
            'Nama' => 'NOVAL AUFA RAHMAN',
            'NIM' => '00000079264',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '117',
            'Nama' => 'CLEVERINE ABIGAEL MULYAWAN',
            'NIM' => '00000069950',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '117',
            'Nama' => 'CARLIN NATASYA',
            'NIM' => '00000072125',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '117',
            'Nama' => 'THEODORUS PUTRO SATRIO',
            'NIM' => '00000055311',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '118',
            'Nama' => 'TROY GUNAWAN (ID LINE: inferno_elza)',
            'NIM' => '000000',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '118',
            'Nama' => 'ZERAPHINE ALTAGRACIA PRADNYAPARAMITA',
            'NIM' => '00000065069',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '118',
            'Nama' => 'ANDREW JASON',
            'NIM' => '00000065445',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '118',
            'Nama' => 'AUDRI PRICILLIA NAIBORHU',
            'NIM' => '00000076202',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '118',
            'Nama' => 'OWEN ABEDNEGO',
            'NIM' => '00000068860',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '118',
            'Nama' => 'RAYNARD EDMUND LEE',
            'NIM' => '00000075444',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '118',
            'Nama' => 'SHERLY AURIELLA',
            'NIM' => '00000067855',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '118',
            'Nama' => 'ALIANI JASMINE',
            'NIM' => '00000088530',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '118',
            'Nama' => 'GREECEILA CLARIBEL CHRISTELITA',
            'NIM' => '00000065112',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '118',
            'Nama' => 'FARREL SHANE IRWANTO',
            'NIM' => '00000075399',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '118',
            'Nama' => 'HAFIZH KUMARA WIDYADHANA',
            'NIM' => '00000073191',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '118',
            'Nama' => 'PANDU AJI WICAKSONO',
            'NIM' => '00000078666',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '118',
            'Nama' => 'FADLY ARAZY FRANATA',
            'NIM' => '00000074786',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '118',
            'Nama' => 'NICOLE KHOSASI',
            'NIM' => '00000078643',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '118',
            'Nama' => 'ANDINI FITROHA',
            'NIM' => '00000075239',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '118',
            'Nama' => 'FELICIA JESSALYN LIVIANTONY',
            'NIM' => '00000069448',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '118',
            'Nama' => 'ZAKI DONY KEZIA FIRMANSYAH',
            'NIM' => '00000069929',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '118',
            'Nama' => 'VIORE AISYAH HIDAYANTI',
            'NIM' => '00000079842',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '118',
            'Nama' => 'ENNA FIESTA',
            'NIM' => '00000068431',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '118',
            'Nama' => 'MICHELLE PRISCILLA SUTANTO',
            'NIM' => '00000070593',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '118',
            'Nama' => 'WAYYIGREY',
            'NIM' => '00000059179',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '119',
            'Nama' => 'JUSTIN LIM (ID LINE: tinlim14)',
            'NIM' => '000000',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '119',
            'Nama' => 'HERMAWAN TAN WIJAYA',
            'NIM' => '00000071759',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '119',
            'Nama' => 'JERICHO .',
            'NIM' => '00000077842',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '119',
            'Nama' => 'GUSTI KETUT SISKA SRI NANDINI',
            'NIM' => '00000079847',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '119',
            'Nama' => 'NAVIN DHARMA',
            'NIM' => '00000072075',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '119',
            'Nama' => 'ARNEWVA ANGELICA',
            'NIM' => '00000070548',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '119',
            'Nama' => 'MARTIN JOSHUA PATRIOT SIMBOLON',
            'NIM' => '00000074989',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '119',
            'Nama' => 'JONATHAN RIDCHO ANDREAS MARPAUNG',
            'NIM' => '00000088706',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '119',
            'Nama' => 'MICHAEL KELVIN SAPUTRA',
            'NIM' => '00000072241',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '119',
            'Nama' => 'FEBRIO PURNAWAN',
            'NIM' => '00000076422',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '119',
            'Nama' => 'BATARA HOTDO HORAS SIMBOLON',
            'NIM' => '00000078626',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '119',
            'Nama' => 'DANIEL RICARDO HADIRAHARDJA',
            'NIM' => '00000071936',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '119',
            'Nama' => 'LAURENCIA CLARESTA',
            'NIM' => '00000065414',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '119',
            'Nama' => 'ALBERT AMADIO TRENEDY',
            'NIM' => '00000071242',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '119',
            'Nama' => 'CHRISTABELL GRACE CHALIN',
            'NIM' => '00000081938',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '119',
            'Nama' => 'DIMAS ANGGARA SETYAJI',
            'NIM' => '00000079339',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '119',
            'Nama' => 'VALENTINO OTADAN',
            'NIM' => '00000070327',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '119',
            'Nama' => 'M. SETIAWAN JODI',
            'NIM' => '00000083140',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '119',
            'Nama' => 'ERIC TANAMAS',
            'NIM' => '00000069927',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '119',
            'Nama' => 'SAMANTHA P KOTAMBUNAN',
            'NIM' => '00000071165',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '119',
            'Nama' => 'MUAMAR PRIAN DANU',
            'NIM' => '00000064559',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '120',
            'Nama' => 'ASHER NOVRAOCTANS JULIAN (ID LINE: asherjulian)',
            'NIM' => '000000',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '120',
            'Nama' => 'ADETIA WIDIANI',
            'NIM' => '00000079288',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '120',
            'Nama' => 'MUHAMMAD FADLAN RAMADHAN',
            'NIM' => '00000082214',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '120',
            'Nama' => 'MUHAMMAD EVAN JULIAN PRIYASA',
            'NIM' => '00000072402',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '120',
            'Nama' => 'AILEEN ANGELIA SUSANTO',
            'NIM' => '00000068743',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '120',
            'Nama' => 'MUTIARA CINTA AULIANA',
            'NIM' => '00000071760',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '120',
            'Nama' => 'RAYHAN ADIMUSA',
            'NIM' => '00000077163',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '120',
            'Nama' => 'DEVANIA NATALIA PRISTIAN',
            'NIM' => '00000069048',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '120',
            'Nama' => 'IRVAN .',
            'NIM' => '00000071977',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '120',
            'Nama' => 'ALFONSUS JASON CHRISTIAN',
            'NIM' => '00000067384',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '120',
            'Nama' => 'CLARENCE ANDREW',
            'NIM' => '00000068695',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '120',
            'Nama' => 'SEPTIO DIMAS PUTRA',
            'NIM' => '00000075188',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '120',
            'Nama' => 'NATASHA AURELIA',
            'NIM' => '00000068155',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '120',
            'Nama' => 'DIXON NATHANAEL',
            'NIM' => '00000069386',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '120',
            'Nama' => 'ANANTA NAZWA ANYABILLA RAHMAN',
            'NIM' => '00000076972',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '120',
            'Nama' => 'OLLIVIA KAHFI',
            'NIM' => '00000075537',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '120',
            'Nama' => 'ADISHA ELORA NURO',
            'NIM' => '00000070460',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '120',
            'Nama' => 'FIORE TATANG',
            'NIM' => '00000068028',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '120',
            'Nama' => 'SEANTAQI JAVAS UMAR',
            'NIM' => '00000072116',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '120',
            'Nama' => 'DERRENANDERSAN KWO',
            'NIM' => '00000042166',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '121',
            'Nama' => 'JASON CHRISTIAN (ID LINE: jasonchristian230203)',
            'NIM' => '000000',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '121',
            'Nama' => 'ARIA SANDHY',
            'NIM' => '00000073540',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '121',
            'Nama' => 'DEWA RAFI HENDIANSYAH',
            'NIM' => '00000081079',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '121',
            'Nama' => 'DAVIN .',
            'NIM' => '00000070454',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '121',
            'Nama' => 'ZAKY FEBRIANSYAH LAZIM',
            'NIM' => '00000087551',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '121',
            'Nama' => 'NADJA JOSEPHINE',
            'NIM' => '00000068276',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '121',
            'Nama' => 'YOSUA VIDO NUGROHO',
            'NIM' => '00000070895',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '121',
            'Nama' => 'AMANDA DHIYA DZAKIYYAH',
            'NIM' => '00000082866',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '121',
            'Nama' => 'KALENA VIRIYA DERMAWAN',
            'NIM' => '00000072135',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '121',
            'Nama' => 'ARYA RESWARA',
            'NIM' => '00000077004',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '121',
            'Nama' => 'DARRYL SEENDINTA TARIGAN',
            'NIM' => '00000071423',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '121',
            'Nama' => 'LAURA NIKITA MANIK',
            'NIM' => '00000072540',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '121',
            'Nama' => 'STEVEN FELICIANO WIGGINS',
            'NIM' => '00000067391',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '121',
            'Nama' => 'ROHMA PUJI LESTARI',
            'NIM' => '00000071550',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '121',
            'Nama' => 'FADLI AURA WICAKSONO',
            'NIM' => '00000087847',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '121',
            'Nama' => 'SAVERIO KIERAN',
            'NIM' => '00000071201',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '121',
            'Nama' => 'JONATHAN EDBERT SETYONO',
            'NIM' => '00000068758',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '121',
            'Nama' => 'RAMSES ARVIN C SUNDAMEN',
            'NIM' => '00000068255',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '121',
            'Nama' => 'FARHAN MUHAMMAD NAUFAL',
            'NIM' => '00000076439',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '121',
            'Nama' => 'CLAUDIA TANOTO',
            'NIM' => '00000067874',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '122',
            'Nama' => 'OBED ALEXANDER (ID LINE: oberdalxndr)',
            'NIM' => '000000',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '122',
            'Nama' => 'AMELIA HERMAWAN',
            'NIM' => '00000069042',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '122',
            'Nama' => 'ALVINA KAYANDRA MULIA',
            'NIM' => '00000082578',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '122',
            'Nama' => 'RAY ANTHONY PRANOTO',
            'NIM' => '00000066655',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '122',
            'Nama' => 'ARDIYA ADISAPUTRO',
            'NIM' => '00000069531',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '122',
            'Nama' => 'MUHAMMAD REYHAN FARIZKY',
            'NIM' => '00000070671',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '122',
            'Nama' => 'JONATAN SAPUTRA',
            'NIM' => '00000081623',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '122',
            'Nama' => 'HUDAEFA ABILAEL',
            'NIM' => '00000076208',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '122',
            'Nama' => 'MUHAMMAD HANIEF ALIF SAMPAYYA',
            'NIM' => '00000071355',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '122',
            'Nama' => 'ARZA VITO HIDAYAT',
            'NIM' => '00000071728',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '122',
            'Nama' => 'JAVARELL MUZHEKA',
            'NIM' => '00000079908',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '122',
            'Nama' => 'SEPTHIA ROSA TAMBUNAN',
            'NIM' => '00000068857',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '122',
            'Nama' => 'STEVEN INDRA',
            'NIM' => '00000071673',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '122',
            'Nama' => 'DELBERT GO',
            'NIM' => '00000066410',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '122',
            'Nama' => 'SAYED AQBIL RUHULLYA MUNTAZHAR',
            'NIM' => '00000074962',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '122',
            'Nama' => 'VERENCIA EUGINIA',
            'NIM' => '00000065174',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '122',
            'Nama' => 'AVATAR XAVIER',
            'NIM' => '00000069495',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '122',
            'Nama' => 'RAPHAEL EZAR ROVIANUS',
            'NIM' => '00000076227',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '122',
            'Nama' => 'GABRIELLA NADINE SEKARNINGTYAS',
            'NIM' => '00000072448',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '122',
            'Nama' => 'JULIAN KUSMADI',
            'NIM' => '00000033994',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '123',
            'Nama' => 'YEMIMA ENGKLINITA (ID LINE: christaaa20_)',
            'NIM' => '000000',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '123',
            'Nama' => 'JEANNE CARISSA HANDOPO',
            'NIM' => '00000075825',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '123',
            'Nama' => 'AZKA ZHAFIRAH RAJB',
            'NIM' => '00000082843',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '123',
            'Nama' => 'EDUARDO CHRISTIAN',
            'NIM' => '00000067932',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '123',
            'Nama' => 'ALEXANDER .',
            'NIM' => '00000068093',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '123',
            'Nama' => 'ASYAM RAFLI FAUZAN',
            'NIM' => '00000081187',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '123',
            'Nama' => 'RENNI YOSEPINA LALI',
            'NIM' => '00000080922',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '123',
            'Nama' => 'HAWLEY FEBRIO GUNAWAN',
            'NIM' => '00000071571',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '123',
            'Nama' => 'MUHAMMAD RAFI AL-HIKAM',
            'NIM' => '00000077864',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '123',
            'Nama' => 'BRIAN RICKY BUDIMAN',
            'NIM' => '00000069522',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '123',
            'Nama' => 'RAPHAEL CONSTANTINE KURNIAJAYA',
            'NIM' => '00000069425',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '123',
            'Nama' => 'SIHALOHO PATRICIA AURELIA',
            'NIM' => '00000076902',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '123',
            'Nama' => 'APRILIA EGATTA SIHOMBING',
            'NIM' => '00000069979',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '123',
            'Nama' => 'MASAYU ANDREA LUVIAH',
            'NIM' => '00000081636',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '123',
            'Nama' => 'STACIA MICHAELLA',
            'NIM' => '00000067510',
            'Prodi' => 'Ilkom   ',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '123',
            'Nama' => 'VENEDICT LEE',
            'NIM' => '00000069371',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '123',
            'Nama' => 'HABIBAH NAJELAA RAYYAN DJAUHARIE',
            'NIM' => '00000080770',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '123',
            'Nama' => 'KHALISHAH NADHELIA GUNAWAN',
            'NIM' => '00000072750',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '123',
            'Nama' => 'BENEDICTUS OWEN WIJAYA',
            'NIM' => '00000067335',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '123',
            'Nama' => 'MICHELLE WAROUW',
            'NIM' => '00000037548',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '124',
            'Nama' => 'AGIL WIRA PRATAMA (ID LINE: tagamochi)',
            'NIM' => '000000',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '124',
            'Nama' => 'AMANDA NICOLE',
            'NIM' => '00000066837',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '124',
            'Nama' => 'THEWIKA PRABA',
            'NIM' => '00000075342',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '124',
            'Nama' => 'ERIC MOURINHO',
            'NIM' => '00000069045',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '124',
            'Nama' => 'ANASTASIA MAGGIE JAWOTO',
            'NIM' => '00000065460',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '124',
            'Nama' => 'MALVIS GABRIEL SWAIN',
            'NIM' => '00000071555',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '124',
            'Nama' => 'FELICIA GRAINNE PURNOMO',
            'NIM' => '00000069814',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '124',
            'Nama' => 'PATRICK THENGONO',
            'NIM' => '00000075165',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '124',
            'Nama' => 'PETRIS GLAUDYA LIUWANDA',
            'NIM' => '00000066832',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '124',
            'Nama' => 'DARRYL CLAY LAYA',
            'NIM' => '00000068429',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '124',
            'Nama' => 'JONATHAN GAUTAMA DJUASA',
            'NIM' => '00000069525',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '124',
            'Nama' => 'MICHELLE GRACYA ATMAJA',
            'NIM' => '00000068352',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '124',
            'Nama' => 'PRABU ARYA PAMUNGKAS',
            'NIM' => '00000080994',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '124',
            'Nama' => 'MICHELLE BETH EVELYN LINGGA',
            'NIM' => '00000082455',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '124',
            'Nama' => 'SYERIEL RENATA',
            'NIM' => '00000068915',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '124',
            'Nama' => 'JOANNA ABIGAIL WIRAWAN',
            'NIM' => '00000067636',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '124',
            'Nama' => 'STEPHANNIE WINSLET ERMELY BARAMULI',
            'NIM' => '00000083316',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '124',
            'Nama' => 'FIONA PATRICIA DARMA',
            'NIM' => '00000071626',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '124',
            'Nama' => 'CECILLIA ABBYGAIL SURYA',
            'NIM' => '00000069113',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '124',
            'Nama' => 'REBECA AMANDA',
            'NIM' => '00000044191',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '125',
            'Nama' => 'COSMOS DAMIANO (ID LINE: cosmasdms7)',
            'NIM' => '000000',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '125',
            'Nama' => 'DONNY ADITYA NATANAEL',
            'NIM' => '00000078308',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '125',
            'Nama' => 'MARTIZA FEBRIANI',
            'NIM' => '00000082584',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '125',
            'Nama' => 'TASYA CHAIRUNISA',
            'NIM' => '00000071782',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '125',
            'Nama' => 'ALLISON GRESSIA CHANIAGO',
            'NIM' => '00000067848',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '125',
            'Nama' => 'MELVIE HO',
            'NIM' => '00000067626',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '125',
            'Nama' => 'FELIX NIGEL TAVARENSI',
            'NIM' => '00000074963',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '125',
            'Nama' => 'CHATERINE LAURENTHIA',
            'NIM' => '00000067669',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '125',
            'Nama' => 'PETRUS BONAVENTURA RUTUANIK',
            'NIM' => '00000073443',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '125',
            'Nama' => 'DESQUITA SASYILI KHEYLA SYIHAB',
            'NIM' => '00000078279',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '125',
            'Nama' => 'LUTFI RAESHAD WIJAYANTO',
            'NIM' => '00000073781',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '125',
            'Nama' => 'ERNEST .',
            'NIM' => '00000068813',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '125',
            'Nama' => 'MOHAMAD SYAFRIZA RAMADHAN ZAIN',
            'NIM' => '00000068790',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '125',
            'Nama' => 'JERRY JANUAR EKAPUTRA',
            'NIM' => '00000081816',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '125',
            'Nama' => 'TIMOTHY MICHAEL PUTRA SUMENDAP',
            'NIM' => '00000068293',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '125',
            'Nama' => 'CHARIZZMA CINTA ZYA AULIA',
            'NIM' => '00000072240',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '125',
            'Nama' => 'EVELINE .',
            'NIM' => '00000066696',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '125',
            'Nama' => 'FEROLINE CORNELYA',
            'NIM' => '00000070665',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '125',
            'Nama' => 'CLAUDIA TJAHJADI',
            'NIM' => '00000067962',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '125',
            'Nama' => 'ADYA DIPTA IBRAHIM',
            'NIM' => '00000042164',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '126',
            'Nama' => 'MARCELLINE TJHIN (ID LINE: cellinee1)',
            'NIM' => '00000079941',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '126',
            'Nama' => 'MUHAMMAD TEGAR SYAHPUTRA',
            'NIM' => '00000079941',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '126',
            'Nama' => 'VITTO SHEANE',
            'NIM' => '00000068277',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '126',
            'Nama' => 'MUHAMAD MIKAIL ARRUMY',
            'NIM' => '00000075647',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '126',
            'Nama' => 'DIVA NADYA DWIRIANTI',
            'NIM' => '00000071737',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '126',
            'Nama' => 'MICHAEL LUCIUS WIJAYA',
            'NIM' => '00000076026',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '126',
            'Nama' => 'EMMA LESTARI',
            'NIM' => '00000068066',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '126',
            'Nama' => 'GIYAN MARCELLYNO',
            'NIM' => '00000066824',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '126',
            'Nama' => 'KENNEDY FRANC',
            'NIM' => '00000071056',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '126',
            'Nama' => 'JOICELYN NARADISKA',
            'NIM' => '00000068868',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '126',
            'Nama' => 'RIFQAH AULIA SALSABILLA',
            'NIM' => '00000077820',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '126',
            'Nama' => 'MICHEL FRANSISKA',
            'NIM' => '00000070692',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '126',
            'Nama' => 'HANSEL LUKITO',
            'NIM' => '00000075802',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '126',
            'Nama' => 'KAROLIN SHERLI AULEA',
            'NIM' => '00000073392',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '126',
            'Nama' => 'FAUZAN DAVI PUTRA',
            'NIM' => '00000071852',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '126',
            'Nama' => 'VALLERIE OPHELIA CHAVELLA',
            'NIM' => '00000067133',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '126',
            'Nama' => 'EMILYA STEFYANNA',
            'NIM' => '00000070653',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '126',
            'Nama' => 'HAZMAN AMMAR ZHAFFARA',
            'NIM' => '00000070158',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '126',
            'Nama' => 'TENDO WIROYUDO',
            'NIM' => '00000075317',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '126',
            'Nama' => 'KAREN ANGELIQUE MARCHYA TUPAMAHU ',
            'NIM' => '00000055908',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '127',
            'Nama' => 'TERRANOVE SALFINA PUTRI (ID LINE: nov811)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '127',
            'Nama' => 'KHANSA PUTRI ARISTA',
            'NIM' => '00000073291',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '127',
            'Nama' => 'STEVANUS PUTRA NUGRAHA',
            'NIM' => '00000068310',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '127',
            'Nama' => 'EVAN SIBARA',
            'NIM' => '00000087619',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '127',
            'Nama' => 'JUSTIN GOUW',
            'NIM' => '00000065438',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '127',
            'Nama' => 'FAYZA YUKIKA UNTORO',
            'NIM' => '00000082494',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '127',
            'Nama' => 'JESSICA SHARON MARIA TAMPI',
            'NIM' => '00000078612',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '127',
            'Nama' => 'IRFAN AZIZ PRASETYO',
            'NIM' => '00000075138',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '127',
            'Nama' => 'MICHAEL PHIONG',
            'NIM' => '00000069894',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '127',
            'Nama' => 'IVAN AFRIZAL',
            'NIM' => '00000069616',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '127',
            'Nama' => 'DAVA RAIHAN AGUNG',
            'NIM' => '00000079074',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '127',
            'Nama' => 'MICHELLE ELAINE SUDJATI',
            'NIM' => '00000066816',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '127',
            'Nama' => 'PRICILLIA QEISYA TRANZIE TAN',
            'NIM' => '00000068613',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '127',
            'Nama' => 'THEODORA ELENA GUNAWAN',
            'NIM' => '00000073432',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '127',
            'Nama' => 'ALYSSA ELEONORA MUKLIN',
            'NIM' => '00000071839',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '127',
            'Nama' => 'YASMIN NADIRA',
            'NIM' => '00000081937',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '127',
            'Nama' => 'SABRINA ANGELIA YUTAN',
            'NIM' => '00000069512',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '127',
            'Nama' => 'NICOLE AGATHA WIJAYA',
            'NIM' => '00000067713',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '127',
            'Nama' => 'RACHEL ANNASTASYA ARCHANGELA WURANGIAN',
            'NIM' => '00000073552',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '127',
            'Nama' => 'ANGELINE .',
            'NIM' => '00000069577',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '127',
            'Nama' => 'ERNESTO GUEVARA CARCERES ',
            'NIM' => '00000067726',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '128',
            'Nama' => 'WILCOUSTINE QHRISTMAS PNIEL WIJAYA (ID LINE: Ichigosimia)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '128',
            'Nama' => 'FARHAN SIDQI PURNAWAN',
            'NIM' => '00000078309',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '128',
            'Nama' => 'WINCENT GEOVANY',
            'NIM' => '00000068237',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '128',
            'Nama' => 'ANGEL LAWRENSIA',
            'NIM' => '00000084325',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '128',
            'Nama' => 'AHMAD RIZA ARRAFI ASMARAKUSUMA',
            'NIM' => '00000077067',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '128',
            'Nama' => 'FELIX ANSELL ATARI CHRISTIAN',
            'NIM' => '00000067363',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '128',
            'Nama' => 'EDFYN ARKHENA PADANG',
            'NIM' => '00000073884',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '128',
            'Nama' => 'SHYERLY SHAFERYA',
            'NIM' => '00000073622',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '128',
            'Nama' => 'SAMUEL MATTHEW IRAWAN',
            'NIM' => '00000069954',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '128',
            'Nama' => 'MALVIN WIJAYA',
            'NIM' => '00000080948',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '128',
            'Nama' => 'EVANDER NIKOLAI',
            'NIM' => '00000079812',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '128',
            'Nama' => 'NASHITA NASHWA',
            'NIM' => '00000074933',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '128',
            'Nama' => 'I MADE DIONATA PARA MERTHA KESUMA',
            'NIM' => '00000069633',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '128',
            'Nama' => 'VALLEN FELYSIA',
            'NIM' => '00000069810',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '128',
            'Nama' => 'AURELLIA NURA GUPITA',
            'NIM' => '00000088598',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '128',
            'Nama' => 'SARA EMMANUELLA LUKITO',
            'NIM' => '00000069326',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '128',
            'Nama' => 'NICOLE OLIVIA THE',
            'NIM' => '00000068047',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '128',
            'Nama' => 'MARCO SURYA DERMAWAN',
            'NIM' => '00000067385',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '128',
            'Nama' => 'JESSICA NATHANIA SANTOSA',
            'NIM' => '00000066898',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '128',
            'Nama' => 'DAVIN EDBERT',
            'NIM' => '00000055479',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '129',
            'Nama' => 'AURA LINTANG (ID LINE: auralintang28)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '129',
            'Nama' => 'ELIA MARCELA CANDRA',
            'NIM' => '00000069599',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '129',
            'Nama' => 'YOHANES HARYO NUGROHO ALIANDU',
            'NIM' => '00000068862',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '129',
            'Nama' => 'SABRINA FAJRUL ULA USMAN',
            'NIM' => '00000083124',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '129',
            'Nama' => 'RADITYA DARU WANGKAWA',
            'NIM' => '00000076375',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '129',
            'Nama' => 'ANGELINA AURELIA',
            'NIM' => '00000069819',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '129',
            'Nama' => 'VIDELIA LIE',
            'NIM' => '00000067841',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '129',
            'Nama' => 'GRISVIAN REVALDO',
            'NIM' => '00000066768',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '129',
            'Nama' => 'GHAZAN NAZZALA REYHAN',
            'NIM' => '00000077353',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '129',
            'Nama' => 'MERHANDES GUNAWAN',
            'NIM' => '00000081070',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '129',
            'Nama' => 'ALFONSUS VEGA HENTYA TANOJO',
            'NIM' => '00000068825',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '129',
            'Nama' => 'NATARINA NADYA RANSI',
            'NIM' => '00000071478',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '129',
            'Nama' => 'PRINCE WIRANATA',
            'NIM' => '00000073386',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '129',
            'Nama' => 'LOVENIA MEGUMI SURJANTO',
            'NIM' => '00000069172',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '129',
            'Nama' => 'BERNADETTE AMARA NICKITA BASKORO',
            'NIM' => '00000068032',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '129',
            'Nama' => 'SILMI TAMMA CHUSMARSYAH',
            'NIM' => '00000075234',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '129',
            'Nama' => 'GABRIELLA DAMERIA FABIEL',
            'NIM' => '00000075721',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '129',
            'Nama' => 'AISYA AYU MARGARETA',
            'NIM' => '00000074941',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '129',
            'Nama' => 'LEONARDO STEFANUS',
            'NIM' => '00000067500',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '129',
            'Nama' => 'ALYA SALSABILA',
            'NIM' => '00000054629',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '130',
            'Nama' => 'SALWA PUTRI RISWANA (ID LINE: salxnarry)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '130',
            'Nama' => 'SENDY TRIMULYANA',
            'NIM' => '00000078296',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '130',
            'Nama' => 'KEVIN HALIM',
            'NIM' => '00000067930',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '130',
            'Nama' => 'EUNIKE RUMERE',
            'NIM' => '00000079907',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '130',
            'Nama' => 'MARCELLINO .',
            'NIM' => '00000071093',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '130',
            'Nama' => 'FREDERICO JONATHAN BAGUNA',
            'NIM' => '00000067927',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '130',
            'Nama' => 'VINCENTCIUS SETIANTO',
            'NIM' => '00000067909',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '130',
            'Nama' => 'KEISHA ANGELIA PETRINA',
            'NIM' => '00000068550',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '130',
            'Nama' => 'HENDRICUS SATRIO WIBISONO',
            'NIM' => '00000067102',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '130',
            'Nama' => 'MATHEUS VALENTINO',
            'NIM' => '00000075798',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '130',
            'Nama' => 'FARREL RAMADA ALLADINES',
            'NIM' => '00000069400',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '130',
            'Nama' => 'MELISSA GRACIA',
            'NIM' => '00000069231',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '130',
            'Nama' => 'DAVIN NATHANAEL RUSLIM',
            'NIM' => '00000069192',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '130',
            'Nama' => 'RAMA DAFFALINO ALREN',
            'NIM' => '00000082225',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '130',
            'Nama' => 'OWEN RAFAEL ERICK',
            'NIM' => '00000068409',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '130',
            'Nama' => 'KIERA KRISTA TJOEGITO',
            'NIM' => '00000066855',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '130',
            'Nama' => 'GALIH MUHAMMAD ZIMRAN',
            'NIM' => '00000073435',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '130',
            'Nama' => 'DEBBY GRACIA',
            'NIM' => '00000070142',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '130',
            'Nama' => 'NAUFAL HABIBIE YUSUF',
            'NIM' => '00000077655',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '130',
            'Nama' => 'TAUFIK HAZEL ABDILLAH',
            'NIM' => '00000044234',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '131',
            'Nama' => 'SILVIA THERESIA ONGGO (ID LINE: silllvia_)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '131',
            'Nama' => 'ISTAPRAMANA JIWANMUKTA LAZUARDI LINAN',
            'NIM' => '00000070480',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '131',
            'Nama' => 'HANA BERLIANA',
            'NIM' => '00000076377',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '131',
            'Nama' => 'RAFI ALDINO',
            'NIM' => '00000081108',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '131',
            'Nama' => 'AGUSTINA GABRIELA SIMANJUNTAK',
            'NIM' => '00000070909',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '131',
            'Nama' => 'IMANUEL KURNIAWAN',
            'NIM' => '00000068787',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '131',
            'Nama' => 'VANIA ARDELIA',
            'NIM' => '00000070201',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '131',
            'Nama' => 'MARIO SUSANTO',
            'NIM' => '00000066495',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '131',
            'Nama' => 'JUAN CAKRAWALA BEN MULUK',
            'NIM' => '00000078691',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '131',
            'Nama' => 'JONATHAN SUSANTO',
            'NIM' => '00000071412',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '131',
            'Nama' => 'FATTAN RAKHA AIRA',
            'NIM' => '00000075151',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '131',
            'Nama' => 'MEIDELINE SOFIE',
            'NIM' => '00000069969',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '131',
            'Nama' => 'AHMAD FAKHRUROZY',
            'NIM' => '00000082613',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '131',
            'Nama' => 'AARON NATHANAEL ALWI',
            'NIM' => '00000067988',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '131',
            'Nama' => 'MARIA IMMACULATA CAELI PORTA',
            'NIM' => '00000070164',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '131',
            'Nama' => 'NIDYA SALSABILA',
            'NIM' => '00000070537',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '131',
            'Nama' => 'MESHAL ACHMAD BUDIMAN',
            'NIM' => '00000075600',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '131',
            'Nama' => 'EVI FEBRIYANTI',
            'NIM' => '00000067370',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '131',
            'Nama' => 'PRECIA ARCELIA OLYVIADHYANIE',
            'NIM' => '00000075476',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '131',
            'Nama' => 'NAILA MEDITA',
            'NIM' => '00000052771',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '132',
            'Nama' => 'MARTISHA ARIANNA FEDORIA (ID LINE: tisha25303)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '132',
            'Nama' => 'LEANDER KRISTOF SETIAWAN',
            'NIM' => '00000068546',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '132',
            'Nama' => 'CHRISTINE CALIN PUTRI JASIN',
            'NIM' => '00000074820',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '132',
            'Nama' => 'MARCELLO ROY',
            'NIM' => '00000072593',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '132',
            'Nama' => 'FAYZA NADIRA SETIADI',
            'NIM' => '00000071589',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '132',
            'Nama' => 'RAYYAN SETIADY',
            'NIM' => '00000075624',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '132',
            'Nama' => 'RAYZEN TJIPTADJAJA',
            'NIM' => '00000070893',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '132',
            'Nama' => 'DHIENDA AURELIA SILALAHI',
            'NIM' => '00000087880',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '132',
            'Nama' => 'FELIX VALENTINO SIANTURI',
            'NIM' => '00000081021',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '132',
            'Nama' => 'FELIX MARIO WALEWANGKO',
            'NIM' => '00000070498',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '132',
            'Nama' => 'KEZIA FILANDI WIJAYA',
            'NIM' => '00000068853',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '132',
            'Nama' => 'ELSA FITRI',
            'NIM' => '00000082198',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '132',
            'Nama' => 'NAYAKA ARETHA VIRGIAWAN',
            'NIM' => '00000069925',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '132',
            'Nama' => 'JOYCE BELLINDA AMELIA KASOEM',
            'NIM' => '00000068591',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '132',
            'Nama' => 'DEAN LOIS PANGARIBUAN',
            'NIM' => '00000082495',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '132',
            'Nama' => 'RENARD ATHA MULYA',
            'NIM' => '00000072812',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '132',
            'Nama' => 'SAFANA AJRIA PUTRI SIREGAR',
            'NIM' => '00000073938',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '132',
            'Nama' => 'SAMUEL GERALD DAVID ARGADO HUTABARAT',
            'NIM' => '00000070654',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '132',
            'Nama' => 'THOMAS RAMLI',
            'NIM' => '00000061781',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '133',
            'Nama' => 'BROOKLYN RACQUELLA LIEM (ID LINE: brooklyn_2503)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '133',
            'Nama' => 'MICHELLE LIMANDA',
            'NIM' => '00000065109',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '133',
            'Nama' => 'LAORA MARCELLA FLORA NITA',
            'NIM' => '00000065970',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '133',
            'Nama' => 'JOY TRIADI PANGESTU',
            'NIM' => '00000080750',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '133',
            'Nama' => 'JAQLINE SUSANTO',
            'NIM' => '00000074947',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '133',
            'Nama' => 'ARHEN PUTRA MANGGALA',
            'NIM' => '00000076852',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '133',
            'Nama' => 'NADIA SEKAR SARI',
            'NIM' => '00000075819',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '133',
            'Nama' => 'REFANY WANADARMA',
            'NIM' => '00000068371',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '133',
            'Nama' => 'HASNAA NABIILAH AZZAHRA',
            'NIM' => '00000087641',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '133',
            'Nama' => 'KHADAFI .',
            'NIM' => '00000072478',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '133',
            'Nama' => 'EDUARDUS FARREL TIRTAWINATA',
            'NIM' => '00000069931',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '133',
            'Nama' => 'KEZYA CARLA HARTONO',
            'NIM' => '00000067553',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '133',
            'Nama' => 'SHAZMA ALIFYA JASMINE MUZADI',
            'NIM' => '00000071091',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '133',
            'Nama' => 'AINA NUR SABRINA',
            'NIM' => '00000074905',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '133',
            'Nama' => 'MUHAMMAD FAHRY ZULVINANDO',
            'NIM' => '00000078943',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '133',
            'Nama' => 'TASYA LONICA INDAH',
            'NIM' => '00000073487',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '133',
            'Nama' => 'NICOLETTA ANYA CHRISTABELL',
            'NIM' => '00000068393',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '133',
            'Nama' => 'MAWLANA KAFI ALDEBARAN SIREGAR',
            'NIM' => '00000076413',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '133',
            'Nama' => 'STEFANNY AURELIA PURWANTO',
            'NIM' => '00000068113',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '133',
            'Nama' => 'RICKY SAMUEL',
            'NIM' => '00000055451',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '134',
            'Nama' => 'KARISMA JUWITA (ID LINE: karismajuwita123)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '134',
            'Nama' => 'ALIKA PANDORRA SALVINE',
            'NIM' => '00000069313',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '134',
            'Nama' => 'EVITA NIRMALA',
            'NIM' => '00000073522',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '134',
            'Nama' => 'SHEFFIELD RODERICK',
            'NIM' => '00000069737',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '134',
            'Nama' => 'GENOVEVA JOCELINE VALENCIA',
            'NIM' => '00000066470',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '134',
            'Nama' => 'MUHAMMAD RAHARDJA ADIWIDJAYA',
            'NIM' => '00000077627',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '134',
            'Nama' => 'KRISTIANA ANDREA CALISTA',
            'NIM' => '00000070063',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '134',
            'Nama' => 'KENNY HADISASMITA PRAMUDITO',
            'NIM' => '00000071052',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '134',
            'Nama' => 'SHABINA ALFITRI',
            'NIM' => '00000075507',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '134',
            'Nama' => 'KHALEB ANDHYKA APRIJADI',
            'NIM' => '00000066721',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '134',
            'Nama' => 'ANGELINA .',
            'NIM' => '00000069313',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '134',
            'Nama' => 'LATICIA KIMBERLY TANTO',
            'NIM' => '00000069745',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '134',
            'Nama' => 'YAZMIN AZZAHRA',
            'NIM' => '00000082486',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '134',
            'Nama' => 'LEONY WIDYATNA LOREN',
            'NIM' => '00000076228',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '134',
            'Nama' => 'RADEN MUHAMMAD FAIZ HASAN',
            'NIM' => '00000079238',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '134',
            'Nama' => 'ANNISA INDRIATI QODRYANTO',
            'NIM' => '00000075254',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '134',
            'Nama' => 'KELLYSA NATHANIEL',
            'NIM' => '00000069496',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '134',
            'Nama' => 'MICHELLE CHANTIKA SANJAYA',
            'NIM' => '00000069981',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '134',
            'Nama' => 'SEASY NATASHA AMEILIA TITALEY',
            'NIM' => '00000072783',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '134',
            'Nama' => 'TIMOTHY MAX WEMPI BUKARA',
            'NIM' => '00000064927',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '135',
            'Nama' => 'AURELIO BRYANT ASALI (ID LINE: aurelioasali)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '135',
            'Nama' => 'ARTHUR NATHANAEL ABDI',
            'NIM' => '00000067976',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '135',
            'Nama' => 'FRANCYA LILY TJAN',
            'NIM' => '00000069147',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '135',
            'Nama' => 'MUHAMMAD RAFI AKBAR',
            'NIM' => '00000073818',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '135',
            'Nama' => 'JASON FERDIASEN',
            'NIM' => '00000068967',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '135',
            'Nama' => 'ARIF IHSAN SAUQI',
            'NIM' => '00000070728',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '135',
            'Nama' => 'DIAZ BENNAYA',
            'NIM' => '00000068997',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '135',
            'Nama' => 'CHRISTINE .',
            'NIM' => '00000077974',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '135',
            'Nama' => 'FARAJ BARAYIES',
            'NIM' => '00000071807',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '135',
            'Nama' => 'KHALIF ZIRAN MAULANA',
            'NIM' => '00000071749',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '135',
            'Nama' => 'VINCENT BRYAN',
            'NIM' => '00000076794',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '135',
            'Nama' => 'WILBERTO DEVINSIA',
            'NIM' => '00000075727',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '135',
            'Nama' => 'HAIDAR MUTHAHARI FIRMANSYAH',
            'NIM' => '00000073789',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '135',
            'Nama' => 'DIMAS PUTRA ARIYANTO',
            'NIM' => '00000071909',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '135',
            'Nama' => 'ELVARETTA VICKY',
            'NIM' => '00000081985',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '135',
            'Nama' => 'AUDREY LETICIA DARMAWAN',
            'NIM' => '00000066830',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '135',
            'Nama' => 'JASON RYU TANOJO',
            'NIM' => '00000075575',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '135',
            'Nama' => 'ABIRA KAYLA RAZAKA',
            'NIM' => '00000073394',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '135',
            'Nama' => 'SEKAR RATRI APARINGTYAS',
            'NIM' => '00000070530',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '135',
            'Nama' => 'RICARDO LINELSON',
            'NIM' => '00000056089',
            'Prodi' => 'Teknik Fisika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '136',
            'Nama' => 'ANGELICA ROSALIE (ID LINE: eiyuurun)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '136',
            'Nama' => 'FARELL BERTRAM CANDRA',
            'NIM' => '00000070463',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '136',
            'Nama' => 'NATHANIEL ASHER BODHI',
            'NIM' => '00000071313',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '136',
            'Nama' => 'CHRISTOPHER KENNETH DAVID',
            'NIM' => '00000079275',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '136',
            'Nama' => 'JANICE STEFANI SOEMARNO',
            'NIM' => '00000067908',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '136',
            'Nama' => 'RUTH ANN MYRICK',
            'NIM' => '00000067769',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '136',
            'Nama' => 'NURHIDAYAT .',
            'NIM' => '00000077898',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '136',
            'Nama' => 'FERDINAND DWIDIANTRA SUKARDI',
            'NIM' => '00000071085',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '136',
            'Nama' => 'VALENSIA WIDJAJA',
            'NIM' => '00000075467',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '136',
            'Nama' => 'THERESIA MULYADI',
            'NIM' => '00000068846',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '136',
            'Nama' => 'MAHA LIGAT DEWA CINDRA',
            'NIM' => '00000075361',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '136',
            'Nama' => 'CORNELLIUS BANU EKA TRISANTO',
            'NIM' => '00000070928',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '136',
            'Nama' => 'SITI MUTHIA KHADIJAH',
            'NIM' => '00000070633',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '136',
            'Nama' => 'GWENDELINE GAIL SUTRISNO',
            'NIM' => '00000069153',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '136',
            'Nama' => 'VIRA SABRINA',
            'NIM' => '00000072549',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '136',
            'Nama' => 'JOSHUA MATTHEW MANALU',
            'NIM' => '00000083327',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '136',
            'Nama' => 'RAFA ALINA SEPTYANE',
            'NIM' => '00000069949',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '136',
            'Nama' => 'ALICIA DINDYA DJOHAN',
            'NIM' => '00000068193',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '136',
            'Nama' => 'NICOLASH TIMOTIE NAPITUPULU',
            'NIM' => '00000067495',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '136',
            'Nama' => 'CHRISTOVER MARTIN SAMUEL',
            'NIM' => '00000064620',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '137',
            'Nama' => 'TABITHA CHRISTINA (ID LINE: tabithachrist)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '137',
            'Nama' => 'NAYA KAMILA ARIF',
            'NIM' => '00000075129',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '137',
            'Nama' => 'ELISABETH TIFFANY TJANDRA',
            'NIM' => '00000068388',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '137',
            'Nama' => 'BILLY SOLKAM SENTUF',
            'NIM' => '00000079931',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '137',
            'Nama' => 'AZZAHRA AQEELA AHMAD',
            'NIM' => '00000075212',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '137',
            'Nama' => 'HIEREMIAS DIAMOND PINANTUN',
            'NIM' => '00000071054',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '137',
            'Nama' => 'MARCELLINO .',
            'NIM' => '00000069796',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '137',
            'Nama' => 'FERDIAN JONATHAN',
            'NIM' => '00000067842',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '137',
            'Nama' => 'DUWI MITA ANDANI',
            'NIM' => '00000080855',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '137',
            'Nama' => 'KHOIRUL ANWAR',
            'NIM' => '00000071753',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '137',
            'Nama' => 'MALIK BAZIL RABBANI',
            'NIM' => '00000070006',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '137',
            'Nama' => 'ANASTHASIA ABIGAIL',
            'NIM' => '00000069208',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '137',
            'Nama' => 'ALVIN ALAUDDIN SUPRIANTO',
            'NIM' => '00000081984',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '137',
            'Nama' => 'RIVALDO EBEN EZER',
            'NIM' => '00000070550',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '137',
            'Nama' => 'YEZKIA FENI WIJAYA',
            'NIM' => '00000069505',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '137',
            'Nama' => 'RIFQI ANWAR',
            'NIM' => '00000070591',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '137',
            'Nama' => 'CHERINE .',
            'NIM' => '00000067654',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '137',
            'Nama' => 'ALLYSHA MIZELIANA GARSADI',
            'NIM' => '00000068442',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '137',
            'Nama' => 'FRANSISKUS XAVERIUS VALENTINO ABIMANYU',
            'NIM' => '00000068135',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '137',
            'Nama' => 'EBEN HAEZER',
            'NIM' => '00000055583',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '138',
            'Nama' => 'EVELYN CHANRY (ID LINE: e.chanry)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '138',
            'Nama' => 'RENO ALVERO SOE',
            'NIM' => '00000075868',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '138',
            'Nama' => 'NAJWA AULIA RAHMAN',
            'NIM' => '00000075067',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '138',
            'Nama' => 'FRANS IMANUEL',
            'NIM' => '00000075868',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '138',
            'Nama' => 'VANIA PUTRI KEISA',
            'NIM' => '00000068970',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '138',
            'Nama' => 'CEYSHA JINGGA AMELIA',
            'NIM' => '00000082003',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '138',
            'Nama' => 'MARCHELLO YANG',
            'NIM' => '00000068050',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '138',
            'Nama' => 'DESYANA .',
            'NIM' => '00000073333',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '138',
            'Nama' => 'KELLY BONG',
            'NIM' => '00000068403',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '138',
            'Nama' => 'MATTHEW CHANG',
            'NIM' => '00000069566',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '138',
            'Nama' => 'ADITYA STEPHEN HUNG',
            'NIM' => '00000072563',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '138',
            'Nama' => 'YESSA JAN',
            'NIM' => '00000065187',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '138',
            'Nama' => 'VANESHA DARMAWAN',
            'NIM' => '00000071180',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '138',
            'Nama' => 'SHERLYN SOON',
            'NIM' => '00000070507',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '138',
            'Nama' => 'CHRISTY OLIVIA',
            'NIM' => '00000069849',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '138',
            'Nama' => 'ANASTASIA ELENA ARIADNE',
            'NIM' => '00000067002',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '138',
            'Nama' => 'CHELSEA VALENCIA CHAIRIL',
            'NIM' => '00000068055',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '138',
            'Nama' => 'FADHILA DITA AULIA',
            'NIM' => '00000074821',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '138',
            'Nama' => 'ANGELIQUE KELLY CHRISTIAN',
            'NIM' => '00000071418',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '138',
            'Nama' => 'MUHAMMAD AZZIMAR',
            'NIM' => '00000053392',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '139',
            'Nama' => 'NAIRA VEGA KHALISA (ID LINE: nairakhalisaa)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '139',
            'Nama' => 'AUDREY APRILLIA FAUZKHA',
            'NIM' => '00000075364',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '139',
            'Nama' => 'JASMINE NATHANIA TANUDJAJA',
            'NIM' => '00000069134',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '139',
            'Nama' => 'ANDIKA NUR FITRIANTO',
            'NIM' => '00000073646',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '139',
            'Nama' => 'JUSTIN OWEN CHANDRA',
            'NIM' => '00000070330',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '139',
            'Nama' => 'STAR JESSALYN SUNARYADI',
            'NIM' => '00000075327',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '139',
            'Nama' => 'MICHAEL WIJAYA',
            'NIM' => '00000077733',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '139',
            'Nama' => 'CALLISTA AYUDYA FAWWAZ',
            'NIM' => '00000071599',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '139',
            'Nama' => 'JASON EMMANUEL',
            'NIM' => '00000067852',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '139',
            'Nama' => 'TIMOTHY MAHANDIKA PUTRA RIDHANI',
            'NIM' => '00000069339',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '139',
            'Nama' => 'MUHAMMAD AFFRANSYAH BAYULAKSANA',
            'NIM' => '00000077007',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '139',
            'Nama' => 'FEBRIANA ANGGIE PATRICIA SILAEN',
            'NIM' => '00000083933',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '139',
            'Nama' => 'JANICE SHALOM GUNAWAN',
            'NIM' => '00000073395',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '139',
            'Nama' => 'CLARENSIA ANJELI',
            'NIM' => '00000075079',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '139',
            'Nama' => 'MARIA EASTERINA DYAH PRAMENTARI',
            'NIM' => '00000071773',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '139',
            'Nama' => 'INAYA RAHMADINA',
            'NIM' => '00000075470',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '139',
            'Nama' => 'SAJIDA NASHYRA',
            'NIM' => '00000071417',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '139',
            'Nama' => 'SILVIA HALIM',
            'NIM' => '00000065994',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '139',
            'Nama' => 'JASON CLAY NATHANIEL',
            'NIM' => '00000067001',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '139',
            'Nama' => 'GANESHA YOGA RIZALDI',
            'NIM' => '00000053123',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '140',
            'Nama' => 'AVELINE JANTIKA (ID LINE: vyyvelll)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '140',
            'Nama' => 'AEMILIA MARGARET PARDEDE',
            'NIM' => '00000067479',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '140',
            'Nama' => 'LEONARDUS DIMAS CAHYA PRATAMA',
            'NIM' => '00000069828',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '140',
            'Nama' => 'MUHAMMAD ALFATH ADRILA GUNTUR',
            'NIM' => '00000081104',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '140',
            'Nama' => 'BRANDON SAMUEL SASMITA',
            'NIM' => '00000067047',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '140',
            'Nama' => 'CHRISTY ARIELA TRIATMODJO',
            'NIM' => '00000075022',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '140',
            'Nama' => 'MICHELE DWI HARTONO',
            'NIM' => '00000075173',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '140',
            'Nama' => 'DEDAD MUFTI SUBANDI',
            'NIM' => '00000076404',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '140',
            'Nama' => 'AMELIA CAROLINE KUSWANDI',
            'NIM' => '00000079198',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '140',
            'Nama' => 'STEVEN AXEL LEENARDI',
            'NIM' => '00000073786',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '140',
            'Nama' => 'JACKSON LAWRENCE',
            'NIM' => '00000070612',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '140',
            'Nama' => 'JOVAN CHRISTOPHER WINARTO',
            'NIM' => '00000077663',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '140',
            'Nama' => 'MICHELLE CHRISTY',
            'NIM' => '00000082373',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '140',
            'Nama' => 'YOSAFAT BENEDICTUS MANIK',
            'NIM' => '00000076141',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '140',
            'Nama' => 'VALENTINO ANWAR',
            'NIM' => '00000072152',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '140',
            'Nama' => 'MARCEL LIM',
            'NIM' => '00000068402',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '140',
            'Nama' => 'MOSES MARCHELLINO MIO, TING',
            'NIM' => '00000068682',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '140',
            'Nama' => 'NAWAL RIEFSA ARDIANSYAH',
            'NIM' => '00000072190',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '140',
            'Nama' => 'BRYAN BAHARUDDIN',
            'NIM' => '00000069344',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '140',
            'Nama' => 'MUHAMMAD AQILLA DIANDRA',
            'NIM' => '00000054588',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '141',
            'Nama' => 'SELVI NATALIA (ID LINE: selvinataliee)',
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '141',
            'Nama' => 'CARREN LOURENSIA',
            'NIM' => '00000070100',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '141',
            'Nama' => 'GISELA FLORENTINA',
            'NIM' => '00000070517',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '141',
            'Nama' => 'SABRINA NURUL AZMI',
            'NIM' => '00000077730',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '141',
            'Nama' => 'FARRELL .',
            'NIM' => '00000066341',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '141',
            'Nama' => 'YOSAFAT CHRISTIAN LUFPI',
            'NIM' => '00000076772',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '141',
            'Nama' => 'KHAIRANI HIZRAN',
            'NIM' => '00000072454',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '141',
            'Nama' => 'VINCENT THAYIB',
            'NIM' => '00000065148',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '141',
            'Nama' => 'TAMARA CATALINA SUWANDI',
            'NIM' => '00000067387',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '141',
            'Nama' => 'RIYANDHI ADRIAN DARMAWAN',
            'NIM' => '00000068383',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '141',
            'Nama' => 'NATHANIEL EZRA ANASBI',
            'NIM' => '00000068232',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '141',
            'Nama' => 'PASCHALIS DEVIN IANDA',
            'NIM' => '00000070469',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '141',
            'Nama' => 'NATHANAEL BHISMA GALIH BAGASKARA',
            'NIM' => '00000076025',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '141',
            'Nama' => 'BERLIAN THEOFILIA',
            'NIM' => '00000066817',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '141',
            'Nama' => 'ANGELINE CLARISSA',
            'NIM' => '00000070696',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '141',
            'Nama' => 'VERLYN TANIA',
            'NIM' => '00000069210',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '141',
            'Nama' => 'CHARVIA ANGELIA',
            'NIM' => '00000073503',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '141',
            'Nama' => 'NEBRISCA FLORIANE',
            'NIM' => '00000065388',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '141',
            'Nama' => 'MUHAMMAD RIFENDA PURBA',
            'NIM' => '00000070399',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '141',
            'Nama' => 'SARAH SORAYA',
            'NIM' => '00000081761',
            'Prodi' => 'Perhotelan',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '142',
            'Nama' => 'ANGELICA OKTAVIA ZILIWU (ID LINE: 29102003291020032222)',	
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '142',
            'Nama' => 'JACQUELINE ANGEL',
            'NIM' => '00000070045',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '142',
            'Nama' => 'GLADYS FLORENCIA ANGELICA',
            'NIM' => '00000076264',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '142',
            'Nama' => 'MARVEL FIRSTLYSTO SAMUEL TAMPUBOLON',
            'NIM' => '00000071897',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '142',
            'Nama' => 'JEREMY HENDRA',
            'NIM' => '00000072559',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '142',
            'Nama' => 'YEHEZKIEL CHRISTOPHER IMMANUEL',
            'NIM' => '00000068178',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '142',
            'Nama' => 'JEFFRAY MIRACLE CHRISTIAN',
            'NIM' => '00000072784',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '142',
            'Nama' => 'LARISSA IKA KAMILA',
            'NIM' => '00000071500',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '142',
            'Nama' => 'ATHAYA SYAHBIYAMA SETIYADI',
            'NIM' => '00000075787',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '142',
            'Nama' => 'MUHAMMAD RIZKI FADHIL',
            'NIM' => '00000079478',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '142',
            'Nama' => 'MARCO JULIUS GREGORY TOBING',
            'NIM' => '00000067321',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '142',
            'Nama' => 'JUSTIN JONAS WIJAYA',
            'NIM' => '00000089302',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '142',
            'Nama' => 'CLARA STEPHANIE MAGDALENE WATULINGAS',
            'NIM' => '00000067085',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '142',
            'Nama' => 'BRIGITTA JULIA SINAULAN',
            'NIM' => '00000067070',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '142',
            'Nama' => 'GABRIELA SALIM',
            'NIM' => '00000068051',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '142',
            'Nama' => 'NATHANAEL AXEL SENTONO',
            'NIM' => '00000068738',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '142',
            'Nama' => 'REGINA MARCHELIZA',
            'NIM' => '00000072150',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '142',
            'Nama' => 'FELICIA MAYDELINE SETIAWAN',
            'NIM' => '00000067883',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '142',
            'Nama' => 'BOBY JONIANTO',
            'NIM' => '00000078325',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '142',
            'Nama' => 'ADIVA KHALILA SYARIEF',
            'NIM' => '00000082511',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '143',
            'Nama' => 'JOSEPHINE ARELLA (ID LINE: josephinearella)',	
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '143',
            'Nama' => 'SANGKAKALA PANGERAN INDO',
            'NIM' => '00000075065',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '143',
            'Nama' => 'GRACIEL CHRISTY NATALIE MARKUS',
            'NIM' => '00000076874',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '143',
            'Nama' => 'ADVENDHITA PUTRI CAHYANI',
            'NIM' => '00000079028',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '143',
            'Nama' => 'EILEEN GABRIELLA',
            'NIM' => '00000071935',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '143',
            'Nama' => 'DOMINIC MARCELL PAMBINI',
            'NIM' => '00000067125',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '143',
            'Nama' => 'FABIO .',
            'NIM' => '00000066425',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '143',
            'Nama' => 'LANTERNITUS MANTIOGA ATDHELSON',
            'NIM' => '00000072205',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '143',
            'Nama' => 'FELICIA NARDA DAVINA',
            'NIM' => '00000068179',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '143',
            'Nama' => "MUHAMMAD RIZQI WINASSYA'BANI",
            'NIM' => '00000073547',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '143',
            'Nama' => 'MARYADI .',
            'NIM' => '00000068775',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '143',
            'Nama' => 'PINGKAN NUR PRICILLA',
            'NIM' => '00000070301',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '143',
            'Nama' => 'MUTIARA TANIA MULIANI',
            'NIM' => '00000065464',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '143',
            'Nama' => 'CINDY CLAUDYA',
            'NIM' => '00000070910',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '143',
            'Nama' => 'JOCELYN ANCYLLA KAPUSIN',
            'NIM' => '00000066377',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '143',
            'Nama' => 'VIVIAN HUANG',
            'NIM' => '00000071353',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '143',
            'Nama' => 'TRISHA HUANG',
            'NIM' => '00000071118',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '143',
            'Nama' => 'DEVON NATHANIEL TAMBUNA',
            'NIM' => '00000075535',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '143',
            'Nama' => 'EUNIQE NATASYA ANGELICA MANGKEY DE GROOT',
            'NIM' => '00000082388',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '143',
            'Nama' => 'KENZU AURELLIUS',
            'NIM' => '00000090400',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '144',
            'Nama' => 'THERESA PUTRI KRISNASANTI (ID LINE: theresapk)',	
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '144',
            'Nama' => 'RAFA NAUFAL ADLI',
            'NIM' => '00000075930',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '144',
            'Nama' => 'STELLA FAUSTINA',
            'NIM' => '00000070059',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '144',
            'Nama' => 'ERICO LADIANIO',
            'NIM' => '00000070845',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '144',
            'Nama' => 'STANLEY DAVREN HARAPAN',
            'NIM' => '00000068374',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '144',
            'Nama' => 'DIO ISAI TANNERI',
            'NIM' => '00000069825',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '144',
            'Nama' => 'CHRISTIE HOLY GRACIA WIJAYA',
            'NIM' => '00000089426',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '144',
            'Nama' => 'AMING CHANDRA',
            'NIM' => '00000066505',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '144',
            'Nama' => 'AISYAH DAMAYANTI ARIEF',
            'NIM' => '00000074901',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '144',
            'Nama' => 'SYAHID BANDORO SURYO',
            'NIM' => '00000075737',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '144',
            'Nama' => 'MARVELL CHRISTOFER',
            'NIM' => '00000067604',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '144',
            'Nama' => 'ALINE CHRISTABELLA',
            'NIM' => '00000067331',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '144',
            'Nama' => 'SAMUEL HALIMANTO',
            'NIM' => '00000069898',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '144',
            'Nama' => 'FIORANO BAYU NUGRAHA',
            'NIM' => '00000072740',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '144',
            'Nama' => 'STEVE DEVIN ALIFIANO TANTRI DHARMA',
            'NIM' => '00000072178',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '144',
            'Nama' => 'RACHEL .',
            'NIM' => '00000075516',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '144',
            'Nama' => 'JASON NICOHLAS FLORENTINO',
            'NIM' => '00000068908',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '144',
            'Nama' => 'SELENA BAPTISTA',
            'NIM' => '00000067651',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '144',
            'Nama' => 'GABRIELA THEADORA',
            'NIM' => '00000069718',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '144',
            'Nama' => 'MAY MAGDALENA',
            'NIM' => '00000079036',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '145',
            'Nama' => 'PARTRICIA ZARZYEKA (ID LINE: patrice_zr)',	
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '145',
            'Nama' => 'NURUL IZZAH SAIDAH',
            'NIM' => '00000073219',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '145',
            'Nama' => 'VIONA KAMADJAJA PURNAMA',
            'NIM' => '00000069439',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '145',
            'Nama' => 'HAURA PUTRY YASHA',
            'NIM' => '00000075900',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '145',
            'Nama' => 'TERTIUS IVAN',
            'NIM' => '00000069273',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '145',
            'Nama' => 'KEVIN EZRA AGDYA PUTRA',
            'NIM' => '00000072376',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '145',
            'Nama' => 'OLYVIA .',
            'NIM' => '00000068707',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '145',
            'Nama' => 'ANGEL JULIANA',
            'NIM' => '00000070114',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '145',
            'Nama' => 'ALVARO HUGA WINATA',
            'NIM' => '00000068088',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '145',
            'Nama' => 'ANDARU HYMAWAN PRIMAYUDHA',
            'NIM' => '00000075847',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '145',
            'Nama' => 'LUIS GANTAR',
            'NIM' => '00000073190',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '145',
            'Nama' => 'ADZRA HAURA CHUMAIRA',
            'NIM' => '00000076107',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '145',
            'Nama' => 'JOVITA NATALIE TAMBUNAN',
            'NIM' => '00000081026',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '145',
            'Nama' => 'GRACE PATRICIA A',
            'NIM' => '00000067348',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '145',
            'Nama' => 'DERYAN RICHARDO NUGRAHA',
            'NIM' => '00000068816',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '145',
            'Nama' => 'STEVEN MATHIAS BENSOHUR',
            'NIM' => '00000067637',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '145',
            'Nama' => 'JERRY THEN',
            'NIM' => '00000066863',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '145',
            'Nama' => 'CHRISTELLY ANGGARA',
            'NIM' => '00000071016',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '145',
            'Nama' => 'GABRIELA FEBRIANI PRASADA',
            'NIM' => '00000068354',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '145',
            'Nama' => 'HERCHEL GAREN SALBINO',
            'NIM' => '00000070161',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '146',
            'Nama' => 'MICHELLE ANGELA PUTRI (ID LINE: michelleapt03)',	
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '146',
            'Nama' => 'FAKHIRAH KHANSA NUGRAHA',
            'NIM' => '00000072192',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '146',
            'Nama' => 'NICHOLAS MARVEL THEODORE NG',
            'NIM' => '00000068675',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '146',
            'Nama' => 'NICHOLAS WILSON',
            'NIM' => '00000069856',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '146',
            'Nama' => 'RAFAEL JOVANNO ALDEN BAGASKARA',
            'NIM' => '00000071751',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '146',
            'Nama' => 'KEVIN ADRIAN RIYATNO',
            'NIM' => '00000072728',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '146',
            'Nama' => 'MUHAMMAD ROBBY IRSYADURRIZKY',
            'NIM' => '00000073633',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '146',
            'Nama' => 'KYOKO STEFANI LIM',
            'NIM' => '00000069724',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '146',
            'Nama' => 'GABRIELLA CINDY IRAWAN',
            'NIM' => '00000068045',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '146',
            'Nama' => 'NICHOLAS MIGUEL SYAHNANTA',
            'NIM' => '00000076394',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '146',
            'Nama' => 'MARTHIN RIYALDO SOLINI KESE',
            'NIM' => '00000073777',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '146',
            'Nama' => 'ARSIO VIRIYA MULIYAWAN',
            'NIM' => '00000071146',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '146',
            'Nama' => 'KEYSHA PUTRI ANGELICA',
            'NIM' => '00000073614',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '146',
            'Nama' => 'CHARLENE ANTHEA DEVIKA SUNTORO',
            'NIM' => '00000071705',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '146',
            'Nama' => 'JUNHAN TITO SYAIFULLADIN',
            'NIM' => '00000081064',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '146',
            'Nama' => 'YOSHI KHALISHA',
            'NIM' => '00000077747',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '146',
            'Nama' => 'AULIA EKA HANIFA',
            'NIM' => '00000075383',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '146',
            'Nama' => 'CHYEISHA PRISCILLA SERAFINNE',
            'NIM' => '00000069914',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '146',
            'Nama' => 'GERARDSMUS DARREN WONG',
            'NIM' => '00000068901',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '146',
            'Nama' => 'SABINA STEVANIAR',
            'NIM' => '00000090335',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '147',
            'Nama' => 'CYNTHIA JONATHAN (ID LINE: cynthiaaajonathannn)',	
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '147',
            'Nama' => 'ALICIA PHANNELY',
            'NIM' => '00000071245',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '147',
            'Nama' => 'YEHEZKIEL YOSIA YACOB',
            'NIM' => '00000070086',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '147',
            'Nama' => 'RAYHAN ATHAYA AL GHAFFAR',
            'NIM' => '00000082760',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '147',
            'Nama' => 'RAIVA QHANITHA THUFAILAH BADRUN',
            'NIM' => '00000081082',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '147',
            'Nama' => 'GRACIELLA CHRISTABEL PRINCESSA WU',
            'NIM' => '00000065173',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '147',
            'Nama' => 'NICHOLAS LUCAS SAPUTRA',
            'NIM' => '00000067460',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '147',
            'Nama' => 'DAVINA NATANIA',
            'NIM' => '00000068170',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '147',
            'Nama' => 'DARVIN GERALDINE',
            'NIM' => '00000078329',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '147',
            'Nama' => 'DIDI SUHAIMI',
            'NIM' => '00000075186',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '147',
            'Nama' => 'MUHAMMAD RAFI CASEY SUSANTO',
            'NIM' => '00000071100',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '147',
            'Nama' => 'CANDELY .',
            'NIM' => '00000066300',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '147',
            'Nama' => 'ALPINKA SHAFA RIZQIA DIVIE',
            'NIM' => '00000070416',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '147',
            'Nama' => 'DELVIN BRIAN YUSTIAN',
            'NIM' => '00000075376',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '147',
            'Nama' => 'MEILA LUTFI',
            'NIM' => '00000069958',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '147',
            'Nama' => 'RAMADAVA ARDIYANTO',
            'NIM' => '00000067822',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '147',
            'Nama' => 'AURELLYA MARISS',
            'NIM' => '00000068174',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '147',
            'Nama' => 'FERDYNAND CYSHARA RAHARJA',
            'NIM' => '00000075166',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '147',
            'Nama' => 'HANSEN CHRISTIAN LIE',
            'NIM' => '00000069504',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '147',
            'Nama' => 'DANIEL ISAACH HATUAON SIREGAR',
            'NIM' => '00000078609',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '148',
            'Nama' => 'AFLAHUL HARTSA KELANA (ID LINE: aflahart)',	
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '148',
            'Nama' => 'GEORGIUS FERNANDO R.W',
            'NIM' => '00000070915',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '148',
            'Nama' => 'LEVY ANNABEL',
            'NIM' => '00000070335',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '148',
            'Nama' => 'VITTORIO JORDIE SUDJIJONO',
            'NIM' => '00000075220',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '148',
            'Nama' => 'BERNADYA RIBKA JAYAKUSUMA',
            'NIM' => '00000075584',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '148',
            'Nama' => 'CHRISTABEL ORLEANS SETIAJI ADIWANA',
            'NIM' => '00000069688',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '148',
            'Nama' => 'HERRY SYAHPUTRA',
            'NIM' => '00000069023',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '148',
            'Nama' => 'ANDITA AZZAHRA',
            'NIM' => '00000072151',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '148',
            'Nama' => 'JOE RAFAEL RESNER',
            'NIM' => '00000067597',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '148',
            'Nama' => 'GODWIN GILBERT WOISIRI',
            'NIM' => '00000083560',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '148',
            'Nama' => 'NATHANAEL BERNIKE',
            'NIM' => '00000065454',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '148',
            'Nama' => 'ANGGI SEPTIANI',
            'NIM' => '00000072115',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '148',
            'Nama' => 'MICHAEL EVERAD LEE',
            'NIM' => '00000076862',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '148',
            'Nama' => 'KENT ADITYA SUHENDRA',
            'NIM' => '00000064842',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '148',
            'Nama' => 'SAUL JETHRO BENEDICT LAUDA',
            'NIM' => '00000068307',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '148',
            'Nama' => 'ZAKI AZHAR SHAHIN',
            'NIM' => '00000071467',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '148',
            'Nama' => 'HIERO SATRIA MANDALA',
            'NIM' => '00000075746',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '148',
            'Nama' => 'VALENCIA AURELIA',
            'NIM' => '00000071456',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '148',
            'Nama' => 'HANNY ADELIA WIJAYA',
            'NIM' => '00000070556',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '148',
            'Nama' => 'YESSA KURNIAWAN',
            'NIM' => '00000073199',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '149',
            'Nama' => 'ANDREW JOE (ID LINE: andrewjoelolxd)',	
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '149',
            'Nama' => 'GEMA IBRAHIM AHMADA',
            'NIM' => '00000072734',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '149',
            'Nama' => 'SANDIKA PUTRA',
            'NIM' => '00000075719',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '149',
            'Nama' => 'ALBERTUS CHRISTIAN WAHYU ATMAJA',
            'NIM' => '00000068921',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '149',
            'Nama' => 'INDRA WIJAYA',
            'NIM' => '00000078359',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '149',
            'Nama' => 'KRISTO PRATHAMA WIBOWO',
            'NIM' => '00000071050',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '149',
            'Nama' => 'PETERS HENDERSON',
            'NIM' => '00000069272',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '149',
            'Nama' => 'ANGELY MAYLIN',
            'NIM' => '00000070658',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '149',
            'Nama' => 'KENNETH WILBERT',
            'NIM' => '00000070529',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '149',
            'Nama' => 'DAEZCO JOHANEST',
            'NIM' => '00000071244',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '149',
            'Nama' => 'NATHANAEL FELIX',
            'NIM' => '00000069434',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '149',
            'Nama' => 'ANITA DYAH VERONICA',
            'NIM' => '00000077603',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '149',
            'Nama' => 'FITRI YUNIARSIH',
            'NIM' => '00000080923',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '149',
            'Nama' => 'HELENA HANNA HARYADI',
            'NIM' => '00000069905',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '149',
            'Nama' => 'NOVI SAFITRI',
            'NIM' => '00000071410',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '149',
            'Nama' => 'ZENITHA MAGHFIRA ARRACHIIMA',
            'NIM' => '00000075358',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '149',
            'Nama' => 'ANDREA SAFIRA RAHMA NOOR',
            'NIM' => '00000075375',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '149',
            'Nama' => 'RAFAEL ANGELINA TJAHJADI',
            'NIM' => '00000069437',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '149',
            'Nama' => 'HERLIN .',
            'NIM' => '00000072673',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '149',
            'Nama' => 'SEPTIAN CALVIEN ADYTIA',
            'NIM' => '00000084300',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '150',
            'Nama' => 'CARLA ELEANOR (ID LINE: Carlaeleanor11)',	
            'NIM' => '',
            'Prodi' => '',
            'status' => 'mentor'
        ]);
        Kelompok::create([
            'NomorKelompok' => '150',
            'Nama' => 'HELEN AGUSTINI',
            'NIM' => '00000072682',
            'Prodi' => 'Arsitektur',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '150',
            'Nama' => 'ANASTHASIA .',
            'NIM' => '00000067351',
            'Prodi' => 'Akuntansi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '150',
            'Nama' => 'DHIONDRA FEBRIO SYAVERA',
            'NIM' => '00000071302',
            'Prodi' => 'Sistem Informasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '150',
            'Nama' => 'JEREMY MATTHEW PARDAMEAN SIAHAAN',
            'NIM' => '00000069036',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '150',
            'Nama' => 'KRESENTIA CLAVIA HALIM',
            'NIM' => '00000070207',
            'Prodi' => 'Film & Animasi',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '150',
            'Nama' => 'MARTIN .',
            'NIM' => '00000066457',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '150',
            'Nama' => 'VONNIA .',
            'NIM' => '00000071927',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '150',
            'Nama' => 'JESSLYN WIDYA LODY',
            'NIM' => '00000079910',
            'Prodi' => 'Manajemen',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '150',
            'Nama' => 'SILVI DIAN PRAMANA',
            'NIM' => '00000083585',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '150',
            'Nama' => 'RICO MESIAS TAMBA',
            'NIM' => '00000077762',
            'Prodi' => 'Informatika',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '150',
            'Nama' => 'ANANDA AULIA',
            'NIM' => '00000073538',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '150',
            'Nama' => 'WISHLEY TANE',
            'NIM' => '00000075328',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '150',
            'Nama' => 'AURELIA ALEXA SUKANDAR',
            'NIM' => '00000067677',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '150',
            'Nama' => 'REYHAN ANDHIKA',
            'NIM' => '00000075567',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '150',
            'Nama' => 'DRYAN JUNO DJUMHANA',
            'NIM' => '00000067360',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '150',
            'Nama' => 'RASHIEKA DHAFIN',
            'NIM' => '00000076282',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '150',
            'Nama' => 'RENDY DHARMAWAN',
            'NIM' => '00000070558',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '150',
            'Nama' => 'HENDRA DHARMAWAN',
            'NIM' => '00000077269',
            'Prodi' => 'DKV',
            'status' => 'mentee'
        ]);
        Kelompok::create([
            'NomorKelompok' => '150',
            'Nama' => 'ZAHRA KUSUMA DEWI',
            'NIM' => '00000089439',
            'Prodi' => 'Ilkom',
            'status' => 'mentee'
        ]);
    }
}
