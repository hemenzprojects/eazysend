<style>
    
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

        * {
            box-sizing: border-box;
        }

        body {
            background: #f6f5f7;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: 'Montserrat', sans-serif;
            height: 100vh;
            margin: -20px 0 50px;
        }

        h1 {
            font-weight: bold;
            margin: 0;
        }

        h2 {
            text-align: center;
        }

        p {
            font-size: 14px;
            font-weight: 100;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 20px 0 30px;
        }

        span {
            font-size: 12px;
        }

        a {
            color: #333;
            font-size: 14px;
            text-decoration: none;
            margin: 15px 0;
        }

        button {
            border-radius: 2px;
            border: 1px solid #000000;
            background-color: #000000;
            color: #FFFFFF;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
        }

        button:active {
            transform: scale(0.95);
        }

        button:focus {
            outline: none;
        }

        button.ghost {
            background-color: transparent;
            border-color: #FFFFFF;
        }

        form {
            background-color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
        }

        input {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
        }

        select {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
                    0 10px 10px rgba(0,0,0,0.22);
            position: relative;
            overflow: hidden;
            width: 768px;
            max-width: 100%;
            min-height: 530px;
        }

        .form-container {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }

        .sign-in-container {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .container.right-panel-active .sign-in-container {
            transform: translateX(100%);
        }

        .sign-up-container {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }

        .container.right-panel-active .sign-up-container {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: show 0.6s;
        }

        @keyframes show {
            0%, 49.99% {
                opacity: 0;
                z-index: 1;
            }
            
            50%, 100% {
                opacity: 1;
                z-index: 5;
            }
        }

        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
            z-index: 100;
        }

        .container.right-panel-active .overlay-container{
            transform: translateX(-100%);
        }

        .overlay {
            background: #FF416C;
            background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
            background: linear-gradient(to right, rgb(5 3 110), #05b886);

            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 0;
            color: #FFFFFF;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .container.right-panel-active .overlay {
            transform: translateX(50%);
        }

        .overlay-panel {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .overlay-left {
            transform: translateX(-20%);
        }

        .container.right-panel-active .overlay-left {
            transform: translateX(0);
        }

        .overlay-right {
            right: 0;
            transform: translateX(0);
        }

        .container.right-panel-active .overlay-right {
            transform: translateX(20%);
        }

        .social-container {
            margin: 20px 0;
        }

        .social-container a {
            border: 1px solid #DDDDDD;
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 0 5px;
            height: 40px;
            width: 40px;
        }

        footer {
            background-color: #222;
            color: #fff;
            font-size: 14px;
            bottom: 0;
            position: fixed;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 999;
        }

        footer p {
            margin: 10px 0;
        }

        footer i {
            color: red;
        }

        footer a {
            color: #3c97bf;
            text-decoration: none;
        }
</style>

<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1>Create Account</h1>
			
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" />
			<input type="text" placeholder="Sender ID" />
			<input type="number" placeholder="Number" />

            <select id="country" name="Country"><option value="">Select Country</option>
                <option value="93">Afghanistan</option>
                <option value="355">Albania</option>
                <option value="213">Algeria</option>
                <option value="376">Andorra</option>
                <option value="244">Angola</option>
                <option value="1264">Anguilla</option>
                <option value="1268">Antigua and Barbuda</option>
                <option value="54">Argentina</option>
                <option value="374">Armenia</option>
                <option value="297">Aruba</option>
                <option value="61">Australia</option>
                <option value="43">Austria</option>
                <option value="994">Azerbaijan</option>
                <option value="1242">Bahamas</option>
                <option value="973">Bahrain</option>
                <option value="880">Bangladesh</option>
                <option value="1246">Barbados</option>
                <option value="375">Belarus</option>
                <option value="32">Belgium</option>
                <option value="501">Belize</option>
                <option value="229">Benin</option>
                <option value="1441">Bermuda</option>
                <option value="975">Bhutan</option>
                <option value="591">Bolivia</option>
                <option value="387">Bosnia and Herzegovina</option>
                <option value="267">Botswana</option>
                <option value="55">Brazil</option>
                <option value="246">British Indian Ocean</option>
                <option value="673">Brunei</option>
                <option value="359">Bulgaria</option>
                <option value="226">Burkina Faso</option>
                <option value="95">Burma</option>
                <option value="257">Burundi</option>
                <option value="855">Cambodia</option>
                <option value="237">Cameroon</option>
                <option value="1">Canada</option>
                <option value="238">Cape Verde</option>
                <option value="1345">Cayman Islands</option>
                <option value="236">Central African</option>
                <option value="235">Chad</option>
                <option value="56">Chile</option>
                <option value="86">China</option>
                <option value="57">Colombia</option>
                <option value="269">Comoros</option>
                <option value="243">Congo DRC</option>
                <option value="242">Congo Republic</option>
                <option value="682">Cook Islands</option>
                <option value="506">Costa Rica</option>
                <option value="225">Cote dIvoire</option>
                <option value="385">Croatia</option>
                <option value="53">Cuba</option>
                <option value="357">Cyprus</option>
                <option value="420">Czech Republic</option>
                <option value="999">Default</option>
                <option value="45">Denmark</option>
                <option value="253">Djibouti</option>
                <option value="1767">Dominica</option>
                <option value="1809">Dominican Republic</option>
                <option value="1829">Dominican Republic</option>
                <option value="670">East Timor</option>
                <option value="593">Ecuador</option>
                <option value="20">Egypt</option>
                <option value="503">El Salvador</option>
                <option value="777">eProcess</option>
                <option value="240">Equatorial Guinea</option>
                <option value="291">Eritrea</option>
                <option value="372">Estonia</option>
                <option value="251">Ethiopia</option>
                <option value="500">Falkland Islands</option>
                <option value="298">Faroe Islands</option>
                <option value="679">Fiji</option>
                <option value="358">Finland</option>
                <option value="33">France</option>
                <option value="594">French Guiana</option>
                <option value="689">French Polynesia</option>
                <option value="241">Gabon</option>
                <option value="220">Gambia</option>
                <option value="995">Georgia</option>
                <option value="49">Germany</option>
                <option value="233">Ghana</option>
                <option value="350">Gibraltar</option>
                <option value="30">Greece</option>
                <option value="299">Greenland</option>
                <option value="1473">Grenada</option>
                <option value="590">Guadeloupe</option>
                <option value="502">Guatemala</option>
                <option value="224">Guinea</option>
                <option value="245">Guinea Bissau</option>
                <option value="592">Guyana</option>
                <option value="509">Haiti</option>
                <option value="504">Honduras</option>
                <option value="852">Hong Kong</option>
                <option value="36">Hungary</option>
                <option value="354">Iceland</option>
                <option value="91">India</option>
                <option value="62">Indonesia</option>
                <option value="98">Iran</option>
                <option value="964">Iraq</option>
                <option value="353">Ireland</option>
                <option value="972">Israel</option>
                <option value="39">Italy </option>
                <option value="1876">Jamaica</option>
                <option value="81">Japan</option>
                <option value="962">Jordan</option>
                <option value="254">Kenya</option>
                <option value="686">Kiribati</option>
                <option value="965">Kuwait</option>
                <option value="996">Kyrgyzstan</option>
                <option value="856">Laos</option>
                <option value="371">Latvia</option>
                <option value="961">Lebanon</option>
                <option value="266">Lesotho</option>
                <option value="231">Liberia</option>
                <option value="218">Libya</option>
                <option value="423">Liechtenstein</option>
                <option value="370">Lithuania</option>
                <option value="352">Luxembourg</option>
                <option value="853">Macau</option>
                <option value="389">Macedonia</option>
                <option value="261">Madagascar</option>
                <option value="265">Malawi</option>
                <option value="60">Malaysia</option>
                <option value="223">Mali</option>
                <option value="356">Malta</option>
                <option value="692">Marshall Islands</option>
                <option value="596">Martinique</option>
                <option value="222">Mauritania</option>
                <option value="230">Mauritius</option>
                <option value="262">Mayotte Runion</option>
                <option value="52">Mexico</option>
                <option value="691">Micronesia</option>
                <option value="373">Moldova</option>
                <option value="377">Monaco</option>
                <option value="976">Mongolia</option>
                <option value="382">Montenegro</option>
                <option value="1664">Montserrat</option>
                <option value="212">Morocco</option>
                <option value="258">Mozambique</option>
                <option value="264">Namibia</option>
                <option value="674">Nauru</option>
                <option value="977">Nepal</option>
                <option value="31">Netherlands</option>
                <option value="599">Netherlands Antilles</option>
                <option value="687">New Caledonia</option>
                <option value="64">New Zealand</option>
                <option value="505">Nicaragua</option>
                <option value="227">Niger</option>
                <option value="234">Nigeria</option>
                <option value="683">Niue Niue Island</option>
                <option value="672">Norfolk Island</option>
                <option value="850">North Korea</option>
                <option value="47">Norway</option>
                <option value="968">Oman</option>
                <option value="92">Pakistan</option>
                <option value="680">Palau</option>
                <option value="970">Palestinian</option>
                <option value="507">Panama</option>
                <option value="675">Papua New Guinea</option>
                <option value="595">Paraguay</option>
                <option value="51">Peru</option>
                <option value="63">Philippines</option>
                <option value="48">Poland</option>
                <option value="351">Portugal</option>
                <option value="974">Qatar</option>
                <option value="40">Romania</option>
                <option value="7">Russia</option>
                <option value="250">Rwanda</option>
                <option value="290">Saint Helena, Tristan da Cunha</option>
                <option value="1869">Saint Kitts and Nevis</option>
                <option value="1758">Saint Lucia</option>
                <option value="1784">Saint Vincent and the Grenadines</option>
                <option value="508">Saint-Pierre and Miquelon</option>
                <option value="685">Samoa</option>
                <option value="378">San Marino</option>
                <option value="239">Sao Tome and Principe</option>
                <option value="966">Saudi Arabia</option>
                <option value="221">Senegal</option>
                <option value="381">Serbia</option>
                <option value="248">Seychelles</option>
                <option value="232">Sierra Leone</option>
                <option value="65">Singapore</option>
                <option value="421">Slovakia</option>
                <option value="386">Slovenia</option>
                <option value="677">Solomon Islands</option>
                <option value="252">Somalia</option>
                <option value="27">South Africa</option>
                <option value="82">South Korea</option>
                <option value="211">South Sudan</option>
                <option value="34">Spain</option>
                <option value="94">Sri Lanka</option>
                <option value="249">Sudan</option>
                <option value="597">Suriname</option>
                <option value="268">Swaziland</option>
                <option value="46">Sweden</option>
                <option value="41">Switzerland</option>
                <option value="963">Syria</option>
                <option value="886">Taiwan</option>
                <option value="992">Tajikistan</option>
                <option value="255">Tanzania</option>
                <option value="66">Thailand</option>
                <option value="1284">the British Virgin Islands</option>
                <option value="960">the Maldives</option>
                <option value="228">Togo</option>
                <option value="690">Tokelau</option>
                <option value="676">Tonga</option>
                <option value="1868">Trinidad and Tobago</option>
                <option value="216">Tunisia</option>
                <option value="90">Turkey</option>
                <option value="993">Turkmenistan</option>
                <option value="1649">Turks and Caicos Islands</option>
                <option value="688">Tuvalu</option>
                <option value="256">Uganda</option>
                <option value="380">Ukraine</option>
                <option value="971">United Arab Emirates</option>
                <option value="44">United Kingdom</option>
                <option value="1">United States</option>
                <option value="000">Unknown</option>
                <option value="598">Uruguay</option>
                <option value="998">Uzbekistan</option>
                <option value="678">Vanuatu</option>
                <option value="58">Venezuela</option>
                <option value="84">Vietnam</option>
                <option value="681">Wallis and Futuna</option>
                <option value="967">Yemen</option>
                <option value="260">Zambia</option>
                <option value="263">Zimbabwe</option>
            </select>
             
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<input type="password" placeholder="Confirm Password"/>

			<button style="margin-top:20px">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/login') }}">
            {{ csrf_field() }}

			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                {{-- <label for="email" class="col-md-4 control-label">E-Mail Address</label> --}}

			     <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>

                @if ($errors->has('email'))
                    <span class="help-block" style="font-size:12; color:rgb(236, 0, 0)">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif

                <input id="password" type="password" class="form-control" name="password">

                @if ($errors->has('password'))
                    <span class="help-block" style="font-size:12; color:rgb(236, 0, 0)">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
			<a href="#">Forgot your password?</a>

			<button type="submit" style="margin-top:20px">Sign In</button>
            </div>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Earn customers Trust</h1>
				<p>To keep connected with your cutomers, login with your details</p>
				<button class="ghost" id="signIn" style="margin-top:20px">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Not Yet Registered?</h1>
				<p>Register and Engage your customers globally with SMS</p>
                <span>Send and receive text messages to connect and drive meaningful customer engagement. Easily build a trusted SMS offering into your web and mobile applications with Telesign’s powerful programmable messaging API.</span>
				<button class="ghost" id="signUp" style="margin-top:20px">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="">Eazysend</a>
		- Read how I created this and how you can join the challenge
		<a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
	</p>
</footer>

<script>
    const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>