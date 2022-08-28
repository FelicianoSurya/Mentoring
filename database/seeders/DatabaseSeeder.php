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
            'NomorKelompok' => '126',
            'Nama' => 'MARCELLINE TJHIN (ID Line: cellinee1)',
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
            'Nama' => 'TERRANOVE SALFINA PUTRI (ID Line: nov811)',
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
            'Nama' => 'WILCOUSTINE QHRISTMAS PNIEL WIJAYA (ID Line: Ichigosimia)',
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
            'Nama' => 'AURA LINTANG (ID Line: auralintang28)',
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
            'Nama' => 'SALWA PUTRI RISWANA (ID Line: salxnarry)',
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
            'Nama' => 'SILVIA THERESIA ONGGO (ID Line: silllvia_)',
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
            'Nama' => 'MARTISHA ARIANNA FEDORIA (ID Line: tisha25303)',
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
            'Nama' => 'BROOKLYN RACQUELLA LIEM (ID Line: brooklyn_2503)',
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
            'Nama' => 'KARISMA JUWITA (ID Line: karismajuwita123)',
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
            'Nama' => 'AURELIO BRYANT ASALI (ID Line: aurelioasali)',
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
            'Nama' => 'ANGELICA ROSALIE (ID Line: eiyuurun)',
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
            'Nama' => 'TABITHA CHRISTINA (ID Line: tabithachrist)',
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
            'Nama' => 'EVELYN CHANRY (ID Line: e.chanry)',
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
            'Nama' => 'NAIRA VEGA KHALISA (ID Line: nairakhalisaa)',
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
            'Nama' => 'AVELINE JANTIKA (ID Line: vyyvelll)',
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
            'Nama' => 'SELVI NATALIA (ID Line: selvinataliee)',
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
            'Nama' => 'ANGELICA OKTAVIA ZILIWU (ID Line: 29102003291020032222)',	
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
            'Nama' => 'JOSEPHINE ARELLA (ID Line: josephinearella)',	
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
            'Nama' => 'THERESA PUTRI KRISNASANTI (ID Line: theresapk)',	
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
            'Nama' => 'PARTRICIA ZARZYEKA (ID Line: patrice_zr)',	
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
            'Nama' => 'MICHELLE ANGELA PUTRI (ID Line: michelleapt03)',	
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
            'Nama' => 'CYNTHIA JONATHAN (ID Line: cynthiaaajonathannn)',	
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
            'Nama' => 'AFLAHUL HARTSA KELANA (ID Line: aflahart)',	
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
            'Nama' => 'ANDREW JOE (ID Line: andrewjoelolxd)',	
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
            'Nama' => 'CARLA ELEANOR (ID Line: Carlaeleanor11)',	
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
