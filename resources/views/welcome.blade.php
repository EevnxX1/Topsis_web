<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
</head>
<body class="font-[inter]">
  {{-- page 1 --}}
  <div class="w-full h-screen overflow-hidden flex flex-col">
    {{-- aksesoris --}}
    <div class="absolute -top-[150px] left-[200px]">
      <img src="{{ asset('asset/asset_1.png') }}" class="w-[50lvw]" alt="">
    </div>
    {{-- end aksesoris --}}
    <div class="w-20 mr-8 mt-8 self-end">
      <img src="{{ asset('asset/logo.png') }}" alt="logo">
    </div>
    <section class="w-[92%] self-end flex items-center justify-between min-[1680px]:mt-5">
      <div class="flex flex-col">
        <h1 class="text-[3.6lvw] text-cText1 font-bold">Selamat Datang di Website</h1>
        <h3 class="text-[3lvw] text-cText1 font-normal tracking-tighter leading-[60px]">Pencarian Universitas Terbaik</h3>
        <a href=""><button class="w-max h-max bg-cText1 text-white py-[14px] px-16 font-bold text-[1.5lvw] mt-5">Cari Data</button></a>
      </div>
      <div class="">
        <img src="{{ asset('asset/mahasiswa.png') }}" class="w-[67.3lvh]" alt="mahasiswa">
      </div>
    </section>
    <nav class="bg-cText1 flex justify-center flex-1">
      <ul class="flex justify-between items-center w-[60%] text-white text-[25px]">
        <li><a href="#page4">Data Universitas</a></li>
        <li><a href="#page4">Data Kriteria</a></li>
        <li><a href="#page4">Data Alternatif</a></li>
        <li><a href="#page5">Data Ranking</a></li>
      </ul>
    </nav>
  </div>
  {{-- End page 1 --}}
  {{-- page2 --}}
  <div id="page2" class="w-full h-max overflow-hidden flex relative">
    {{-- aksesoris --}}
    <div class="absolute -right-56 bottom-0 -z-10">
      <img src="{{ asset('asset/asset_2.png') }}" class="w-[85lvh]" alt="">
    </div>
    {{-- aksesoris --}}
    <section class="flex justify-center mt-20">
      <div class="flex flex-col w-[40%]">
        <div class="mb-14">
          <div class="textJudul">
            <h1>Data Bobot</h1>
          </div>
          <p class="textParagraft">
            Dalam metode TOPSIS pada sistem penunjang keputusan, bobot adalah nilai yang menunjukkan pentingnya setiap kriteria dalam evaluasi alternatif. Bobot ini digunakan untuk mengalikan nilai-nilai yang telah dinormalisasi, sehingga mencerminkan prioritas atau kepentingan relatif dari setiap kriteria dalam pengambilan keputusan. Bobot ditentukan berdasarkan preferensi atau kebijakan pembuat keputusan.
          </p>
        </div>
        {{-- table --}}
        <div>
          <div class="textJudul border-none mb-3">
            <h1>Tabel Bobot</h1>
          </div>
          <div class="w-full h-max rounded-lg overflow-hidden border-y-[3px] border-cText2/50">
            <table class="w-full text-cText2 text-center">
              <thead>
                <tr class="h-16">
                  <th class="border-x-[3px] border-b-[3px] border-cText2/50">Action</th>
                  <th class="border-x-[3px] border-b-[3px] border-cText2/50">Kode Bobot</th>
                  <th class="border-x-[3px] border-b-[3px] border-cText2/50">Bobot</th>
                </tr>
              </thead>
              <tbody>
                <tr class="h-11">
                  <td class="border-x-[3px] border-t-[3px] border-cText2/50">Hapus | Edit</td>
                  <td class="border-x-[3px] border-t-[3px] border-cText2/50">1</td>
                  <td class="border-x-[3px] border-t-[3px] border-cText2/50">Sangat Tidak Baik</td>
                </tr>
                <tr class="h-11">
                  <td class="border-x-[3px] border-t-[3px] border-cText2/50">Hapus | Edit</td>
                  <td class="border-x-[3px] border-t-[3px] border-cText2/50">2</td>
                  <td class="border-x-[3px] border-t-[3px] border-cText2/50">Tidak Baik</td>
                </tr>
                <tr class="h-11">
                  <td class="border-x-[3px] border-t-[3px] border-cText2/50">Hapus | Edit</td>
                  <td class="border-x-[3px] border-t-[3px] border-cText2/50">3</td>
                  <td class="border-x-[3px] border-t-[3px] border-cText2/50">Cukup Baik</td>
                </tr>
                <tr class="h-11">
                  <td class="border-x-[3px] border-t-[3px] border-cText2/50">Hapus | Edit</td>
                  <td class="border-x-[3px] border-t-[3px] border-cText2/50">4</td>
                  <td class="border-x-[3px] border-t-[3px] border-cText2/50">Baik</td>
                </tr>
                <tr class="h-11">
                  <td class="border-x-[3px] border-t-[3px] border-cText2/50">Hapus | Edit</td>
                  <td class="border-x-[3px] border-t-[3px] border-cText2/50">5</td>
                  <td class="border-x-[3px] border-t-[3px] border-cText2/50">Sangat Baik</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        {{-- end table --}}
      </div>
      <div class="self-end">
        <img src="{{ asset('asset/woman.png') }}" class="w-[70lvh]" alt="woman">
      </div>
    </section>
  </div>
  {{-- End page2 --}}
  {{-- page3 --}}
  <div id="page3" class="w-full h-max overflow-hidden flex mt-32 relative">
    {{-- aksesoris --}}
    <div class="absolute scale-x-[-1] left-[-100px] bottom-0 -z-10">
      <img src="{{ asset('asset/asset_2.png') }}" class="w-[85lvh]" alt="asset">
    </div>
    {{-- aksesoris --}}
    <section class="w-full flex justify-center gap-x-64">
      <div class="self-end">
        <img src="{{ asset('asset/man1.png') }}" class="w-[60lvh]" alt="man1">
      </div>
      <div class="flex flex-col w-[35vw] self-end">
        <div class="w-full border-b-4 border-[#989898] mb-8">
          <h1 class="text-[36px] font-bold text-cText2 text">Form Universitas</h1>
        </div>
        <form action="">
          <div class="bungkusInput">
            <label for="">Kode Universitas</label>
            <input class="input" type="text" name="" id="" placeholder="Masukkan Kode Universitas">
          </div>
          <div class="bungkusInput">
            <label for="">Nama Universitas</label>
            <input class="input" type="text" name="" id="" placeholder="Masukkan Nama Universitas">
          </div>
          <div class="bungkusInput">
            <label for="">Alamat</label>
            <input class="input" type="text" name="" id="" placeholder="Masukkan Alamat Universitas">
          </div>
          <div class="mb-5 flex justify-center text-[#A4A4A4]">
            <p>Isi Kriteria Dari Data Diatas</p>
          </div>
          <div class="bungkusInput">
            <label for="">Akreditasi Kampus</label>
            <select class="input" name="" id="">
              <option selected>Skala Bobot: 1- 5</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
          <div class="bungkusInput">
            <label for="">Jurusan</label>
            <select class="input" name="" id="">
              <option selected>Skala Bobot: 1- 5</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
          <div class="bungkusInput">
            <label for="">Fasilitas</label>
            <select class="input" name="" id="">
              <option selected>Skala Bobot: 1- 5</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
          <div class="bungkusInput">
            <label for="">Biaya</label>
            <select class="input" name="" id="">
              <option selected>Skala Bobot: 1- 5</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
          <div class="w-full flex justify-center gap-x-4 mt-11">
            <button class="w-max h-max py-3 px-7 bg-cText1 text-white font-bold" type="submit">Simpan Data</button>
            <button class="w-max h-max py-3 px-7 bg-cText1 text-white font-bold" type="reset">Reset Data</button>
          </div>
        </form>
      </div>
    </section>
  </div>
  {{-- End page3 --}}
  {{-- page4 --}}
  <div id="page4" class="w-full h-max overflow-hidden flex justify-center mt-32 relative">
    <div class="w-[85%] flex flex-col ">
      <div class="text-cText3 text-[4lvh] font-bold border-b-2 border-cText3 w-max">
        <h1>Data Universitas Alternatif & Kriteria</h1>
      </div>
      <div class="my-7 flex gap-x-5">
        <a href=""><button class="text-[1.7lvh] text-white bg-cText1 py-2 px-7 font-bold">+ Tambah Data</button></a>
        <a href=""><button class="text-[1.7lvh] text-white bg-cText1 py-2 px-7 font-bold">Hapus Data</button></a>
      </div>
      <div class="w-full h-max rounded-lg overflow-hidden border-y-[3px] border-cText2/50">
        <table class="w-full text-cText2 text-center">
          <thead>
            <tr class="h-16">
              <th class="border-x-[3px] border-b-[3px] border-cText2/50">No</th>
              <th class="border-x-[3px] border-b-[3px] border-cText2/50">Nama Universitas</th>
              <th class="border-x-[3px] border-b-[3px] border-cText2/50">Alamat</th>
              <th class="border-x-[3px] border-b-[3px] border-cText2/50">Akreditasi Kampus</th>
              <th class="border-x-[3px] border-b-[3px] border-cText2/50">Fasilitas</th>
              <th class="border-x-[3px] border-b-[3px] border-cText2/50">Jurusan</th>
              <th class="border-x-[3px] border-b-[3px] border-cText2/50">Biaya</th>
              <th class="border-x-[3px] border-b-[3px] border-cText2/50">Lokasi</th>
            </tr>
          </thead>
          <tbody>
            <tr class="h-11">
              <td class="border-x-[3px] border-cText2/50">1</td>
              <td class="border-x-[3px] border-cText2/50">Nama Universitas</td>
              <td class="border-x-[3px] border-cText2/50">Alamat</td>
              <td class="border-x-[3px] border-cText2/50">Akreditasi Kampus</td>
              <td class="border-x-[3px] border-cText2/50">Fasilitas</td>
              <td class="border-x-[3px] border-cText2/50">Jurusan</td>
              <td class="border-x-[3px] border-cText2/50">Biaya</td>
              <td class="border-x-[3px] border-cText2/50">Lokasi</td>
            </tr>
            <tr class="h-11">
              <td class="border-x-[3px] border-cText2/50">1</td>
              <td class="border-x-[3px] border-cText2/50">Nama Universitas</td>
              <td class="border-x-[3px] border-cText2/50">Alamat</td>
              <td class="border-x-[3px] border-cText2/50">Akreditasi Kampus</td>
              <td class="border-x-[3px] border-cText2/50">Fasilitas</td>
              <td class="border-x-[3px] border-cText2/50">Jurusan</td>
              <td class="border-x-[3px] border-cText2/50">Biaya</td>
              <td class="border-x-[3px] border-cText2/50">Lokasi</td>
            </tr>
            <tr class="h-11">
              <td class="border-x-[3px] border-cText2/50">1</td>
              <td class="border-x-[3px] border-cText2/50">Nama Universitas</td>
              <td class="border-x-[3px] border-cText2/50">Alamat</td>
              <td class="border-x-[3px] border-cText2/50">Akreditasi Kampus</td>
              <td class="border-x-[3px] border-cText2/50">Fasilitas</td>
              <td class="border-x-[3px] border-cText2/50">Jurusan</td>
              <td class="border-x-[3px] border-cText2/50">Biaya</td>
              <td class="border-x-[3px] border-cText2/50">Lokasi</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  {{-- End page4 --}}
  {{-- page5 --}}
  <div id="page5" class="w-full h-max overflow-hidden flex justify-center mt-32 relative">
    <div class="w-[95%] bg-cText1 flex flex-col items-center py-14 rounded-3xl">
      <div class="w-[90%] mb-20">
        <h1 class="text-center text-white text-[4lvh] font-bold mb-10">Tabel Matrix Ternormalisasi</h1>
        <div class="w-full h-max rounded-lg overflow-hidden border-y-[3px] border-white">
          <table class="w-full text-white text-center">
            <thead>
              <tr class="h-16">
                <th class="border-x-[3px] border-b-[3px] border-white">No</th>
                <th class="border-x-[3px] border-b-[3px] border-white">Nama Universitas</th>
                <th class="border-x-[3px] border-b-[3px] border-white">Alamat</th>
                <th class="border-x-[3px] border-b-[3px] border-white">Akreditasi Kampus</th>
                <th class="border-x-[3px] border-b-[3px] border-white">Fasilitas</th>
                <th class="border-x-[3px] border-b-[3px] border-white">Jurusan</th>
                <th class="border-x-[3px] border-b-[3px] border-white">Biaya</th>
                <th class="border-x-[3px] border-b-[3px] border-white">Lokasi</th>
              </tr>
            </thead>
            <tbody>
              <tr class="h-11">
                <td class="border-x-[3px] border-white">1</td>
                <td class="border-x-[3px] border-white">Nama Universitas</td>
                <td class="border-x-[3px] border-white">Alamat</td>
                <td class="border-x-[3px] border-white">Akreditasi Kampus</td>
                <td class="border-x-[3px] border-white">Fasilitas</td>
                <td class="border-x-[3px] border-white">Jurusan</td>
                <td class="border-x-[3px] border-white">Biaya</td>
                <td class="border-x-[3px] border-white">Lokasi</td>
              </tr>
              <tr class="h-11">
                <td class="border-x-[3px] border-white">1</td>
                <td class="border-x-[3px] border-white">Nama Universitas</td>
                <td class="border-x-[3px] border-white">Alamat</td>
                <td class="border-x-[3px] border-white">Akreditasi Kampus</td>
                <td class="border-x-[3px] border-white">Fasilitas</td>
                <td class="border-x-[3px] border-white">Jurusan</td>
                <td class="border-x-[3px] border-white">Biaya</td>
                <td class="border-x-[3px] border-white">Lokasi</td>
              </tr>
              <tr class="h-11">
                <td class="border-x-[3px] border-white">1</td>
                <td class="border-x-[3px] border-white">Nama Universitas</td>
                <td class="border-x-[3px] border-white">Alamat</td>
                <td class="border-x-[3px] border-white">Akreditasi Kampus</td>
                <td class="border-x-[3px] border-white">Fasilitas</td>
                <td class="border-x-[3px] border-white">Jurusan</td>
                <td class="border-x-[3px] border-white">Biaya</td>
                <td class="border-x-[3px] border-white">Lokasi</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="w-[90%]">
        <h1 class="text-center text-white text-[4lvh] font-bold mb-10">Tabel Hasil Perangkingan</h1>
        <div class="w-full h-max rounded-lg overflow-hidden border-y-[3px] border-white">
          <table class="w-full text-white text-center">
            <thead>
              <tr class="h-16">
                <th class="border-x-[3px] border-b-[3px] border-white">No</th>
                <th class="border-x-[3px] border-b-[3px] border-white">Nama Universitas</th>
                <th class="border-x-[3px] border-b-[3px] border-white">Alamat</th>
                <th class="border-x-[3px] border-b-[3px] border-white">Akreditasi Kampus</th>
                <th class="border-x-[3px] border-b-[3px] border-white">Fasilitas</th>
                <th class="border-x-[3px] border-b-[3px] border-white">Jurusan</th>
                <th class="border-x-[3px] border-b-[3px] border-white">Biaya</th>
                <th class="border-x-[3px] border-b-[3px] border-white">Lokasi</th>
              </tr>
            </thead>
            <tbody>
              <tr class="h-11">
                <td class="border-x-[3px] border-white">1</td>
                <td class="border-x-[3px] border-white">Nama Universitas</td>
                <td class="border-x-[3px] border-white">Alamat</td>
                <td class="border-x-[3px] border-white">Akreditasi Kampus</td>
                <td class="border-x-[3px] border-white">Fasilitas</td>
                <td class="border-x-[3px] border-white">Jurusan</td>
                <td class="border-x-[3px] border-white">Biaya</td>
                <td class="border-x-[3px] border-white">Lokasi</td>
              </tr>
              <tr class="h-11">
                <td class="border-x-[3px] border-white">1</td>
                <td class="border-x-[3px] border-white">Nama Universitas</td>
                <td class="border-x-[3px] border-white">Alamat</td>
                <td class="border-x-[3px] border-white">Akreditasi Kampus</td>
                <td class="border-x-[3px] border-white">Fasilitas</td>
                <td class="border-x-[3px] border-white">Jurusan</td>
                <td class="border-x-[3px] border-white">Biaya</td>
                <td class="border-x-[3px] border-white">Lokasi</td>
              </tr>
              <tr class="h-11">
                <td class="border-x-[3px] border-white">1</td>
                <td class="border-x-[3px] border-white">Nama Universitas</td>
                <td class="border-x-[3px] border-white">Alamat</td>
                <td class="border-x-[3px] border-white">Akreditasi Kampus</td>
                <td class="border-x-[3px] border-white">Fasilitas</td>
                <td class="border-x-[3px] border-white">Jurusan</td>
                <td class="border-x-[3px] border-white">Biaya</td>
                <td class="border-x-[3px] border-white">Lokasi</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  {{-- End page5 --}}
  {{-- page6 --}}
  <div id="page6" class="w-full h-max overflow-hidden flex justify-center mt-32 relative">
    {{-- Aksesoris --}}
    <div class="absolute -z-10 bottom-0 right-0">
      <img src="{{ asset('asset/asset_2.png') }}" class="w-[85lvh]" alt="asset">
    </div>
    <div class="absolute -z-10 scale-x-[-1] top-0 left-0">
      <img src="{{ asset('asset/asset_2.png') }}" class="w-[85lvh]" alt="asset">
    </div>
    {{-- Aksesoris --}}
    <div>
      <img src="{{ asset('asset/manAndWoman.png') }}" class="w-[150lvh]" alt="ManWoman">
    </div>
  </div>
  {{-- End page6 --}}
</body>
</html>