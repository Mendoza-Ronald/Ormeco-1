<!-- POST DATA -->


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#myForm').submit(function(e) {
        e.preventDefault(); // Prevent the default form submission
        var formData = $(this).serialize(); // Get the form data
        $.post('', formData, function(result) {
            // Handle the result
        }, 'json');
    });
});
</script>
<!-- <script>
$(document).ready(function() {
    $('#insert_form').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: '<?php echo base_url(); ?>controller_name/insert_data',
            type: 'POST',
            dataType: 'json',
            data: $('#insert_form').serialize(),
            success: function(data) {
                // Handle success response
            },
            error: function(xhr, status, error) {
                // Handle error response
            }
        });
    });
});
</script> -->





<script>
function getImagePreview(event) {
    var image = URL.createObjectURL(event.target.files[0]);
    var imagediv = document.getElementById('preview');
    var newimg = document.createElement('img');
    imagediv.innerHTML = '';
    newimg.src = image;
    newimg.width = "100";
    newimg.height = "50";

    imagediv.appendChild(newimg);
}
</script>


<script>
function getProfilePreview(event) {
    var image = URL.createObjectURL(event.target.files[0]);
    var imagediv = document.getElementById('previewprofile');
    var newimg = document.createElement('img');
    imagediv.innerHTML = '';
    newimg.src = image;
    newimg.width = "100";
    newimg.height = "50";

    imagediv.appendChild(newimg);
}
</script>

<!-- ADDING USER INFORMATION -->

<script>
$(document).ready(function() {
    $(document).on('click', '.ajaxprofile-save', function() {

        if ($.trim($('.firstname').val()).length == 0) {
            error_fname = 'Please enter your firstname';
            $('#error_fname').text(error_fname);

        } else {
            error_fname = '';
            $('#error_fname').text(error_fname);
        }

        if ($.trim($('.lastname').val()).length == 0) {
            error_lname = 'Please enter your lastname';
            $('#error_lname').text(error_lname);

        } else {
            error_lname = '';
            $('#error_lname').text(error_lname);
        }

        if ($.trim($('.middlename').val()).length == 0) {
            error_mname = 'Please enter your middlename';
            $('#error_mname').text(error_mname);

        } else {
            error_mname = '';
            $('#error_mname').text(error_mname);
        }

        if ($.trim($('.region').val()).length == 0) {
            error_rname = 'Please Enter Your Region';
            $('#error_rname').text(error_rname);

        } else {
            error_rname = '';
            $('#error_rname').text(error_rname);
        }
        if ($.trim($('.province').val()).length == 0) {
            error_pname = 'Please Enter Your Province';
            $('#error_pname').text(error_pname);

        } else {
            error_pname = '';
            $('#error_pname').text(error_pname);
        }
        if ($.trim($('.city').val()).length == 0) {
            error_cname = 'Please Enter Your City';
            $('#error_cname').text(error_cname);

        } else {
            error_cname = '';
            $('#error_cname').text(error_cname);
        }

        if ($.trim($('.barangay').val()).length == 0) {
            error_bname = 'Please Enter Your City';
            $('#error_bname').text(error_bname);

        } else {
            error_bname = '';
            $('#error_bname').text(error_bname);
        }
        // if ($.trim($('.username').val()).length == 0) {
        //     error_uname = 'Please Enter Your Username';
        //     $('#error_uname').text(error_uname);

        // } else {
        //     error_uname = '';
        //     $('#error_uname').text(error_uname);
        // }

        if (error_fname != '' || error_lname != '' ||
            error_mname != '' || error_pname != '' || error_rname != '' ||
            error_cname != '' || error_bname != '') {
            return false;

        } else {
            /**
             * 
             * data to be inserted
             */
            var data = {
                'user_id': $('.user_id').val(),

                'firstname': $('.firstname').val(),

                'middlename': $('.middlename').val(),
                'lastname': $('.lastname').val(),
                'suffix': $('.suffix').val(),
                'username': $('.username').val(),
                'email': $('.email').val(),
                'about': $('.about').val(),
                'bloodtype': $('.bloodtype').val(),
                'gender': $('.gender').val(),
                'region': $('.region').val(),
                'province': $('.province').val(),
                'city': $('.city').val(),
                'barangay': $('.barangay').val(),
                'occupation': $('.occupation').val(),

            }
            $.ajax({
                method: "POST",
                url: "UserController/add_info",
                data: data,

                success: function(response) {

                    // alertify.set('notifier', 'position', 'top-right');

                    // alertify.success('Added');

                    // alert('Success');

                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Your personal information was added successfully',
                        showConfirmButton: false,


                        backdrop: `
                                rgba(0,0,123,0.4)
                                url("<? BASE_URL . PUBLIC_DIR ?>/assets/user/images/logos.png")
                                left top
                                no-repeat
                            `,
                        timer: 1500
                    })

                }
            });
        }

    });
});
</script>
<!-- END ADDING USER INFORMATION -->

