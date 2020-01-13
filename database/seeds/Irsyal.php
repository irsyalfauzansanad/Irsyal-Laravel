<?php
use Illuminate\Database\Seeder;
class Irsyal extends Seeder
{
	public function run()
	{
		$posts = [
			['nama'=>'Irsyal', 'jabatan'=>'Youtuber', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'TKI', 'agama'=>'Islam', 'total_gaji'=>'1m'],
			['nama'=>'Nabil', 'jabatan'=>'Dokter', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'TKI', 'agama'=>'Islam', 'total_gaji'=>'100jt'],
			['nama'=>'Fawwaz', 'jabatan'=>'Pengusaha', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'TKI', 'agama'=>'Islam', 'total_gaji'=>'500jt'],
			['nama'=>'Resawan', 'jabatan'=>'Pengusaha', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'TKI', 'agama'=>'Islam', 'total_gaji'=>'10jt'],
			['nama'=>'Erik', 'jabatan'=>'Pembalap', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'TKI', 'agama'=>'Cina', 'total_gaji'=>'5jt']
		];
		// masukkan data ke database
		DB::table('irsyals')->insert($posts);
	}
}
