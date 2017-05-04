function loadCategories() {
  $.ajax({
    url: 'http://web-api.dev/api/categories',
    dataType: "json",
    success: function(response) {
      console.log(response);
      var categoriesList = '<label for="category">Category</label>'
                          + '<select id="category" name="cat_id" class="form-control input-md " required>'
      for(i=0; i<response.categories.length; i++) {
        categoriesList += '<option value="'+response.categories[i]['id']+'">'+response.categories[i]['name']
                        + '</option>';
      }
      categoriesList += '</select>';
      $('#categories-list').html(categoriesList);
    }
  });
}

$(document).ready(function() {
  // Call ajax to retrieve the list of category
  loadCategories();

  // Form Create Product
  $('.form-create').submit(function(event){
      //event.preventDefault();
      var $form = $(this);
      var catID= $('.form-create #category').val();
      var name = $('.form-create #name').val();
      var price = $('.form-create #price').val();
      var quatity = $('.form-create #quatity').val();
      var description = $('.form-create #description').val();
      var action = $form.attr('action');
      //alert(description);
      $.ajax
      ({
          url : action,
          type: "POST",
          data:
          {
              cat_id: catID,
              name: name,
              price: price,
              quatity: quatity,
              description: description
          }
      }).done(function(response){
        console.log(response);
        // Check result
        var msg, classMsg;
        if(typeof response['error'] != 'object' ) {
          msg = "Create Successed!";
          classMsg = "alert-success"
        } else {
          msg = "Create Failed";
          classMsg = "alert-danger";
        }
        $("#tbody-product").empty();
        templateLoadProducts();
        // Show result
        classMsg += " "+ $('.error-create-product').attr('class');
        $('.error-create-product').addClass(classMsg);
        $('.error-create-product').html(msg);
        // reset form
        $('.form-create')[0].reset();
      });
      event.preventDefault();
      //templateLoadProducts();
  });
});
