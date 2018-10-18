function InsertNewOffre()
{
    $.ajax
    (
        {
            type:"GET",
            url:"index.php/ControleurOffres/newOffre",
            data:"idOffre="+$('#idOffre').val()+"&descriptionOffre="+$('#descriptionOffre').val()+"&dateOffre="+$('#dateOffre').val()+"&idService="+$('#idService').val(),
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
            url:"accesConnexion",
            success:function(data)
            { 
                    $("input[name=login]").val("");
                    $("input[name=mdp]").val("");
            },
            error:function()
            {
                alert("Erreur: connexion");
            }
        }
    )
}