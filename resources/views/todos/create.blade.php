@extends('layouts.app')

@section('content')
<div class="py-4">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="mb-4">
<h2><i class="fas fa-plus-circle me-2"></i>Buat ToDo Baru</h2>
<p class="text-muted">Tambahkan tugas baru ke dalam daftar Anda</p>
</div>

<form action="{{ route('todos.store') }}" method="POST" class="needs-validation" novalidate>
@csrf

<div class="mb-4">
<label class="form-label">
<i class="fas fa-heading me-2"></i>Judul
</label>
<input 
type="text" 
name="title" 
class="form-control form-control-lg" 
value="{{ old('title') }}" 
placeholder="Masukkan judul ToDo..."
required>
@error('title')
<div class="text-danger mt-2">
<i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
</div>
@enderror
</div>

<div class="mb-4">
<label class="form-label">
<i class="fas fa-align-left me-2"></i>Keterangan
</label>
<textarea 
name="description" 
class="form-control" 
rows="4"
placeholder="Tambahkan deskripsi atau catatan...">{{ old('description') }}</textarea>
<small class="text-muted">Opsional - Berikan detail lebih lanjut tentang tugas ini</small>
</div>

<div class="mb-4">
<div class="card-custom p-3 bg-light">
<div class="form-check form-switch">
<input 
class="form-check-input" 
type="checkbox" 
name="is_completed" 
id="is_completed" 
style="width: 3em; height: 1.5em;"
{{ old('is_completed') ? 'checked' : '' }}>
<label class="form-check-label ms-2" for="is_completed" style="font-size: 1.1rem;">
<i class="fas fa-check-circle me-2"></i>Tandai sebagai selesai
</label>
</div>
</div>
</div>

<div class="d-flex gap-3 mt-4">
<button type="submit" class="btn btn-success btn-lg flex-grow-1">
<i class="fas fa-save me-2"></i>Simpan ToDo
</button>
<a href="{{ route('todos.index') }}" class="btn btn-secondary btn-lg">
<i class="fas fa-times me-2"></i>Batal
</a>
</div>
</form>
</div>
</div>
</div>

<style>
.form-control-lg {
border-radius: 12px;
padding: 1rem 1.5rem;
font-size: 1.1rem;
}

.form-control:hover {
border-color: #667eea;
}

textarea.form-control {
resize: vertical;
}

.form-switch .form-check-input {
cursor: pointer;
background-color: #e0e0e0;
border: none;
}

.form-switch .form-check-input:checked {
background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
}

.form-check-label {
cursor: pointer;
user-select: none;
}

.gap-3 {
gap: 1rem !important;
}
</style>

<script>
// Form validation animation
document.addEventListener('DOMContentLoaded', function() {
const form = document.querySelector('form');
const inputs = form.querySelectorAll('input, textarea');

inputs.forEach(input => {
input.addEventListener('focus', function() {
this.style.transform = 'scale(1.02)';
});

input.addEventListener('blur', function() {
this.style.transform = 'scale(1)';
});
});

form.addEventListener('submit', function(e) {
if (!form.checkValidity()) {
e.preventDefault();
e.stopPropagation();
}
form.classList.add('was-validated');
});
});
</script>
@endsection