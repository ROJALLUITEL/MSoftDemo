<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Details</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            width: 80%;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            color: #4CAF50;
            font-size: 2em;
        }

        .company-name {
            font-size: 1.2em;
            font-weight: bold;
            margin-top: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 16px;
        }

        th,
        td {
            padding: 12px 20px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e2f7e2;
        }

        .total-row td {
            font-weight: bold;
            background-color: #e2f7e2;
        }

        .total-row td:nth-child(1) {
            text-align: right;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="header">
            <h1>Bill Details</h1>
            <div class="company-name">
                <p><strong>Company Name: </strong>{{ $bill->company_name }}</p>
            </div>
        </div>
        <table>
            <tr>
                <td><strong>Customer Name</strong></td>
                <td>{{ $bill->customer_name }}</td>
            </tr>
            <tr>
                <td><strong>Location</strong></td>
                <td>{{ $bill->location }}</td>
            </tr>
            <tr>
                <td><strong>Contact</strong></td>
                <td>{{ $bill->contact }}</td>
            </tr>
            <tr>
                <td><strong>Items</strong></td>
                <td>{{ $bill->items }}</td>
            </tr>
            <tr>
                <td><strong>Price</strong></td>
                <td>{{ $bill->price }}</td>
            </tr>
            <tr>
                <td><strong>Discount</strong></td>
                <td>{{ $bill->discount }}</td>
            </tr>
            <tr class="total-row">
                <td><strong>Total</strong></td>
                <td>{{ $bill->total }}</td>
            </tr>
        </table>
    </div>

</body>

</html>
