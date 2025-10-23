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

@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateX(-20px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.contact-wrapper {
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

.contact-wrapper::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(circle at 25% 35%, rgba(255,255,255,0.1) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(255,255,255,0.1) 0%, transparent 50%);
    pointer-events: none;
}

.contact {
    max-width: 850px;
    width: 100%;
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

.contact::before {
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

.contact:hover::before {
    opacity: 1;
}

.contact-header {
    text-align: center;
    margin-bottom: 45px;
    animation: fadeInUp 0.8s ease 0.2s both;
}

.contact-icon {
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

.contact-icon svg {
    width: 40px;
    height: 40px;
    fill: white;
}

.contact h2 {
    background: linear-gradient(135deg, #667eea, #764ba2);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    font-size: 42px;
    font-weight: 800;
    margin-bottom: 15px;
}

.contact-subtitle {
    color: #5f6b7a;
    font-size: 16px;
    max-width: 500px;
    margin: 0 auto;
}

.success-message {
    background: linear-gradient(135deg, rgba(72, 187, 120, 0.1), rgba(56, 178, 172, 0.1));
    border: 2px solid #48bb78;
    color: #2c662d;
    padding: 16px 20px;
    border-radius: 15px;
    margin-bottom: 30px;
    font-weight: 600;
    animation: slideIn 0.5s ease;
    display: flex;
    align-items: center;
    gap: 12px;
}

.success-message::before {
    content: "✓";
    background: #48bb78;
    color: white;
    width: 24px;
    height: 24px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    flex-shrink: 0;
}

form {
    margin-top: 30px;
    animation: fadeInUp 0.8s ease 0.4s both;
}

.form-group {
    margin-bottom: 25px;
    animation: fadeInUp 0.8s ease both;
}

.form-group:nth-child(1) { animation-delay: 0.5s; }
.form-group:nth-child(2) { animation-delay: 0.6s; }
.form-group:nth-child(3) { animation-delay: 0.7s; }

.form-label {
    display: block;
    color: #2d3748;
    font-weight: 600;
    margin-bottom: 10px;
    font-size: 15px;
}

input, textarea {
    width: 100%;
    padding: 16px 20px;
    border: 2px solid #e2e8f0;
    border-radius: 15px;
    font-size: 15px;
    transition: all 0.3s ease;
    background: white;
    color: #2d3748;
    font-family: inherit;
}

input:focus, textarea:focus {
    border-color: #667eea;
    outline: none;
    box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
    transform: translateY(-2px);
}

input::placeholder, textarea::placeholder {
    color: #a0aec0;
}

textarea {
    resize: vertical;
    min-height: 150px;
}

.submit-btn-wrapper {
    text-align: center;
    margin-top: 35px;
    animation: fadeInUp 0.8s ease 0.8s both;
}

button {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    border: none;
    border-radius: 50px;
    padding: 16px 45px;
    font-size: 17px;
    font-weight: 700;
    cursor: pointer;
    transition: all 0.4s ease;
    box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
    position: relative;
    overflow: hidden;
}

button::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    transition: left 0.5s ease;
}

button:hover::before {
    left: 100%;
}

button:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(102, 126, 234, 0.4);
}

button:active {
    transform: translateY(-2px);
}

.contact-info {
    margin-top: 50px;
    padding-top: 40px;
    border-top: 2px solid #e2e8f0;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 25px;
    animation: fadeInUp 0.8s ease 0.9s both;
}

.info-item {
    text-align: center;
    padding: 20px;
    background: linear-gradient(135deg, rgba(102, 126, 234, 0.05), rgba(118, 75, 162, 0.05));
    border-radius: 15px;
    transition: all 0.3s ease;
}

.info-item:hover {
    transform: translateY(-5px);
    background: linear-gradient(135deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1));
}

.info-icon {
    width: 50px;
    height: 50px;
    margin: 0 auto 15px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
}

.info-item h4 {
    color: #2d3748;
    font-size: 16px;
    font-weight: 700;
    margin-bottom: 8px;
}

.info-item p {
    color: #5f6b7a;
    font-size: 14px;
    margin: 0;
}

/* Responsive */
@media (max-width: 768px) {
    .contact {
        padding: 40px 30px;
        border-radius: 20px;
    }
    
    .contact h2 {
        font-size: 32px;
    }
    
    button {
        width: 100%;
    }
    
    .contact-info {
        grid-template-columns: 1fr;
    }
}
</style>

<div class="contact-wrapper">
    <div class="contact">
        @if(session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        <div class="contact-header">
            <div class="contact-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                </svg>
            </div>
            <h2>Hubungi Saya</h2>
            <p class="contact-subtitle">Punya pertanyaan atau ingin berkolaborasi? Jangan ragu untuk menghubungi saya!</p>
        </div>

        <form action="{{ route('contact.send') }}" method="POST">
            @csrf
            <div class="form-group">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" name="name" placeholder="Masukkan nama Anda" required>
            </div>

            <div class="form-group">
                <label class="form-label">Alamat Email</label>
                <input type="email" name="email" placeholder="nama@example.com" required>
            </div>

            <div class="form-group">
                <label class="form-label">Pesan</label>
                <textarea name="message" placeholder="Tulis pesan Anda di sini..." required></textarea>
            </div>

            <div class="submit-btn-wrapper">
                <button type="submit">Kirim Pesan</button>
            </div>
        </form>

        <div class="contact-info">
            <div class="info-item">
                <div class="info-icon">📧</div>
                <h4>Email</h4>
                <p>roo@example.com</p>
            </div>
            <div class="info-item">
                <div class="info-icon">📱</div>
                <h4>Telepon</h4>
                <p>+62 812-3456-7890</p>
            </div>
            <div class="info-item">
                <div class="info-icon">📍</div>
                <h4>Lokasi</h4>
                <p>Jepara, Indonesia</p>
            </div>
        </div>
    </div>
</div>
@endsection