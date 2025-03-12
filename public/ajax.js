'use strict';
'use strict';
console.log('ajax.js loaded');
$(document).ready(function() {
    $('#nom_pays, #annee').change(function() {
        const nom_pays = $('#nom_pays').val();
        const annee = $('#annee').val();
        console.log('Sending AJAX request with:', { nom_pays, annee });

        $.ajax({
            url: '../includes/recup_moy_infos.php', // Chemin vers votre script PHP
            type: 'POST',
            data: {
                nom_pays: nom_pays,
                annee: annee
            },
            success: function(response) {
                console.log('Received response:', response);
                $('#result').html(response);
            },
            error: function(xhr, status, error) {
                console.error('Erreur AJAX:', status, error);
            }
        });
    });
});