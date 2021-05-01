/* validate form script <contact page> */
function validateForm() {

    var username = document.getElementById("username0").value;
    var mobile = document.getElementById("numbers").value;
    var mail = document.getElementById("email").value;
    var comment = document.getElementById("subject").value;

    /* error message */
    var ErrorName = document.getElementById("ErrorName");
    var ErrorEmail = document.getElementById("ErrorEmail");
    var ErrorMobile = document.getElementById("ErrorMobile");
    var ErrorComment = document.getElementById("ErrorComment");

    var letters = /^[A-Za-z ]+$/;
    var numbers = /^[0-9]\w{10}$/;
    var email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    /*
     user name only letters.
     mobile only numbers only 11 digits
     email should contain "@" and end with ". 2 or 3 letters".  
     */


    if (username.match(letters)) {
        ErrorName.textContent = " ";
        if (mail.match(email)) {
            ErrorEmail.textContent = " ";
            if (mobile.match(numbers)) {
                ErrorMobile.textContent = " ";
                if (comment.length > 0) {
                    ErrorComment.textContent = " ";
                } else {
                    ErrorComment.textContent = "please write a comment :D ";
                    ErrorComment.style.color = "red";
                    ErrorComment.style.fontSize = "12px";
                    return false;
                }
            } else {
                ErrorMobile.textContent = "the number field accepts only 11 numbers.";
                ErrorMobile.style.color = "red";
                ErrorMobile.style.fontSize = "12px";
                return false;
            }
        } else {
            ErrorEmail.textContent = "The email field should contain @.";
            ErrorEmail.style.color = "red";
            ErrorEmail.style.fontSize = "12px";
            return false;
        }
    } else {
        ErrorName.textContent = "The username fields accepts only letters.";
        ErrorName.style.color = "red";
        ErrorName.style.fontSize = "12px";
        return false;
    }

}

/* Frequently asked questions <FAQ> */
$(document).ready(function () {
    $('.FAQ_Question').click(function () {
        if ($(this).parent().is('.open')) {
            $(this).closest('.faq').find('.FAQ_Answer_Container').slideUp();
            $(this).closest('.faq').removeClass('open');
            $(this).closest('div').find('.imag').attr("src", "images/KeyboardArrowDown.png");
        } else {
            /*$('.FAQ_Answer_Container').slideUp();
             $('.image').attr("src", "KeyboardArrowDown.png");*/
            $('.faq').removeClass('open');
            $(this).closest('.faq').find('.FAQ_Answer_Container').slideDown();
            $(this).closest('.faq').addClass('open');
            $(this).closest('div').find('.imag').attr("src", "images/KeyboardArrowUp.png");
        }
    });
});

