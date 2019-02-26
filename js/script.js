/*!
    * script.js beta v0.2 - Nois Que Voa Bruxao - Magia em JS
    * By Rodrigo Ross 
    * Awati Tecnologia planejada */

//Function section
//Form Validate
function validate(){
    if (document.formContato.nome.value == ""){
        $("#nome").tooltip("show");
        document.formContato.nome.focus();
        return false;
    }
    
    if(document.formContato.tel.value == ""){
        $("#tel").tooltip("show");
        document.formContato.tel.focus();
        return false
    } else if ( typeof(Number(document.formContato.tel.value)) === 'number' && typeof(Number(document.formContato.tel.value) != NaN)){
        return true
    } else {
        return false
    }

    if( document.formContato.mail.value == "" ){
       
       //e-mail verifier
       var emailID = document.formContato.value;
        atpos = emailID.indexOf("@");
        dotpos = emailID.lastIndexOf(".");
        
        if (atpos < 1 || ( dotpos - atpos < 2 )) 
        {
           alert("Por favor, insira um e-mail válido")
           document.formContato.mail.focus() ;
           return false;
        }    
       $("#mail").tooltip("show");
       document.formContato.mail.focus() ;
       return false;
   }
   
   if( document.formContato.mensagem.value == "" ){
       $("#mensagem").tooltip("show");
       document.formContato.mensagem.focus() ;
       return false;
   }
   return( true );
}

//re-estructure painel with products --NEED REVISION
function slideShow(id){
    let father = document.getElementById("vantagens"); //Get father div
    let inferior = document.getElementById("inferior"); //Get inferior div inside father
    let superior = document.getElementById("superior"); //Get superior div inside father
    //start array
    var brother = Array(4);

    //Copy all brothers content
    for (i=0; i<5;i++){
        
        let line = document.getElementById("line"+i); // get HR element if exist
        
        brother[i] = document.getElementById("v"+i); //get the child elements of vantangens
        
        if(!(id.slice(-1) == i)){        
            try{
                brother[i].classList.remove("float-left");
                
                if(line!= null){ 
                    brother[i].removeChild(line); // remove line element
                }

                father.removeChild(brother[i]);
            } catch(err){
                console.log("erro apagando o moleque");
            }
            //console.log(brother[i]);
        } else {
            try 
            {
                superior.appendChild(brother[i]);
                
                inferior.removeChild(brother[i]);
                father.removeChild(brother[i]);

            }catch(err) {
                console.log("erro colocando o certo no lugar certo.");
                console.log(superior, inferior, father);
            }
        }    
    }
    //add all brothers with less apparent style in the inferior div
    for(i = 0;i < 5 ; i++){
        
        if(!(id.slice(-1) == i)){
                        
            if(brother[i] !== null){
                                
                //console.log(line);
                inferior.appendChild(brother[i]);
                try{
                    brother[i].classList.remove("hvr-sweep-to-left");
                    brother[i].classList.remove("hvr-sweep-to-right");
                    brother[i].classList.remove("col-lg-6");
                    brother[i].classList.add("hvr-underline-from-center");
                    brother[i].classList.add("col-lg-4");
                } catch (err){
                    console.log(err);
                }
            }
        }
    }
    //console.log(brother);
}

//Vantagem module
function vantagem(id, info){
   
    slideShow(id);//call re-estructor

    let strChild = info.slice(0,-1); //copy info
    let indice = info.slice(-1);    //save the last char as a index

    //style edit
    for(i = 0;i < 5;i++){
        let father = document.getElementById("v"+i);
        let child = document.getElementById(strChild+i);
        let aga = document.getElementById("aga"+i);//h2 element

        //console.log(superior, father , child, aga);
        //superior.appendChild(father);

        //create line element
        try
        {
            line = document.getElementById("line"+i);
        
        } catch (err){
            console.log(err);
        } finally {
            
            let line = document.createElement("hr");
            
            line.id = "line"+i;
            line.classList.add("my-4");
            
        }
        
        //give bigger style to selected product
        if(id.slice(-1) == i){
            //change the style
            try{             
                //esconde as li da div não selecionada
                child.classList.remove("nSelecionado");
                child.classList.add("Selecionado");

                //console.log(father);
                aga.classList.remove("display-5");
                aga.classList.add("display-2");
                
                //remove not necessary classes
                father.classList.remove("float-left");
                father.classList.remove("vantagem-sm");
                father.classList.remove("vantagem");
                father.classList.remove("hvr-sweep-to-left");
                father.classList.remove("hvr-sweep-to-right");
                father.classList.remove("hvr-underline-from-center");
                father.classList.remove("col-lg-6");
                //give the big class style
                father.classList.add("vantagem-bg");
                father.classList.add("col-lg-8"); 

                //insert line before div#infoN
                
                console.log(line);
                father.insertBefore(line, child);
                

            } catch (err){
                console.log(err);
            }
        }


        //remove the big class style if selected another product
        if(!(indice == i)){
            
            //change the style
            try{

                //hide the li elements if not selected
                child.classList.remove("selecionado");
                child.classList.add("nSelecionado");

                //console.log(father);
                //reduce div element size
                father.classList.remove("vantagem-bg");
                father.classList.remove("vantagem");
                father.classList.remove("col-lg-8");
                father.classList.add("col-lg-4");
                father.classList.add("vantagem-sm");

                //console.log(aga);
                //edit display class
                aga.classList.remove("display-2");
                aga.classList.add("display-5");
            } catch (err){
                console.log(err);
            }
            
            
        }
    }
}

//hide/show benefits.
function lista(op){
    let elem = document.getElementById("lista-beneficios");

    if(op === 'show')
    {
        elem.classList.remove("nSelecionado");
        document.getElementById("btn-ben").classList.add("nSelecionado");
    } else if (op === 'hide'){
        elem.classList.add("nSelecionado");
        document.getElementById("btn-ben").classList.remove("nSelecionado");
    }
}
 