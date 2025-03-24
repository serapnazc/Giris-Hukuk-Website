<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/png">
    <title>GİRİŞ HUKUK & DANIŞMANLIK - Yakında Hizmetinizdeyiz</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #0a2542;
            background-image: linear-gradient(135deg, #0a2542 0%, #102c4c 100%);
            color: #ffffff;
            line-height: 1.6;
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .logo {
            margin-bottom: 3rem;
            max-width: 450px;
            width: 90%;
            height: auto;
        }

        .tagline {
            font-size: 1.4rem;
            margin-bottom: 3rem;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 300;
            letter-spacing: 0.5px;
            max-width: 700px;
        }

        .contact-info {
            margin-top: 3rem;
            padding: 2rem;
            background-color: rgba(255, 255, 255, 0.08);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            width: 100%;
            max-width: 500px;
            backdrop-filter: blur(5px);
        }

        .contact-info h2 {
            color: #ffffff;
            margin-bottom: 1.5rem;
            font-size: 1.8rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            padding-bottom: 0.5rem;
        }

        .contact-item {
            margin-bottom: 1rem;
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.9);
        }

        .social-links {
            margin-top: 2rem;
        }

        .social-links a {
            display: inline-block;
            margin: 0 12px;
            width: 45px;
            height: 45px;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            border-radius: 50%;
            line-height: 45px;
            font-size: 1.2rem;
            text-decoration: none;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        .social-links a:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }

        footer {
            margin-top: 3rem;
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.6);
        }

        .services {
            margin: 1.5rem 0 3rem 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 2rem;
            width: 100%;
            max-width: 1000px;
        }

        .service-card {
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 2rem;
            width: 30%;
            min-width: 250px;
            transition: all 0.3s ease;
            text-align: left;
            backdrop-filter: blur(5px);
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            border-color: rgba(255, 255, 255, 0.2);
        }

        .service-card h3 {
            color: #ffffff;
            margin-bottom: 1rem;
            font-size: 1.3rem;
            letter-spacing: 0.5px;
            position: relative;
            padding-bottom: 0.5rem;
        }

        .service-card h3::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 2px;
            background-color: rgba(255, 255, 255, 0.4);
        }

        .service-card p {
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.6;
        }

        .coming-soon {
            font-size: 2rem;
            font-weight: 300;
            letter-spacing: 3px;
            text-transform: uppercase;
            margin-bottom: 2rem;
            color: #ffffff;
            padding-bottom: 0.8rem;
            display: inline-block;
            position: relative;
        }

        .coming-soon::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 30%;
            width: 40%;
            height: 1px;
            background-color: rgba(255, 255, 255, 0.4);
        }

        @media (max-width: 768px) {
            .services {
                flex-direction: column;
                align-items: center;
            }

            .service-card {
                width: 90%;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <img src="{{asset('assets/images/logo-no-bg.png')}}" alt="Giriş Hukuk & Danışmanlık" class="logo">

    <p class="coming-soon">Yakında Sizlerle</p>

    <p class="tagline">Profesyonel hukuk ve danışmanlık hizmetlerimizle yakında hizmetinizdeyiz. Dava takibi, arabuluculuk ve hukuki danışmanlık alanlarında uzman kadromuzla yanınızdayız.</p>

    <div class="services">
        <div class="service-card">
            <h3>Hukuki Danışmanlık</h3>
            <p>Kişi ve kurumlar için profesyonel hukuki danışmanlık hizmetleri sunuyoruz. Hukuki görüş ve sözleşme incelemeleri konusunda deneyimli ekibimizle yanınızdayız.</p>
        </div>
        <div class="service-card">
            <h3>Arabuluculuk</h3>
            <p>Uyuşmazlıkların çözümünde arabuluculuk hizmetleri veriyoruz. Uzlaşma odaklı yaklaşımımızla, tarafların karşılıklı kazanımını hedefliyoruz.</p>
        </div>
        <div class="service-card">
            <h3>Dava Takibi</h3>
            <p>Hukuki süreçlerinizde dava takibi ve temsil hizmetleri sağlıyoruz. Titiz çalışma prensibimiz ve güncel mevzuat takibimizle sonuç odaklı hizmet sunuyoruz.</p>
        </div>
    </div>

    <div class="contact-info">
        <h2>İletişim Bilgileri</h2>
        <div class="contact-item">E-posta: info@girishukuk.com</div>

        <div class="social-links">
            <a href="https://www.instagram.com/girishukuk?igsh=MWhnazk2d2dzN3k2Yg==" title="Instagram"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg></a>
        </div>
    </div>

    <footer>
        &copy; <span id="current-year">2025</span> GİRİŞ HUKUK & DANIŞMANLIK. Tüm hakları saklıdır.
    </footer>
</div>

<script>
    // Geçerli yılı otomatik güncelle
    document.getElementById('current-year').textContent = new Date().getFullYear();
</script>
</body>
</html>
