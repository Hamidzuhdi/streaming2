@extends('layout')
@section('narahubung')


<link rel="stylesheet" href="css/css-live.css">
<title>Document</title>
    <title>Jadwal Pertandingan Hari Ini</title>
<body>
    <div class="jadwal">
        <div class="pertandingan">
            <div class="tim">
                <p>Tim A</p>
                <p>vs</p>
                <p>Tim B</p>
            </div>
            <div class="waktu">
                <p>13:00 WIB</p>
            </div>
        </div>
        <div class="pertandingan">
            <div class="tim">
                <p>Tim C</p>
                <p>vs</p>
                <p>Tim D</p>
            </div>
            <div class="waktu">
                <p>15:30 WIB</p>
            </div>
        </div>
        <!-- Tambahkan lebih banyak pertandingan di sini jika diperlukan -->
    </div>
</body>

@endsection

