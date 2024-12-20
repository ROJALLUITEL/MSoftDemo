{{-- <head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-top: 20px;
            font-size: 24px;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table th, table td {
            padding: 12px 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        table th {
            background-color: gray;
            color: white;
            font-weight: bold;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #ddd;
        }

        table td a {
            text-decoration: none;
            color: white;
            padding: 8px 15px;
            background-color: #4CAF50;
            border-radius: 5px;
            margin-right: 5px;
        }

        table td form input[type="submit"] {
            background-color: #f44336;
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        table td a:hover,
        table td form input[type="submit"]:hover {
            opacity: 0.8;
        }

        .add-button {
            background-color: #008CBA;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 20px;
        }

        .add-button:hover {
            background-color: #006f8b;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bill Details</h1>
        <a href="{{ route('bill.create') }}" class="add-button">Add Bill</a>

        <div class="alert">
            @if (session()->has('success'))
                {{ session('success') }}
            @endif
        </div>

        <table>
            <tr>
                <th>ID</th>
                <th>Company Name</th>
                <th>Customer Name</th>
                <th>Location</th>
                <th>Contact</th>
                <th>Items</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Total</th>
                <th>Actions</th>
            </tr>

            @foreach ($bills as $bill)
            <tr>
                <td>{{ $bill->id }}</td>
                <td>{{ $bill->company_name }}</td>
                <td>{{ $bill->customer_name }}</td>
                <td>{{ $bill->location }}</td>
                <td>{{ $bill->contact }}</td>
                <td>{{ $bill->items }}</td>
                <td>{{ $bill->price }}</td>
                <td>{{ $bill->discount }}%</td>
                <td>{{ $bill->total }}</td>
                <td>
                    <a href="{{ route('bill.edit', ['bill' => $bill]) }}" class="btn-edit">Edit</a>
                    <form method="POST" action="{{ route('bill.destroy', ['bill' => $bill]) }}" style="display:inline;">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" />
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body> --}}



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-top: 20px;
            font-size: 24px;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table th,
        table td {
            padding: 12px 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        table th {
            background-color: gray;
            color: white;
            font-weight: bold;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #ddd;
        }

        table td a {
            text-decoration: none;
            color: white;
            padding: 8px 15px;
            background-color: #4CAF50;
            border-radius: 5px;
            margin-right: 5px;
        }

        table td form input[type="submit"] {
            background-color: #f44336;
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        table td a:hover,
        table td form input[type="submit"]:hover {
            opacity: 0.8;
        }

        .add-button {
            background-color: #008CBA;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 20px;
        }

        .add-button:hover {
            background-color: #006f8b;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Bill Records</h1>
        <a href="{{ route('bill.create') }}" class="add-button">Add Bill</a>

        <div class="alert">
            @if (session()->has('success'))
                {{ session('success') }}
            @endif
        </div>

        <table>
            <tr>
                <th>ID</th>
                <th>Company Name</th>
                <th>Customer Name</th>
                <th>Location</th>
                <th>Contact</th>
                <th>Items</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Total</th>
                <th>Actions</th>
            </tr>

            @foreach ($bills as $bill)
                <tr>
                    <td>{{ $bill->id }}</td>
                    <td>{{ $bill->company_name }}</td>
                    <td>{{ $bill->customer_name }}</td>
                    <td>{{ $bill->location }}</td>
                    <td>{{ $bill->contact }}</td>
                    <td>{{ $bill->items }}</td>
                    <td>{{ $bill->price }}</td>
                    <td>{{ $bill->discount }}%</td>
                    <td>{{ $bill->total }}</td>
                    <td>
                        <a href="{{ route('bill.edit', ['bill' => $bill]) }}" class="btn-edit">Edit</a>
                        <form method="POST" action="{{ route('bill.destroy', ['bill' => $bill]) }}"
                            style="display:inline;">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</head>

</html>
