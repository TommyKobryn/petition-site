// Old JQuery code - much longer and not so efficient way of coding...
/*
$( document ).ready(function() {
var $petitions = $('#petitionTitle');
var $description = $('#petitiondescription');
var template = $('#petitionTemplate').html();
//var html = Mustache.to_html(template, petitions);
  $.ajax({
    type: 'GET',
    url : '/new-working-backend/public/api/petitions',
    success : function(petitions){
    $.each(petitions, function(i, petition){
      $petitions.append(petition.title);
      $description.append(petition.description);
    });
    }
  });
});*/
/*
$( document ).ready(function() {
  var $petitions = $('#counter1');

$.ajax({

                async:   true,
                type:    'GET',
                cache:       false,
                url:         '/new-working-backend/public/api/petitions',
                data:        {myJson: dataArray},
                dataType   : 'json',
                success: function(data){
                    var ArrayContent = data.length();
                    $counter1.append(ArrayContent);
                }
        });
});
*/
// ......................... JQUERY code aiming to Mustache template ................
/*
$(function(){
$.getJSON('./petitions.json', function(data){
  var template = $('#petitionTemplate').html();
  var html = Mustache.to_html(template, data);
  $('#petitions').html(html);
});
});
*/
