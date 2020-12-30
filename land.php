 <!DOCTYPE html>
 <html>
 <head>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
 </head>
 <body>

  <div class="col-12">
                    <h2 class="contact-title">Let`s get you a space in minutes.</h2>
                    <p>Ensure that you supply correct details as your email address and your phone number will be verified to proof you own them.</p>
                    <br>
                </div>
<form class="form-contact contact_form" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">
                          
                           <div class="col-sm-6">
                                <div class="form-group">
                                    <label><b style="color: #ff0000; font-size: 18px;">Full Name.:</b></label>
                                    <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your FirstName and LastName'" placeholder="Enter your FirstName and LastName" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                     <label><b style="color: #ff0000; font-size: 18px;">Email.:</b></label>
                                    <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Input your email address'" placeholder="Input your email address">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group"> 
                                 <label><b style="color: #ff0000; font-size: 18px;">Gender.:</b></label>                              
                                <select id="gender" class="form-control valid">
                                    <option id="gender">Male</option>
                                    <option id="gender">Female</option>
                                    <option id="gender">Others</option>
                                </select>                         
                                                       
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                     <label><b style="color: #ff0000; font-size: 18px;">Telephone Number.:</b></label>
                                    <input class="form-control valid" name="tel" id="tel" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Input your telephone number'" placeholder="Input your telephone number">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                     <label><b style="color: #ff0000; font-size: 18px;">Create Password.:</b></label>
                                    <input class="form-control valid" name="pword" id="pword" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Create a password'" placeholder="Create a password">
                                </div>
                            </div>                            
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label><b style="color: #ff0000; font-size: 18px;">Confirm Password.:</b></label>
                                    <input class="form-control valid" name="cpword" id="cpword" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm password'" placeholder="Confirm password">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label><b style="color: #ff0000; font-size: 18px;">Bank Account Number.:</b></label>
                                    <input class="form-control valid" name="acct" id="acct" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Input Bank account number'" placeholder="Create a password">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group"> 
                                 <label><b style="color: #ff0000; font-size: 18px;">Bank Name.:</b></label>                              
                                <select id="bank" class="form-control valid" required>
                                        <option id="bank"> Access Bank Plc</option>
                                        <option id="bank">Fidelity Bank Plc</option>
                                        <option id="bank">First City Monument Bank Limited</option>
                                        <option id="bank">First Bank of Nigeria Limited</option>
                                        <option id="bank">Guaranty Trust Bank Plc</option>
                                        <option id="bank">Union Bank of Nigeria Plc</option>
                                        <option id="bank">United Bank for Africa Plc</option>
                                        <option id="bank">Zenith Bank Plc</option>
                                        <option id="bank">Citibank Nigeria Limited</option>
                                        <option id="bank">Ecobank Nigeria Plc</option>
                                        <option id="bank">Heritage Banking Company Limited</option>
                                        <option id="bank">Keystone Bank Limited</option>
                                        <option id="bank">Polaris Bank Limited</option>
                                        <option id="bank">Stanbic IBTC Bank Plc</option>
                                        <option id="bank">Standard Chartered</option>
                                        <option id="bank">Sterling Bank Plc</option>
                                        <option id="bank">Unity Bank Plc</option>
                                        <option id="bank">Wema Bank Plc</option>
                        </select>                     
                                                       
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label><b style="color: #ff0000; font-size: 18px;">National Identity Number(optional).:</b></label>
                                    <input class="form-control valid" name="nin" id="nin" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Input your NIN(optional)'" placeholder="Input your NIN(optional)">
                                </div>
                            </div>
                        </div>
                        <p style="font-size: 15px;"><a style="color: #000000;" href="./signin">Got a space | </a> <a style="color: #ff0000;" href="./forgot">Forgot Password?</a></p>
                          <div class="form-group mt-3 pl-5 col-lg-4">
                            <button type="button" id="landlord" onclick="landlordReg();" class="button button-contactForm boxed-btn">Next</button>                            
                        </div>
                    </form>



 
 </body>
   
 </html>