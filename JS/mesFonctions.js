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

function connexion()
{
    $.ajax
    (
        {
            type:"POST",
            data:"login="+$("input[name=login]").val()+"&mdp="+$("input[name=mdp]").val(),
            success:function(data)
            { 
                    $("input[name=login]").val("");
                    $("input[name=mdp]").val("");
            },
            error:function(data)
            {
                alert("Erreur: connexion");
            }
        }
    )
}