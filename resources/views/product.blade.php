@extends('layouts.master')
@section('content')
    <table class="table table-striped">
        <tr class="info">
            <th>รหัสสินค้า</th>
            <th>ชื่อสินค้า</th>
            <th>ราคาทุน</th>
            <th>ราคาขาย</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>$product->id</td>
                <td>$product->name</td>
                <td>$product->cost_price</td>
                <td>$product->sale_price</td>
            </tr>
            @endforeach


    </table>
@endsection