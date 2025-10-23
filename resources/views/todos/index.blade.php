@extends('layouts.app')

@section('content')
<div class="py-4">
@if(session('success'))
<div class="alert alert-success">
<i class="fas fa-check-circle me-2"></i>{{ session('success') }}
</div>
@endif

<div class="d-flex justify-content-between align-items-center mb-4">
<h2><i class="fas fa-list-check me-2"></i>Daftar ToDo</h2>
<a href="{{ route('todos.create') }}" class="btn btn-primary">
<i class="fas fa-plus me-2"></i>Buat ToDo Baru
</a>
</div>

<div class="table-responsive">
<table class="table table-hover align-middle">
<thead>
<tr>
<th style="width: 5%">#</th>
<th style="width: 25%">Judul</th>
<th style="width: 35%">Keterangan</th>
<th style="width: 15%">Status</th>
<th style="width: 20%">Aksi</th>
</tr>
</thead>
<tbody>
@forelse($todos as $todo)
<tr>
<td><strong>{{ $loop->iteration }}</strong></td>
<td>
<i class="fas fa-{{ $todo->is_completed ? 'check-circle text-success' : 'circle text-warning' }} me-2"></i>
<strong>{{ $todo->title }}</strong>
</td>
<td>{{ $todo->description ?? '-' }}</td>
<td>
@if($todo->is_completed)
<span class="status-completed">
<i class="fas fa-check me-1"></i>Selesai
</span>
<br><small class="text-muted mt-1 d-block">
<i class="far fa-clock me-1"></i>{{ $todo->completed_at->format('d M Y H:i') }}
</small>
@else
<span class="status-pending">
<i class="fas fa-clock me-1"></i>Belum
</span>
@endif
</td>
<td>
<div class="btn-group" role="group">
<a href="{{ route('todos.edit', $todo) }}" class="btn btn-sm btn-warning" title="Edit">
<i class="fas fa-edit"></i>
</a>
<form action="{{ route('todos.destroy', $todo) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin ingin menghapus ToDo ini?');">
@csrf
@method('DELETE')
<button class="btn btn-sm btn-danger" title="Hapus">
<i class="fas fa-trash"></i>
</button>
</form>
</div>
</td>
</tr>
@empty
<tr>
<td colspan="5" class="text-center py-5">
<i class="fas fa-inbox fa-3x text-muted mb-3"></i>
<p class="text-muted">Belum ada ToDo. Mulai buat yang pertama!</p>
<a href="{{ route('todos.create') }}" class="btn btn-primary mt-2">
<i class="fas fa-plus me-2"></i>Buat ToDo Pertama
</a>
</td>
</tr>
@endforelse
</tbody>
</table>
</div>

@if($todos->count() > 0)
<div class="mt-4 p-3 bg-light rounded-3">
<div class="row text-center">
<div class="col-md-4">
<div class="card-custom p-3 bg-white">
<i class="fas fa-tasks fa-2x mb-2" style="color: #667eea;"></i>
<h4>{{ $todos->count() }}</h4>
<p class="mb-0 text-muted">Total ToDo</p>
</div>
</div>
<div class="col-md-4">
<div class="card-custom p-3 bg-white">
<i class="fas fa-check-circle fa-2x mb-2" style="color: #11998e;"></i>
<h4>{{ $todos->where('is_completed', true)->count() }}</h4>
<p class="mb-0 text-muted">Selesai</p>
</div>
</div>
<div class="col-md-4">
<div class="card-custom p-3 bg-white">
<i class="fas fa-hourglass-half fa-2x mb-2" style="color: #ffa751;"></i>
<h4>{{ $todos->where('is_completed', false)->count() }}</h4>
<p class="mb-0 text-muted">Belum Selesai</p>
</div>
</div>
</div>
</div>
@endif
</div>
@endsection