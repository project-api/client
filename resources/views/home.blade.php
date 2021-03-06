@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Products</div>
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-product">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Price</th>
                          <th>Quatity</th>
                          <th colspan="3" style="text-align: center">Features</th>
                        </tr>
                      </thead>
                      <tbody class="tbody-product">
                        <!-- Using $.ajax in js/product.js to retrieve the list products -->
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
            <!-- Display error -->
            <div class="error-create-product alert">
            </div>
        </div>

        <div class="col-md-4">
             <div class="panel panel-default">
               <div class="panel panel-heading">
                 Create A New Product
               </div>
               <div class="panel panel-body">
                 {!! Form::open(['url' => 'http://web-api.dev/api/products', 'method' => 'post', 'class' => 'form-create']) !!}
                 <!-- Dropdown category -->
                 <div class="form-group" id="categories-list">
                   <!-- Using ajax to retrieve dropdown categories -->
                 </div>
                 <!-- Input Name -->
                  <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
                  </div>
                  <!-- Input price -->
                  <div class="form-group">
                    {!! Form::label('price', 'Price') !!}
                    {!! Form::number('price', null, ['class' => 'form-control', 'required']) !!}
                  </div>
                  <!-- Input quatity -->
                  <div class="form-group">
                    {!! Form::label('quatity', 'Quatity') !!}
                    {!! Form::number('quatity', null, ['class' => 'form-control', 'required']) !!}
                  </div>
                  <!-- Textarea Description -->
                  <div class="form-group">
                    {!! Form::label('description', 'Description') !!}
                    {!! Form::textarea('description',null, ['class' => 'form-control', 'placeholder' => 'Enter something about a new product!', 'rows' => '4']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::submit('Create', ['class' => 'btn btn-primary'] ) !!}
                    {!! Form::reset('Cancle', ['class' => 'btn']) !!}
                  </div>
                 {!! Form::close() !!}
               </div>
             </div>
         </div>
    </div>
</div>
@endsection
@section('scripts')
  <script type="text/javascript" src="{{ asset('js/product.js') }}"></script>
  <script src="{{ asset('js/category.js') }}" charset="utf-8"></script>
@endsection
