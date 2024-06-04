// сделать модал
var modal = document.getElementById("myModal");
var modal2 = document.getElementById("myModal2");
var modal3 = document.getElementById("myModal3");


// сделать ссылку модала
var links = document.querySelectorAll(".special2, .special3, .special4");
var link2 = document.getElementById("openModal2");
var link3 = document.getElementById("openModal3");

// сделать крестик
var span = modal.getElementsByClassName("close")[0];
var span2 = modal2.getElementsByClassName("close")[0];
var span3 = modal3.getElementsByClassName("close")[0];

// Когда нажимаешь открывается модал
links.forEach(function(link) {
    link.onclick = function(event) {
        event.preventDefault();
        modal.style.display = "block";
    }
});
link2.onclick = function(event) {
    event.preventDefault();
    modal2.style.display = "block";
}
link3.onclick = function(event) {
    event.preventDefault();
    modal2.style.display = "none";
    modal3.style.display = "block";
}

// когда жмёшь крестик закрывается модал
span.onclick = function() {
    modal.style.display = "none";
}
span2.onclick = function() {
    modal2.style.display = "none";
}
span3.onclick = function() {
    modal3.style.display = "none";
}

// когда жмёшь на экран закрывается
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }else if (event.target == modal2) {
        modal2.style.display = "none";
    }else if (event.target == modal3) {
        modal3.style.display = "none";
    }
}

/* кнопка для стирания текста в поиске*/
const clear = document.querySelector(".clear");

clear.onclick = function (){
    document.getElementById("mySearch").value = '';
}


//AJAX фигня
$(document).ready(function() {
    $('#loginform').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'login2.php',
            data: $(this).serialize(),
            success: function(response)
            {   
                var jsonData = JSON.parse(response);
// user is logged in successfully in the back-end 
// let's redirect 
                if (jsonData.success == "1")
                {
                    location.href = 'mySite.php';
                }
                else
                {
                    alert('Неправильно введённое значение!');
                }
            }
        });
    });
});