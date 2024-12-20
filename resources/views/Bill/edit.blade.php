<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: cornsilk;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        .form-container {
            margin: 20px auto;
            width: 60%;
            background-color: lightgrey;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container table {
            width: 100%;
            border-collapse: collapse;
        }

        .form-container td {
            padding: 10px;
        }

        .form-container input[type="text"],
        .form-container input[type="number"],
        .form-container input[type="tel"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            text-align: center;
            width: 100%;
        }

        .form-container button,
        .form-container a {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            text-align: center;
            width: 48%;
        }

        .form-container button {
            background-color: #007bff;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #0056b3;
        }

        .btn-primary {
            background-color: #28a745;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #218838;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            gap: 10px;
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Bill</title>
</head>

<body>
    <h1>Edit Bill Detail</h1>
    <div class="form-container">
        <form method="post" action="{{ route('bill.update', ['bill' => $bill]) }}">
            @csrf
            @method('put')
            <table>
                <tr>
                    <td><label for="company_name">Company Name:</label></td>
                    <td><input type="text" id="company_name" name="company_name" required
                            value="{{ $bill->company_name }}"></td>
                </tr>
                <tr>
                    <td><label for="customer_name">Customer Name:</label></td>
                    <td><input type="text" id="customer_name" name="customer_name" required
                            value="{{ $bill->customer_name }}"></td>
                </tr>
                <tr>
                    <td><label for="location">Location:</label></td>
                    <td><input type="text" id="location" name="location" required value="{{ $bill->location }}">
                    </td>
                </tr>
                <tr>
                    <td><label for="contact">Contact:</label></td>
                    <td><input type="tel" id="contact" name="contact" required value="{{ $bill->contact }}"></td>
                </tr>
                <tr>
                    <td><label for="items">Items:</label></td>
                    <td><input type="text" id="items" name="items" required value="{{ $bill->items }}"></td>
                </tr>
                <tr>
                    <td><label for="price">Price:</label></td>
                    <td><input type="number" id="price" name="price" step="0.01" required
                            value="{{ $bill->price }}"></td>
                </tr>
                <tr>
                    <td><label for="discount">Discount (%):</label></td>
                    <td><input type="number" id="discount" name="discount" step="0.01"
                            value="{{ $bill->discount }}"></td>
                </tr>
                <tr>
                    <td><label for="total">Total:</label></td>
                    <td><input type="number" id="total" name="total" step="0.01" value="{{ $bill->total }}">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <div class="button-container">
                            <button type="submit">Submit</button>
                            <a href="{{ route('bill.download', ['id' => $bill->id]) }}" class="btn-primary">Download
                                PDF</a>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>
