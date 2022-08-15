<script>
    function showModel(id) {
        var myModal = new bootstrap.Modal(document.getElementById('modelDetail'), {});
        myModal.show();
        autoFill(id);
    }


    function autoFill(id) {
        $.ajax({
            type: 'GET',
            url: '<?= base_url('ajax/detail/') ?>' + id,
            success: function(data) {
                $('#all_model_data').html(data);
            }
        });

        $('#current_id').val(id);
    }

    function doSearch() {
        if (!$('#zipInput').val() && !$('#textInput').val()) {
            event.preventDefault();
            return false;
        }
    }





    $(document).ready(function() {

        function ajaxLoad() {
            $.ajax({
                type: 'GET',
                url: '<?= base_url('ajax/search') ?>?text=' + $('#textInput').val() + '&zip=' + $('#zipInput').val(),
                success: function(data) {
                    $('#allSearchResult').html(data);

                    document.getElementById('search-result').scrollIntoView();
                }
            });

            // document.getElementById('search-result').scrollIntoView();
        }
        $("#zipInput").on('change', function() { // 2nd (A)
            ajaxLoad()
        });

        $("#textInput").on('change', function() { // 2nd (A)
            ajaxLoad()
        });

        $("#searchBtn").click(function() {
            ajaxLoad()
        });

    });




    document.getElementById('search-result').scrollIntoView();
</script>