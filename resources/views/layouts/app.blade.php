<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ToDo Laravel</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
:root {
--primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
--success-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
--card-shadow: 0 10px 40px rgba(0,0,0,0.1);
--hover-shadow: 0 15px 50px rgba(0,0,0,0.15);
}

body {
background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
min-height: 100vh;
font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.navbar {
background: rgba(255, 255, 255, 0.95) !important;
backdrop-filter: blur(10px);
box-shadow: 0 4px 20px rgba(0,0,0,0.1);
transition: all 0.3s ease;
}

.navbar-brand {
font-weight: 700;
font-size: 1.5rem;
background: var(--primary-gradient);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
background-clip: text;
transition: transform 0.3s ease;
}

.navbar-brand:hover {
transform: scale(1.05);
}

.container.content-wrapper {
background: white;
border-radius: 20px;
padding: 2rem;
margin-top: 2rem;
margin-bottom: 2rem;
box-shadow: var(--card-shadow);
animation: fadeInUp 0.6s ease;
}

@keyframes fadeInUp {
from {
opacity: 0;
transform: translateY(30px);
}
to {
opacity: 1;
transform: translateY(0);
}
}

.btn {
border-radius: 10px;
padding: 0.6rem 1.5rem;
font-weight: 600;
border: none;
transition: all 0.3s ease;
position: relative;
overflow: hidden;
}

.btn::before {
content: '';
position: absolute;
top: 50%;
left: 50%;
width: 0;
height: 0;
border-radius: 50%;
background: rgba(255,255,255,0.3);
transform: translate(-50%, -50%);
transition: width 0.6s, height 0.6s;
}

.btn:hover::before {
width: 300px;
height: 300px;
}

.btn-primary {
background: var(--primary-gradient);
box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
}

.btn-primary:hover {
transform: translateY(-2px);
box-shadow: 0 6px 20px rgba(102, 126, 234, 0.6);
}

.btn-success {
background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
box-shadow: 0 4px 15px rgba(17, 153, 142, 0.4);
}

.btn-success:hover {
transform: translateY(-2px);
box-shadow: 0 6px 20px rgba(17, 153, 142, 0.6);
}

.btn-warning {
background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
box-shadow: 0 4px 15px rgba(240, 147, 251, 0.4);
}

.btn-warning:hover {
transform: translateY(-2px);
box-shadow: 0 6px 20px rgba(240, 147, 251, 0.6);
}

.btn-danger {
background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
box-shadow: 0 4px 15px rgba(250, 112, 154, 0.4);
}

.btn-danger:hover {
transform: translateY(-2px);
box-shadow: 0 6px 20px rgba(250, 112, 154, 0.6);
}

.btn-secondary {
background: linear-gradient(135deg, #868f96 0%, #596164 100%);
}

.btn-secondary:hover {
transform: translateY(-2px);
}

.alert {
border-radius: 15px;
border: none;
animation: slideInDown 0.5s ease;
box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

@keyframes slideInDown {
from {
opacity: 0;
transform: translateY(-20px);
}
to {
opacity: 1;
transform: translateY(0);
}
}

.table {
border-radius: 15px;
overflow: hidden;
box-shadow: 0 5px 20px rgba(0,0,0,0.05);
}

.table thead {
background: var(--primary-gradient);
color: white;
}

.table tbody tr {
transition: all 0.3s ease;
}

.table tbody tr:hover {
transform: scale(1.02);
box-shadow: 0 5px 15px rgba(0,0,0,0.1);
background: linear-gradient(90deg, rgba(102, 126, 234, 0.05) 0%, rgba(118, 75, 162, 0.05) 100%);
}

.form-control, .form-check-input {
border-radius: 10px;
border: 2px solid #e0e0e0;
transition: all 0.3s ease;
}

.form-control:focus, .form-check-input:focus {
border-color: #667eea;
box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
transform: translateY(-2px);
}

.form-label {
font-weight: 600;
color: #333;
margin-bottom: 0.5rem;
}

h2 {
background: var(--primary-gradient);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
background-clip: text;
font-weight: 700;
margin-bottom: 1.5rem;
}

.badge {
padding: 0.5rem 1rem;
border-radius: 20px;
font-weight: 600;
}

.status-completed {
background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
color: white;
padding: 0.3rem 1rem;
border-radius: 20px;
display: inline-block;
animation: pulse 2s infinite;
}

.status-pending {
background: linear-gradient(135deg, #ffa751 0%, #ffe259 100%);
color: white;
padding: 0.3rem 1rem;
border-radius: 20px;
display: inline-block;
}

@keyframes pulse {
0%, 100% {
transform: scale(1);
}
50% {
transform: scale(1.05);
}
}

.card-custom {
border-radius: 20px;
border: none;
box-shadow: var(--card-shadow);
transition: all 0.3s ease;
}

.card-custom:hover {
transform: translateY(-5px);
box-shadow: var(--hover-shadow);
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
<div class="container">
<a class="navbar-brand" href="{{ route('todos.index') }}">
<i class="fas fa-check-circle"></i> My ToDo
</a>
</div>
</nav>

<div class="container content-wrapper">
@yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Animasi untuk elemen yang baru muncul
document.addEventListener('DOMContentLoaded', function() {
const rows = document.querySelectorAll('tbody tr');
rows.forEach((row, index) => {
row.style.opacity = '0';
row.style.animation = `fadeInUp 0.5s ease forwards ${index * 0.1}s`;
});
});
</script>
</body>
</html>