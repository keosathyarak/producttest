<!DOCTYPE html>
<html lang="km">
<head>
<meta charset="UTF-8">
<title>MenuDigital Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:wght@400;500;600;700;800&family=Moul&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<style>
:root{
    --bg:#f4f7f6;
    --card:#ffffff;
    --text:#17252a;
    --muted:#6b7280;
    --primary:#0f766e;
    --secondary:#14b8a6;
    --accent:#f59e0b;
    --soft:#ecfeff;
    --border:#dbe7e5;
    --danger:#ef4444;
}

body.dark{
    --bg:#0f172a;
    --card:#1e293b;
    --text:#f8fafc;
    --muted:#cbd5e1;
    --primary:#38bdf8;
    --secondary:#0ea5e9;
    --accent:#facc15;
    --soft:#243447;
    --border:#334155;
    --danger:#fb7185;
}

*{
    box-sizing:border-box;
}

body{
    font-family:'Kantumruy Pro',sans-serif;
    background:var(--bg);
    color:var(--text);
    overflow-x:hidden;
    transition:.3s;
}

.kh-title{
    font-family:'Moul',serif;
}

.mobile-topbar{
    display:none;
    background:linear-gradient(90deg,var(--primary),var(--secondary));
}

.navbar-toggler{
    border:none;
    box-shadow:none!important;
}

.navbar-toggler i{
    font-size:34px;
}

.sidebar{
    min-height:100vh;
    background:linear-gradient(180deg,var(--primary),var(--secondary));
    border-radius:0 34px 34px 0;
    position:sticky;
    top:0;
}

.logo-box{
    background:rgba(255,255,255,.18);
    border-radius:28px;
    padding:24px;
    color:white;
    text-align:center;
}

.logo-box i{
    font-size:48px;
    color:var(--accent);
}

.sidebar a{
    color:white;
    text-decoration:none;
    display:flex;
    align-items:center;
    gap:12px;
    padding:14px 18px;
    border-radius:18px;
    margin-bottom:12px;
    font-weight:800;
    transition:.25s;
}

.sidebar a:hover,
.sidebar a.active{
    background:rgba(255,255,255,.22);
    transform:translateX(5px);
}

.dark-toggle{
    width:50px;
    height:50px;
    border:none;
    border-radius:50%;
    background:rgba(255,255,255,.2);
    color:white;
    font-size:22px;
}

.content-area{
    padding:28px;
}

.hero{
    background:linear-gradient(135deg,var(--primary),var(--secondary));
    color:white;
    border-radius:32px;
    padding:30px;
    box-shadow:0 18px 40px rgba(0,0,0,.12);
}

.hero p{
    color:rgba(255,255,255,.88);
}