/* Register page */
function register_form() {
    var name_check = false;
    var mail_check = false;
    var password_1_check = false;
    var password_2_check = false;
    var req_check = false;
    var user_name = document.getElementById("Username");
    var E_mail = document.getElementById("Email");
    var password_1 = document.getElementById("Password");
    var Password_2 = document.getElementById("Password2");
    var FormID = document.getElementById("submitForm");

    function pass(input, msg) {
        const formControl = input.parentElement;
        input.style.borderBottomColor = "green";
        var error = formControl.querySelector("error");
        error.innerHTML = msg;

    }

    function fail(input, msg) {
        const formControl = input.parentElement;
        input.style.borderBottomColor = "red";
        var error = formControl.querySelector("error");
        error.innerHTML = msg;

    }

    function check_name(input) {
        var name_pattern = /^\S*$/;
        if (input.value.match(name_pattern) && input.value > "") {
            pass(input, " ");
            name_check = true;
        } else {
            fail(input, `${input.id} invalid`);
            name_check = false;
        }
    }

    function check_mail(input) {
        var mail_pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (input.value.match(mail_pattern)) {
            pass(input, " ");
            mail_check = true;
        } else {
            fail(input, `${input.id} invalid`);
            mail_check = false;
        }
    }
    function check_password(input) {
        var pass_pattern = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-_]).{8,}$/;
        if (input.value.match(pass_pattern)) {
            pass(input, " ");
            password_1_check_check = true;
        } else {
            fail(input, "* at least 8 characters<br>&emsp;&emsp;&emsp;&emsp;&ensp; \n\
            * at least 1 numeric character<br> &emsp;&emsp;&emsp;&emsp;&ensp; * at least 1 lowercase character\n\
            <br>&emsp;&emsp;&emsp;&emsp;&ensp; * At least 1 uppercase character<br>&emsp;&emsp;&emsp;&emsp;&ensp;\n\
             * at least 1 special character.");
            password_1_check_check = false;
        }
    }

    function check_password_match(pass1, pass2) {
        if (pass1.value === pass2.value && pass2.value !== "") {
            pass(pass2, " ");
            password_2_check_check = true;
        } else {
            fail(pass2, "Password do not match");
            password_2_check_check = false;
        }
    }

    function check_required(input1) {
        input1.forEach(function (input) {
            if (input.value === "") {
                req_check = false;
                fail(input, `${input.id} is required`);
            } else
                req_check = true;

        });
    }

    FormID.addEventListener("submit", function (e) {
        check_name(user_name);
        check_mail(E_mail);
        check_password(password_1);
        check_password_match(password_1, Password_2);
        check_required([user_name, E_mail, password_1, Password_2]);
        if (req_check === true && password_2_check_check === true && password_1_check_check === true && mail_check === true && name_check === true)
            e.returnValue = true;
        else
            e.returnValue = false;

    });
}
/*-------login-----------*/
$(document).ready(function () {
    $('#login-trigger').click(function () {
        $(this).next('#login-content').slideToggle();
        $(this).toggleClass('active');

        if ($(this).hasClass('active'))
            $(this).find('span').html('&#x25B2;')
        else
            $(this).find('span').html('&#x25BC;')
    })
});

/* Best-Selling */

/* Manage profile */
var clicked = false;
function Edit() {
    // var Un = document.getElementById("UserName3");

    var ErrorEmail = document.getElementById("ErrorMail");
    var ErrorPassword1 = document.getElementById("ErrorPassword1");
    var ErrorPassword2 = document.getElementById("ErrorPassword2");
    var ErrorPhone = document.getElementById("ErrorPhone")

    if (clicked == false) {
        var Em = document.getElementById("Email1");
        var Pa = document.getElementById("Password1");
        var Ad = document.getElementById("Address");
        var No = document.getElementById("PhoneNo");
        var Re = document.getElementById("RePassword");
        var info = [Em, Pa, Ad, No, Re];
        for (let i = 0; i < info.length; i++) {
            info[i].disabled = false;
        }

        clicked = true;
    } else if (clicked == true) {
        var Em = document.getElementById("Email1");
        var Pa = document.getElementById("Password1");
        var Ad = document.getElementById("Address");
        var No = document.getElementById("PhoneNo");
        var Re = document.getElementById("RePassword");
        var info = [Em, Pa, Ad, No, Re];
        for (let i = 0; i < info.length; i++) {
            info[i].disabled = true;
        }
        clicked = false;
        ErrorEmail.textContent = " ";
        document.getElementById("Email1").style.borderBottomColor = "#999";
        ErrorPassword1.textContent = " ";
        document.getElementById("Password1").style.borderBottomColor = "#999";
        ErrorPassword2.textContent = " ";
        document.getElementById("RePassword").style.borderBottomColor = "#999";
        ErrorPhone.textContent = " ";
        document.getElementById("PhoneNo").style.borderBottomColor = "#999";
    }
}

