<?php

	// Route::get('/about', function() {
	// return '<h1>Halo</h1>'
	// 	.'Selamat datang di webapp saya<br>'
	// 	.'Laravel, emang keren,';
	// });

	// // Route Basic
	// Route::get('/', function () {
	//     return view('welcome');
	// });

	// Route::get('profil',function()
	// {
	// 	return view('biodata');
	// });

	// Route::get('perkenalan',function()
	// {
	// 	return view('perkenalan');
	// });
	// Route::get('karir',function()
	// {
	// 	return view('karir');
	// });
	// Route::get('kebahagian',function()
	// {
	// 	return view('kebahagian');
	// });
	// Route::get('kesedihan',function()
	// {
	// 	return view('kesedihan');
	// });
	// Route::get('ketangguhan',function()
	// {
	// 	return view('ketangguhan');
	// });
	Route::get('/testmodel', function() {
		$query = App\Irsyal::all(); 
		return $query;
	});
	Route::get('/testmodel1', function() {
		$query = App\Irsyal::find(1);
		return $query;
	});
	Route::get('/testmodel2', function() {
		$query = App\Irsyal::where('jabatan','like','%Youtuber%')->get();
		return $query;
	});
	Route::get('/testmodel3', function() {
		$post = App\Irsyal::find(1);
		$post->nama = "Irsyal";
		$post->save();
	return $post;
	});
	Route::get('/testmodel4', function() {
		$post = App\Irsyal::find(1);
		$post->delete();
	});
	Route::get('/testmodel5', function() {
		$post = new App\Irsyal;
		$post->nama = "Erik";
		$post->jabatan = "Pengusaha";
		$post->jenis_kelamin = "Laki-laki";
		$post->alamat = "TKI";
		$post->agama = "Islam";
		$post->total_gaji = "10jt";
		$post->save();
		return $post;
	});
	Route::get('data-gaji-1', function() {
		$query = App\Irsyal::where('agama','=','islam')->get();
		return $query;
	});
	Route::get('data-gaji-2', function() {
		$query = App\Irsyal::select('id','nama','agama')
		->where('agama','=','islam')
		->get();
		return $query;
	});
	Route::get('data-gaji/{id}',function($id){
		$gaji = App\Irsyal::findorfail($id);
		return $gaji;
	});
	Route::get('tambah-data-gaji',function(){
		$gaji = new App\Irsyal();
		$gaji->nama = "Indah Mambo";
		$gaji->jabatan = "Seketaris";
		$gaji->jenis_kelamin = "Perempuan";
		$gaji->alamat = "Bojong Honey";
		$gaji->total_gaji = "10jt";
		$gaji->agama = "Islam";
		$gaji->save();
		return $gaji;
	});
	Route::get('pesan/{makan}/{minum}/{harga}',function($mkn, $mnm, $harga){
		return 'Makanan yang saya pesan adalah '.$mkn.'<br>
			    Minuman yang saya pesan adalah '.$mnm.'<br>
			    Dan Harganya adalah '.$harga;
	});
	Route::get('halo/{nama?}',function($nama='Syahrul'){
	return 'Nama saya adalah '.$nama;
	});
	Route::get('mesan/{makanan?}/{minuman?}/{harga?}',function($makanan=null,$minuman=null,$harga=null){
		if  (isset($makanan)) {
			$makanan = " Anda Memesan $makanan";
			echo $makanan;
		}if (isset($minuman)) {
			$minuman = " & $minuman";
			echo $minuman;
		}if (isset($harga)) {
			$harga = " dengan harga $harga";
			echo $harga;
		}
		if (!$makanan && !$minuman && !$harga) {
			return "Anda Belum Memesan Sesuatu";
		}
	});
?>
