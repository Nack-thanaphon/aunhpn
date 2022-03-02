$(function() {
    $("#formlogin").submit(function(e) {
        e.preventDefault()
        $.ajax({
            type: "POST",
            url: "./auth/ck-login.php",
            data: $(this).serialize()
        }).done(function(resp) {
            toastr.success("เข้าสู่ระบบสำเร็จ")
            switch (resp) {
                case (resp = "superadmin"):
                    setTimeout(() => {
                        location.href = './bos/superadmin/'
                    }, 800);
                    break

                case (resp = "admin"):
                    setTimeout(() => {
                        location.href = 'superadmin.php'
                    }, 800);
                    break
                case (resp = "editer"):
                    setTimeout(() => {
                        location.href = 'superadmin.php'
                    }, 800);
                    break
            };
        }).fail(function(resp) {
            toastr.error("เข้าสู่ระบบไม่สำเร็จ")
            //location.reload()
        })
    })
})