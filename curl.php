<?php
//   buat fungsi http request
 function http_request($url){

// persiapan curl
 $ch = curl_init();

//  set url
 curl_setopt($ch, CURLOPT_URL, $url);

// fungsi transfer nilai yg berupa string
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// mematikan ssl verify dan peer verify untuk localhost (ganti valuenya bila sc ini berjalan di hosting
 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

// tampung hasil ke dalam variable output
 $output = curl_exec($ch);

// tutup curl
 curl_close($ch);

//  mengembalikan hasil curl
 return $output;

   }

// panggil fungsi http_request (url / link api)
$data = http_request("https://indonesia-covid-19.mathdro.id/api/provinsi/");
$data = json_decode($data, TRUE);

// echo print_r($data);

// tamoung jumlah data
$jumlah = count($data['data']);
$nomor = 1;

for ($i = 0; $i < $jumlah; $i++) {
$hasil = $data['data'][$i];

?>

<tr>
 <td><?=$nomor++?></td>
 <td><?=$hasil['provinsi']?></td>
 <td><?=$hasil['kasusPosi']?></td>
 <td><?=$hasil['kasusSemb']?></td>
 <td><?=$hasil['kasusMeni']?></td>
</tr>

<?php
}
?>