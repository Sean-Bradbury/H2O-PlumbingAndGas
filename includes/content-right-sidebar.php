<div class="content-right col-lg-4 col-xl-4 col-sm-12 bg-light-grey p-4">
  <h3 class="grey-heading-noline mb-4">Ready To Get In Touch?</h3>
  <p>Please fill out the form below</p>
  <form method="post" name="contact-form" action="contact-form-handler.php">
    <input type="text" name="name" placeholder="Name" class="d-block mb-2 p-2 w-100">
    <input type="email" name="email" placeholder="Email" class="d-block mb-2 p-2 w-100">
    <textarea name="message" name="message" placeholder="Please enter your message" cols="30" rows="10" class="d-block mb-2 p-2 w-100"></textarea>
    <button type="submit" value="Submit" class="btn btn-red">Send Enquiry</button>
    
  </form>
</div>

<script language=”JavaScript”>

var frmvalidator = new Validator(“contactform”); frmvalidator.addValidation(“name”,”req”,”Please provide your name”); frmvalidator.addValidation(“email”,”req”,”Please provide your email”); frmvalidator.addValidation(“email”,”email”, “Please enter a valid email address”); </script>
