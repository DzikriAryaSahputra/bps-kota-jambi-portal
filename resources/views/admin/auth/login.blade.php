<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SEMPOL Admin - Login | BPS Kota Jambi</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=DM+Sans:wght@400;500&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="{{ asset('assets/css/login_style.css') }}" />
</head>
<body>
  <div class="bg-deco">
    <div class="bg-stripe"></div>
    <div class="dot-grid"></div>
  </div>

  <header class="login-header">
    <div class="logo">
      <div class="logo-icon">
        <span class="material-symbols-outlined">lock</span>
      </div>
      <h1>SEMPOL</h1>
    </div>
  </header>

  <main class="login-main">
    <div class="login-wrapper">
      <div class="panel-brand">
        <div class="brand-content">
          <h2 class="brand-headline">
            Sistem<br/>Manajemen <span>Portal</span>
          </h2>
          <p class="brand-org">BPS Kota Jambi.</p>
          <p class="brand-sub">
            Portal terpusat untuk manajemen data dan layanan institusi Anda secara efisien.
          </p>
        </div>
      </div>

      <div class="panel-form">
        <div class="form-header">
          <div class="accent-bar">
            <div class="bar"></div>
            <div class="bar-thin"></div>
          </div>
          <h2>Selamat Datang<br/>Kembali!</h2>
          <p>Silakan masuk untuk mengakses dashboard platform Anda.</p>
        </div>

        @if($errors->any())
          <div style="margin-bottom:12px;padding:10px 12px;border-radius:12px;border:1px solid #fecaca;background:#fef2f2;color:#b91c1c;font-size:12px;font-weight:600;">
            {{ $errors->first() }}
          </div>
        @endif

        @if(session('success'))
          <div style="margin-bottom:12px;padding:10px 12px;border-radius:12px;border:1px solid #a7f3d0;background:#ecfdf5;color:#065f46;font-size:12px;font-weight:600;">
            {{ session('success') }}
          </div>
        @endif

        <form method="POST" action="{{ route('admin.login.post') }}" novalidate>
          @csrf
          <div class="field">
            <label for="username">Username</label>
            <div class="input-wrap">
              <span class="material-symbols-outlined ico">person</span>
              <input type="text" id="username" name="username" value="{{ old('username') }}" placeholder="admin" autocomplete="username" />
            </div>
          </div>

          <div class="field">
            <div class="field-row">
              <label for="pwdInput">Kata Sandi</label>
            </div>
            <div class="input-wrap">
              <span class="material-symbols-outlined ico">key</span>
              <input type="password" id="pwdInput" name="password" placeholder="••••••••" autocomplete="current-password" />
              <button type="button" class="btn-eye" onclick="togglePwd()">
                <span class="material-symbols-outlined" id="eyeIcon">visibility</span>
              </button>
            </div>
          </div>

          <button type="submit" class="btn-submit">
            <span>Masuk ke Dashboard</span>
            <span class="material-symbols-outlined">arrow_forward</span>
          </button>
        </form>
      </div>
    </div>
  </main>

  <footer class="login-footer">
    <p>© {{ date('Y') }} Sistem Manajemen Portal · BPS Kota Jambi</p>
  </footer>

  <script src="{{ asset('assets/js/login.js') }}"></script>
</body>
</html>
