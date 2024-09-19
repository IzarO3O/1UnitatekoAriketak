    let t=0;
    let o=0;
    function ot(t, o){
        if(t>2){
            $("#GP").prop("disabled", true);
            $("#AP").prop("disabled", true);
            $("#IP").prop("disabled", true);
            $("#HP").prop("disabled", true);
            $("#ZP").prop("disabled", true);
            $("#KP").prop("disabled", true);
            $('#GeoPre').hide();
            g = "off";  
            $('#ArtPre').hide();
            a = "off";  
            $('#IkuPre').hide();
            i = "off"; 
            $('#HisPre').hide();
            h = "off"; 
            $('#ZiePre').hide();
            z = "off";  
            $('#KirPre').hide();
            k = "off"; 
            window.alert("Galdu egin duzu");
            } else if(o>=4){
            $("#GP").prop("disabled", true);
            $("#AP").prop("disabled", true);
            $("#IP").prop("disabled", true);
            $("#HP").prop("disabled", true);
            $("#ZP").prop("disabled", true);
            $("#KP").prop("disabled", true);
            $('#GeoPre').hide();
            g = "off";  
            $('#ArtPre').hide();
            a = "off";  
            $('#IkuPre').hide();
            i = "off"; 
            $('#HisPre').hide();
            h = "off"; 
            $('#ZiePre').hide();
            z = "off";  
            $('#KirPre').hide();
            k = "off"; 
            window.alert("Irabazi egin duzu");
            }
    }
    $(document).ready(function(){
        $("#EraG").click(function(){
            const era = $("#GeoEra").val().toUpperCase();
        if (era === "PARIS") {
            o = o + 1;
            $("#GeoPre").hide()
            $("#GP").prop("disabled", true);
        } else {
            t = t + 1;
        }
        ot(t,o);

        });
        $("#EraA").click(function(){
            const era = $("#ArtEra").val().toUpperCase();
        if (era === "LEONARDO DA VINCI") {
            o = o + 1;
            $("#ArtPre").hide()
            $("#AP").prop("disabled", true);
        } else {
            t = t + 1;
        }
        ot(t,o);

        });
        $("#EraI").click(function(){
            const era = $("#IkuEra").val().toUpperCase();
        if (era === "HORIA") {
            o = o + 1;
            $("#IkuPre").hide()
            $("#IP").prop("disabled", true);
        } else {
            t = t + 1;
        }
        ot(t,o);

        });
        $("#EraH").click(function(){
            const era = $("#HisEra").val().toUpperCase();
        if (era === "FRANTZIA") {
            o = o + 1;
            $("#HisPre").hide()
            $("#HP").prop("disabled", true);
        } else {
            t = t + 1;
        }
        ot(t,o);

        });
        $("#EraZ").click(function(){
            const era = $("#ZieEra").val().toUpperCase();
        if (era === "URA") {
            o = o + 1;
            $("#ZiePre").hide()
            $("#ZP").prop("disabled", true);
        } else {
            t = t + 1;
        }
        ot(t,o);

        });
        $("#EraK").click(function(){
            const era = $("#KirEra").val().toUpperCase();
        if (era === "FUTBOLA") {
            o = o + 1;
            $("#KirPre").hide()
            $("#KP").prop("disabled", true);
        } else {
            t = t + 1;
        }
        ot(t,o);

        });

    });
    $(document).ready(function(){
        $("#GeoPre").hide()
        var g = "off"; 

        $("#GP").click(function(){

        if (g === "off")
        {
            $('#GeoPre').show();
            g = "on";
        }
        else
        {
            $('#GeoPre').hide();
            g = "off";  
        }       
    });
});
    $(document).ready(function(){
        $("#ArtPre").hide()
        var a = "off"; 

        $("#AP").click(function(){

        if (a === "off")
        {
            $('#ArtPre').show();
            a = "on";
        }
        else
        {
            $('#ArtPre').hide();
            a = "off";  
        }       
    });
});
    $(document).ready(function(){
        $("#IkuPre").hide()
        var i = "off"; 

        $("#IP").click(function(){

        if (i === "off")
        {
            $('#IkuPre').show();
            i = "on";
        }
        else
        {
            $('#IkuPre').hide();
            i = "off";  
        }       
    });
});
    $(document).ready(function(){
        $("#HisPre").hide()
        var h = "off"; 

        $("#HP").click(function(){

        if (h === "off")
        {
            $('#HisPre').show();
            h = "on";
        }
        else
        {
            $('#HisPre').hide();
            h = "off";  
        }       
    });
});
    $(document).ready(function(){
        $("#ZiePre").hide()
        var z = "off"; 

        $("#ZP").click(function(){

        if (z === "off")
        {
            $('#ZiePre').show();
            z = "on";
        }
        else
        {
            $('#ZiePre').hide();
            z = "off";  
        }       
    });
});
    $(document).ready(function(){
        $("#KirPre").hide()
        var k = "off"; 

        $("#KP").click(function(){

        if (k === "off")
        {
            $('#KirPre').show();
            k = "on";
        }
        else
        {
            $('#KirPre').hide();
            k = "off";  
        }       
    });
});