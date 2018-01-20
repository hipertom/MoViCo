$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})



$(document).ready(function () {
  var path = "{{ route('autocomplete') }}";
  $('input.typeahead').typeahead({
    source: function (query, process) {
      return $.get(path, {
        query: query
      }, function (data) {
        return process(data);
      });
    }
  });
});