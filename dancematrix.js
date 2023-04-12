var check=0;
        console.log("Entering script");
        function displaySignup(){
            if(check==1){
                console.log("Login is open ,closing it");
                closeModalLogin();
            }    
            document.getElementById('form').style.transform = "translate(0px, 600px)";
            document.getElementsByClassName('signup')[0].style.opacity = "0.3";
            check=1;
        }
        function displayLogin(){
            if(check==1){
                console.log("sign up is open ,closing it");
                closeModalSignup();
            }
            console.log("Opening login");
            document.getElementById('loginForm').style.transform = "translate(0px, 450px)";
           //document.getElementById('loginForm').style.display = "block";
            document.getElementsByClassName('signup')[0].style.opacity = "0.3";
            check=1;
        }
        function closeModalSignup(){
            console.log("closing sign up");
            document.getElementById('form').style.transform = "translate(0px,0px)";
        //document.body.classList.toggle('modal-close');
           document.getElementsByClassName('signup')[0].style.opacity = "1";
           document.getElementsByClassName('signup')[0].style.transitionDelay="0.3s";
           document.getElementById("form1").reset();
           child=document.getElementById("error");
            parent = document.getElementById("errorMsg");
            if(child !=null){
                parent.removeChild(child);
           }
           document.getElementById('form').style.height="500px";
           document.getElementById('warning').style.display="none";
           count =0;
           check =0;
        }
        function closeModalLogin(){
            console.log("closing login");
            document.getElementById('loginForm').style.transform = "translate(0px, 0px)";
           document.getElementsByClassName('signup')[0].style.opacity = "1";
           document.getElementsByClassName('signup')[0].style.transitionDelay="0.3s";
           document.getElementById("form2").reset();
           check =0;
        }
        count =0;
        function validateData(){
            let form = document.forms['form1'];
            name= form['name'].value;
            male= document.getElementById('male').checked;
            female= document.getElementById('female').checked;;
             date= form['birth'].value;
            email= form['email'].value;
            //status= form['status'].value;
            phoneNumber= form['phoneNumber'].value;

            if(name == ''||(male==false && female ==false)|| 
            date =='' || email ==''  ||phoneNumber==''){
                count += 1;
                if(count > 1){
                return false;
            }
            console.log("Entering here");
                para = createNode();
                para.style.color = "rgb(255, 92, 92)";
                para.style.fontSize = "20px";
                document.getElementById('form').style.height="530px";
                para.style.border = "1px solid rgb(255, 92, 92)";
                para.style.margin = "10px 20px";
                para.style.textAlign = "center";
                document.getElementById('warning').style.display="block";
                return false;
            }
            return true;
        }
        function createNode(){
            const para = document.createElement("p");
            const node = document.createTextNode("Enter all fields");
            para.appendChild(node);
            para.id = "error";
                parent = document.getElementById('errorMsg');
                parent.appendChild(para);
                return para;
        }