function SaveChanges() {
    
    if (clicked == true) {
        var Em = document.getElementById("Email1").value;
        var Pa = document.getElementById("Password1").value;
        var Ad = document.getElementById("Address").value;
        var No = document.getElementById("PhoneNo").value;
        var Re = document.getElementById("RePassword").value;

        var ErrorEmail = document.getElementById("ErrorMail");
        var ErrorPassword1 = document.getElementById("ErrorPassword1");
        var ErrorPassword2 = document.getElementById("ErrorPassword2");
        var ErrorPhone = document.getElementById("ErrorPhone")


        var info = [Em, Pa, Ad, No, Re];
        var numbers = /^\d{11}$/;
        var CrNumbers = /^\d{16}$/;
        var nospaces = /^\S*$/ /*/^[0-9a-zA-Z]+$/*/; /*no spaces*/
        var password = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-_]).{8,}$/;
        /*
         At least one upper case English letter, (?=.*?[A-Z])
         At least one lower case English letter, (?=.*?[a-z])
         At least one digit, (?=.*?[0-9])
         At least one special character, (?=.*?[#?!@$%^&*-_])
         Minimum eight in length .{8,} (with the anchors)
         */
        var mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

        for (let i = 0; i < info.length; i++) {
            info[i].disabled = true;
        }

        if (Em.match(mail)) {
            ErrorEmail.textContent = " ";
            document.getElementById("Email1").style.borderBottomColor = "green";
            if (Pa.match(password)) {
                ErrorPassword1.textContent = " ";
                document.getElementById("Password1").style.borderBottomColor = "green";
                if (Re.match(CrNumbers)) {
                    ErrorPassword2.textContent = " ";
                    document.getElementById("RePassword").style.borderBottomColor = "green";
                    if (No.match(numbers)) {
                        ErrorPhone.textContent = " ";
                        document.getElementById("PhoneNo").style.borderBottomColor = "green";
//                        document.getElementById("submitForm1").submit(); 
                    } else {
                        ErrorPhone.style.color = "red";
                        ErrorPhone.style.fontSize = "12px";
                        ErrorPhone.textContent = "* the number field accepts only 11 numbers.";
                        document.getElementById("PhoneNo").style.borderBottomColor = "red";
                        return false;
                    }
                } else {
                    ErrorPassword2.style.color = "red";
                    ErrorPassword2.style.fontSize = "12px";
                    ErrorPassword2.textContent = "* the Credit Card field accepts only 16 numbers.";
                    document.getElementById("RePassword").style.borderBottomColor = "red";
                    return false;
                }
            } else {
                ErrorPassword1.style.color = "red";
                ErrorPassword1.style.fontSize = "12px";
                document.getElementById("ErrorPassword1").innerHTML =
                        "* at least 8 charactersat<br>&emsp;&emsp;&emsp;&emsp;&ensp; * least 1 numeric character<br> &emsp;&emsp; * at least 1 lowercase<br>&emsp;&emsp;&emsp;&emsp;&ensp; * letterat least 1 uppercase<br>&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp; * at least 1 special char.";
                document.getElementById("Password1").style.borderBottomColor = "red";
                return false;
            }
        } else {
            ErrorEmail.style.color = "red";
            ErrorEmail.style.fontSize = "12px";
            ErrorEmail.textContent = "* The email field should contain @.";
            document.getElementById("Email1").style.borderBottomColor = "red";
            return false;
        }
    }
}

/* Menu page */
var count = 0;
var price = 0;
var item1 = 0, item2 = 0, item3 = 0, item4 = 0, item5 = 0, partymeal = 0, Weaklymeal = 0;

var less = "<button class=\"minbtn\" type=\"button\" onclick=\"removemeal(\'";
var less1= "\')\"/><img src=\"images/minus.png\" width=\"20px\" height=\"20px\">";





/* Offers page */


/* bestSelling page*/


/* slide code 2 */
var a_slideIndex = 0;
function a_showSlides() {
    var i;
    var a_slides = document.getElementsByClassName("a_mySlides");

    for (i = 0; i < a_slides.length; i++) {
        a_slides[i].style.display = "none";
    }
    a_slideIndex++;
    if (a_slideIndex > a_slides.length) {
        a_slideIndex = 1
    }

    a_slides[a_slideIndex - 1].style.display = "block";

    setTimeout(a_showSlides, 1000); 
}

