@extends('layouts.app')

@section('content')
<div class="py-4">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="mb-4">
<h2><i class="fas fa-edit me-2"></i>Edit ToDo</h2>
<p class="text-muted">Perbarui informasi tugas Anda</p>
</div>

<form action="{{ route('todos.update', $todo) }}" method="POST" class="needs-validation" novalidate>
@csrf
@method('PUT')

<div class="mb-4">
<label class="form-label">
<i class="fas fa-heading me-2"></i>Judul
</label>
<input 
type="text" 
name="title" 
class="form-control form-control-lg" 
value="{{ old('title', $todo->title) }}"
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
placeholder="Tambahkan deskripsi atau catatan...">{{ old('description', $todo->description) }}</textarea>
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
{{ old('is_completed', $todo->is_completed) ? 'checked' : '' }}>
<label class="form-check-label ms-2" for="is_completed" style="font-size: 1.1rem;">
<i class="fas fa-check-circle me-2"></i>Tandai sebagai selesai
</label>
</div>
@if($todo->is_completed && $todo->completed_at)
<small class="text-muted d-block mt-2 ms-2">
<i class="far fa-clock me-1"></i>Diselesaikan pada: {{ $todo->completed_at->format('d M Y H:i') }}
</small>
@endif
</div>
</div>

<div class="d-flex gap-3 mt-4">
<button type="submit" class="btn btn-primary btn-lg flex-grow-1">
<i class="fas fa-sync-alt me-2"></i>Perbarui ToDo
</button>
<a href="{{ route('todos.index') }}" class="btn btn-secondary btn-lg">
<i class="fas fa-times me-2"></i>Batal
</a>
</div>
</form>

<div class="mt-4 p-3 bg-light rounded-3">
<small class="text-muted">
<i class="fas fa-info-circle me-2"></i>
<strong>Dibuat:</strong> {{ $todo->created_at->format('d M Y H:i') }}
@if($todo->updated_at != $todo->created_at)
| <strong>Terakhir diubah:</strong> {{ $todo->updated_at->format('d M Y H:i') }}
@endif
</small>
</div>
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
transition: all 0.3s ease;
}

.form-switch .form-check-input:checked {
background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
}

.form-switch .form-check-input:hover {
transform: scale(1.05);
}

.form-check-label {
cursor: pointer;
user-select: none;
}

.gap-3 {
gap: 1rem !important;
}

.card-custom {
transition: all 0.3s ease;
}

.card-custom:hover {
transform: translateY(-2px);
box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}
</style>

<script>
// Form validation and animation
document.addEventListener('DOMContentLoaded', function() {
const form = document.querySelector('form');
const inputs = form.querySelectorAll('input, textarea');
const checkbox = document.getElementById('is_completed');

// Input focus animation
inputs.forEach(input => {
input.addEventListener('focus', function() {
this.style.transform = 'scale(1.02)';
});

input.addEventListener('blur', function() {
this.style.transform = 'scale(1)';
});
});

// Checkbox animation
if (checkbox) {
checkbox.addEventListener('change', function() {
const label = this.nextElementSibling;
if (this.checked) {
label.style.animation = 'pulse 0.5s ease';
} else {
label.style.animation = '';
}
setTimeout(() => {
label.style.animation = '';
}, 500);
});
}

// Form validation
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