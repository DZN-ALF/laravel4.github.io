@extends('layouts.main')
<nav class="navbar navbar-light bg-light">
    <div class="container">
        <div class="float-left">
            <a class="btn btn-success" href="login"> Login</a>
        </div>
        <div class="float-right ms-auto">
            <a class="btn btn-success" href="{{ route('pesan.create') }}"> Pesan</a>
        </div>
    </div>
  </nav>
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
        </div>
        <div class="float-right">
        </div>
    </div>
</div>
@if ($message = Session::get('succes'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered" style="color: white">
    <tr>
        <th width="20px" class="text-center">No</th>
        <th width="280px">Nama</th>
        <th width="280px"class="text-center">Tujuan</th>
        <th width="280px"class="text-center">Kelas</th>
        <th width="280px"class="text-center">Berangkat</th>
        <th width="280px"class="text-center">Pulang</th>
    </tr>
    @foreach ($pesan as $p)
    <tr>
        <td class="text-center">{{ ++$i }}</td>
        <td>{{ $p->nama}}</td>
        <td>{{ $p->tujuan }}</td>
        <td>{{ $p->kelas }}</td> 
        <td>{{ $p->pemberangkatan }}</td>
        <td>{{ $p->pemulangan }}</td>

        <td class="text-center">
            <form action="{{ route('pesan.destroy',$p->id) }}" method="POST">

               <a class="btn btn-info btn-sm" href="{{ route('pesan.show',$p->id) }}">Show</a>

                <a class="btn btn-primary btn-sm" href="{{ route('pesan.edit',$p->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin membatalkan?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $pesan->links() !!}
