@extends('layouts.master')
@section('content')
    <div class="panel panel-info">
        <div class="panel-heading" >
            เพิ่มสินค้า
        </div>
        <div class="panel-body">
                {!! Form::open(array('url'=>'/add-product','class' =>'form-horizontal')) !!}
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            {!! Form::label('product_name','ชื่อสินค้า',array('class'=>'col-xs-1 control-label' )) !!}
                            <div class="col-xs-2">
                                {!! Form::text('product_name',null,array('class'=>'form-control','placeholder'=>'ชื่อสินค้า')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('product_name','ชื่อสินค้า',array('class'=>'col-xs-1 control-label' )) !!}
                            <div class="col-xs-2">
                                {!! Form::text('product_name',null,array('class'=>'form-control','placeholder'=>'ชื่อสินค้า')) !!}
                            </div>
                        </div>



                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">

                        </div>

                    </div>
                </div>
        </div>
        <div class="row">
            <div class="col-md-12"></div>
        </div>
    </div>
@endsection