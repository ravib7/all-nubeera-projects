let xhr = new XMLHttpRequest();
xhr.open('POST', '../api/courses/readCourseDetails.php', true);

xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
let url = new URL(window.location.href);
let idG = url.searchParams.get("id");

let param = `id=${idG}`;

xhr.onload = function(){
    if(this.status == 200){
        let courseDetails = JSON.parse(this.responseText);
        document.getElementById('courseImage').src = courseDetails['courseImage'];
        delete courseDetails['courseImage'];

        if(courseDetails != null){
            arrayid = ['courseLanguage', 'level', 'price', 'outcomes', 'requirements', 'description', 'target', 'categoryName', 'trainerName', 'courseDuration', 'shortDescription', 'courseTitle'];
            let i = 0;
            for (key in courseDetails){
                document.getElementById(arrayid[i]).innerHTML = courseDetails[key];
                i+=1;
            }
        }
        
    }
}

xhr.send(param);

let xhr2 = new XMLHttpRequest();
xhr2.open('POST', '../api/courses/readCourseSyllabus.php', true);
xhr2.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

xhr2.onload = function(){
    if(this.status == 200){
        let lessons = JSON.parse(this.responseText);
        if(lessons != null){
            output = '';
            for(let i in lessons){
                output += ` <li class="lecture has-preview">
                <span class="lecture-title">${lessons[i].title}</span>
                <span class="lecture-time float-right">${lessons[i].duration}</span>
                <!-- <span class="lecture-preview float-right" data-toggle="modal" data-target="#CoursePreviewModal">Preview</span> -->
             </li>`;
            }
            document.getElementById('collapse1').innerHTML = output;
			document.getElementById('collapse1').style.listStyleType="none";
        }
    }
}

xhr2.send(param);


xhrB = new XMLHttpRequest();
xhrB.open('POST', '../api/users/checkEnrolled.php', true);
xhrB.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

xhrB.onload = function(){
    if(this.responseText == "enrolled"){
        document.getElementById('enrolledBtn').innerHTML = 'Go To Course';
        document.getElementById('enrolledBtn').href = 'http://13.233.83.165/training.nubeera.com/user1/course-display.php';
    }else{
        document.getElementById('enrolledBtn').innerHTML = 'Enroll';
        document.getElementById('enrolledBtn').addEventListener('click', getEnrolled);
    }
        
}

xhrB.send(param);


function getEnrolled(){
    let xhr3 = new XMLHttpRequest();
    xhr3.open('POST', '../api/courses/getEnrolled.php', true);
    xhr3.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhr3.onload = function(){
        if(this.responseText == "enrolled"){
            window.location.href('http://13.233.83.165/training.nubeera.com/user1/course-display.php');
        }
        
    }    

    xhr3.send(param);
}