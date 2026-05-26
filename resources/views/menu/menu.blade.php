<!DOCTYPE html>
<html lang="km">
<head>
<meta charset="UTF-8">
<title>ម៉ឺនុយឌីជីថល</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Battambang:wght@400;700&family=Moul&display=swap" rel="stylesheet">

<style>
:root{
    --bg:#fff7ea;
    --card:#ffffff;
    --text:#3b2416;
    --muted:#8a6b55;
    --primary:#9b1c1c;
    --secondary:#d99a2b;
    --dark:#160c08;
}

body.dark{
    --bg:#120b08;
    --card:#21130e;
    --text:#fff3df;
    --muted:#d8b98d;
    --primary:#f59e0b;
    --secondary:#b91c1c;
    --dark:#050505;
}

body{
    font-family:'Battambang', sans-serif;
    background:var(--bg);
    color:var(--text);
    transition:.35s;
}

.kh-title{
    font-family:'Moul', serif;
}

.navbar{
    background:rgba(88, 25, 14, .88);
    backdrop-filter:blur(12px);
}

.navbar-brand{
    font-size:24px;
}

.nav-link{
    font-weight:700;
}

.dark-toggle{
    width:44px;
    height:44px;
    border-radius:50%;
    border:none;
    background:linear-gradient(135deg,var(--secondary),var(--primary));
    color:white;
}

.hero-slide{
    height:610px;
    object-fit:cover;
    filter:brightness(43%);
}

.carousel-caption{
    bottom:155px;
}

.carousel-caption h1{
    font-size:54px;
    text-shadow:0 5px 25px #000;
}

.carousel-caption p{
    font-size:22px;
}

.btn-khmer{
    background:linear-gradient(135deg,var(--primary),var(--secondary));
    color:white;
    border:none;
    border-radius:50px;
    padding:12px 28px;
    font-weight:800;
}

.btn-khmer:hover{
    color:white;
    opacity:.9;
}

.section-wrap{
    background:var(--card);
    border-radius:35px;
    box-shadow:0 18px 45px rgba(0,0,0,.10);
}

.category-btn{
    border-radius:50px;
    padding:11px 24px;
    font-weight:700;
}

.category-btn.active{
    background:linear-gradient(135deg,var(--primary),var(--secondary)) !important;
    color:white !important;
    border-color:transparent !important;
}

.menu-card{
    background:var(--card);
    color:var(--text);
    border:none;
    border-radius:28px;
    overflow:hidden;
    box-shadow:0 14px 34px rgba(0,0,0,.10);
    transition:.35s;
}

.menu-card:hover{
    transform:translateY(-10px);
}

.product-img{
    height:255px;
    object-fit:cover;
}

.badge-category{
    background:#fff1d6;
    color:#92400e;
    border-radius:50px;
    padding:7px 14px;
    font-weight:700;
}

body.dark .badge-category{
    background:#3b2416;
    color:#fbbf24;
}

.price{
    color:var(--primary);
    font-size:26px;
    font-weight:900;
}

.text-muted{
    color:var(--muted)!important;
}

.feature-card{
    background:var(--card);
    color:var(--text);
    border-radius:28px;
    padding:30px;
    box-shadow:0 12px 30px rgba(0,0,0,.08);
    height:100%;
    transition:.3s;
}

.feature-card:hover{
    transform:translateY(-7px);
}

.feature-card i{
    font-size:42px;
    color:var(--primary);
}

footer{
    background:var(--dark);
    color:#fff3df;
}

.footer-link{
    color:#fbbf24;
    text-decoration:none;
}

@media(max-width:768px){
    .hero-slide{
        height:430px;
    }

    .carousel-caption{
        bottom:80px;
    }

    .carousel-caption h1{
        font-size:30px;
    }

    .carousel-caption p{
        font-size:16px;
    }

    .navbar-brand{
        font-size:18px;
    }

    .product-img{
        height:220px;
    }
}
</style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark sticky-top shadow">
    <div class="container">

        <a class="navbar-brand kh-title" href="#">
            <i class="bi bi-cup-hot-fill"></i> ម៉ឺនុយឌីជីថល
        </a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-house-fill"></i> ទំព័រដើម
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#foods" class="nav-link">
                        <i class="bi bi-grid-fill"></i> ម៉ឺនុយ
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#about" class="nav-link">
                        <i class="bi bi-info-circle-fill"></i> អំពីយើង
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#contact" class="nav-link">
                        <i class="bi bi-telephone-fill"></i> ទំនាក់ទំនង
                    </a>
                </li>

                <li class="nav-item">
                    <button class="dark-toggle" onclick="toggleDarkMode()">
                        <i class="bi bi-moon-stars-fill" id="darkIcon"></i>
                    </button>
                </li>
            </ul>
        </div>

    </div>
</nav>

