<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel CRUD</title>

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        *{margin:0;padding:0;box-sizing:border-box;font-family:Arial}
        body{background:#0f172a;padding:40px;color:white}
        .container{max-width:1200px;margin:auto}
        .title{text-align:center;font-size:35px;color:#38bdf8;margin-bottom:25px}
        .card{background:#1e293b;padding:25px;border-radius:20px;margin-bottom:30px}
        .form-group{display:flex;gap:15px;flex-wrap:wrap}
        input{flex:1;padding:14px;border:none;border-radius:12px;background:#334155;color:white}
        input:focus{outline:none;border:2px solid #38bdf8}
        .btn{border:none;padding:14px 20px;border-radius:12px;cursor:pointer;color:white;font-weight:bold}
        .btn-add{background:#06b6d4}
        .btn-update{background:#22c55e}
        .btn-delete{background:#ef4444;text-decoration:none;padding:12px 16px;border-radius:10px;color:white}
        table{width:100%;border-collapse:collapse}
        thead{background:#06b6d4}
        th,td{padding:15px;text-align:center}
        td{background:#1e293b;border-bottom:1px solid #334155}
        .action-box{display:flex;justify-content:center;gap:10px}

        .modal{
            display:none;
            position:fixed;
            inset:0;
            background:rgba(0,0,0,0.7);
            justify-content:center;
            align-items:center;
            z-index:999;
        }

        .modal-content{
            background:#1e293b;
            padding:30px;
            border-radius:20px;
            width:400px;
        }

        .modal-content h2{
            margin-bottom:20px;
            color:#38bdf8;
            text-align:center;
        }

        .modal-content input{
            width:100%;
            margin-bottom:15px;
        }

        .modal-actions{
            display:flex;
            justify-content:space-between;
            gap:10px;
        }

        .btn-cancel{
            background:#64748b;
        }
    </style>
</head>
<body>

<div class="container">

    <div class="title">
        <i class="fa-solid fa-database"></i>
        Laravel Product CRUD
    </div>

    <div class="card">
        <form action="/store" method="POST" onsubmit="return confirmInsert(event)">
            @csrf

            <div class="form-group">
                <input type="text" name="name" placeholder="🛒 Product Name" required>
                <input type="number" step="0.01" name="price" placeholder="💲 Price" required>
                <input type="number" name="qty" placeholder="📦 Quantity" required>

                <button class="btn btn-add" type="submit">
                    <i class="fa-solid fa-plus"></i> Insert
                </button>
            </div>
        </form>
    </div>

    <div class="card">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>${{ $product->price }}</td>
                    <td>{{ $product->qty }}</td>

                    <td>
                        <div class="action-box">
                            <button type="button"
                                    class="btn btn-update"
                                    onclick="openEditModal(
                                        '{{ $product->id }}',
                                        '{{ $product->name }}',
                                        '{{ $product->price }}',
                                        '{{ $product->qty }}'
                                    )">
                                <i class="fa-solid fa-pen"></i> Update
                            </button>

                            <a href="javascript:void(0)"
                               class="btn-delete"
                               onclick="confirmDelete('/delete/{{ $product->id }}')">
                                <i class="fa-solid fa-trash"></i> Delete
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>

<div class="modal" id="editModal">
    <div class="modal-content">
        <h2>Update Product</h2>

        <form id="editForm" method="POST" onsubmit="return confirmUpdate(event)">
            @csrf

            <input type="text" id="editName" name="name" placeholder="Product Name" required>

            <input type="number" step="0.01" id="editPrice" name="price" placeholder="Price" required>

            <input type="number" id="editQty" name="qty" placeholder="Quantity" required>

            <div class="modal-actions">
                <button type="button" class="btn btn-cancel" onclick="closeEditModal()">
                    Cancel
                </button>

                <button type="submit" class="btn btn-update">
                    Save Update
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function openEditModal(id, name, price, qty) {
        document.getElementById('editForm').action = '/update/' + id;
        document.getElementById('editName').value = name;
        document.getElementById('editPrice').value = price;
        document.getElementById('editQty').value = qty;

        document.getElementById('editModal').style.display = 'flex';
    }

    function closeEditModal() {
        document.getElementById('editModal').style.display = 'none';
    }

    function confirmDelete(url) {
        Swal.fire({
            title: 'Are you sure?',
            text: 'This product will be deleted!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#ef4444',
            cancelButtonColor: '#64748b',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        });
    }

    function confirmUpdate(event) {
        event.preventDefault();

        Swal.fire({
            title: 'Update product?',
            text: 'Do you want to save changes?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#22c55e',
            cancelButtonColor: '#64748b',
            confirmButtonText: 'Yes, update'
        }).then((result) => {
            if (result.isConfirmed) {
                event.target.submit();
            }
        });

        return false;
    }

    function confirmInsert(event) {
        event.preventDefault();

        Swal.fire({
            title: 'Insert product?',
            text: 'Do you want to add this product?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#06b6d4',
            cancelButtonColor: '#64748b',
            confirmButtonText: 'Yes, insert'
        }).then((result) => {
            if (result.isConfirmed) {
                event.target.submit();
            }
        });

        return false;
    }
</script>

</body>
</html>