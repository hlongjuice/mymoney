@extends('layouts.master')
@section('content')
    <table class="table table-striped">
        <tr class="info">
            {!! Form::open(array('route'=>array('products.destroy',$products))) !!}
            {{ Form::hidden('_method', 'DELETE') }}
            <th>{!! Form::checkbox('check_product',array('id'=>'select_all')) !!}</th>
            <th>รหัสสินค้า</th>
            <th>ชื่อสินค้า</th>
            <th>ราคาทุน</th>
            <th>ราคาขาย</th>
            <th> </th>
            <th> </th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{!! Form::checkbox('check_product'),array('class'=>'chkbox1') !!}</td>
                <td>{{$product->id }}</td>
                <td>{{$product->name }}</td>
                <td>{{$product->cost_price}}</td>
                <td>{{$product->sale_price}}</td>
                <td><a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">แก้ไข</a></td>
                {!! Form::open(array('route'=>array('products.destroy',$product->id,),'class' =>'form-horizontal')) !!}
                {{ Form::hidden('_method', 'DELETE') }}
                <td>{{ Form::button('ลบ',array('type'=>'submit','class'=>'btn btn-danger')) }}</td>
                {!! Form::close() !!}
            </tr>
        @endforeach
    </table>
@endsection
@section('page-script')
    <script>
        $(document).ready(function() {
            $('#select_all').click(function(event) {  //on click
                if(this.checked) { // check select status
                    $('.checkbox1').each(function() { //loop through each checkbox
                        this.checked = true;  //select all checkboxes with class "checkbox1"
                    });
                }else{
                    $('.checkbox1').each(function() { //loop through each checkbox
                        this.checked = false; //deselect all checkboxes with class "checkbox1"
                    });
                }
            });

        });
    </script>
    @endsection