<div id="foodSlide" class="carousel slide carousel-fade" data-bs-ride="carousel">

    <div class="carousel-indicators">
        <button data-bs-target="#foodSlide" data-bs-slide-to="0" class="active"></button>
        <button data-bs-target="#foodSlide" data-bs-slide-to="1"></button>
        <button data-bs-target="#foodSlide" data-bs-slide-to="2"></button>
    </div>

    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836" class="d-block w-100 hero-slide">
            <div class="carousel-caption">
                <h1 class="kh-title">រសជាតិខ្មែរ ឆ្ងាញ់ជាប់ចិត្ត</h1>
                <p>ម៉ឺនុយឌីជីថលស្អាត ងាយមើល និងសាកសមសម្រាប់ភោជនីយដ្ឋាន</p>
                <a href="#foods" class="btn btn-khmer">
                    <i class="bi bi-bag-heart-fill"></i> មើលម៉ឺនុយ
                </a>
            </div>
        </div>

        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5" class="d-block w-100 hero-slide">
            <div class="carousel-caption">
                <h1 class="kh-title">បញ្ជាទិញងាយ រហ័ស</h1>
                <p>រចនាបែបខ្មែរ ទាន់សម័យ និងប្រើបានគ្រប់ឧបករណ៍</p>
                <a href="#foods" class="btn btn-khmer">
                    <i class="bi bi-cart-fill"></i> បញ្ជាទិញឥឡូវនេះ
                </a>
            </div>
        </div>

        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4" class="d-block w-100 hero-slide">
            <div class="carousel-caption">
                <h1 class="kh-title">ម៉ឺនុយឌីជីថលបែបខ្មែរ</h1>
                <p>Responsive • Filter • Telegram Order • Dark Mode</p>
                <a href="#foods" class="btn btn-khmer">
                    <i class="bi bi-phone-fill"></i> សាកល្បងឥឡូវនេះ
                </a>
            </div>
        </div>

    </div>

    <button class="carousel-control-prev" data-bs-target="#foodSlide" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" data-bs-target="#foodSlide" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<section class="container py-5" id="foods">

    <div class="section-wrap p-4 p-md-5">

        <div class="text-center mb-4">
            <span class="badge bg-warning text-dark rounded-pill px-3 py-2 mb-3">
                <i class="bi bi-stars"></i> Khmer Digital Menu
            </span>

            <h2 class="kh-title" style="color:var(--primary);">
                ម៉ឺនុយពេញនិយម
            </h2>

            <p class="text-muted">
                ជ្រើសរើសប្រភេទម្ហូបដែលអ្នកចូលចិត្ត
            </p>
        </div>

        <div class="d-flex justify-content-center flex-wrap gap-3 mb-5">
            <button class="btn btn-outline-danger category-btn active" data-filter="all">
                <i class="bi bi-border-all"></i> ទាំងអស់
            </button>

            <button class="btn btn-outline-danger category-btn" data-filter="food">
                <i class="bi bi-egg-fried"></i> ម្ហូប
            </button>

            <button class="btn btn-outline-warning category-btn" data-filter="drink">
                <i class="bi bi-cup-straw"></i> ភេសជ្ជៈ
            </button>

            <button class="btn btn-outline-success category-btn" data-filter="dessert">
                <i class="bi bi-cake2-fill"></i> បង្អែម
            </button>

            <button class="btn btn-outline-primary category-btn" data-filter="special">
                <i class="bi bi-star-fill"></i> ពិសេស
            </button>
        </div>

        <div class="row g-4">

            @forelse($products as $product)
                <div class="col-12 col-md-6 col-lg-4 product-item" data-category="{{ $product->category }}">
                    <div class="card menu-card h-100">

                        @if($product->image)
                            <img src="{{ asset('storage/'.$product->image) }}" class="card-img-top product-img">
                        @else
                            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836" class="card-img-top product-img">
                        @endif

                        <div class="card-body p-4">
                            <span class="badge-category">
                                <i class="bi bi-tag-fill"></i> {{ ucfirst($product->category) }}
                            </span>

                            <h4 class="fw-bold mt-3">{{ $product->name }}</h4>

                            <p class="text-muted">
                                {{ $product->description }}
                            </p>

                            <div class="d-flex justify-content-between align-items-center gap-2">
                                <div class="price">
                                    ${{ number_format($product->price, 2) }}
                                </div>

                                <button class="btn btn-khmer order-btn"
                                    data-name="{{ $product->name }}"
                                    data-price="${{ number_format($product->price, 2) }}">
                                    <i class="bi bi-cart-plus-fill"></i> បញ្ជាទិញ
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            @empty
                <div class="text-center py-5">
                    <i class="bi bi-basket display-1" style="color:var(--primary);"></i>
                    <h4 class="mt-3">មិនទាន់មានម្ហូបនៅឡើយទេ</h4>
                    <p class="text-muted">សូមបន្ថែមផលិតផលពី Dashboard។</p>
                </div>
            @endforelse

        </div>

    </div>

</section>

