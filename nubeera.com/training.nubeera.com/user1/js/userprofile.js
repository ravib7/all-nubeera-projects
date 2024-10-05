var xhr = new XMLHttpRequest();
xhr.open('POST', '../api/users/userprofile.php', true);

xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

output = '';
xhr.onload = function(){
    if(this.status == 200){
        let courses = JSON.parse(this.responseText);
        for(let i in courses)
        output += 
        '<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">' + 
        '<div class="course-item">' + 
        '<img src="' + courses[i].thumbnail + '" class="img-fluid" alt="...">' + 
        '<div class="course-content">' + 
        '<div class="d-flex justify-content-between align-items-center mb-3">' + 
        '<h4>' + courses[i].name +'</h4>' + 
        ' </div>' + 
        '<h3><a href="course-details.php?id='+ courses[i].id +'">' + courses[i].title +'</a></h3>' + 
        '<p>' + courses[i].description + '</p>' + 
        '</div></div></div>';
    }
    document.getElementById('getCourses').innerHTML = output;

}

xhr.send();