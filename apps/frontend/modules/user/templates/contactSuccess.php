        <div class="bg-wrapper">

        <div class="container">
        	<div class="row">
        		<div class="span8">
        			<h1>Contact Us</h1>

        			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam laboriosam temporibus obcaecati, repellendus at odit repellat ipsum est voluptate, in fugit assumenda animi voluptates quas, laborum corporis totam neque quisquam enim, eligendi libero ducimus. Ad quis, debitis iure sapiente natus itaque, eius unde voluptate consequuntur aliquid, quaerat dolore, repellendus optio.</p>
                    <div class="thankyou"></div>
                    <form name="conatct_form" id="contactform" method="post" action="">
                        <div class="row">
                            <div class="span4">
                              <div class="control-group form-group">
                                  <label for="name" class="sr-only">Name*</label>
                                  <input type="text" name="name" id="name" class="form-control span4" placeholder="enter name*" autocomplete="off"/>
                              </div>

                              <div class="control-group form-group">
                                  <label for="email" class="sr-only">Email*</label>
                                  <input type="text" class="form-control span4" name="email" id="email" placeholder="email*" autocomplete="off"/>
                              </div>

                              <div class="control-group form-group">
                                  <label for="phonenumber" class="sr-only">Phone Number*</label>
                                  <input type="text" id="phonenumber" name="phone" class="form-control span4" placeholder="phone no*" autocomplete="off"/>
                              </div>
                            </div>
                            <div class="span4 ">
                                <label class="sr-only">Comments</label>
                                <textarea class="form-control span4" name="message" rows="3" rows="3" style="height: 182px;"placeholder="Provide some details"></textarea>
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
        		</div>

        		<div class="span4">
        			<div class="widget">
   					   <h2>Navigation</h3>
   					   	<ul class="nav nav-tabs nav-stacked">
  							<li><a href="#">Sample Links</a></li>
  							<li><a href="#">Sample Links</a></li>
  							<li><a href="#">Sample Links</a></li>
  							<li><a href="#">Sample Links</a></li>
  							<li><a href="#">Sample Links</a></li>
  							<li><a href="#">Sample Links</a></li>
						</ul>
					   <div>
					      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed eum, excepturi pariatur perspiciatis porro nostrum molestiae assumenda voluptas possimus nisi.</p>
					      <a href="" class="btn btn-success">Read More</a>
					   </div>
					</div>
				</div>
        	</div>
        </div>


		<!-- End of BG Wrapper -->
        </div>
<script type="text/javascript">

    $("#contactform").validate({
        rules: {
            name: { required: true },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                minlength: 10,
                number: true
            }
        },
        messages: {
            name: "Invalid name",
            email: "Invalid email address",
            phone: "Invalid phone no"
        },
        highlight: function(element) {
            $(element).parent().addClass("field-error");
        },
        unhighlight: function(element) {
            $(element).parent().removeClass("field-error").addClass("field-success");
        },
        submitHandler: function(form) {
            $.ajax({
                async: false,
                data: $("#contactform").serialize(),
                url : "/frontend_dev.php/contact-save-url",
                type: 'POST',
                success: function (data) {
                    if(data == "Done") {
                        document.getElementById("contactform").reset();
                        $('#ask-success-msg').css('display','block');
                        $('.field-success').removeClass('field-success');
                        $('.thankyou').html('Thank You, Your message was successfully sent.');
//                                setTimeout(function(){
//                        location.reload();
//                                }, 300);
                    }
                },
                error: function(){
                    alert('Something went wrong. Please try again.');
                }
            });
        }

    });

</script>