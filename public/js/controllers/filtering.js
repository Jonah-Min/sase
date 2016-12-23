
  function onHover(photo) {
    photo.setAttribute('src', 'sase/meghna.jpg');
  }

  function onHoverOut(photo) {
    photo.setAttribute('src', 'sase/jenny.jpg');
  }


$(document).ready(function() {

  $('.white_content').hover(function(){ 
        mouse_is_inside=true; 
    }, function(){ 
        mouse_is_inside=false; 
    });

    $("body").mouseup(function(){ 
        if(! mouse_is_inside) {
		$('.white_content').hide();
    		$('.black_overlay').hide();
	}
     });

  $('.jonahs_special_white_content').hover(function(){
        mouse_is_inside=true;
    }, function(){
        mouse_is_inside=false;
    });

    $("body").mouseup(function(){
        if(! mouse_is_inside) {
                $('.jonahs_special_white_content').hide();
                $('.black_overlay').hide();
        }
     });
  
  var $filterCheckboxes = $('input[type="checkbox"]');

  $filterCheckboxes.on('change', function() {

    var selectedFilters = {};

    $filterCheckboxes.filter(':checked').each(function() {

     if (!selectedFilters.hasOwnProperty(this.name)) {
       selectedFilters[this.name] = [];
     }

     selectedFilters[this.name].push(this.value);

    });

    // create a collection containing all of the filterable elements
    var $filteredResults = $('.profile');

    // loop over the selected filter name -> (array) values pairs
    $.each(selectedFilters, function(name, filterValues) {

    // filter each .flower element
    $filteredResults = $filteredResults.filter(function() {

      var matched = false,
        currentFilterValues = $(this).data('category').split(' ');

      // loop over each category value in the current .flower's data-category
      $.each(currentFilterValues, function(_, currentFilterValue) {

        // if the current category exists in the selected filters array
        // set matched to true, and stop looping. as we're ORing in each
        // set of filters, we only need to match once

        if ($.inArray(currentFilterValue, filterValues) != -1) {
          matched = true;
          return false;
        }
      });

      // if matched is true the current .flower element is returned
      return matched;

    });
  });

  $('.profile').hide().filter($filteredResults).show();

});

});

