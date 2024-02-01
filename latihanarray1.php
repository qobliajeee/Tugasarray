/<?php
// - nama lengkap
// - kelas
// - alamat
// - nisn
// - nomor whatsapp
// - hobi
// - cita_cita

$namaLengkap = [
    
    ["nama" => "Ali",
      "kelas" => "X MP 1",
      "alamat" => "Jl kemurnian",
      "nisn" => "513271852"  ,      
      "nomor_wa" => "0825341213",
      "hobi" => "Main games",
      "cita_cita" => "Pilot"
     
],
[
    "nama" => "Rehan",
    "kelas" => "X AK 2",
    "alamat" => "Jl Kesederhanan",
    "nisn" => "724364537" ,       
    "nomor_wa" => "0112231221",
    "hobi" => "Berenang",
    "cita_cita" => "Pemadam Kebakaran"


],
[
    "nama" => "Zoel",
      "kelas" => "X BR 2",
      "alamat" => "Jl Keadilan",
      "nisn" => "723453749",    
      "nomor_wa" => "085534332",
      "hobi" => "Bulu tangkis",
      "cita_cita" => "Pilot"
],
  [
    "nama" => "Alif",
      "kelas" => "X MP 2",
      "alamat" => "Jl Kerajinan",
      "nisn" => "823456478",    
      "nomor_wa" => "0872534342",
      "hobi" => "Main Bola",
      "cita_cita" => "Rider"
    

  ],
  [
    "nama" => "Ale",
      "kelas" => "X BR 1",
      "alamat" => "Jl Tanah Sereal",
      "nisn" => "946576380",    
      "nomor_wa" => "0895678810",
      "hobi" => "Renang",
      "cita_cita" => "seniman"
  ]

   ,[
    "nama" => "Rijal",
      "kelas" => "X BR 1",
      "alamat" => "Jl Pecakkulit",
      "nisn" => "764535895",    
      "nomor_wa" => "082166758195",
      "hobi" => "Melukis",
      "cita_cita" => "Chef"
   ]

,[
  "nama" => "Reza",
      "kelas" => "X BR 1",
      "alamat" => "Jl Sawalio",
      "nisn" => "765426085",    
      "nomor_wa" => "0876889545",
      "hobi" => "Lari",
      "cita_cita" => "Atlet"
]

,[
  "nama" => "Fikri",
      "kelas" => "X BR 1",
      "alamat" => "Jl Krendang",
      "nisn" => "9876456739",    
      "nomor_wa" => "081566788345",
      "hobi" => "Futsal",
      "cita_cita" => "BosMuda"
]

,[
    "nama" => "Umar",
    "kelas" => "X BR 1",
    "alamat" => "Jl Angke",
    "nisn" => "9876456739",    
    "nomor_wa" => "0887889167",
    "hobi" => "Memasak",
    "cita_cita" => "Capres"
]
,[
  "nama" => "Umar",
      "kelas" => "X BR 1",
      "alamat" => "Jl Tanah Sereal",
      "nisn" => "6745986235",    
      "nomor_wa" => "08996574362",
      "hobi" => "Shopping",
      "cita_cita" => "Kopasus"
]

]



?>


    <html>
      <table border= 1 cellpadding="8"  >
        <tr>
          <th>Nama Lengkap</th>
          <th>Kelas</th>
          <th>Alamat</th>
          <th>NISN</th>
          <th>NO WHATSAPP</th>
          <th>HOBI</th>
          <th>Cita - cita</th>


        </tr>
  

      <?php foreach($namaLengkap as $data):?>
        <tr>
           <td><?= $data["nama"]?> </td>
           <td><?= $data["kelas"]?> </td>
           <td><?= $data["alamat"]?> </td>
           <td><?= $data["nisn"]?> </td>
           <td><?= $data["nomor_wa"]?> </td>
           <td><?= $data["hobi"]?> </td>
           <td><?= $data["cita_cita"]?> </td>
           </tr>
      <?php endforeach;?>
    
    </table>
    </html>