/**
* [loadProducts load all products from server]
* @return {[void]}
*/
function loadProducts() {
$.ajax({
    url: 'http://web-api.dev/api/products',

    dataType: "json",

    success: function( response ) {
      console.log(response); // server response
      var productList = "";
      for (i=0;i< response.products.length; i++) {
        productList += '<tr>'
                        + '<td>'+(i+1)+'</td>'
                        + '<td>'+response.products[i]['name']+'</td>'
                        + '<td>'+response.products[i]['price']+'</td>'
                        + '<td>'+response.products[i]['quatity']+'</td>'
                        + '<td>'
                        + '<button type="button" class="btn btn-default btn-sm" pro-id='+response.products[i]['id']+'>'
                        + '<img src="img/view.png" alt="View" title="View">'
                        + '</button>'
                        + '<button type="button" class="btn btn-default btn-sm" name="btn-update"pro-id='+response.products[i]['id']+'>'
                        +  '<img src="img/edit.png" alt="Edit" title="Edit">'
                        + '</button>'
                        + '<button type="button" class="btn btn-default btn-sm" name="btn-delete"pro-id='+response.products[i]['id']+'>'
                        +   '<img src="img/delete.png" alt="Delete" title="Delete">'
                        + '</button>'
                        + '</td>'
                      + '</tr>';
      }
      $('.tbody-product').html(productList);
    }
});
}
/**
* [templateLoadProducts function using jQuery Template to render data]
* @return {[void]}
*/
function templateLoadProducts() {
// Using ajax to retrieve data from server
$.ajax({
  url : "http://web-api.dev/api/products",
  dataType: "json",
  success: function(response) {
    console.log(response);
    var pros = [];
    for (i=0;i<response.products.length;i++) {
      pros[i] = response.products[i];
      pros[i]['index'] = i+1;
    }
    // Render the products using template
    $("#productsTemplate").tmpl(pros).appendTo("#tbody-product");
  }
});
}
/**
* [load script]
* @return {[void]}
*/
$(document).ready(function() {
templateLoadProducts();
});
