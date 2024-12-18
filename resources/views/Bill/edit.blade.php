<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Bill Detail</h1>
</div>
<form method="post" action="{{route('bill.update',['bill'=>$bill]) }}">
    
    @csrf
    @method('put')
    
    <label for="company_name">Company Name:</label>
    <input type="text" id="company_name" name="company_name" required value="{{ $bill->company_name }}"><br><br>

    <label for="customer_name">Customer Name:</label>
    <input type="text" id="customer_name" name="customer_name" required value="{{ $bill->customer_name }}"><br><br>

    <label for="location">Location:</label>
    <input type="text" id="location" name="location" required value="{{ $bill->location }}"><br><br>

    <label for="contact">Contact:</label>
    <input type="tel" id="contact" name="contact" required value="{{ $bill->contact }}"><br><br>

    <label for="items">Items:</label>
    <input type="text" id="items" name="items" required value="{{ $bill->items }}"><br><br>

    <label for="price">Price:</label>
    <input type="number" id="price" name="price" step="0.01" required value="{{ $bill->price }}"><br><br>

    <label for="discount"> Discount :</label>
    <input type="number" id="discount" name="discount" step="0.01" value="{{ $bill->discount }}"><br><br>

    <label for="total">Total:</label>
    <input type="number" id="total" name="total" step="0.01" value="{{ $bill->total }}"><br><br>
    
    <button type="submit">Submit</button>
</form>
</body>
</html>
