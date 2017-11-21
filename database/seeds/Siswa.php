<?php

use Illuminate\Database\Seeder;

class Siswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $s=[
     	['nama'=>'Rafy', 'kelas'=>'XI-RPL 1' , 'tanggal-lahir'=>'2001-01-24', 'jenis-kelamin'=>'laki-laki','agama'=>'Islam', 'umur'=>'17','alamat'=>'Kp.Curug Dogdog' ],
     	['nama'=>'Dono', 'kelas'=>'XI-RPL 1' , 'tanggal-lahir'=>'2001-01-23', 'jenis-kelamin'=>'laki-laki','agama'=>'Islam', 'umur'=>'17','alamat'=>'Kp.Duren' ],
     	['nama'=>'Kasino', 'kelas'=>'XI-RPL 1' , 'tanggal-lahir'=>'2001-01-22', 'jenis-kelamin'=>'laki-laki','agama'=>'Islam', 'umur'=>'17','alamat'=>'Kp.Salak' ],
     	['nama'=>'Indro', 'kelas'=>'XI-RPL 1' , 'tanggal-lahir'=>'2001-01-21', 'jenis-kelamin'=>'laki-laki','agama'=>'Islam', 'umur'=>'17','alamat'=>'Kp.Strawberi' ],
     	['nama'=>'Miya', 'kelas'=>'XI-RPL 1' , 'tanggal-lahir'=>'2001-01-20', 'jenis-kelamin'=>'perempuan','agama'=>'Islam', 'umur'=>'17','alamat'=>'Kp.Saudi' ],
     	['nama'=>'Hayabusa', 'kelas'=>'XI-RPL 1' , 'tanggal-lahir'=>'2001-01-19', 'jenis-kelamin'=>'laki-laki','agama'=>'Islam', 'umur'=>'17','alamat'=>'Kp.German' ],
     	['nama'=>'Roger', 'kelas'=>'XI-RPL 1' , 'tanggal-lahir'=>'2001-01-18', 'jenis-kelamin'=>'laki-laki','agama'=>'Islam', 'umur'=>'17','alamat'=>'Kp.Inggris' ],
     	['nama'=>'Lancelot', 'kelas'=>'XI-RPL 1' , 'tanggal-lahir'=>'2001-01-17', 'jenis-kelamin'=>'laki-laki','agama'=>'Islam', 'umur'=>'17','alamat'=>'Kp.Islandia' ],
     	['nama'=>'Odette', 'kelas'=>'XI-RPL 1' , 'tanggal-lahir'=>'2001-01-16', 'jenis-kelamin'=>'perempuan','agama'=>'Islam', 'umur'=>'17','alamat'=>'Kp.Denmark' ],
     	['nama'=>'Franco', 'kelas'=>'XI-RPL 1' , 'tanggal-lahir'=>'2001-01-15', 'jenis-kelamin'=>'laki-laki','agama'=>'Islam', 'umur'=>'17','alamat'=>'Kp.Iran' ]
     	];
     	//masukan data ke database
     	DB::table('siswa')->insert($s);
    }
}
