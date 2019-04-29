<?php

     namespace App\Controllers\Frontend;
     use App\Controllers\Controller;
     use App\Model\Contact;
     use App\Model\User;
     use PHPMailer\PHPMailer\Exception;
     use PHPMailer\PHPMailer\PHPMailer;
     use Respect\Validation\Validator;

     class HomeController extends Controller{


         public function getIndex()
         {
             view('home');
         }

         public function getRegister()
         {
             view('registration');
         }
         public function postRegister()
         {
              //Our register code will be goes here.

           $validator= new Validator();
           $errors = [];

           $username = $_POST['username'];
           $username = validation($username);
           $email = $_POST['email'];
           $email = validation($email);
           $password = $_POST['password'];
           $password = validation($password);
           $confirm_password = $_POST['confirm_password'];
           $confirm_password = validation($confirm_password);
           $file = $_FILES['file'];

           //Validation with respect validation php package

             if ($validator::alnum()->noWhitespace()->validate($username) === false){
                 $errors['username'] = 'Username Contains Alphabets';
             }

             if (strlen($username) < 4){
                 $errors['username'] = 'Username is too Short';
             }

             if (strlen($username) > 50){
                 $errors['username'] = 'Username is too long';
             }

             if ($validator::email()->validate($email) === false){
                 $errors['email'] = 'Email address Must be Valid';
             }
             if (!preg_match("/@diu.edu.bd/",$email)){
                 $errors['email'] = 'Please Insert Your Diu email address';
             }
             if (strlen($email) > 60){
                 $errors['email'] = 'Email address is too long';
             }
             if (strlen($password)<6){
                 $errors['password'] = 'Password Must be at least 6 Characters';
             }
             if (strlen($password) > 50){
                 $errors['password'] = 'Password is too long';
             }

             if ($password != $confirm_password){
                $errors['confirm_password'] = 'Password Not Match';
             }

             if ($validator::image()->validate($file)){
                 $errors['file'] = 'Profile Photo Must be Image Format';
             }

             $user = User::all();
             foreach ($user as $person){
                 if ($person->email === $email){
                     $errors['email'] = '<strong>'.$email.'</strong>'.' E-mail Are Already Exist!';
                 }
             }
             if (empty($errors)){
                 //Check errors empty or not;
                 $file_name = 'profile_photo'.time();
                 $extention = explode('.',$file['name']);
                 $ext = end($extention);
                 move_uploaded_file($file['tmp_name'],'media/profile_photo/'.$file_name.'.'.$ext);


                 //Insert database
                 User::create([
                     'username' => $username,
                     'email'    => $email,
                     'password' =>password_hash($password,PASSWORD_BCRYPT),
                     'photo'     => $file_name.'.'.$ext
                  ]);

                $_SESSION['success'] = 'Your Registration Successfully Done';
                header('Location:login');
                exit();
             }

             $_SESSION['errors'] = $errors;
             header('Location:register');
             exit();


         }


         public function getLogin()
         {
             view('login');
         }

         public function postLogin()
         {
             //Our login code will be goes here.

             $validator = new Validator();
             $errors = [];
             $email = $_POST['email'];
             $password = $_POST['password'];
             $email = validation($email);
             $password = validation($password);

             if ($validator::email()->validate($email) === false){
                 $errors['email'] = 'Email Address Must be Valid';
             }
             if (!preg_match("/@diu.edu.bd/",$email)){
                 $errors['email'] = 'Please Insert Your Diu email address';
             }
             if (strlen($email)>80){
                 $errors['email'] = 'E-mail address is too long';
             }

             if (strlen($password)<5){
                 $errors['password'] = 'Password Must be at least 6 Characters';
             }

             if (strlen($password) > 80){
                 $errors['password'] = 'Password is too long';
             }



            if (empty($errors)){
                 //Fetch database if email exist of not
                $user = User::select(['id','username','email','password','status'])->where('email',$email)->first();
                if ($user){
                      if (password_verify($password,$user->password)){
                          $_SESSION['success'] = 'Login Successfully';
                            $_SESSION['user'] = [
                                'id' => $user->id,
                                'username' => $user->username,
                                'email'    => $user->email,
                                'status'   => $user->status
                            ];

                            if ($user->status === 1){
                                $_SESSION['admin_name'] = $user->username;
                                header('Location:admin');
                                $_SESSION['admin'] = 'Admin Panel';
                                exit();
                            }else{
                                $_SESSION['user_name'] = $user->username;
                                header('Location:dashboard');
                                exit();
                            }




                      }else{
                          //Wrong password message show
                          $errors['errors'] = 'Wrong Password';
                          $_SESSION['errors'] = $errors;
                          header('Location:login');
                          exit();
                      }
                }else{
                   //Email not found message show;
                    $errors['errors'] = 'Email address not Found';
                    $_SESSION['errors'] = $errors;
                    header('Location:login');
                    exit();
                }



            }else{
                $_SESSION['errors'] = $errors;
                header('Location:login');
                exit();
            }

         }

         public function getLogout()
         {
             unset($_SESSION['user']);
             $_SESSION['success'] = 'LogOut Successfully';
             header('Location:login');
             exit();
         }

         public function getContact()
         {
             view('contact');
         }



         public function postContact()
         {
             //Our contact code will be goes here.

             $validator = new Validator();
             $errors = [];
             $email = $_POST['email'];
             $email = validation($email);
             $message = $_POST['message'];
             $message = validation($message);

             if ($validator::email()->validate($email) ===false){
                 $errors['email'] = 'Email Must be Valid';
             }
             if (strlen($email)>80){
                 $errors['email'] = 'Email length is too long';
             }
             if (strlen($message) > 200){
                 $errors['message'] = 'Your Message is too Long';
             }

             if (strlen($message)< 3){
                 $errors['message'] = 'Your Message is too short';
             }

             if (empty($errors)){
                //php mailer code will be goes here


                 $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
//                 try {
                     //Server settings
                     $mail->SMTPDebug = 2;                                 // Enable verbose debug output
                     $mail->isSMTP();                                      // Set mailer to use SMTP
                     $mail->Host = 'smtp.mailtrap.io';  // Specify main and backup SMTP servers
                     $mail->SMTPAuth = true;                               // Enable SMTP authentication
                     $mail->Username = 'f6b061c54d95a4';                 // SMTP username
                     $mail->Password = '69f2b1d748bf67';                           // SMTP password
                     $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                     $mail->Port = 2525;                                    // TCP port to connect to

                     //Recipients
                     $mail->setFrom('me@gmail.com', 'SuperAdmin');
                     $mail->addAddress($email,'FakeUser');     // Add a recipient


                     //Content
                     $mail->isHTML(true);                                  // Set email format to HTML
                     $mail->Subject = 'New Message Arrived!';
                     $mail->Body = 'Here is the message';
                     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                     $mail->send();
                     $_SESSION['success'] = 'Message has been sent';
                     header('Location:contact');
                     exit();
//                 } catch (Exception $e) {
//                     echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
//                 }


                //End php mailer code;





             }else{
                 $_SESSION['errors'] = $errors;
                 header('Location:contact');
                 exit();
             }

         }
         public function getAbout()
         {
             view('about');
         }
     }