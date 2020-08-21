$(document).ready(()=>{
    $("#contactForm").on("submit", (e) => {
        e.preventDefault();
        let formData = $("#contactForm").serialize();
        let url = 'http://localhost/fashionwashion/contact_us_user.php';
        
        $.ajax({
            type : 'POST',
            url : url,
            data : formData,
            success : (cdata) => {
                console.log(cdata);
                let result = JSON.parse(cdata);

                if(result == "True"){
                    $("#msg").append("<p>Your Query submitted successfully</p>");
                } else {
                    $("#msg").append("<p>Your Query not submitted</p>");
                }
            }
        })

    })
})