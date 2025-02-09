<!doctype html>
<html >
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Surat Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </head>
  <div class="container">
  <div class="row">
  
    <table border="1" align="center">
    <tr>
    <td img src="" width="70" height="70" ></td>
    <td><center>
        <font size="4"> Lembaga Dalam Rangka Pembelaan Dan Keadilan UranusPLUTO</font><BR>
        <font size="7"> Pusat Bela Diri</font><BR>
        <font size="2"> jalan warung bambu</font><BR></center>
    </td>
    </tr>
    <tr>
    <td colspan="2"><hr></td>
    </tr>
    
    </table>
    <br>
    <table align="center">
    <tr>
    <td> Menimbang</td>
    <td width="500">: Dalam rangka {{ $stugas ->nama_kegiatan}}  maka dipandang perlu 
    untuk menugaskan pegawai Pusat Bela Diri tersebut di bawah ini </td>

    </tr>
    <tr>
    <td> Dasar</td>
    <td width="500">: 1.Peraturan Menteri Keuangan No. 113/PMK.05.2012, tanggal 03 Juli 2012 tentang
Perjalanan Dinas dalam Negeri bagi Pejabat Negara, Pegawai Negeri dan
Pegawai Tidak Tetap;</td>
    </tr>
    <tr>
    <td></td>
    <td width="500">: 2.Peraturan Direktur Jenderal Perbendaharaan No. PER-22/PB/2013, tentang
Ketentuan Lebih Lanjut Pelaksanaan Perjalanan Dinas Dalam Negeri bagi
Pejabat Negara, Pegawai Negeri dan Pegawai Tidak Tetap;</td>
    </tr>
    <tr>
    <td></td>
    <td width="500">: 3.Peraturan Lembaga Dalam Rangka Pembelaan Dan Keadilan UranusPLUTO No 1 Tahun 2021 tentang
Organisasi dan Tata Kerja Lembaga Dalam Rangka Pembelaan Dan Keadilan UranusPLUTO</td>
    </tr>
    </table>
    <br/><br/>
<center>
  <font size="5"><b>Memberi Tugas </b></font><br/> 
</center>
<br/><br/>
<table align="center" >
<tr>
    <td > Kepada </td>
    <td width="200"> : </td>
    <td>
    <table border="0.5" width="400" align="right">
<thead>
      <tr>
        <th>Nama </th>
        <th>NIP </th>
        <th>Jabatan </th>
      </tr>
</thead>
<tbody>
          
        @foreach ($stugas->sivitas as $item)
        <tr>
        <td>  {{ $item->nama }} </td>
        <td>  {{ $item->nip }} </td>
        <td>  {{ $item->jabatan }}  </td>
           
        </tr>
        @endforeach
          
<tbody>
      </table>
      <br /><br /><br />

    </td>
    </tr>
</table>
<table align="center">
    <tr>
    <td> Untuk </td>
    <td width="450">: melaksanankan {{ $stugas->nama_kegiatan}} dari   {{ $stugas->tanggal_dimulai}}
               sampai  {{ $stugas->tanggal_selesai}}    </td>

    </tr>
      
    </table>
    <table>
    <tr>
  <td height="50"></td>
  </tr>
    </table>
    <table width="75%" align="right">
  <tr>
    <td width="50%"></td>
    <td width="50%">
      <center>Warungbambu, 
            {{ $stugas->created_at}}
             </center>
    </td>
  </tr>
  <tr>
  <td height="50"></td>
  </tr>
  <tr>
    <td></td>
    <td>
      <center><b><u>
      @foreach ($stugas->petugas as $item)
            {{ $item->nama }}
            @endforeach
            </u></b></center>
    </td>
  </tr>
  <tr>
    <td></td>
    <td>
      <center>NIP.@foreach ($stugas->petugas as $item)
        {{ $item->nip }}
        @endforeach
         </center>
    </td>
  </tr>
</table>

  </div>
  
  </div>
    



  
</html>