.btn-add,
.save-btn{
    background:linear-gradient(135deg,var(--accent),#ffd45f);
    color:#111827;
    border:none;
    border-radius:50px;
    padding:12px 24px;
    font-weight:800;
    transition:.25s;
}

.btn-add:hover,
.save-btn:hover{
    transform:translateY(-2px);
    color:#111827;
}

.card-box{
    background:var(--card);
    color:var(--text);
    border:1px solid var(--border);
    border-radius:28px;
    box-shadow:0 14px 35px rgba(0,0,0,.07);
    transition:.3s;
}

.card-box:hover{
    transform:translateY(-3px);
}

.stat-icon{
    width:62px;
    height:62px;
    border-radius:20px;
    display:flex;
    align-items:center;
    justify-content:center;
    color:white;
    font-size:28px;
}

.icon-1{background:linear-gradient(135deg,#0f766e,#14b8a6);}
.icon-2{background:linear-gradient(135deg,#f59e0b,#facc15);}
.icon-3{background:linear-gradient(135deg,#2563eb,#38bdf8);}

.table{
    color:var(--text)!important;
    margin-bottom:0;
}

.table thead th{
    background:var(--soft);
    color:var(--primary);
    border:none;
    padding:15px;
    font-weight:800;
}

.table tbody td{
    padding:15px;
    border-color:var(--border);
    vertical-align:middle;
}

.table tbody tr:hover{
    background:var(--soft);
}

.product-img,
.no-img{
    width:82px;
    height:82px;
    border-radius:22px;
}

.product-img{
    object-fit:cover;
    border:3px solid var(--soft);
}

.no-img{
    background:var(--soft);
    color:var(--muted);
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:26px;
}

.badge-category{
    background:var(--soft);
    color:var(--primary);
    border-radius:50px;
    padding:8px 14px;
    font-weight:800;
}

.price{
    color:var(--accent);
    font-weight:900;
}

.action-btn{
    width:42px;
    height:42px;
    border:none;
    border-radius:50%;
}

.btn-edit{
    background:#e0f2fe;
    color:#0284c7;
}

.btn-delete{
    background:#fee2e2;
    color:var(--danger);
}

.modal-content{
    background:var(--card);
    color:var(--text);
    border:none;
    border-radius:28px;
}

.modal-header{
    background:linear-gradient(135deg,var(--primary),var(--secondary));
    color:white;
    border:none;
}

.form-control,
.form-select{
    background:var(--card)!important;
    color:var(--text)!important;
    border:2px solid var(--border)!important;
    border-radius:16px;
    padding:12px;
}

.form-control:focus,
.form-select:focus{
    border-color:var(--accent)!important;
    box-shadow:none!important;
}

.preview-img{
    width:100%;
    height:220px;
    border-radius:22px;
    object-fit:cover;
    border:3px dashed var(--border);
    display:none;
    margin-bottom:15px;
}

.preview-box{
    background:var(--soft);
    color:var(--muted);
    border-radius:22px;
    padding:18px;
    text-align:center;
    margin-bottom:15px;
}

.footer{
    background:linear-gradient(135deg,var(--primary),#111827);
    color:white;
    border-radius:28px 28px 0 0;
}

@media(max-width:991px){
    .desktop-sidebar{
        display:none;
    }

    .mobile-topbar{
        display:block;
    }

    .content-area{
        padding:16px;
    }

    .hero{
        padding:22px;
    }

    .btn-add{
        width:100%;
    }

    .table{
        min-width:760px;
    }
}

@media(max-width:576px){
    .hero{
        text-align:center;
    }

    .hero h2{
        font-size:22px;
    }

    .hero .d-flex{
        flex-direction:column;
    }

    .stat-icon{
        width:54px;
        height:54px;
        font-size:22px;
    }
}
</style>
</head>

<body>

<nav class="navbar navbar-dark mobile-topbar sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand kh-title" href="#">
            <i class="bi bi-cup-hot-fill"></i> ម៉ឺនុយឌីជីថល
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
            <i class="bi bi-list text-white"></i>
        </button>
    </div>
</nav>

<div class="offcanvas offcanvas-start text-bg-dark" id="mobileMenu">
    <div class="offcanvas-header">
        <h5 class="kh-title">
            <i class="bi bi-cup-hot-fill"></i> ម៉ឺនុយឌីជីថល
        </h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body">
        <a href="{{ route('dashboard') }}" class="btn btn-warning w-100 mb-3">
            <i class="bi bi-speedometer2"></i> Dashboard
        </a>

        <a href="{{ route('menu') }}" class="btn btn-outline-light w-100 mb-3">
            <i class="bi bi-shop"></i> View Menu
        </a>

        <button class="btn btn-light w-100" onclick="toggleDarkMode()">
            <i class="bi bi-moon-stars-fill" id="mobileDarkIcon"></i> Dark Mode
        </button>
    </div>
</div>

<div class="container-fluid">
<div class="row">

<div class="col-lg-2 sidebar desktop-sidebar p-4">
    <div class="logo-box mb-4">
        <i class="bi bi-cup-hot-fill"></i>
        <h4 class="kh-title mt-3">ម៉ឺនុយឌីជីថល</h4>
        <small>Khmer Restaurant</small>
    </div>

    <a href="{{ route('dashboard') }}" class="active">
        <i class="bi bi-speedometer2"></i> Dashboard
    </a>

    <a href="{{ route('menu') }}">
        <i class="bi bi-shop"></i> View Menu
    </a>

    <button class="dark-toggle mt-3" onclick="toggleDarkMode()">
        <i class="bi bi-moon-stars-fill" id="darkIcon"></i>
    </button>
</div>

<div class="col-lg-10 content-area">

<div class="hero mb-4">
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
        <div>
            <h2 class="kh-title mb-2">ផ្ទាំងគ្រប់គ្រងម៉ឺនុយ</h2>
            <p class="mb-0">គ្រប់គ្រងមុខម្ហូប បន្ថែម កែប្រែ លុប និង Preview រូបភាព</p>
        </div>

        <button class="btn-add" data-bs-toggle="modal" data-bs-target="#addModal">
            <i class="bi bi-plus-circle-fill"></i> បន្ថែមមុខម្ហូប
        </button>
    </div>
</div>

<div class="row g-4 mb-4">
    <div class="col-md-4">
        <div class="card-box p-4 d-flex gap-3 align-items-center">
            <div class="stat-icon icon-1">
                <i class="bi bi-basket-fill"></i>
            </div>
            <div>
                <h4 class="fw-bold mb-0">{{ $products->count() }}</h4>
                <p class="text-muted mb-0">ចំនួនមុខម្ហូប</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card-box p-4 d-flex gap-3 align-items-center">
            <div class="stat-icon icon-2">
                <i class="bi bi-tags-fill"></i>
            </div>
            <div>
                <h4 class="fw-bold mb-0">4</h4>
                <p class="text-muted mb-0">ប្រភេទម្ហូប</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card-box p-4 d-flex gap-3 align-items-center">
            <div class="stat-icon icon-3">
                <i class="bi bi-check-circle-fill"></i>
            </div>
            <div>
                <h4 class="fw-bold mb-0">Active</h4>
                <p class="text-muted mb-0">ស្ថានភាព</p>
            </div>
        </div>
    </div>
</div>

<div class="card-box p-3">
    <h5 class="fw-bold p-2 mb-3">
        <i class="bi bi-list-ul text-info"></i> បញ្ជីមុខម្ហូប
    </h5>

    <div class="table-responsive">
        <table class="table align-middle">
            <thead>
                <tr>
                    <th>រូបភាព</th>
                    <th>ឈ្មោះ</th>
                    <th>ប្រភេទ</th>
                    <th>តម្លៃ</th>
                    <th>ពិពណ៌នា</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
            @forelse($products as $product)
                <tr>
                    <td>
                        @if($product->image)
                            <img src="{{ asset('storage/'.$product->image) }}" class="product-img">
                        @else
                            <div class="no-img"><i class="bi bi-image"></i></div>
                        @endif
                    </td>

                    <td class="fw-bold">{{ $product->name }}</td>

                    <td>
                        <span class="badge-category">
                            {{ ucfirst($product->category) }}
                        </span>
                    </td>

                    <td class="price">
                        ${{ number_format($product->price,2) }}
                    </td>

                    <td class="text-muted">
                        {{ $product->description }}
                    </td>

                    <td>
                        <button class="action-btn btn-edit"
                            data-bs-toggle="modal"
                            data-bs-target="#editModal{{ $product->id }}">
                            <i class="bi bi-pencil-fill"></i>
                        </button>

                        <form action="{{ route('products.destroy',$product->id) }}" method="POST" class="d-inline delete-form">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="action-btn btn-delete">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center py-5">
                        <i class="bi bi-basket display-1 text-info"></i>
                        <h5 class="mt-3">មិនទាន់មានមុខម្ហូប</h5>
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>

<footer class="footer text-center py-4 mt-5">
    <h5 class="kh-title">ម៉ឺនុយឌីជីថល</h5>
    <p class="mb-1">Khmer Style Restaurant Dashboard</p>
    <small>© 2026 All Rights Reserved</small>
</footer>

</div>
</div>
</div>

<div class="modal fade" id="addModal">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
@csrf

<div class="modal-header">
    <h5 class="modal-title fw-bold">
        <i class="bi bi-plus-circle-fill"></i> បន្ថែមមុខម្ហូប
    </h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
</div>

<div class="modal-body">
    <div class="preview-box" id="addPreviewBox">
        <i class="bi bi-image fs-1"></i>
        <p class="mb-0">Preview រូបភាព</p>
    </div>

    <img id="addPreview" class="preview-img">

    <label class="fw-bold">ឈ្មោះមុខម្ហូប</label>
    <input type="text" name="name" class="form-control mb-3" required>

    <label class="fw-bold">ប្រភេទ</label>
    <select name="category" class="form-select mb-3" required>
        <option value="food">Food</option>
        <option value="drink">Drink</option>
        <option value="dessert">Dessert</option>
        <option value="special">Special</option>
    </select>

    <label class="fw-bold">តម្លៃ</label>
    <input type="number" step="0.01" name="price" class="form-control mb-3" required>

    <label class="fw-bold">ពិពណ៌នា</label>
    <textarea name="description" class="form-control mb-3"></textarea>

    <label class="fw-bold">រូបភាព</label>
    <input type="file" name="image" class="form-control" accept="image/*"
           onchange="previewImage(this,'addPreview','addPreviewBox')">
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">បិទ</button>
    <button type="submit" class="save-btn">រក្សាទុក</button>
</div>

</form>
</div>
</div>
</div>

@foreach($products as $product)
<div class="modal fade" id="editModal{{ $product->id }}">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')

<div class="modal-header">
    <h5 class="modal-title fw-bold">
        <i class="bi bi-pencil-square"></i> កែប្រែមុខម្ហូប
    </h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
</div>

<div class="modal-body">

    @if($product->image)
        <img id="editPreview{{ $product->id }}"
             src="{{ asset('storage/'.$product->image) }}"
             class="preview-img"
             style="display:block;">
        <div class="preview-box d-none" id="editPreviewBox{{ $product->id }}"></div>
    @else
        <div class="preview-box" id="editPreviewBox{{ $product->id }}">
            <i class="bi bi-image fs-1"></i>
            <p class="mb-0">Preview រូបភាព</p>
        </div>
        <img id="editPreview{{ $product->id }}" class="preview-img">
    @endif

    <label class="fw-bold">ឈ្មោះមុខម្ហូប</label>
    <input type="text" name="name" value="{{ $product->name }}" class="form-control mb-3" required>

    <label class="fw-bold">ប្រភេទ</label>
    <select name="category" class="form-select mb-3" required>
        <option value="food" {{ $product->category == 'food' ? 'selected' : '' }}>Food</option>
        <option value="drink" {{ $product->category == 'drink' ? 'selected' : '' }}>Drink</option>
        <option value="dessert" {{ $product->category == 'dessert' ? 'selected' : '' }}>Dessert</option>
        <option value="special" {{ $product->category == 'special' ? 'selected' : '' }}>Special</option>
    </select>

    <label class="fw-bold">តម្លៃ</label>
    <input type="number" step="0.01" name="price" value="{{ $product->price }}" class="form-control mb-3" required>

    <label class="fw-bold">ពិពណ៌នា</label>
    <textarea name="description" class="form-control mb-3">{{ $product->description }}</textarea>

    <label class="fw-bold">ប្តូររូបភាព</label>
    <input type="file" name="image" class="form-control" accept="image/*"
           onchange="previewImage(this,'editPreview{{ $product->id }}','editPreviewBox{{ $product->id }}')">
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">បិទ</button>
    <button type="submit" class="save-btn">Update</button>
</div>

</form>
</div>
</div>
</div>
@endforeach

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@if(session('success'))
<script>
Swal.fire({
    icon:'success',
    title:'ជោគជ័យ!',
    text:"{{ session('success') }}",
    confirmButtonText:'យល់ព្រម',
    confirmButtonColor:'#0ea5e9'
});
</script>
@endif

<script>
function previewImage(input,imgId,boxId){
    const file=input.files[0];
    const img=document.getElementById(imgId);
    const box=document.getElementById(boxId);

    if(file){
        img.src=URL.createObjectURL(file);
        img.style.display='block';

        if(box){
            box.style.display='none';
        }
    }
}

document.querySelectorAll('.delete-form').forEach(form=>{
    form.addEventListener('submit',function(e){
        e.preventDefault();

        Swal.fire({
            title:'តើអ្នកប្រាកដទេ?',
            text:'មុខម្ហូបនេះនឹងត្រូវបានលុប!',
            icon:'warning',
            showCancelButton:true,
            confirmButtonColor:'#ef4444',
            cancelButtonColor:'#64748b',
            confirmButtonText:'លុប',
            cancelButtonText:'បោះបង់'
        }).then((result)=>{
            if(result.isConfirmed){
                form.submit();
            }
        });
    });
});

function setThemeIcon(isDark){
    const darkIcon=document.getElementById("darkIcon");
    const mobileDarkIcon=document.getElementById("mobileDarkIcon");

    if(darkIcon){
        darkIcon.className=isDark ? "bi bi-sun-fill" : "bi bi-moon-stars-fill";
    }

    if(mobileDarkIcon){
        mobileDarkIcon.className=isDark ? "bi bi-sun-fill" : "bi bi-moon-stars-fill";
    }
}

function toggleDarkMode(){
    document.body.classList.toggle("dark");

    const isDark=document.body.classList.contains("dark");

    localStorage.setItem("theme",isDark ? "dark" : "light");

    setThemeIcon(isDark);
}

document.addEventListener("DOMContentLoaded",function(){
    const savedTheme=localStorage.getItem("theme");

    if(savedTheme==="dark"){
        document.body.classList.add("dark");
        setThemeIcon(true);
    }else{
        setThemeIcon(false);
    }
});
</script>

</body>
</html>