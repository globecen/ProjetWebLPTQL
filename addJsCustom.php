<?php
?>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous">
    function getIdActivite(value){
        var valIdActivite = value;
        console.log(valIdActivite);
        $.ajax({
            url:"AffichageListes.php",
            method:"POST",
            data: {choixActivity : valIdActivite}
        }).done((html)=>{
            $('center').append(html);
        });
    }
</script>
