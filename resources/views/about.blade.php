@extends('layouts.main')

@section('content')
    <table class="table">
        <tr class="table-danger">
            <th>Name</th>
            <th>Jurusan</th>
            <th>NIM</th>
            <th>Image</th>
        </tr>
        <tr>
            <td>{{ $Name }}</td>
            <td>{{ $Jurusan }}</td>
            <td>{{ $NIM }}</td>
            <td><img src="img/{{ $image }}" alt="{{ $Name }}" width="100"></td>
        </tr>
        <tr>
            <td>{{ $Name1 }}</td>
            <td>{{ $Jurusan1 }}</td>
            <td>{{ $NIM1 }}</td>
            <td><img src="img/{{ $image1 }}" alt="{{ $Name1 }}" width="100"></td>
        </tr>
        <tr>
            <td>{{ $Name2 }}</td>
            <td>{{ $Jurusan2 }}</td>
            <td>{{ $NIM2 }}</td>
            <td><img src="img/{{ $image2 }}" alt="{{ $Name2 }}" width="100"></td>
        </tr>
        <tr>
            <td>{{ $Name3 }}</td>
            <td>{{ $Jurusan3 }}</td>
            <td>{{ $NIM3 }}</td>
            <td><img src="img/{{ $image3 }}" alt="{{ $Name3 }}" width="100"></td>
        </tr>

        <tr>
            <td>{{ $Name4 }}</td>
            <td>{{ $Jurusan4 }}</td>
            <td>{{ $NIM4 }}</td>
            <td><img src="img/{{ $image4 }}" alt="{{ $Name4 }}" width="100"></td>
        </tr>
    </table>
@endsection
