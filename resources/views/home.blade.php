@extends('layouts.app')

@section('content')
<style>
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

@keyframes float {
    0%, 100% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-20px);
    }
}

@keyframes gradientShift {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}

.hero {
    text-align: center;
    padding: 60px 20px;
    background: linear-gradient(-45deg, #667eea 0%, #764ba2 25%, #f093fb 50%, #4facfe 75%, #00f2fe 100%);
    background-size: 400% 400%;
    animation: gradientShift 15s ease infinite;
    color: white;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    position: relative;
    overflow: hidden;
}

.hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(circle at 20% 50%, rgba(255,255,255,0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(255,255,255,0.1) 0%, transparent 50%);
    pointer-events: none;
}

.hero-content {
    position: relative;
    z-index: 1;
    max-width: 800px;
}

.hero img {
    width: 180px;
    height: 180px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 30px;
    box-shadow: 0 20px 60px rgba(0,0,0,0.3);
    border: 5px solid rgba(255,255,255,0.3);
    animation: fadeInUp 0.8s ease, float 3s ease-in-out infinite;
    transition: transform 0.3s ease;
}

.hero img:hover {
    transform: scale(1.1) rotate(5deg);
}

.hero h1 {
    font-size: 3.5rem;
    font-weight: 800;
    margin-bottom: 20px;
    animation: fadeInUp 0.8s ease 0.2s both;
    text-shadow: 2px 2px 20px rgba(0,0,0,0.2);
    line-height: 1.2;
}

.hero h1 .highlight {
    background: linear-gradient(120deg, #fff 0%, #e0f7ff 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    display: inline-block;
    position: relative;
}

.hero h1 .highlight::after {
    content: '';
    position: absolute;
    bottom: -5px;
    left: 0;
    width: 100%;
    height: 3px;
    background: rgba(255,255,255,0.5);
    border-radius: 2px;
}

.hero p {
    font-size: 1.3rem;
    color: rgba(255,255,255,0.95);
    max-width: 650px;
    margin: 0 auto 40px;
    line-height: 1.8;
    animation: fadeInUp 0.8s ease 0.4s both;
    text-shadow: 1px 1px 10px rgba(0,0,0,0.1);
}

.btn-primary {
    background: rgba(255, 255, 255, 0.25);
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255, 255, 255, 0.4);
    padding: 15px 40px;
    border-radius: 50px;
    color: white;
    font-weight: 700;
    font-size: 1.1rem;
    transition: all 0.4s ease;
    text-decoration: none;
    display: inline-block;
    animation: fadeInUp 0.8s ease 0.6s both;
    box-shadow: 0 8px 30px rgba(0,0,0,0.2);
    position: relative;
    overflow: hidden;
}

.btn-primary::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    transition: left 0.5s ease;
}

.btn-primary:hover::before {
    left: 100%;
}

.btn-primary:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.3);
    background: rgba(255, 255, 255, 0.35);
    border-color: rgba(255, 255, 255, 0.6);
    color: white;
}

.btn-primary:active {
    transform: translateY(-2px);
}

.skills-badges {
    display: flex;
    gap: 15px;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 40px;
    animation: fadeInUp 0.8s ease 0.8s both;
}

.badge {
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    padding: 10px 20px;
    border-radius: 25px;
    color: white;
    font-weight: 600;
    font-size: 0.9rem;
    border: 1px solid rgba(255, 255, 255, 0.3);
    transition: all 0.3s ease;
}

.badge:hover {
    background: rgba(255, 255, 255, 0.3);
    transform: translateY(-3px);
}

/* Responsive */
@media (max-width: 768px) {
    .hero h1 {
        font-size: 2.5rem;
    }
    
    .hero p {
        font-size: 1.1rem;
    }
    
    .hero img {
        width: 140px;
        height: 140px;
    }
}
</style>

<div class="hero">
    <div class="hero-content">
        <img src="{{ asset('images/prgs.jpg') }}" alt="Foto Profil">
        <h1>Halo, Saya <span class="highlight">Roo</span></h1>
        <p>
            Saya seorang pengembang web dan mahasiswa yang antusias membangun solusi kreatif dengan Laravel, C++, dan JavaScript.
            Saya percaya teknologi bisa menjadi jembatan untuk ide-ide besar. 🚀
        </p>
        <a href="{{ route('project') }}" class="btn-primary">Lihat Proyek Saya</a>
        
        <div class="skills-badges">
            <span class="badge">Laravel</span>
            <span class="badge">C++</span>
            <span class="badge">JavaScript</span>
            <span class="badge">Web Development</span>
        </div>
    </div>
</div>
@endsection