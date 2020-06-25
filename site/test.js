  $(document).ready(function() {
        $("input.query").typeahead({
            name: "query",
            remote: 'query.php?query=%QUERY%',
            valueKey: 'value'
        }).on('typeahead:selected', function(event, selection){
            $("#hidden_field").val(selection.hotel_id);
        });
    });