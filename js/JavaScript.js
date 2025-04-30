$(document).ready(function() {
    $('#add-experiencia').click(function() {
        $('#experiencias-container').append('<input type="text" name="experiencia[]" title="Descreva uma experiência"><br>');
    });

    $('#add-habilidade').click(function() {
        $('#habilidades-container').append('<input type="text" name="habilidade[]" title="Informe uma habilidade"><br>');
    });

    $('#gerar-curriculo').click(function(e) {
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'gerar-curriculo.php',
            data: $('#curriculo-form').serialize(),
            beforeSend: function() {
                $('#curriculo-gerado').html('Gerando currículo...');
            },
            success: function(data) {
                $('#curriculo-gerado').html(data);
            },
            error: function(xhr, status, error) {
                $('#curriculo-gerado').html('Erro ao gerar currículo: ' + error);
            }
        });
    });
});