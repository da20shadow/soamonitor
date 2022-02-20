//create slug for the article
let titleInput = document.getElementById('title');
titleInput.addEventListener("focusout",createSlug);
function createSlug(){
    let slug = titleInput.value;

        slug = slug.toString()
        .trim()
        .toLowerCase()
        .replace(/\s+/g, "-")
        .replace(/[^\w\-]+/g, "")
        .replace(/--+/g, "-")
        .replace(/^-+/, "")
        .replace(/-+$/, "");

    document.getElementById('slug').innerHTML = slug;
}

//Count chars in the artcile content
let textArea = document.getElementById('content');
textArea.addEventListener("keyup",countChars);
function countChars(){
    document.getElementById('chars').innerHTML = textArea.value.length + " chars!";
}

//Send article info to php
let publishBtn = document.getElementById('publish');
publishBtn.addEventListener("click",publishArticle);
function publishArticle(){

    let title = document.getElementById('title').value;
    let content = document.getElementById('content').innerHTML;
    let category = document.getElementById('category').value;
    let slug = document.getElementById('slug').innerText;
    let authorID = document.querySelector('#author').getAttribute('data-author-id');

    let titlePattern = /^[A-Za-z0-9+%$ .?!:-]+$/;
    let slugPattern = /^[a-z0-9-]+$/;
    let categoryPattern = /^[0-9]+/;
    let authorIdPattern = /^[0-9]+/;

    if (title.length > 300){

        alert("Too long title!");

    }else if (title.length < 20){

        alert("Too short title! The title must be at lease 20 characters long!");

    }else if (!titlePattern.test(title)){

        alert("Title must contains only letters, digits and these chars: ?!:-$%");

    }else if (!categoryPattern.test(category)){

        alert("Please Select Category!");

    }else if (category > 20){

        alert("We have 20 categories your category is invalid!");

    }else if (!authorIdPattern.test(authorID)){

        alert("Invalid Author!");

    }else if (!slugPattern.test(slug)){

        alert("Invalid slug!");

    // }
    // else if (content.length < 500){
    //     console.log(content);
    //     document.getElementById('successError').innerHTML = content;
    //     alert("The Article must be at least 500 characters!");

    }else{
        let data = {
            title: title,
            content: content,
            category: category,
            slug: slug,
            status: 1,
            author: authorID
        };

        let httpX = new XMLHttpRequest(); // simplified for clarity
        let url = "../includes/publish_article_inc.php";
        httpX.open("POST", url, true); // sending as POST
        httpX.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        httpX.onreadystatechange = function() { //Call a function when the state changes.
            if(httpX.readyState === 4 && httpX.status === 200) { // complete and no errors
                // alert(httpX.responseText); // some processing here, or whatever you want to do with the response
                document.getElementById('successError').innerHTML = httpX.responseText;
            }
        };

        data = JSON.stringify(data);
        httpX.send(data);
    }
}