<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Product CRUD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            background:
                radial-gradient(circle at top left, #38bdf8 0, transparent 28%),
                radial-gradient(circle at bottom right, #8b5cf6 0, transparent 28%),
                #020617;
            padding: 30px;
            color: white;
        }

        .container {
            max-width: 1200px;
            margin: auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            margin-bottom: 25px;
            flex-wrap: wrap;
        }

        .header-title h1 {
            font-size: 36px;
            background: linear-gradient(90deg, #38bdf8, #a78bfa);
            -webkit-background-clip: text;
            color: transparent;
        }

        .header-title p {
            color: #cbd5e1;
            margin-top: 5px;
        }

        .card {
            background: rgba(15, 23, 42, 0.88);
            border: 1px solid rgba(255,255,255,0.1);
            backdrop-filter: blur(14px);
            border-radius: 24px;
            padding: 24px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.35);
        }

        .btn {
            border: none;
            padding: 13px 18px;
            border-radius: 14px;
            cursor: pointer;
            color: white;
            font-weight: bold;
            transition: 0.25s;
            font-size: 14px;
        }

        .btn:hover {
            transform: translateY(-2px);
            opacity: 0.92;
        }

        .btn-add {
            background: linear-gradient(135deg, #06b6d4, #3b82f6);
        }

        .btn-update {
            background: linear-gradient(135deg, #22c55e, #16a34a);
        }

        .btn-delete {
            background: linear-gradient(135deg, #ef4444, #dc2626);
            text-decoration: none;
            padding: 12px 16px;
            border-radius: 14px;
            color: white;
            font-weight: bold;
            display: inline-block;
            font-size: 14px;
        }

        .btn-cancel {
            background: #64748b;
        }

        .table-wrapper {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            min-width: 750px;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 18px;
        }

        thead {
            background: linear-gradient(135deg, #06b6d4, #6366f1);
        }

        th, td {
            padding: 15px;
            text-align: center;
        }

        tbody tr {
            background: rgba(30, 41, 59, 0.92);
            border-bottom: 1px solid #334155;
            transition: 0.25s;
        }

        tbody tr:hover {
            background: rgba(51, 65, 85, 0.95);
        }

        .price {
            color: #22c55e;
            font-weight: bold;
        }

        .qty {
            background: #334155;
            padding: 6px 13px;
            border-radius: 30px;
            display: inline-block;
        }

        .action-box {
            display: flex;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .empty {
            padding: 30px;
            color: #94a3b8;
            font-size: 18px;
        }

        .modal {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.75);
            justify-content: center;
            align-items: center;
            z-index: 999;
            padding: 20px;
        }

        .modal-content {
            width: 430px;
            max-width: 100%;
            background: #0f172a;
            border: 1px solid #334155;
            padding: 28px;
            border-radius: 24px;
            box-shadow: 0 30px 70px rgba(0,0,0,0.55);
            animation: popup 0.25s ease;
        }

        @keyframes popup {
            from {
                transform: scale(0.85);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        .modal-content h2 {
            text-align: center;
            color: #38bdf8;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 15px;
            margin-bottom: 14px;
            border-radius: 14px;
            border: 1px solid #334155;
            background: #020617;
            color: white;
            font-size: 15px;
        }

        input:focus {
            outline: none;
            border-color: #38bdf8;
            box-shadow: 0 0 0 3px rgba(56,189,248,0.22);
        }

        .modal-actions {
            display: flex;
            gap: 10px;
        }

        .modal-actions button {
            flex: 1;
        }

        @media (max-width: 768px) {
            body {
                padding: 18px;
            }

            .header {
                text-align: center;
                justify-content: center;
            }

            .header-title h1 {
                font-size: 28px;
            }

            .header-title p {
                font-size: 14px;
            }

            .btn {
                width: 100%;
            }

            .card {
                padding: 16px;
            }

            .modal-content {
                padding: 22px;
            }

            .modal-actions {
                flex-direction: column;
            }
        }

        @media (max-width: 480px) {
            .header-title h1 {
                font-size: 24px;
            }

            body {
                padding: 12px;
            }

            th, td {
                padding: 12px;
                font-size: 13px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <div class="header">
        <div class="header-title">
            <h1><i class="fa-solid fa-boxes-stacked"></i> Product Management</h1>
            <p>Laravel CRUD with responsive modal form</p>
        </div>

        <button class="btn btn-add" onclick="openInsertModal()">
            <i class="fa-solid fa-plus"></i> Add Product
        </button>
    </div>

    <div class="card">
        <div class="table-wrapper">
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
                @forelse($products as $product)
                    <tr>
                        <td>#{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td class="price">${{ number_format($product->price, 2) }}</td>
                        <td><span class="qty">{{ $product->qty }}</span></td>
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
                @empty
                    <tr>
                        <td colspan="5" class="empty">No products found</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>


<!-- INSERT MODAL -->
<div class="modal" id="insertModal">
    <div class="modal-content">
        <h2><i class="fa-solid fa-cart-plus"></i> Insert Product</h2>

        <form action="/store" method="POST" onsubmit="return confirmInsert(event)">
            @csrf

            <input type="text" name="name" placeholder="🛒 Product Name" required>
            <input type="number" step="0.01" name="price" placeholder="💲 Price" required>
            <input type="number" name="qty" placeholder="📦 Quantity" required>

            <div class="modal-actions">
                <button type="button" class="btn btn-cancel" onclick="closeInsertModal()">
                    Cancel
                </button>

                <button type="submit" class="btn btn-add">
                    Insert
                </button>
            </div>
        </form>
    </div>
</div>


<!-- UPDATE MODAL -->
<div class="modal" id="editModal">
    <div class="modal-content">
        <h2><i class="fa-solid fa-pen-to-square"></i> Update Product</h2>

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
    function openInsertModal() {
        document.getElementById('insertModal').style.display = 'flex';
    }

    function closeInsertModal() {
        document.getElementById('insertModal').style.display = 'none';
    }

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

    function confirmDelete(url) {
        Swal.fire({
            title: 'Delete product?',
            text: 'This product will be deleted.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#ef4444',
            cancelButtonColor: '#64748b',
            confirmButtonText: 'Yes, delete'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        });
    }

    window.onclick = function(event) {
        let insertModal = document.getElementById('insertModal');
        let editModal = document.getElementById('editModal');

        if (event.target === insertModal) {
            closeInsertModal();
        }

        if (event.target === editModal) {
            closeEditModal();
        }
    }
</script>

</body>
</html>