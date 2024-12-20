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
        .form-container input[type="tel"],
        .form-container button {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-container button {
            background-color: #007bff;
            color: white;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }

        .form-container button:hover {
            background-color: #0056b3;
        }

        .error-list {
            color: red;
            margin-bottom: 20px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Bill</title>
</head>

<body>
    <h1>Create Bill Detail</h1>
    <div class="form-container">
        @if ($errors->any())
            <div class="error-list">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="{{ route('bill.store') }}">
            @csrf
            <table>
                <tr>
                    <td><label for="company_name">Company Name:</label></td>
                    <td><input type="text" id="company_name" name="company_name" required></td>
                </tr>
                <tr>
                    <td><label for="customer_name">Customer Name:</label></td>
                    <td><input type="text" id="customer_name" name="customer_name" required></td>
                </tr>
                <tr>
                    <td><label for="location">Location:</label></td>
                    <td><input type="text" id="location" name="location" required></td>
                </tr>
                <tr>
                    <td><label for="contact">Contact:</label></td>
                    <td><input type="tel" id="contact" name="contact" required></td>
                </tr>
                <tr>
                    <td><label for="items">Items:</label></td>
                    <td><input type="text" id="items" name="items" required></td>
                </tr>
                <tr>
                    <td><label for="price">Price:</label></td>
                    <td><input type="number" id="price" name="price" step="0.01" required></td>
                </tr>
                <tr>
                    <td><label for="discount">Discount (%):</label></td>
                    <td><input type="number" id="discount" name="discount" step="0.01"></td>
                </tr>
                <tr>
                    <td><label for="total">Total:</label></td>
                    <td><input type="number" id="total" name="total" step="0.01" readonly></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <button type="submit">Submit</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>
