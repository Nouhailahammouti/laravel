<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>
<body>
       <nav class="navbar">
    <a href="{{ route('proudct.creat') }}">CREATE</a>
    <a href="{{ route('proudct.index') }}">TABLE</a>
    <a href="{{route ('proudct.archive_list') }}">ARCHIVE</a>
</nav>
    <h1>Create the Product</h1>

    @if($errors->any())
        <ul style="color: red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <div>
        <form method="POST" action="{{ route('proudct.store') }}">
            @csrf
            
            <label>NAME</label><br>
            <input type="text" name="name" placeholder="Name..." value="{{ old('name') }}"><br><br>

            <label>QTY</label><br>
            <input type="number" name="qty" placeholder="Qty..." value="{{ old('qty') }}"><br><br>

            <label>PRICE</label><br>
            <input type="number" step="0.01" name="price" placeholder="Price..." value="{{ old('price') }}"><br><br>

            <label>DESCRIPTION</label><br>
            <input type="text" name="des" placeholder="Description..." value="{{ old('des') }}"><br><br>
        
            <input type="submit" value="Save Product">
        </form>
    </div>
</body>
<style>
    .navbar {
        background: white;
        padding: 1rem 5%;
        display: flex;
        justify-content: flex-start;
        gap: 30px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        position: sticky;
        top: 0;
        z-index: 1000;
    }

    .navbar a {
        text-decoration: none;
        color: var(--text);
        font-weight: 600;
        font-size: 14px;
        padding: 8px 12px;
        border-radius: 6px;
        transition: 0.3s;
    }

    .navbar a:hover {
        color: var(--primary);
        background: #f0f3ff;
    }
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f4f7f6;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 40px;
    }

    h1 {
        color: #2c3e50;
        margin-bottom: 20px;
    }

    /* حاوية النموذج */
    div {
        background-color: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        width: 100%;
        max-width: 400px;
    }

    label {
        font-weight: bold;
        color: #34495e;
        display: block;
        margin-bottom: 5px;
    }

    /* تنسيق مربعات الإدخال */
    input[type="text"],
    input[type="number"] {
        width: 100%;
        padding: 12px;
        margin-bottom: 5px; /* مسافة للأخطاء */
        border: 1px solid #dcdde1;
        border-radius: 5px;
        box-sizing: border-box; /* لضمان عدم خروج الإدخال عن الحاوية */
        transition: border-color 0.3s;
    }

    input:focus {
        border-color: #3498db;
        outline: none;
    }

    /* تنسيق زر الحفظ */
    input[type="submit"] {
        width: 100%;
        background-color: #2ecc71;
        color: white;
        padding: 12px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        font-weight: bold;
        transition: background-color 0.3s;
        margin-top: 10px;
    }

    input[type="submit"]:hover {
        background-color: #27ae60;
    }

    /* تنسيق رسائل الخطأ */
    ul {
        background-color: #ffebed;
        border-left: 5px solid #e74c3c;
        padding: 15px 30px;
        border-radius: 5px;
        width: 100%;
        max-width: 400px;
        list-style-type: none;
        margin-bottom: 20px;
    }

    ul li {
        color: #c0392b;
        font-size: 14px;
        margin-bottom: 5px;
    }
</style>
</html>
