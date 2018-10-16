function InsertNewOffre()
{
    $.ajax
    (
        {
            type:"GET",
            url:"index.php/ControleurCreationOffre/newOffre",
            data:"idOffre="+$('#lstEmployes').val()+"&idRayon="+$('#lstRayons').val()+"&date="+$('#txtDate').val()+"&newTemps="+$('#txtHeures').val(),
            success:function(data)
            {
                bootbox.alert(data);
                alert("Nouvelle offre créée !");
            },
            error:function()
            {
                alert("Erreur");
            }
        }
    );     
}