<section class="container py-4" id="about">
    <div class="row g-4">

        <div class="col-12 col-md-4">
            <div class="feature-card text-center">
                <i class="bi bi-phone-fill"></i>
                <h5 class="fw-bold mt-3">Responsive</h5>
                <p class="text-muted mb-0">ប្រើបានល្អលើទូរស័ព្ទ ថេប្លេត និងកុំព្យូទ័រ។</p>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="feature-card text-center">
                <i class="bi bi-palette-fill"></i>
                <h5 class="fw-bold mt-3">Khmer Style</h5>
                <p class="text-muted mb-0">រចនាបែបខ្មែរ ពណ៌ក្រហម មាស និងកក់ក្តៅ។</p>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="feature-card text-center">
                <i class="bi bi-moon-stars-fill"></i>
                <h5 class="fw-bold mt-3">Dark Mode</h5>
                <p class="text-muted mb-0">ប្តូរពន្លឺ និងងងឹតបានយ៉ាងងាយស្រួល។</p>
            </div>
        </div>

    </div>
</section>

<footer class="pt-5 pb-4 mt-5" id="contact">
    <div class="container">
        <div class="row g-4">

            <div class="col-md-5">
                <h4 class="kh-title">
                    <i class="bi bi-cup-hot-fill"></i> ម៉ឺនុយឌីជីថល
                </h4>
                <p class="mt-3">
                    ប្រព័ន្ធម៉ឺនុយឌីជីថលសម្រាប់ភោជនីយដ្ឋាន កាហ្វេ និងហាងអាហារ។
                </p>
            </div>

            <div class="col-md-3">
                <h5 class="fw-bold">ម៉ឺនុយ</h5>
                <p class="mb-1"><a href="#" class="footer-link">ទំព័រដើម</a></p>
                <p class="mb-1"><a href="#foods" class="footer-link">ម៉ឺនុយម្ហូប</a></p>
                <p class="mb-1"><a href="#about" class="footer-link">អំពីយើង</a></p>
            </div>

            <div class="col-md-4">
                <h5 class="fw-bold">ទំនាក់ទំនង</h5>
                <p class="mb-1"><i class="bi bi-geo-alt-fill"></i> Phnom Penh, Cambodia</p>
                <p class="mb-1"><i class="bi bi-telephone-fill"></i> 012 345 678</p>
                <p class="mb-1"><i class="bi bi-envelope-fill"></i> menu@example.com</p>
            </div>

        </div>

        <hr class="border-light">

        <div class="text-center">
            <small>© 2026 ម៉ឺនុយឌីជីថល. រក្សាសិទ្ធិគ្រប់យ៉ាង។</small>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
function toggleDarkMode(){
    document.body.classList.toggle("dark");

    const icon = document.getElementById("darkIcon");

    if(document.body.classList.contains("dark")){
        icon.className = "bi bi-sun-fill";
        localStorage.setItem("theme", "dark");
    }else{
        icon.className = "bi bi-moon-stars-fill";
        localStorage.setItem("theme", "light");
    }
}

if(localStorage.getItem("theme") === "dark"){
    document.body.classList.add("dark");
    document.getElementById("darkIcon").className = "bi bi-sun-fill";
}

const filterButtons = document.querySelectorAll(".category-btn");
const productItems = document.querySelectorAll(".product-item");

filterButtons.forEach(button => {
    button.addEventListener("click", () => {
        filterButtons.forEach(btn => btn.classList.remove("active"));
        button.classList.add("active");

        const filter = button.getAttribute("data-filter");

        productItems.forEach(item => {
            const category = item.getAttribute("data-category");

            if(filter === "all" || category === filter){
                item.style.display = "block";
            }else{
                item.style.display = "none";
            }
        });
    });
});

const TELEGRAM_BOT_TOKEN = "YOUR_BOT_TOKEN";
const TELEGRAM_CHAT_ID = "YOUR_CHAT_ID";

document.querySelectorAll(".order-btn").forEach(button => {
    button.addEventListener("click", function(){
        const productName = this.getAttribute("data-name");
        const productPrice = this.getAttribute("data-price");

        const message =
`🛒 ការបញ្ជាទិញថ្មី

🍽️ មុខម្ហូប: ${productName}
💵 តម្លៃ: ${productPrice}

📍 MenuDigital`;

        fetch(`https://api.telegram.org/bot${TELEGRAM_BOT_TOKEN}/sendMessage`,{
            method:"POST",
            headers:{ "Content-Type":"application/json" },
            body:JSON.stringify({
                chat_id: TELEGRAM_CHAT_ID,
                text: message
            })
        })
        .then(res => res.json())
        .then(data => {
            if(data.ok){
                alert("✅ បានផ្ញើការបញ្ជាទិញទៅ Telegram");
            }else{
                alert("❌ Telegram Error");
            }
        })
        .catch(error => {
            alert("❌ Cannot send order");
            console.log(error);
        });
    });
});
</script>

</body>
</html>