const label = document.querySelector("label[for='upload_file']");
const upload_form = document.querySelector("#upload_form");
const upload_file = document.querySelector("#upload_file");
const uploaded_image_info = document.querySelector("#uploaded_img");

//handles the uploading of image
upload_file.onchange = function(){

    //console.log(this)
    const file_item = this.files[0];


    const filereader = new FileReader();
    filereader.readAsDataURL(file_item)

    //get the result
    filereader.onload = function(){
        // console.log(this.result);

        uploaded_image_info.innerHTML = `<img src='${this.result}' width=250>`;
    
    }

}
//end of image upload handling

upload_form.addEventListener("submit", function(e){
    e.preventDefault();

    if(this.username.value.trim().length == 0 || this.password.value.trim().length == 0){
        //
    }else{

        //process the form 
        const formData = new FormData(upload_form);

        const xhr = new XMLHttpRequest;


        xhr.open("POST", "process.php");

        xhr.onload = function(){
            alert(xhr.response);
        }


        xhr.send(formData);

    }


})