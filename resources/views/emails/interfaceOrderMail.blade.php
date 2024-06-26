<!DOCTYPE html>
<html>
<head>
    <title>Order Confirmation</title>
</head>
 <style>
        ul {
            list-style-type: none;
            padding-left: 0;
        }

        li {
            text-decoration: none;
            list-style: none;
             font-size: 16px;
        }
    </style>
<body>
    <h1>Xác nhận đơn hàng</h1>
    <p>Cảm ơn bạn đã đặt hàng bên cửa hàng của chúng tôi !!!</p>
    <p><strong>Chi tiết đơn hàng của bạn</strong></p>
    <ul>
        <li><strong>Mã đơn hàng :</strong> {{ $orderDetails['order_id'] }}</li>
        <li><strong>Tên khách hàng :</strong> {{ $orderDetails['customer_name'] }}</li>
        <li><strong>Số điện thoạ :</strong> {{ $orderDetails['phone_number'] }}</li>
        <li><strong>Địa chỉ nhận hàng :</strong> {{ $orderDetails['address'] }}</li>
         <li><strong>Sản phẩm bạn đã đặt :</strong>
            <ul>
                @foreach ($orderDetails['products'] as $product)
                    <li>Tên sản phẩm: {{ $product['name'] }} - SL: {{ $product['quantity'] }}</li>
                @endforeach
            </ul>
        </li>
        <li><strong>Tổng tiền thanh toán :</strong> {{ number_format($orderDetails['total_price'], 0, ',', '.') }} đ</li>
    </ul>
</body>
</html>