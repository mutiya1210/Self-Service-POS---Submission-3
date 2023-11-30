
    <h1>propile</h1>
    <hr>
    <table border = '0'>
        @if ($nama == 'Mutiya')
        <tr>
        <td>Nama Lengkap</td>
            <td> {{$nama}}</td>
        </tr>
</hr>
@endif
</table>
<h1>Contoh Pengulangan</h1>
<table>
    @forelse($data_array as $data)
        <tr>
            <td>Nama</td>
            <td> {{$data}}</td>
        </tr>
        @empty
        <tr>
            <td colspan ="2">Data Masih Kosong</td>
</tr>
            @endforelse
</table>
