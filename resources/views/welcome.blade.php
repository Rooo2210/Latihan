@extends('layouts.app')

@section('content')
<div class="hero-section">
    <div class="container">
        <div class="row align-items-center min-vh-70">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="hero-content">
                    <div class="badge-welcome mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="me-2" viewBox="0 0 16 16">
                            <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z"/>
                            <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                        </svg>
                        Portal Mahasiswa Terpercaya
                    </div>
                    <h1 class="hero-title mb-4">
                        Selamat Datang di
                        <span class="gradient-text d-block">Student Portal</span>
                    </h1>
                    <p class="hero-description mb-5">
                        Platform modern untuk mengelola data akademik mahasiswa dengan mudah, cepat, dan aman. Bergabunglah dengan ribuan mahasiswa lainnya sekarang!
                    </p>
                    <div class="hero-buttons">
                        <a href="{{ route('register') }}" class="btn btn-hero-primary me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="me-2" viewBox="0 0 16 16">
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                            Daftar Sekarang
                        </a>
                        <a href="{{ route('login') }}" class="btn btn-hero-outline">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="me-2" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                                <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                            </svg>
                            Masuk
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-illustration">
                    <div class="illustration-card card-1">
                        <div class="card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                            </svg>
                        </div>
                        <div class="card-content">
                            <h6 class="fw-bold mb-1">1000+</h6>
                            <p class="text-muted small mb-0">Mahasiswa Aktif</p>
                        </div>
                    </div>
                    <div class="illustration-card card-2">
                        <div class="card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                            </svg>
                        </div>
                        <div class="card-content">
                            <h6 class="fw-bold mb-1">Aman</h6>
                            <p class="text-muted small mb-0">Data Terenkripsi</p>
                        </div>
                    </div>
                    <div class="illustration-card card-3">
                        <div class="card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                            </svg>
                        </div>
                        <div class="card-content">
                            <h6 class="fw-bold mb-1">24/7</h6>
                            <p class="text-muted small mb-0">Akses Kapan Saja</p>
                        </div>
                    </div>
                    <div class="main-illustration">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 400 400" fill="none">
                            <circle cx="200" cy="200" r="180" fill="url(#gradient1)" opacity="0.2"/>
                            <circle cx="200" cy="200" r="140" fill="url(#gradient2)" opacity="0.3"/>
                            <path d="M200 80 L280 160 L280 280 L200 360 L120 280 L120 160 Z" fill="url(#gradient3)" opacity="0.4"/>
                            <circle cx="200" cy="200" r="60" fill="white"/>
                            <path d="M200 160 C177 160 160 177 160 200 C160 223 177 240 200 240 C223 240 240 223 240 200 C240 177 223 160 200 160 Z M200 180 C212 180 220 188 220 200 C220 212 212 220 200 220 C188 220 180 212 180 200 C180 188 188 180 200 180 Z" fill="url(#gradient4)"/>
                            <defs>
                                <linearGradient id="gradient1" x1="200" y1="20" x2="200" y2="380">
                                    <stop offset="0%" stop-color="#667eea"/>
                                    <stop offset="100%" stop-color="#764ba2"/>
                                </linearGradient>
                                <linearGradient id="gradient2" x1="200" y1="60" x2="200" y2="340">
                                    <stop offset="0%" stop-color="#667eea"/>
                                    <stop offset="100%" stop-color="#764ba2"/>
                                </linearGradient>
                                <linearGradient id="gradient3" x1="200" y1="80" x2="200" y2="360">
                                    <stop offset="0%" stop-color="#667eea"/>
                                    <stop offset="100%" stop-color="#764ba2"/>
                                </linearGradient>
                                <linearGradient id="gradient4" x1="200" y1="160" x2="200" y2="240">
                                    <stop offset="0%" stop-color="#667eea"/>
                                    <stop offset="100%" stop-color="#764ba2"/>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="features-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark mb-3">Fitur Unggulan</h2>
            <p class="text-muted">Berbagai kemudahan untuk mengelola data akademik Anda</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                        </svg>
                    </div>
                    <h5 class="fw-bold mb-3">Keamanan Terjamin</h5>
                    <p class="text-muted mb-0">Data Anda dilindungi dengan enkripsi tingkat tinggi dan sistem keamanan berlapis</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                            <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319z"/>
                        </svg>
                    </div>
                    <h5 class="fw-bold mb-3">Mudah Digunakan</h5>
                    <p class="text-muted mb-0">Interface yang intuitif dan user-friendly memudahkan Anda mengelola data</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                        </svg>
                    </div>
                    <h5 class="fw-bold mb-3">Akses Real-time</h5>
                    <p class="text-muted mb-0">Akses data Anda kapan saja dan di mana saja dengan sinkronisasi real-time</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .hero-section {
        padding: 60px 0;
        position: relative;
    }

    .min-vh-70 {
        min-height: 70vh;
    }

    .badge-welcome {
        display: inline-flex;
        align-items: center;
        padding: 8px 20px;
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 50px;
        color: white;
        font-size: 0.9rem;
        font-weight: 500;
        animation: fadeInDown 0.6s ease;
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .hero-title {
        font-size: 3.5rem;
        font-weight: 800;
        color: white;
        line-height: 1.2;
        animation: fadeInUp 0.8s ease;
    }

    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.5rem;
        }
    }

    .gradient-text {
        background: linear-gradient(135deg, #ffffff 0%, rgba(255, 255, 255, 0.8) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .hero-description {
        font-size: 1.15rem;
        color: rgba(255, 255, 255, 0.9);
        line-height: 1.7;
        animation: fadeInUp 1s ease;
    }

    .hero-buttons {
        animation: fadeInUp 1.2s ease;
    }

    .btn-hero-primary {
        background: white;
        color: #667eea;
        border: none;
        padding: 14px 32px;
        border-radius: 14px;
        font-weight: 600;
        font-size: 1rem;
        display: inline-flex;
        align-items: center;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 10px 30px rgba(255, 255, 255, 0.2);
    }

    .btn-hero-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 40px rgba(255, 255, 255, 0.3);
        color: #667eea;
    }

    .btn-hero-outline {
        background: transparent;
        color: white;
        border: 2px solid rgba(255, 255, 255, 0.4);
        padding: 14px 32px;
        border-radius: 14px;
        font-weight: 600;
        font-size: 1rem;
        display: inline-flex;
        align-items: center;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .btn-hero-outline:hover {
        background: rgba(255, 255, 255, 0.1);
        border-color: white;
        color: white;
        transform: translateY(-3px);
    }

    .hero-illustration {
        position: relative;
        height: 500px;
        animation: fadeIn 1.5s ease;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    .main-illustration {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        max-width: 400px;
        animation: float 6s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translate(-50%, -50%) translateY(0); }
        50% { transform: translate(-50%, -50%) translateY(-20px); }
    }

    .illustration-card {
        position: absolute;
        background: white;
        border-radius: 16px;
        padding: 16px 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        gap: 12px;
        animation: fadeInScale 1s ease;
    }

    @keyframes fadeInScale {
        from {
            opacity: 0;
            transform: scale(0.8);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    .card-1 {
        top: 10%;
        right: 10%;
        animation-delay: 0.2s;
    }

    .card-2 {
        top: 50%;
        left: -5%;
        animation-delay: 0.4s;
    }

    .card-3 {
        bottom: 15%;
        right: 5%;
        animation-delay: 0.6s;
    }

    .card-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        flex-shrink: 0;
    }

    .features-section {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
    }

    .feature-card {
        background: white;
        padding: 32px;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        height: 100%;
    }

    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
    }

    .feature-icon {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        margin-bottom: 24px;
        box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
    }
</style>
@endsection