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
        transform: translateY(-15px);
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

.about-wrapper {
    min-height: 100vh;
    background: linear-gradient(-45deg, #667eea 0%, #764ba2 25%, #f093fb 50%, #4facfe 75%, #00f2fe 100%);
    background-size: 400% 400%;
    animation: gradientShift 15s ease infinite;
    padding: 80px 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
}

.about-wrapper::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(circle at 30% 40%, rgba(255,255,255,0.1) 0%, transparent 50%),
                radial-gradient(circle at 70% 70%, rgba(255,255,255,0.1) 0%, transparent 50%);
    pointer-events: none;
}

.about {
    max-width: 950px;
    margin: 0 auto;
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(20px);
    border-radius: 30px;
    padding: 60px 50px;
    box-shadow: 0 20px 60px rgba(0,0,0,0.2);
    position: relative;
    z-index: 1;
    animation: fadeInUp 0.8s ease;
    border: 1px solid rgba(255, 255, 255, 0.3);
}

.about::before {
    content: '';
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    background: linear-gradient(135deg, rgba(102, 126, 234, 0.4), rgba(118, 75, 162, 0.4), rgba(240, 147, 251, 0.4));
    border-radius: 30px;
    z-index: -1;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.about:hover::before {
    opacity: 1;
}

.about-header {
    text-align: center;
    margin-bottom: 40px;
    animation: fadeInUp 0.8s ease 0.2s both;
}

.about-icon {
    width: 80px;
    height: 80px;
    margin: 0 auto 25px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
    animation: float 3s ease-in-out infinite;
}

.about-icon svg {
    width: 40px;
    height: 40px;
    fill: white;
}

.about h2 {
    background: linear-gradient(135deg, #667eea, #764ba2);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    font-size: 42px;
    font-weight: 800;
    margin-bottom: 15px;
    position: relative;
    display: inline-block;
}

.about h2::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 4px;
    background: linear-gradient(90deg, #667eea, #764ba2);
    border-radius: 2px;
}

.about-content {
    animation: fadeInUp 0.8s ease 0.4s both;
}

.about-content p {
    color: #4a5568;
    font-size: 18px;
    line-height: 2;
    margin-bottom: 30px;
    text-align: center;
}

.about-content p strong {
    color: #667eea;
    font-weight: 700;
}

.info-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 25px;
    margin-top: 40px;
    animation: fadeInUp 0.8s ease 0.6s both;
}

.info-card {
    background: linear-gradient(135deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1));
    padding: 30px 25px;
    border-radius: 20px;
    text-align: center;
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.info-card:hover {
    transform: translateY(-8px);
    border-color: rgba(102, 126, 234, 0.3);
    box-shadow: 0 15px 40px rgba(102, 126, 234, 0.2);
}

.info-card-icon {
    width: 50px;
    height: 50px;
    margin: 0 auto 15px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
}

.info-card h3 {
    color: #667eea;
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 10px;
}

.info-card p {
    color: #5f6b7a;
    font-size: 15px;
    line-height: 1.6;
    margin: 0;
}

.quote-section {
    margin-top: 40px;
    padding: 30px;
    background: linear-gradient(135deg, rgba(102, 126, 234, 0.05), rgba(118, 75, 162, 0.05));
    border-left: 4px solid #667eea;
    border-radius: 15px;
    animation: fadeInUp 0.8s ease 0.8s both;
}

.quote-section p {
    color: #4a5568;
    font-size: 18px;
    font-style: italic;
    margin: 0;
    text-align: left;
}

.quote-section span {
    display: block;
    margin-top: 15px;
    color: #667eea;
    font-weight: 700;
    font-style: normal;
    text-align: right;
}

/* Responsive */
@media (max-width: 768px) {
    .about {
        padding: 40px 30px;
        border-radius: 20px;
    }
    
    .about h2 {
        font-size: 32px;
    }
    
    .about-content p {
        font-size: 16px;
    }
    
    .info-cards {
        grid-template-columns: 1fr;
    }
}
</style>

<div class="about-wrapper">
    <div class="about">
        <div class="about-header">
            <div class="about-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                </svg>
            </div>
            <h2>Tentang Saya</h2>
        </div>

        <div class="about-content">
            <p>
                Saya <strong>{{ $name ?? 'Arro' }}</strong>, seorang pengembang yang berfokus pada pemrograman berbasis objek dan desain sistem yang elegan.
                Saya menyukai hal-hal yang rapi, efisien, dan bermakna. Setiap proyek saya bangun dengan dedikasi untuk hasil terbaik.
            </p>

            <div class="info-cards">
                <div class="info-card">
                    <div class="info-card-icon">💻</div>
                    <h3>Fokus Utama</h3>
                    <p>Pemrograman Berbasis Objek & Desain Sistem Elegan</p>
                </div>
                <div class="info-card">
                    <div class="info-card-icon">🎯</div>
                    <h3>Prinsip Kerja</h3>
                    <p>Rapi, Efisien, dan Bermakna dalam Setiap Detail</p>
                </div>
                <div class="info-card">
                    <div class="info-card-icon">⚡</div>
                    <h3>Dedikasi</h3>
                    <p>Menghasilkan Solusi Terbaik untuk Setiap Proyek</p>
                </div>
            </div>

            <div class="quote-section">
                <p>"Teknologi adalah alat, tapi kreativitas dan dedikasi adalah yang membuat sebuah karya menjadi luar biasa."</p>
                <span>— Philosophy Saya</span>
            </div>
        </div>
    </div>
</div>
@endsection