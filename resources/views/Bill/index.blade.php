<!DOCTYPE html>
<html lang="en">
<head>
    <style>

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            background:gray;
        }

        td,
        th {
            border: 1px solid black;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Bills Details</h1>
    <a href="{{ route('bill.create') }}"><button>Add Bill</button></a>
    <div>
        @if (session()->has('success'))
        <div>
            {{ session('success') }}
        </div>
            
        @endif
    </div>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>company_name</th>
                <th>customer_name</th>
                <th>location</th>
                <th>Contact</th>
                <th>item</th>
                <th>price</th>
                <th>discount</th>
                <th>total</th>
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
                    <a href="{{ route('bill.edit',['bill'=>$bill]) }}">
                        <button style="background-color: green; color: white;">Edit</button>
                    </a>
                    <form method="POST" action="{{ route('bill.destroy',['bill'=>$bill]) }}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" style="background-color: red; color: white;" />
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        
    </div>

</body>
</html>