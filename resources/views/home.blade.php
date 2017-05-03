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
                            <th colspan="3" style="text-align: center; width: 180px;">Features</th>
                          </tr>
                        </thead>
                        <tbody id="tbody-product" class="tbody-product">
                        </tbody>
                        </table>
                      </div>
                    </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Template for display all products -->

@stop

@section('scripts')
<!-- <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.4.4.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.templates/beta1/jquery.tmpl.js"></script> -->
<script type="text/javascript" src="{{ asset('js/product.js') }}"></script>
<script src="{{ asset('js/category.js') }}" charset="utf-8"></script>
<script type="text/javascript">
  var i =1;
</script>
<script id="productsTemplate" type="text/x-jQuery-tmpl">
  <tr>
    <td>${index}</td>
    <td>${name}</td>
    <td>${price}</td>
    <td>${quatity}</td>
    <td>
    <button type="button" class="btn btn-default btn-sm" pro-id="${id}">
      <img src="img/view.png" alt="View" title="View">
    </button>
    <button type="button" class="btn btn-default btn-sm" pro-id="${id}">
      <img src="img/edit.png" alt="Edit" title="Edit">
    </button>
    <button type="button" class="btn btn-default btn-sm" pro-id="${id}">
      <img src="img/delete.png" alt="Delete" title="Delete">
    </button>
    </td>
  </tr>
</script>
@stop
