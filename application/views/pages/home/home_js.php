<script>
    function showModel(id){
        var myModal = new bootstrap.Modal(document.getElementById('modelDetail'),{});
        myModal.show();
        autoFill(id);
    }


    function autoFill(id) {
        $.ajax({
            type: 'GET',
            url: '<?= base_url('ajax/detail/') ?>'+id,
            success: function(data) {
                $('#all_model_data').html(data);
            }
        });

        $('#current_id').val(id);
    }

</script>