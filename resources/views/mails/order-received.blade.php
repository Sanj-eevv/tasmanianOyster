<html lang="en">
<head>
    <title></title>
    <style>
        body {
            font-family: Helvetica, sans-serif;
            font-size: 13px;
        }

        .container {
            max-width: 680px;
            margin: 0 auto;
        }
        .column-title {
            background: #eee;
            text-transform: uppercase;
            padding: 15px 5px 15px 15px;
            font-size: 11px
        }

        .column-detail {
            border-top: 1px solid #eee;
            border-bottom: 1px solid #eee;
        }
    </style>
</head>
<body>
<div class="container">

    <table width="100%">
        <tr>
            <td height="75px" style="background: #fee977; font-size:26px; font-weight:bold; letter-spacing:-1px; text-align:center">New Order Received</td>
        </tr>
    </table>
    <h3>Details</h3>
    <table width="100%" style="border-collapse: collapse;">
        <tr>
            <td width="180px" class="column-title">From Email<td>
            <td class="column-detail">{{$order->email}}<td>
        </tr>
        <tr>
            <td class="column-title">Quantity<td>
            <td class="column-detail">{{$order->quantity}}<td>
        </tr>
        <tr>
            <td class="column-title">Description<td>
            <td class="column-detail">{{$order->description}}<td>
        </tr>
        <tr>
            <td class="column-title">Product<td>
            <td class="column-detail">{{$order->johnReserve?->title}}<td>
        </td>
    </table>
</div>
</body>
</html>