<!-- POSTING -->
<script>
$(document).ready(function() {


    $(document).on('click', '.post-btn', function() {



        if ($.trim($('.caption').val()).length == 0) {
            error_caption = 'Please enter your caption';
            $('#error_caption').text(error_caption);
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'Please add something and try again',
                showConfirmButton: false,
                timer: 1500
            })

        } else {
            error_caption = '';
            $('#error_caption').text(error_caption);
        }

        if ($.trim($('.address').val()).length == 0) {
            error_address = 'Please Input Address';
            $('#error_address').text(error_address);

        } else {
            error_address = '';
            $('#error_address').text(error_address);
        }

        // if ($.trim($('.file').val()).length == 0) {
        //     error_file = 'Please choose a file';
        //     $('#error_file').text(error_file);

        // } else {
        //     error_file = '';
        //     $('#error_file').text(error_file);
        // }




        if (error_caption != '' || error_address != '') {
            return false;

        } else {
            /**
             * 
             * data to be inserted
             */
            var data = {
                'user_id': $('.user_id').val(),

                'caption': $('.caption').val(),
                'address': $('.address').val(),
            }


            $.ajax({
                method: "POST",
                url: "PostController/insert_post",
                data: data,

                success: function(response) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Your post has been created',
                        showConfirmButton: false,



                        timer: 1500
                    })

                }
            });

            // window.location.reload();

        }

    });
});
</script>

<!-- END POSTING -->

<script>
function resetForm() {
    document.getElementById("address").reset();
}
</script>


<!--count user not used -->
<!-- <script>
$.ajax({
    url: "UserAuth/count_users",
    type: "POST",
    dataType: "html",
    success: function(data) {
        $('#count').html(data); //display the count on your page
    }
});
</script> -->

<!-- end count user -->
<!-- try to fetch -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $.get('<?php echo site_url('UserController/getdata'); ?>', function(user_info) {

        var bloodtype = document.getElementById('blood-type');
        var data = JSON.parse(user_info);
        var html = '';
        var region = '';
        var occupation = '';
        var address = '';
        for (var i = 0; i < data.length; i++) {
            html += '<p>' + data[i].blood_type +
                // ', ' + data[i].username + ', ' + data[i].user_email +
                // ', ' + data[i].barangay +
                '</p>';
            region += '<p>' + data[i].region +

                ', ' + data[i].barangay + ', ' + data[i].city +
                ', ' + data[i].province +


                '</p>';

            address += '<p>' + data[i].region +

                // ', ' + data[i].barangay + ', ' + data[i].city +
                // ', ' + data[i].province +


                '</p>';
            occupation += '<p>' + data[i].occupation + '</p>';
        }

        // $('#data-container').html(html);


        $('#region').html(region);

        $('#region').html(region);
        $('#country').html(address);

        $('#blood-type').html(html);

        $('#blood-type').html = '-';


        $('#occupation').html(occupation);

        // $('#blood-type').val(data[0].blood_type);
    });
});
</script>



<!-- TODO: NOT USED, TRY IT LATER -->
<!-- upload profile -->
<script>
$(document).ready(function() {
    $(document).on('change', '#file', function() {
        var name = document.getElementById("file").files[0].name;
        var form_data = new FormData();
        var ext = name.split('.').pop().toLowerCase();
        if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            alert("Invalid Image File");
        }
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("file").files[0]);
        var f = document.getElementById("file").files[0];
        var fsize = f.size || f.fileSize;
        if (fsize > 2000000) {
            alert("Image File Size is very big");
        } else {
            form_data.append("file", document.getElementById('file').files[0]);
            $.ajax({
                url: "upload.php",
                method: "POST",
                data: form_data,
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('#uploaded_image').html(
                        "<label class='text-success'>Image Uploading...</label>");
                },
                success: function(data) {
                    $('#uploaded_image').html(data);
                }
            });
        }
    });
});
</script>

<!-- <script>
$(document).ready(function() {
    alertify.set('notifier', 'position', 'bottom-right');
    alertify.success('demo');

})
</script> -->

<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<!-- The Scrolling Modal image with comment -->

