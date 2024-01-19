<?php
include('./model/user_model.php');
class UserController
{
    public static function loginAccount(UserData $user)
    {
        if ($user->email == 'sok@gmail.com' || $user->password === '123') {
            $_SESSION['user'] = $user->email;
            echo '
                <script>
                    $(document).ready(function(){
                        swal({
                        title: "Good job!",
                        text: "You clicked the button!",
                        icon: "success",
                        button: "Aww yiss!",
                        }).then((result) => {
                            if(result){
                                location.href="./view/home_page.php";
                            }
                        }).catch((err) => {

                        });
                    })
                </script>
                ';
        } else {
            echo 'error';
        }
    }
}
