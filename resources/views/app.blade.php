<!DOCTYPE html>
<html>
<head>
    <title>Items</title>
    <style>
        /* This places the tables side-by-side and gives them nice spacing */
        .menu-container {
            display: flex;
            gap: 40px;
            align-items: flex-start;
            margin-top: 20px;
        }
        table {
            border-collapse: collapse;
            border: 1px solid #191a1d;
        }
        th, td {
            padding: 8px 12px;
            border: 1px solid #191a1d;
        }
    </style>
</head>
<body>

<h1>Items</h1>

<div class="menu-container">

    <!-- LEFT TABLE: Hot Coffee -->
    <table>
        <thead>
        <tr>
            <th>Coffee - Hot</th>
            <th>Size</th>
            <th>Price</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($items as $item)
            @if(stripos($item->name, 'iced') === false)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->size }}</td>
                    <td>${{ number_format($item->price, 2) }}</td>
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>

    <!-- RIGHT TABLE: Iced Coffee -->
    <table>
        <thead>
        <tr>
            <th>Coffee - Iced</th>
            <th>Size</th>
            <th>Price</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($items as $item)
            @if(stripos($item->name, 'iced') !== false)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->size }}</td>
                    <td>${{ number_format($item->price, 2) }}</td>
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>

</div>

</body>
</html>
