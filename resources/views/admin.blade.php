{{-- resources/views/admin.blade.php --}}
@extends('layouts.app') 

@section('content')
<!-- Hero Area Start -->
<div class="hero-area2 d-flex align-items-center">
    <div class="container">
        <div class="row ">
            <div class="col-xl-12">
                <!-- Hero Caption -->
                <div class="hero-cap pt-100">
                    <h2>Setting Portofolio</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->
<div class="container my-5">

    <!-- Form Tambah Data -->
    <div class="card mb-4">
        <div class="card-header">
            <h4>Tambah Data Portofolio Baru</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('portfolios.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Nama Proyek</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama proyek" required>
                </div>
                <div class="form-group">
                    <label for="image">Upload Gambar</label>
                    <input type="file" class="form-control-file" id="image" name="image" required>
                </div>
                <div class="form-group">
                    <label for="project_link">Link Proyek</label>
                    <input type="url" class="form-control" id="project_link" name="project_link" placeholder="Masukkan link proyek" required>
                </div>
                <div class="form-group">
                    <label for="description">Deskripsi Proyek</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Masukkan deskripsi proyek" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>

    <!-- Tabel Daftar Data -->
    <div class="card">
        <div class="card-header">
            <h4>Daftar Portofolio</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Proyek</th>
                        <th>URL Gambar</th>
                        <th>Link Proyek</th>
                        <th>Deskripsi Proyek</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($portfolios as $key => $portfolio)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $portfolio->name }}</td>
                        <td>{{ $portfolio->image_url }}</td>
                        <td><a href="{{ $portfolio->project_link }}" target="_blank" style="color: #007bff; text-decoration: underline;">Link</a></td>
                        <td>{{ $portfolio->description }}</td>
                        <td>
                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal{{ $portfolio->id }}">Edit</button>
                            <form action="{{ route('portfolios.destroy', $portfolio->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus proyek?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>

                    <!-- Modal Edit untuk setiap data -->
                    <div class="modal fade" id="editModal{{ $portfolio->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $portfolio->id }}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel{{ $portfolio->id }}">Edit Data Proyek</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('portfolios.update', $portfolio->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="editName{{ $portfolio->id }}">Nama Proyek</label>
                                            <input type="text" class="form-control" id="editName{{ $portfolio->id }}" name="name" value="{{ $portfolio->name }}" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="editImageURL{{ $portfolio->id }}">URL Gambar</label>
                                            <input type="text" class="form-control" id="editImageURL{{ $portfolio->id }}" name="image_url" value="{{ $portfolio->image_url }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="editProjectLink{{ $portfolio->id }}">Link Proyek</label>
                                            <input type="url" class="form-control" id="editProjectLink{{ $portfolio->id }}" name="project_link" value="{{ $portfolio->project_link }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="editDescription{{ $portfolio->id }}">Deskripsi Proyek</label>
                                            <textarea class="form-control" id="editDescription{{ $portfolio->id }}" name="description" required>{{ $portfolio->description }}</textarea>
                                        </div>
                                        <button type="submit" class="btn btn-success">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>

</div>
@endsection
