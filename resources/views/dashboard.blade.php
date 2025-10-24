@extends('layouts.app')

@section('content')

<style>
    body {
        background: linear-gradient(135deg, #b388ff, #7e57c2);
        color: #2d2d2d;
    }

    .welcome-card {
        background: #ffffff;
        border-radius: 20px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    }

    .gradient-name {
        background: linear-gradient(90deg, #7b2cbf, #9d4edd);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .info-card {
        background: rgba(255, 255, 255, 0.9);
        border-radius: 16px;
        border: 1px solid rgba(0, 0, 0, 0.05);
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
        color: #2d2d2d;
    }

    .info-item {
        background: #f6f5ff;
        border-radius: 10px;
        padding: 12px 16px;
        margin-bottom: 12px;
        transition: 0.3s;
    }

    .info-item:hover {
        background: #ede7f6;
    }

    .info-label {
        font-weight: 600;
        color: #5e35b1;
        display: flex;
        align-items: center;
    }

    .info-value {
        font-size: 1.05rem;
        font-weight: 500;
        color: #311b92;
        margin-left: 1.8rem;
    }

    .icon-box svg {
        color: #7b1fa2;
    }

    .welcome-illustration svg {
        color: #6a1b9a;
        opacity: 0.8;
    }

    .greeting-text {
        font-size: 2rem;
    }
</style>


<div class="row g-4">
    <div class="col-12">
        <div class="card welcome-card shadow p-4 p-md-5">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="welcome-content">
                        <h1 class="fw-bold mb-3 greeting-text">
                            Halo, <span class="gradient-name">{{ Auth::user()->nama_lengkap }}</span>! 👋
                        </h1>
                        <p class="text-muted mb-0 fs-5">Selamat datang kembali di dashboard Anda. Semoga hari Anda penuh produktivitas!</p>
                    </div>
                </div>
                <div class="col-md-4 text-end d-none d-md-block">
                    <div class="welcome-illustration">
                        <svg xmlns="http://www.w3.org/2000/svg" width="140" height="140" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card info-card shadow h-100">
            <div class="card-body p-4">
                <div class="d-flex align-items-center mb-4">
                    <div class="icon-box me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                        </svg>
                    </div>
                    <h5 class="fw-bold mb-0">Informasi Pribadi</h5>
                </div>

                <div class="info-item">
                    <div class="info-label">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="me-2" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path d="M4 10a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-1z"/>
                        </svg>
                        NIM
                    </div>
                    <div class="info-value">{{ Auth::user()->nim }}</div>
                </div>

                <div class="info-item">
                    <div class="info-label">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="me-2" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                        </svg>
                        Nama Lengkap
                    </div>
                    <div class="info-value">{{ Auth::user()->nama_lengkap }}</div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
