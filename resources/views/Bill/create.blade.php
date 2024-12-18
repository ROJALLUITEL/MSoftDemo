<!DOCTYPE html>
<html lang="en">
<head>

  
</head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create bill Detail</h1>
    <div>
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
        @endif
    </div>
</div>
<form method="post" action="{{ route('bill.store') }}">
    @csrf
    @method('post')
    
    <label for="company_name">Company Name:</label>
    <input type="text" id="company_name" name="company_name" required><br><br>

    <label for="customer_name">Customer Name:</label>
    <input type="text" id="customer_name" name="customer_name" required><br><br>

    <label for="location">Location:</label>
    <input type="text" id="location" name="location" required><br><br>

    <label for="contact">Contact:</label>
    <input type="tel" id="contact" name="contact" required><br><br>

    <label for="items">Items:</label>
    <input type="text" id="items" name="items" required><br><br>

    <label for="price">Price:</label>
    <input type="number" id="price" name="price" step="0.01" required><br><br>

    <label for="discount"> Discount:</label>
    <input type="number" id="discount" name="discount" step="0.01"><br><br>

    {{-- <label for="total">Total:</label>
    <input type="number" id="total" name="total" step="0.01" readonly><br><br> --}}
    
    <button type="submit">Submit</button>
</form>
</body>
</body>
</html>