/* slide code */
var textIndex = 1;
shwDivs(textIndex);
function plsDivs(z) {
    shwDivs(textIndex += z);
}
function shwDivs(z) {
    var j;
    var y = document.getElementsByClassName("shopDescription");
    if (z > y.length) {
        textIndex = 1
    }
    if (z < 1) {
        textIndex = y.length
    }
    ;
    for (j = 0; j < y.length; j++) {
        y[j].style.display = "none";
    }
    y[textIndex - 1].style.display = "block";
}
var slideIndex = 1;
showDivs(slideIndex);
function plusDivs(n) {
    showDivs(slideIndex += n);
}
function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = x.length
    }
    ;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex - 1].style.display = "inline-block";
}
function searchVal() {
    document.getElementsByClassName("searchTerm").validity.valueMissing;
} 








function update_cart1(name,price,quantity) {
        setTimeout("location.reload(true);", 2500);
    
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "cart.php?q=" + name, true);
        xmlhttp.send();
    
        writeMeal1(name,price,quantity);
       
    }

function writeMeal1(n,p,q) {
    setTimeout("location.reload(true);", 2500);
    if(q>0)
        {
    document.getElementById("cart1").innerHTML = q + " " +n+": "+ p +"EGP" + less+ n +less1;
        }
}

function update_cart2(name,price,quantity) {
        setTimeout("location.reload(true);", 2500);
    
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "cart.php?q=" + name, true);
        xmlhttp.send();
    
        writeMeal2(name,price,quantity);
       
    }

function writeMeal2(n,p,q) {
    setTimeout("location.reload(true);", 2500);
    if(q>0)
        {
    document.getElementById("cart2").innerHTML = q + " " +n+": "+ p +"EGP" + less+ n +less1;
        }
}


function update_cart3(name,price,quantity) {
        setTimeout("location.reload(true);", 2500);
    
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "cart.php?q=" + name, true);
        xmlhttp.send();
    
        writeMeal3(name,price,quantity);
       
    }

function writeMeal3(n,p,q) {
    setTimeout("location.reload(true);", 2500);
    if(q>0)
        {
    document.getElementById("cart3").innerHTML = q + " " +n+": "+ p +"EGP" + less+ n +less1;
        }
   
}


function update_cart4(name,price,quantity) {
        
    setTimeout("location.reload(true);", 2500);
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "cart.php?q=" + name, true);
        xmlhttp.send();
    
        writeMeal4(name,price,quantity);
       
    }

function writeMeal4(n,p,q) {
    setTimeout("location.reload(true);", 2500);
    if(q>0)
        {
    document.getElementById("cart4").innerHTML = q + " " +n+": "+ p +"EGP" + less+ n +less1;
        }
}


function update_cart5(name,price,quantity) {
        
    setTimeout("location.reload(true);", 2500);
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "cart.php?q=" + name, true);
        xmlhttp.send();
        writeMeal5(name,price,quantity);
    }

function writeMeal5(n,p,q) {
    setTimeout("location.reload(true);", 2500);
    if(q>0)
        {
    document.getElementById("cart5").innerHTML = q + " " +n+": "+ p +"EGP" + less+ n +less1;
        }
}
function removemeal(name)
{setTimeout("location.reload(true);", 2500);
    
    var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "remove.php?q=" + name, true);
        xmlhttp.send();
}
function final(tp,tq)
{setTimeout("location.reload(true);", 2500);
    
    document.getElementById("count").innerHTML = tq + " items" + " total price: " + tp;
}



function placeOrder(i,price) {
    setTimeout("location.reload(true);", 2500);
    if (price >= 0 && price < 150) {
        alert("minimum order is 150EGP");
    } else {
        alert("your order has been placed successfully!");
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "placeorder.php?q=" + i, true);
        xmlhttp.send();
    }
}

