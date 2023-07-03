@php
    $nama = "Aziz";
    $nilai = 90;
@endphp

@if ($nilai > 60)
    @php
        $ket  = 'Lulus'
    @endphp
    
@else
    @php
        $ket = 'Gagal'
    @endphp
    
@endif

Siswa {{ $nama }} keterangan {{ $ket }}