<script src="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/js/main.min.js"></script>
<script src="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/js/jquery-stories.js"></script>
<!--<script src="js/toast-notificatons.js"></script>-->
<script src="../../../cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
<!-- For timeline slide show -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>
<!-- for location picker map -->
<script src="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/js/locationpicker.jquery.js"></script>
<!-- for loaction picker map -->
<script src="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/js/map-init.js"></script>
<!-- map initilasition -->
<!-- <!-- <script src="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/js/page-tourintro.js"></script> -->
<script src="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/js/page-tour-init.js"></script>
<script src="<?= BASE_URL . PUBLIC_DIR ?>/assets/user/js/script.js"></script>
<script>
jQuery(document).ready(function($) {
    $("#us3").locationpicker({
        location: {
            latitude: -8.681013,
            longitude: 115.23506410000005,
        },
        radius: 0,
        inputBinding: {
            latitudeInput: $("#us3-lat"),
            longitudeInput: $("#us3-lon"),
            radiusInput: $("#us3-radius"),
            locationNameInput: $("#us3-address"),
        },
        enableAutocomplete: true,
        onchanged: function(currentLocation, radius, isMarkerDropped) {
            // Uncomment line below to show alert on each Location Changed event
            //alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
        },
    });

    /*if ($.isFunction($.fn.toast)) {
    	$.toast({
    		heading: 'Welcome To Pitnik',
    		text: '',
    		showHideTransition: 'slide',
    		icon: 'success',
    		loaderBg: '#fa6342',
    		position: 'bottom-right',
    		hideAfter: 3000,
    	});

    	$.toast({
    		heading: 'Information',
    		text: 'Now you can full demo of pitnik and hope you like',
    		showHideTransition: 'slide',
    		icon: 'info',
    		hideAfter: 5000,
    		loaderBg: '#fa6342',
    		position: 'bottom-right',
    	});
    	$.toast({
    		heading: 'Support & Help',
    		text: 'Report any <a href="#">issues</a> by email',
    		showHideTransition: 'fade',
    		icon: 'error',
    		hideAfter: 7000,
    		loaderBg: '#fa6342',
    		position: 'bottom-right',
    	});
    }*/
});
</script>


<!-- uploading profile not used -->

<script>
$(document).ready(function() {
    $('#image').on('change', function() {
        var formData = new FormData();
        formData.append('image', $('#image')[0].files[0]);

        $.ajax({
            url: 'Usercontroller/upload_profile_image");',
            type: 'POST',
            data: formData,
            dataType: 'json',
            contentType: false,
            processData: false,
            success: function(response) {
                if (response.success) {
                    // alertify.success(response.message);

                    alert('success')
                } else {
                    // alertify.error(response.message);
                    alert('error')
                }
            }
        });
    });
});
</script>

<!-- ADD COMMENTS -->

<script>
$(document).ready(function() {
    $('.addComment').click(function(e) {
        e.preventDefault();


        // if ($.trim($('.comment').val()).length == 0) {
        //     error_comment = 'Please Add Your Comment';
        //     $('#error_comment').text(error_comment);

        // } else {
        //     error_comment = '';
        //     $('#error_comment').text(error_comment);
        // }
        // if (error_comment != '') {
        //     return false;

        // } else {

        var $form = $(this).closest(".submit-form");
        var pid = $form.find('.pid').val();

        var uid = $form.find('.uid').val();
        var comment = $form.find('.comment').val();

        $.ajax({
            method: 'post',
            url: "<?= site_url('CommentController/addComment') ?>",
            data: {

                pid: pid,
                uid: uid,
                comment: comment

            },

            success: function(response) {


                // alert('Comment Added Successfully');
                window.location.reload();

                // alertify.set('notifier', 'position', 'bottom-right');
                // alertify.success('demo');

                // $('#message').html(response);
                // load_cart_item_number();


            }
        });

        // }





    });


});
</script>

</body>



</html>



<script>
var status = 'online';
var current_status = 'online';

function check_internet_connection() {
    if (navigator.onLine) {
        status = 'online';
    } else {
        status = 'offline';
    }

    if (current_status != status) {
        if (status == 'online') {
            $('i.bi').addClass('bi-wifi');
            $('i.bi').removeClass('bi-wifi-off');
            $('.mr-auto').html("<span class='text-success'>You are online now</span>");
            $('.toast-body').text('Hurray! Internet is connected.');
        } else {
            $('i.bi').addClass('bi-wifi-off');
            $('i.bi').removeClass('bi-wifi');
            $('.mr-auto').html("<span class='text-danger'>You are offline now</span>");
            $('.toast-body').text('Opps! Internet is disconnected.')
        }

        current_status = status;

        $('.toast').toast({
            autohide: false
        });

        $('.toast').toast('show');
    }
}

check_internet_connection();

setInterval(function() {
    check_internet_connection();
}, 1000);
</script>