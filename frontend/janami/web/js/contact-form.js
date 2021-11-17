// JavaScript Document
$(document).ready(function () {

    "use strict";

    $(".contact-form").submit(function (e) {
        e.preventDefault();
        var name = $(".name");
        var phone = $(".phone");
        var email = $(".email");
        var subject = $(".subject");
        var msg = $(".message");
        var flag = false;
        if (name.val() == "") {
            name.closest(".form-control").addClass("error");
            name.focus();
            flag = false;
            return false;
        } else {
            name.closest(".form-control").removeClass("error").addClass("success");
        }
        if (phone.val() == "") {
            phone.closest(".form-control").addClass("error");
            phone.focus();
            flag = false;
            return false;
        } else {
            phone.closest(".form-control").removeClass("error").addClass("success");
        }
        // if (msg.val() == "") {
        //     msg.closest(".form-control").addClass("error");
        //     msg.focus();
        //     flag = false;
        //     return false;
        // } else {
        //     msg.closest(".form-control").removeClass("error").addClass("success");
        //     flag = true;
        // }
        var dataString = {
            "Contact[name]": name.val(),
            "Contact[email]": email.val(),
            "Contact[phone]": phone.val(),
            "Contact[message]": msg.val(),
            "Contact[contact_pre]": subject.val()
        }
        $(".loading").fadeIn("slow").html("Loading...");
        $.ajax({
            type: "POST",
            data: dataString,
            url: "/ajax/create-brief",
            cache: false,
            success: function (d) {
                $(".form-control").removeClass("success");
                if (d == true) // Message Sent? Show the 'Thank You' message and hide the form
                    $('.loading').fadeIn('slow').html('<font color="#48af4b">Cám ơn bạn đã liên hệ với chúng tôi! đội ngữ tư vấn sẽ liên hệ với bạn trong giây lát!.</font>').delay(3000).fadeOut('slow');
                else
                    $('.loading').fadeIn('slow').html('<font color="#ff5607">Mail not sent.</font>').delay(3000).fadeOut('slow');
            }
        });
        return false;
    });
    $("#reset").on('click', function () {
        $(".form-control").removeClass("success").removeClass("error");
    });

})



