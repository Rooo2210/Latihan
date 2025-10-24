@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card shadow p-5 login-card">
            <div class="text-center mb-4">
                <div class="icon-wrapper mb-4">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                    </div>
                </div>
                <h2 class="fw-bold text-dark mb-2">Selamat Datang Kembali!</h2>
                <p class="text-muted mb-0">Masuk untuk melanjutkan ke dashboard Anda</p>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <label for="email" class="form-label text-dark fw-medium mb-2">Alamat Email</label>
                    <div class="input-group-custom">
                        <span class="input-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                            </svg>
                        </span>
                        <input id="email" type="email" class="form-control modern-input" name="email" placeholder="nama@email.com" required autofocus>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label text-dark fw-medium mb-2">Kata Sandi</label>
                    <div class="input-group-custom">
                        <span class="input-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                            </svg>
                        </span>
                        <input id="password" type="password" class="form-control modern-input" name="password" placeholder="Masukkan password" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-gradient w-100 py-3 mb-4">
                    <span class="fw-semibold d-flex align-items-center justify-content-center">
                        Masuk
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="ms-2" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                        </svg>
                    </span>
                </button>

                <div class="text-center">
                    <p class="text-muted mb-0">Belum memiliki akun? <a href="{{ route('register') }}" class="link-gradient">Daftar Sekarang</a></p>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .login-card {
        animation-delay: 0.1s;
    }

    .icon-wrapper {
        position: relative;
        display: inline-block;
    }

    .icon-circle {
        width: 90px;
        height: 90px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        box-shadow: 
            0 15px 35px rgba(102, 126, 234, 0.3),
            0 0 0 0 rgba(102, 126, 234, 0.4);
        animation: pulse 2.5s infinite;
        position: relative;
    }

    .icon-circle::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        opacity: 0.4;
        animation: ripple 2.5s infinite;
    }

    @keyframes pulse {
        0%, 100% {
            box-shadow: 
                0 15px 35px rgba(102, 126, 234, 0.3),
                0 0 0 0 rgba(102, 126, 234, 0.4);
        }
        50% {
            box-shadow: 
                0 15px 35px rgba(102, 126, 234, 0.4),
                0 0 0 15px rgba(102, 126, 234, 0);
        }
    }

    @keyframes ripple {
        0% {
            transform: scale(1);
            opacity: 0.4;
        }
        100% {
            transform: scale(1.4);
            opacity: 0;
        }
    }

    .input-group-custom {
        position: relative;
    }

    .input-icon {
        position: absolute;
        left: 16px;
        top: 50%;
        transform: translateY(-50%);
        color: #9ca3af;
        z-index: 10;
        transition: color 0.3s;
    }

    .modern-input {
        background: #f9fafb;
        border: 2px solid #e5e7eb;
        border-radius: 14px;
        padding: 14px 20px 14px 48px;
        color: #1f2937;
        font-size: 0.95rem;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .modern-input::placeholder {
        color: #9ca3af;
    }

    .modern-input:focus {
        background: white;
        border-color: #667eea;
        box-shadow: 
            0 0 0 4px rgba(102, 126, 234, 0.1),
            0 10px 25px rgba(102, 126, 234, 0.1);
        outline: none;
        color: #1f2937;
    }

    .modern-input:focus + .input-icon,
    .input-group-custom:focus-within .input-icon {
        color: #667eea;
    }
    
    .btn-gradient {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        border-radius: 14px;
        color: white;
        font-size: 1rem;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
        position: relative;
        overflow: hidden;
    }

    .btn-gradient::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transition: left 0.6s;
    }

    .btn-gradient:hover::before {
        left: 100%;
    }
    
    .btn-gradient:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 35px rgba(102, 126, 234, 0.4);
    }

    .btn-gradient:active {
        transform: translateY(-1px);
    }

    .link-gradient {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s;
        position: relative;
    }

    .link-gradient::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 0;
        height: 2px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        transition: width 0.3s;
    }

    .link-gradient:hover::after {
        width: 100%;
    }
</style>
@endsection