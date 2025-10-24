@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10 col-lg-9">
        <div class="card shadow p-4 p-md-5 register-card">
            <div class="text-center mb-5">
                <div class="icon-wrapper mb-4">
                    <div class="icon-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                    </div>
                </div>
                <h2 class="fw-bold text-dark mb-2" style="font-size: 2rem;">Buat Akun Baru</h2>
                <p class="text-muted mb-0">Lengkapi data diri Anda untuk mendaftar</p>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row g-4 mb-4">
                    <div class="col-md-6">
                        <label class="form-label text-dark fw-semibold mb-3 d-flex align-items-center">
                            <span class="label-icon me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                    <path d="M4 10a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-1z"/>
                                </svg>
                            </span>
                            Nomor Induk Mahasiswa
                        </label>
                        <input type="text" name="nim" class="form-control modern-input" placeholder="Contoh: 123456789" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-dark fw-semibold mb-3 d-flex align-items-center">
                            <span class="label-icon me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                                </svg>
                            </span>
                            Nama Lengkap
                        </label>
                        <input type="text" name="nama_lengkap" class="form-control modern-input" placeholder="Nama lengkap Anda" required>
                    </div>
                </div>

                <div class="row g-4 mb-4">
                    <div class="col-md-6">
                        <label class="form-label text-dark fw-semibold mb-3 d-flex align-items-center">
                            <span class="label-icon me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                </svg>
                            </span>
                            Tempat Lahir
                        </label>
                        <input type="text" name="tempat_lahir" class="form-control modern-input" placeholder="Kota kelahiran">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-dark fw-semibold mb-3 d-flex align-items-center">
                            <span class="label-icon me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                </svg>
                            </span>
                            Tanggal Lahir
                        </label>
                        <input type="date" name="tanggal_lahir" class="form-control modern-input">
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label text-dark fw-semibold mb-3 d-flex align-items-center">
                        <span class="label-icon me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                            </svg>
                        </span>
                        Alamat Email
                    </label>
                    <input type="email" name="email" class="form-control modern-input" placeholder="nama@email.com" required>
                </div>

                <div class="row g-4 mb-5">
                    <div class="col-md-6">
                        <label class="form-label text-dark fw-semibold mb-3 d-flex align-items-center">
                            <span class="label-icon me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                                </svg>
                            </span>
                            Kata Sandi
                        </label>
                        <input type="password" name="password" class="form-control modern-input" placeholder="Minimal 8 karakter" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-dark fw-semibold mb-3 d-flex align-items-center">
                            <span class="label-icon me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                                    <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                </svg>
                            </span>
                            Konfirmasi Kata Sandi
                        </label>
                        <input type="password" name="password_confirmation" class="form-control modern-input" placeholder="Ulangi kata sandi" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-gradient w-100 py-3 mb-4">
                    <span class="fw-semibold d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="me-2" viewBox="0 0 16 16">
                            <path d="M8.5 1.5A1.5 1.5 0 0 1 10 0h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6c-.314.418-.5.937-.5 1.5v6h-2a.5.5 0 0 0-.354.854l2.5 2.5a.5.5 0 0 0 .708 0l2.5-2.5A.5.5 0 0 0 10.5 7.5h-2v-6z"/>
                        </svg>
                        Daftar Sekarang
                    </span>
                </button>

                <div class="text-center">
                    <p class="text-muted mb-0">Sudah memiliki akun? <a href="{{ route('login') }}" class="link-gradient">Login di sini</a></p>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .register-card {
        animation-delay: 0.1s;
    }

    .icon-wrapper {
        position: relative;
        display: inline-block;
    }

    .icon-circle {
        width: 100px;
        height: 100px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        box-shadow: 
            0 20px 40px rgba(102, 126, 234, 0.35),
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
                0 20px 40px rgba(102, 126, 234, 0.35),
                0 0 0 0 rgba(102, 126, 234, 0.4);
        }
        50% {
            box-shadow: 
                0 20px 40px rgba(102, 126, 234, 0.45),
                0 0 0 20px rgba(102, 126, 234, 0);
        }
    }

    @keyframes ripple {
        0% {
            transform: scale(1);
            opacity: 0.4;
        }
        100% {
            transform: scale(1.5);
            opacity: 0;
        }
    }

    .label-icon {
        width: 32px;
        height: 32px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 10px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: white;
        box-shadow: 0 4px 10px rgba(102, 126, 234, 0.25);
    }

    .modern-input {
        background: #f9fafb;
        border: 2px solid #e5e7eb;
        border-radius: 16px;
        padding: 16px 20px;
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
        transform: translateY(-2px);
    }
    
    .btn-gradient {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        border-radius: 16px;
        color: white;
        font-size: 1.05rem;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 10px 30px rgba(102, 126, 234, 0.35);
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
        box-shadow: 0 15px 40px rgba(102, 126, 234, 0.45);
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